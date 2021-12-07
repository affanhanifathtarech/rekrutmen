<?php
// $file_rekomendasi = 
// $file_rekomendasi = explode('/', $this->model('Dokumen_model')->getFileRekomendasi()); 
// $file_rekomendasi = end($file_rekomendasi);
// var_dump($file_rekomendasi);
// die();
?>

<div class="row">
    <div class="col-lg-6">
        <h3>Upload File Rekomendasi HMJ</h3>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="file_rekomendasi" id="file_rekomendasi">
    </div>
    <div class="col-lg-6">
        <a href="<?= $this->model('Dokumen_model')->getFileRekomendasi(); ?>"><?= $_SESSION["nim"] . '.pdf'; ?></a>
    </div>
</div>
<br><br><br>
<div class="row">
    <div class="col-lg-6">
        <h3>Upload File Sertifikat Pendukung ( Optional )</h3>
            <input type="file" name="file_sertifikat" id="file_sertifikat" multiple>
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

<?php require_once 'app/views/parts/mainjs.php'; ?>

<script>
    $(function(){
        $('#file_rekomendasi').change(function(e) {
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
        $('#file_sertifikat').change(function(e) {
            e.preventDefault();
            var fd = new FormData();  

            for (var i = 0, len = document.getElementById('file_sertifikat').files.length; i < len; i++) {
                fd.append("file_sertifikat", document.getElementById('file_sertifikat').files[i]); 
                    $.ajax({
                url: 'dokumen/saveDokumenSertifikat',
                data: fd,
                processData: false,
                contentType: false,
                type: 'POST',      
                success: function(data){
                    console.log(data);
                }      
                })         
            }

            
            // var file_data = $("#file_sertifikat").prop("files"); 
            // var form_data = new FormData();
            // for(var i = 0; i < file_data.length; i++){
            //     form_data.append("file_sertifikat[]", file_data);
            // }  
            // // var foto_lama = $("#file_sertifikat").attr('src');
           
           
            // // form_data.append("file_sertifikat_lamo", foto_lama);
            // $.ajax({
            //     url: "dokumen/saveDokumenSertifikat",
            //     dataType: 'JSON',
            //     cache: false,
            //     contentType: false,
            //     processData: false,
            //     data: form_data,                      
            //     type: 'post',
            //     success: function(data){
            //         // if (data.status==1){
            //         //     $('#foto_profile').attr('src', data.data.url);
            //         // } else if (data.status==0){
            //         //     alert(data.data.msg);
            //         // }
            //         console.log(data);
            //     }
            //  });
            
        });
    //     $('#file_sertifikat').change(function() {
    // var filedata = $('#file_sertifikat'),
    //         formdata = false;
    // if (window.FormData) {
    //     formdata = new FormData();
    // }
    // var i = 0, len = filedata.files.length;

    // for (i; i < len; i++) {
    //     file = filedata.files[i];

    //     if (window.FileReader) {
    //         reader = new FileReader();
    //         reader.onloadend = function(e) {
    //             showUploadedItem(e.target.result, file.fileName);
    //         };
    //         reader.readAsDataURL(file);
    //     }
    //     if (formdata) {
    //         formdata.append("file_sertifikat", file);
    //     }
    // }
    // if (formdata) {
    //     $.ajax({
    //         url: "dokumen/saveDokumenSertifikat",
    //         type: "POST",
    //         data: formdata,
    //         processData: false,
    //         contentType: false,
    //         success: function(res) {
    //             console.log(res);
    //         },       
    //         error: function(res) {

    //          }       
    //          });
    //         }
    //     });
    });
</script>