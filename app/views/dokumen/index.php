<?php 
$glob = glob('public/dokumen/rekomendasi/'. $_SESSION['nim'] . ".*");
$display = (empty($glob)) ? 'style="display:none;"' : '';
$link = (empty($glob)) ? '' : $glob[0] ;
?>

<div class="container p-3">
    <h1 class="h3 mb-3">Dokumen</h1>
    <div class="mb-5">
        <label for="file_rekomendasi" class="form-label">Upload File Rekomendasi HMJ</label>
        <input class="form-control" type="file" id="file_rekomendasi">
        <div class="d-grid gap-2 d-md-block mt-2">
            <a href="<?= $link;?>" target='_BLANK' class="btn btn-info rekomendasi" <?= $display ?>>Lihat Dokumen</a>
        </div>
    </div>
    <div class="mb-3">
        <label for="file_serfikat" class="form-label">Upload File Sertifikat Pendukung ( Optional )</label>
        <input class="form-control" type="file" name="file_sertifikat[]" id="file_sertifikat" multiple>
    </div>
</div>

<?php require_once 'app/views/parts/mainjs.php'; ?>

<script>
    $(function(){
        $('input[type=file]').change(function(e) {
            e.preventDefault();
            var file_data = $("#file_rekomendasi").prop("files")[0];   
            var form_data = new FormData();
            form_data.append("file_rekomendasi", file_data);
            $.ajax({
                url: "dokumen/saveDokumen",
                dataType: 'JSON',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,                      
                type: 'post',
                success: function(data){
                    if(data.status==1){
                        $('.rekomendasi').attr('href', data.data.url);
                    }
                }
             });
        });
    });
</script>