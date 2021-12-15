<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<style>
::-webkit-scrollbar {
  width: 10px;
  height: 10px;
}

::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
::-webkit-scrollbar-thumb {
  background: #888; 
}

::-webkit-scrollbar-thumb:hover {
  background: #555; 
}

</style>
<!-- Main content -->
    <div class="main-content content m-auto">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="file_rekomendasi" class="form-label">Upload File Rekomendasi HMJ <i class="berhasil fas fa-check-circle text-success" <?= $display['rekomendasi']; ?>></i></label>
                        <input class="form-control" type="file" id="file_rekomendasi">
                    </div>
                    <div class="mt-2">
                        <a href="<?= $link;?>" target='_BLANK' class="btn btn-info rekomendasi" <?= $display['rekomendasi'] ?>>Lihat Dokumen</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="file_serfikat" class="form-label">Upload File Sertifikat Pendukung ( Optional )</label>
                        <input class="form-control" type="file" name="file_sertifikat" id="file_sertifikat" multiple>
                    </div>
                    
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                    <table id="tabel-sertifikat" class="display nowrap" style="width:100%">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama File</th>
                            <th>Waktu Upload</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    </div>            
                </div>  
            </div>
          </div>
        </div>
      </div>
    </div>

<?php require_once 'app/views/parts/mainjs.php'; ?>
<?php require_once 'app/views/parts/mainjsDashboard.php'; ?>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>

<script>
    $(function(){
        var table = $('#tabel-sertifikat').DataTable( {
            "ajax"  : 'dokumen/getGlob',
            "paging":  false,
            "info":  false,
            "searching":  false,
            "ordering":  false,
            "scrollY": 200,
            "scrollX": true,
            "columns": [
            { "data": "id" },
            { "data": "filename" },
            { "data": "timestamp" },
            { "data": "dir" }
            ],
            "columnDefs": [ 
                {
                "targets": 3,
                "render": function ( data, type, row, meta ) {
                    return '<a href="'+ row['dir'] +'" ><span class="btn btn-xs btn-info">buka</span></a><span class="btn btn-xs btn-danger ml-2" data-toggle="modal" data-target="#modal-hapus" data-hapus="">hapus</span>';
                    }
                },
                {
                "targets": 2,
                "render": function ( data, type, row, meta ) {
                    return moment.unix(row['timestamp']).format('DD-MMM-YY HH:mm');
                    }
                }
            ]
        } );

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
                        $('.berhasil').attr('style','display:inline;');
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
                            table.ajax.reload();
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