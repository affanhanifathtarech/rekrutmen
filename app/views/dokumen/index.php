<?php

$data = $this->model('Biodata_model')->getDataUser($_SESSION["nim"], "nim", "nama");
$_SESSION["nama"] = $data["nama"];
// var_dump($data);
// die();
// if($data["nama"] === ""){
//     echo "benar";
//     die();
// }

?>

<div class="ro">
    <div class="col-lg-6">
        <h3>Upload File Rekomendasi</h3>
        <form action=""></form>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <h3>Upload File Rekomendasi HMJ</h3>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="file_rekomendasi" id="file_rekomendasi">
            
    </div>
    <div class="col-lg-6">
        <?php
        $file = $this->model("Dokumen_model")->getFileRekomendasi();
        $file = explode('/', $file);
        $file = end($file);
        
        ?>
        <a href="<?= $this->model('Dokumen_model')->getFileRekomendasi(); ?>"><?= $file; ?></a>
    </div>
</div>
<br><br><br>
<div class="row">
    <div class="col-lg-6">
        <h3>Upload File Sertifikat Pendukung ( Optional )</h3>
            <input type="file" name="file_sertifikat" id="file_sertifikat" multiple=multiple>
            
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
        <?php if($data["nama"] == "") : ?>
            $('#file_rekomendasi').addClass('is-invalid').after('<div class="invalid-feedback">Nama Di Biodata Belum ada heheh</div>');
            $('#file_sertifikat').addClass('is-invalid').after('<div class="invalid-feedback">Nama Di Biodata Belum ada heheh</div>');;
            $('#file_sertifikat').attr('disabled', true);
            $('#file_rekomendasi').attr('disabled', true);
            // $('span .message').addClass('d-none');
            // $('.message').html('');
        <?php endif; ?>
        $('#file_rekomendasi').change(function(e) {
            e.preventDefault();
            var file_data = $("#file_rekomendasi").prop("files")[0];   
            var elem = $(this);
            // var foto_lama = $("#file_rekomendasi").attr('src');
            var form_data = new FormData();
            form_data.append("file_rekomendasi", file_data);
            // form_data.append("file_rekomendasi_lamo", foto_lama);
            $.ajax({
                url: "dokumen/saveDokumenRekomendasi",
                dataType: 'JSON',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,                      
                type: 'post',
                success: function(data){
                    console.log(data);
                    if (data.status==1){
                        elem.addClass('is-valid').after('<div class="valid-feedback">Berhasil diupload!</div>');
                        setTimeout(function(){ elem.removeClass('is-valid').next().remove(); }, 3000);
                    } else if(data.status==0){
                        elem.addClass('is-invalid').after('<div class="invalid-feedback">Gagal diupload!</div>');
                        setTimeout(function(){ elem.removeClass('is-invalid').next().remove(); }, 3000); 
                    }
                }
             });
        });
        $('#file_sertifikat').change(function(e) {
            e.preventDefault();
            var myfiles = document.getElementById("file_sertifikat");
            var files = myfiles.files;
            var data = new FormData();
            var elem = $(this);

                    for (i = 0; i < files.length; i++) {
                        data.append('file' + i, files[i]);
                    }

                    $.ajax({
                        url: 'dokumen/saveDokumenSertifikat', 
                        type: 'POST',
                        contentType: false,
                        data: data,
                        dataType: 'JSON',
                        processData: false,
                        cache: false,
                        success : function(data){
                            console.log(data);
                            if (data.status==1){
                                elem.addClass('is-valid').after('<div class="valid-feedback">Berhasil diupload!</div>');
                                setTimeout(function(){ elem.removeClass('is-valid').next().remove(); }, 3000);
                            } else if(data.status==0){
                                elem.addClass('is-invalid').after('<div class="invalid-feedback">Gagal diupload!</div>');
                                setTimeout(function(){ elem.removeClass('is-invalid').next().remove(); }, 3000); 
                            }
                        }
                    })
                
        });

    });
</script>