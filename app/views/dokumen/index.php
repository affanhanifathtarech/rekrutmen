<div class="row">
    <div class="col-lg-6">
        <h3>Upload File Rekomendasi HMJ</h3>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="file_rekomendasi" id="file_rekomendasi">
    </div>
</div>
<br><br><br>
<div class="row">
    <div class="col-lg-6">
        <h3>Upload File Sertifikat Pendukung ( Optional )</h3>
            <input type="file" name="file_sertifikat[]" id="file_sertifikat" multiple>
        </form>
    </div>

    <div class="col-lg-6">
        <ul>
            <li>File Sertifikat 1</li>
            <li>File Sertifikat 2</li>
            <li>File Sertifikat 3</li>
        </ul>
    </div>
</div>
<?php mainjs() ?>
<script>
    $(function(){
        $('input[type=file]').change(function(e) {
            e.preventDefault();
            var file_data = $("#file_rekomendasi").prop("files")[0];   
            // var foto_lama = $("#file_rekomendasi").attr('src');
            var form_data = new FormData();
            form_data.append("file_rekomendasi", file_data);
            // form_data.append("file_rekomendasi_lamo", foto_lama);
            $.ajax({
                url: "dokumen/saveDokumen",
                dataType: 'JSON',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,                      
                type: 'post',
                success: function(data){
                    // if (data.status==1){
                    //     $('#foto_profile').attr('src', data.data.url);
                    // } else if (data.status==0){
                    //     alert(data.data.msg);
                    // }
                    console.log(data);
                }
             });
        });
    });
</script>