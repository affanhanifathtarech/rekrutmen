<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('parts/head.php') ?>
</head>

<!-- This is body section included using php -->
<!-- <body> -->
<?php include('parts/body.php') ?> 

<div class="wrapper">
  <!-- Navbar -->
  <?php include('parts/navbar.php') ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include('parts/sidebar.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-6">
            <h1>Daftar Presensi</h1>
          </div>
          <div class="col-6 text-right overflow-auto" style="align-self: center;">
            <span class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-tambah">Tambah Presensi</span>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
              <div class="pb-2 mb-2">
                <table class="table table-striped table-sm no-border nowrap" width="100%" id="table">
                  <thead>
                  <tr>
                    <th></th>
                    <th>No</th>
                    <th>Nama Presensi</th>
                    <th>Batas Waktu Presensi</th>
                    <th>Link Presensi</th>
                  </tr>
                  </thead>
                  <tbody> 
                    <tr></tr>
                  </tbody>
                  </table>
                  </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Footer -->
    <?php include('parts/footer.php') ?>
  <!-- ./footer -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<div class="position-fixed bottom-0 start-50 translate-middle-x pb-3 mb-3" style="z-index: 2000">
  <div id="notifikasi" class="toast align-items-center border-0 text-white" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
  <div class="d-flex">
    <div class="toast-body" id="notif">
    </div>
    <button type="button" class="btn-close btn-close-white" style="margin: auto 0.5em auto auto;" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  </div>
</div>

<div class="modal fade" id="modal-tambah" tabindex="-1" role="dialog" aria-labelledby="modal-tambah" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Presensi</h5>
      </div>
      <form id="form-tambah" method="POST">
      <div class="modal-body">
          <div class="form-group">
            <label for="nama_presensi" class="col-form-label">Nama Presensi</label>
            <input type="text" class="form-control" id="nama_presensi" name="nama_presensi">
          </div>
          <div class="form-group">
            <label for="waktu_akhir" class="col-form-label">Waktu Presensi Tutup</label>
            <input type="datetime-local" class="form-control" id="waktu_akhir" name="waktu_akhir">
          </div>
          <div class="form-group">
            <label for="link" class="col-form-label">Link Presensi</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon3">https://karismapolsri.com/</span>
              </div>
              <input type="text" class="form-control" id="link" aria-describedby="basic-addon3">
            </div>
          </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
        <button type="button" id="btn-tambah" class="btn btn-primary" data-dismiss="modal">Tambah</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-konfig" tabindex="-1" role="dialog" aria-labelledby="modal-konfig" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Pengaturan</h5>
      </div>
      <form id="form-konfig" method="POST">
      <div class="modal-body">
        <div class="form-group">
            <input type="hidden" class="form-control" id="id_presensi" name="id_presensi">
            <label for="nama_presensi" class="col-form-label">Nama Presensi</label>
            <input type="text" class="form-control" id="nama_presensi" name="nama_presensi">
          </div>
          <div class="form-group">
            <label for="waktu_akhir" class="col-form-label">Waktu Presensi Tutup</label>
            <input type="datetime-local" class="form-control" id="waktu_akhir" name="waktu_akhir">
          </div>
          <div class="form-group">
            <label for="link" class="col-form-label">Link Presensi</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon3">https://karismapolsri.com/</span>
              </div>
              <input type="hidden" class="form-control" id="link_sebelum" aria-describedby="basic-addon3">
              <input type="text" class="form-control" id="link" aria-describedby="basic-addon3">
            </div>
          </div>
        </div>
      <div class="modal-footer">
        <button type="button" id="btn-hapus" data-toggle="modal" data-target="#modal-hapus" data-dismiss="modal" class="btn btn-danger">Hapus</button>
        <button type="button" id="btn-simpan" class="btn btn-success" data-dismiss="modal">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-hapus" tabindex="-1" role="dialog" aria-labelledby="modal-hapus" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Hapus Data</h5>
      </div>
      <form id="form-hapus" method="POST">
      <div class="modal-body">
          <input type="hidden" class="form-control" id="id_presensi" name="id_presensi">
          <p>Apakah anda yakin akan menghapus <strong><span id="hapus-id"></span></strong> ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" id="btn-yakin" class="btn btn-danger" data-dismiss="modal">Yakin</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
<!-- jQuery -->
<script src="lib/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="lib/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="lib/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="lib/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="lib/adminlte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="lib/adminlte/dist/js/demo.js"></script>
<!-- Page specific script -->


<script>
var columns = [];
  for(let i = 0; i < $('#table thead tr th').length; i++){
    columns[i]= i;
  }

  $(document).ready(function() {
    $('#modal-konfig').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget); // Button that triggered the modal
      var id_presensi = button.data('id');
      var nama = button.data('nama');
      var waktu = button.data('waktu');
      waktu = waktu.split(" ")[0]+"T"+waktu.split(" ")[1];
      var link = button.data('link');
      var modal = $(this);
      modal.find('#form-konfig .modal-body #id_presensi').val(id_presensi);
      modal.find('#form-konfig .modal-body #nama_presensi').val(nama);
      modal.find('#form-konfig .modal-body #waktu_akhir').val(waktu);
      modal.find('#form-konfig .modal-body #link').val(link);
      modal.find('#form-konfig .modal-body #link_sebelum').val(link);
      modal.find('#form-konfig .modal-footer #btn-hapus').attr("data-id",id_presensi).attr("data-nama",nama);
    });

    $('#modal-hapus').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget); // Button that triggered the modal
      var id_presensi = button.data('id');
      var nama = button.data('nama');
      $('#hapus-id').text(nama);
      var modal = $(this);
      modal.find('#form-hapus .modal-body #id_presensi').val(id_presensi);
    });

    $("#btn-yakin").click(function(e) {
        e.preventDefault();
        var id_presensi = $('#form-hapus .modal-body #id_presensi').val(); 
        $.ajax({
          url:"ajax/ajax-presensi-tampil.php",
          type: 'post',
          data:{
            id_presensi:id_presensi,
            act:"hapus-presensi"
          }, 
          success:function(result) {    
            data = JSON.parse(result);
            if (data.status==0){
              $("#notifikasi").removeClass('bg-success').removeClass('bg-warning').addClass('bg-danger');
            } else if (data.status==1){
              $("#notifikasi").removeClass('bg-danger').removeClass('bg-warning').addClass('bg-success');
            } 

            $('#notif').text(data.msg);
            $("#notifikasi").toast('show');

            if(data.status==0||data.status==1){z
                table.ajax.reload( null, false );
            }
          } 
      });
    });

    $("#btn-simpan").click(function(e) {
        e.preventDefault();
        var id_presensi = $('#form-konfig .modal-body #id_presensi').val(); 
        var nama_presensi = $('#form-konfig .modal-body #nama_presensi').val(); 
        var waktu_akhir = $('#form-konfig .modal-body #waktu_akhir').val(); 
        var link_sebelum = $('#form-konfig .modal-body #link_sebelum').val(); 
        var link = $('#form-konfig .modal-body #link').val(); 
        $.ajax({
          url:"ajax/ajax-presensi-tampil.php",
          type: 'post',
          data:{
            id_presensi:id_presensi,
            nama_presensi:nama_presensi,
            waktu_akhir:waktu_akhir,
            link_sebelum:link_sebelum,
            link:link,
            act:"simpan-presensi"
          }, 
          success:function(result) {    
            data = JSON.parse(result);

            if (data.status==0){
              $("#notifikasi").removeClass('bg-success').removeClass('bg-warning').addClass('bg-danger');
            } else if (data.status==1){
              $("#notifikasi").removeClass('bg-danger').removeClass('bg-warning').addClass('bg-success');
            } else if (data.status==2){
              $("#notifikasi").removeClass('bg-success').removeClass('bg-danger').addClass('bg-warning');
            }
            $('#notif').text(data.msg);
            $("#notifikasi").toast('show');

            if(data.status==0||data.status==1){
                table.ajax.reload( null, false );
            }
          } 
      });
    });
    
    $("#btn-tambah").click(function(e) {
        e.preventDefault();
        var nama_presensi = $('#form-tambah .modal-body #nama_presensi').val(); 
        var waktu_akhir = $('#form-tambah .modal-body #waktu_akhir').val(); 
        var link = $('#form-tambah .modal-body #link').val(); 
        $.ajax({
          url:"ajax/ajax-presensi-tampil.php",
          type: 'post',
          data:{
            nama_presensi:nama_presensi,
            waktu_akhir:waktu_akhir,
            link:link,
            act:"tambah-presensi"
          }, 
          success:function(result) {    
            data = JSON.parse(result);

            if (data.status==0){
              $("#notifikasi").removeClass('bg-success').removeClass('bg-warning').addClass('bg-danger');
            } else if (data.status==1){
              $("#notifikasi").removeClass('bg-danger').removeClass('bg-warning').addClass('bg-success');
            } else if (data.status==2){
              $("#notifikasi").removeClass('bg-success').removeClass('bg-danger').addClass('bg-warning');
            }
            $('#notif').text(data.msg);
            $("#notifikasi").toast('show');

            if(data.status==0||data.status==1){
                table.ajax.reload( null, false );
            }
          } 
      });
    });

    var table = $("#table").DataTable({
      "ajax": "ajax/ajax-presensi-tampil.php?act=daftar-presensi",
      "dom": 'lBfrtip',
      "scrollX": true,
      "columnDefs": [ {
        "targets": 0,
        "data": "0",
        "render": function ( data, type, row, meta ) {
          return '<span class="btn btn-xs btn-primary" data-toggle="modal" data-target="#modal-konfig" data-id="'+row[0]+'" data-nama="'+row[2]+'" data-waktu="'+row[3]+'" data-link="'+row[4]+'"><i class="fas fa-cog" aria-hidden="true"></i></span>';
        }
      },
      {
        "targets": 4,
        "data": "4",
        "render": function ( data, type, row, meta ) {
          return '<a target="_BLANK" href="https://karismapolsri.com/'+data+'">karismapolsri.com/'+data+'</a>';
        }
      } ]
    });

 });

</script>
</body>
</html>
