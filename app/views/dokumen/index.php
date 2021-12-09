<?php
$glob = glob('public/dokumen/rekomendasi/*'. $_SESSION['nim'] . ".*");
$display = (empty($glob)) ? 'style="display:none;"' : '';
$link = (empty($glob)) ? '' : $glob[0] ;

$files = [];
$sertifikat = glob('public/dokumen/sertifikat/' . $_SESSION['nim'] . "/*");
if(!empty($glob)){
    foreach ($sertifikat as $key => $value) {
        $file = explode('public/dokumen/sertifikat/'. $_SESSION["nim"] . '/' .$_SESSION["nim"] . ' - ', $value)[1];
        $files[$key]['timestamp'] = explode(' - ', $file)[0];
        $files[$key]['filename'] = explode(' - ', $file)[1];
        $files[$key]['dir'] = $value;
    }
}
?>
    <!-- Main content -->
    <div class="main-content content m-auto">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <div class="mb-5">
                        <label for="file_rekomendasi" class="form-label">Upload File Rekomendasi HMJ</label>
                        <input class="form-control" type="file" id="file_rekomendasi">
                        <div class="d-grid gap-2 d-md-block mt-2">
                            <a href="<?= $link;?>" target='_BLANK' class="btn btn-info rekomendasi" <?= $display ?>>Lihat Dokumen</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="file_serfikat" class="form-label">Upload File Sertifikat Pendukung ( Optional )</label>
                        <input class="form-control" type="file" name="file_sertifikat" id="file_sertifikat" multiple>
                    </div>
                    
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive" style="height: 300px;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama File</th>
                            <th>Waktu Upload</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(!empty($glob)) foreach ($files as $key => $value) :?>
                        <tr>
                            <td><?= $key+1?></td>
                            <td><?= $value['filename']?></td>
                            <td><?= date('m/d/Y H:i:s', $value['timestamp']);?></td>
                            <td><a href="<?= $value['dir']?>" target="_BLANK"><span class="badge bg-info">buka</span></a></td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                    </div>
                    <!-- /.card-body -->
            
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php require_once 'app/views/parts/mainjs.php'; ?>

<script>
    $(function(){
        $('#file_rekomendasi').change(function(e) {
            e.preventDefault();
            var elem = $(this);
            var file_data = $("#file_rekomendasi").prop("files")[0];   
            var form_data = new FormData();
            form_data.append("file_rekomendasi", file_data);
            $.ajax({
                url: "dokumen/saveDokumenRekomendasi",
                dataType: 'JSON',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,                      
                type: 'post',
                success: function(data){
                    if(data.status==1){
                        $('.rekomendasi').attr('href', data.data.url);
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
            var elem = $(this);
            var files = elem.get(0).files;
            var data = new FormData();

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
                            data.data.forEach(function(item, index) {
                                if (item.status==1){
                                    elem.addClass('is-valid').after('<div class="valid-feedback">Berhasil mengunggah ' + item.filename + '</div>');
                                    setTimeout(function(){ elem.removeClass('is-valid').next().remove(); }, 3000); 
                                } else if(item.status==0){
                                    elem.addClass('is-invalid').after('<div class="invalid-feedback">Gagal mengunggah ' + item.filename + '</div>');
                                    setTimeout(function(){ elem.removeClass('is-invalid').next().remove(); }, 3000); 
                                }
                            });

                        }
                    })
                
        });

    });
</script>