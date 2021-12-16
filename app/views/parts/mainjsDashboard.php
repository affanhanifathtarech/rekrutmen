<script>
    $(function() {
        $(window).scroll(function(){
            var scrollPos = $(this).scrollTop();
            if(scrollPos>$('.main-content').position().top-68){
                $('.main-content').attr('style',"margin-top:52px!important");
                $('.navbar-sub').css({position:'fixed',top:57});
            } 
            
            if (scrollPos<$('.main-content').position().top-15){
                $('.main-content').attr('style',"margin-top:0px!important");
                $('.navbar-sub').css({position:'relative', top:0});
            } 
        });

        $.ajax({
            url: '<?= BASEURL;?>instagram/getJSON',
            method: 'GET'
        })

        $('#foto').change(function(e) {
            e.preventDefault();
            var elem = $(this);
            var file_data = $("#foto").prop("files")[0];   
            var foto_lama = $("#foto_profile").attr('src');
            var form_data = new FormData();
            if ('<?= $data['url'];?>' == 'detail' ) {
                var nim = '<?= @$data['nim'];?>';
            } else {
                var nim = '<?= $_SESSION['nim'];?>';
            }
            form_data.append("foto", file_data);
            form_data.append("foto_lama", foto_lama);
            form_data.append("nim", nim);
            $.ajax({
                url: "<?= BASEURL;?>profile/saveImage",
                dataType: 'JSON',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,                      
                type: 'post',
                success: function(data){
                    if (data.status==1){
                        $('#foto_profile').attr('src', data.data.url);
                        $('.user-profile img').attr('src', data.data.url);
                        $('#display_profil').next().removeClass('fa-times-circle text-danger').addClass('fa-check-circle text-success');
                        elem.removeClass('is-valid').next().remove();
                        elem.addClass('is-valid').after('<div class="valid-feedback text-center">Berhasil diganti!</div>');
                        setTimeout(function(){ elem.removeClass('is-valid').next().remove(); }, 5000);
                    } else if (data.status==0){
                        alert(data.data.msg);
                        elem.removeClass('is-invalid').next().remove();
                        elem.addClass('is-invalid').after('<div class="invalid-feedback text-center">Gagal diganti!</div>');
                        setTimeout(function(){ elem.removeClass('is-invalid').next().remove(); }, 5000); 
                    }
                }
                
            });
        })
    });
</script>