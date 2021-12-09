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
            url: 'instagram/getJSON',
            method: 'GET'
        })

        $('input[type=file]').change(function(e) {
            e.preventDefault();
            var elem = $(this);
            var file_data = $("#foto").prop("files")[0];   
            var foto_lama = $("#foto_profile").attr('src');
            var form_data = new FormData();
            form_data.append("foto", file_data);
            form_data.append("foto_lama", foto_lama);
            $.ajax({
                url: "profile/saveImage",
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