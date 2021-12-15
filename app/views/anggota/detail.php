<?php
$glob1 = glob(BASEURL . 'public/images/user/'. $data['nim'] . ".*");
$display['foto_profil'] = (empty($glob1)) ? '<i class="fas fa-times-circle text-danger"></i>' : '<i class="berhasil fas fa-check-circle text-success"></i>';

$glob2 = glob(BASEURL . 'public/dokumen/rekomendasi/*'. $data['nim'] . ".*");
$display['rekomendasi'] = (empty($glob2)) ? 'style="display:none;"' : '';
$display['tampilan_rekomendasi'] = (empty($glob2)) ? '<i class="fas fa-times-circle text-danger"></i>' : '<i class="berhasil fas fa-check-circle text-success"></i>';
$link = (empty($glob2)) ? '' : $glob2[0] ;
?>

  <!-- Main content -->
    <div class="main-content content m-auto">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8">

            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="form-group mb-2">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" value="<?= $data["nama"]; ?>">
                    </div>
                    <div class="form-group mb-2">
                        <label for="nim">NIM</label>
                        <input type="number" class="form-control" id="nim" value="<?= $data["nim"]; ?>" disabled>
                    </div>
                    <div class="form-group mb-2">
                        <label for="wa">No WA</label>
                        <input type="number" class="form-control" id="wa" value="<?= $data["wa"]; ?>">
                    </div>
                    <div class="form-group mb-2">
                        <label for="jk">Jenis Kelamin</label>
                        <select class="form-control" name='jk' id='jk'>
                            <option <?= ($data["jk"]=='1') ? 'selected' : ''?> value="1">Laki-Laki</option>
                            <option <?= ($data["jk"]=='0') ? 'selected' : ''?> value="0">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" name="jurusan" id="jurusan">
                            <option <?= ($data["jurusan"]=='Teknik Elektro') ? 'selected' : ''?> value="Teknik Elektro">Teknik Elektro</option>
                            <option <?= ($data["jurusan"]=='Teknik Sipil') ? 'selected' : ''?> value="Teknik Sipil">Teknik Sipil</option>
                            <option <?= ($data["jurusan"]=='Teknik Mesin') ? 'selected' : ''?> value="Teknik Mesin">Teknik Mesin</option>
                            <option <?= ($data["jurusan"]=='Teknik Kimia') ? 'selected' : ''?> value="Teknik Kimia">Teknik Kimia</option>
                            <option <?= ($data["jurusan"]=='Teknik Komputer') ? 'selected' : ''?> value="Teknik Komputer">Teknik Komputer</option>
                            <option <?= ($data["jurusan"]=='Administrasi Bisnis') ? 'selected' : ''?> value="Administrasi Bisnis">Administrasi Bisnis</option>
                            <option <?= ($data["jurusan"]=='Akuntansi') ? 'selected' : ''?> value="Akuntansi">Akuntansi</option>
                            <option <?= ($data["jurusan"]=='Bahasa Inggris') ? 'selected' : ''?> value="Bahasa Inggris">Bahasa Inggris</option>
                            <option <?= ($data["jurusan"]=='Manajemen Informatika') ? 'selected' : ''?> value="Manajemen Informatika">Manajemen Informatika</option>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="prodi">Program Studi</label>
                        <select class="form-control" name="prodi" id="prodi">
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="kelas">Kelas</label>
                        <input type="text" class="form-control" id="kelas" value="<?= $data["kelas"]; ?>">
                    </div>
                    <div class="form-group mb-2">
                        <label for="angkatan">Tahun Angkatan</label>
                        <select class="form-control" name='angkatan' id='angkatan'>
                            <option <?= ($data["angkatan"]=='2019') ? 'selected' : ''?> value="2019">2019</option>
                            <option <?= ($data["angkatan"]=='2020') ? 'selected' : ''?> value="2020">2020</option>
                            <option <?= ($data["angkatan"]=='2021') ? 'selected' : ''?> value="2021">2021</option>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" value="<?= $data["tempat_lahir"]; ?>">
                    </div>
                    <div class="form-group mb-2">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir" value="<?= $data["tanggal_lahir"]; ?>">
                    </div>
                    <div class="form-group mb-2">
                        <label for="goldar">Golongan Darah</label>
                        <select class="form-control" name='goldar' id='goldar'>
                            <option <?= ($data["goldar"]=='A') ? 'selected' : ''?> value="A">A</option>
                            <option <?= ($data["goldar"]=='B') ? 'selected' : ''?> value="B">B</option>
                            <option <?= ($data["goldar"]=='AB') ? 'selected' : ''?> value="AB">AB</option>
                            <option <?= ($data["goldar"]=='O') ? 'selected' : ''?> value="O">O</option>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" data-id="textarea" rows="3"><?= $data["alamat"]; ?></textarea>
                    </div>
                    <div class="form-group mb-2">
                        <label for="anak_ke">Anak ke</label>
                        <input type="text" class="form-control" id="anak_ke" value="<?= $data["anak_ke"]; ?>">
                    </div>
                    <div class="form-group mb-2">
                        <label for="ayah">Nama Ayah</label>
                        <input type="text" class="form-control" id="ayah" value="<?= $data["ayah"]; ?>">
                    </div>
                    <div class="form-group mb-2">
                        <label for="ibu">Nama Ibu</label>
                        <input type="text" class="form-control" id="ibu" value="<?= $data["ibu"]; ?>">
                    </div>
                    <div class="form-group mb-2">
                        <label for="kerja_ayah">Pekerjaan Ayah</label>
                        <input type="text" class="form-control" id="kerja_ayah" value="<?= $data["kerja_ayah"]; ?>">
                    </div>
                    <div class="form-group mb-2">
                        <label for="kerja_ibu">Pekerjaan Ibu</label>
                        <input type="text" class="form-control" id="kerja_ibu" value="<?= $data["kerja_ibu"]; ?>">
                    </div>
                    <div class="form-group mb-2">
                        <label for="status_tinggal">Status Tinggal</label>
                        <select class="form-control" name='status_tinggal' id='status_tinggal'>
                            <option <?= ($data["status_tinggal"]=='0') ? 'selected' : ''?> value="0">Merantau</option>
                            <option <?= ($data["status_tinggal"]=='1') ? 'selected' : ''?> value="1">Tidak Merantau</option>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="status_kelas">Status Kelas</label>
                        <select class="form-control" name='status_kelas' id='status_kelas'>
                            <option <?= ($data["status_kelas"]=='0') ? 'selected' : ''?> value="0">Pagi</option>
                            <option <?= ($data["status_kelas"]=='1') ? 'selected' : ''?> value="1">Siang</option>
                            <option <?= ($data["status_kelas"]=='2') ? 'selected' : ''?> value="2">Malam</option>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="rohis">Pernah Rohis</label>
                        <select class="form-control" name='rohis' id='rohis'>
                            <option <?= ($data["rohis"]=='1') ? 'selected' : ''?> value="1">Pernah</option>
                            <option <?= ($data["rohis"]=='0') ? 'selected' : ''?> value="0">Tidak Pernah</option>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="liqo">Pernah Liqo</label>
                        <select class="form-control" name='liqo' id='liqo'>
                            <option <?= ($data["liqo"]=='1') ? 'selected' : ''?> value="1">Pernah</option>
                            <option <?= ($data["liqo"]=='0') ? 'selected' : ''?> value="0">Tidak Pernah</option>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="organisasi">Organisasi</label>
                        <textarea class="form-control" id="organisasi" data-id="textarea" rows="3"><?= $data["organisasi"]; ?></textarea>
                    </div>
                    <div class="form-group mb-2">
                        <label for="hobi">Hobi</label>
                        <textarea class="form-control" id="hobi" data-id="textarea" rows="3"><?= $data["hobi"]; ?></textarea>
                    </div>
                    <div class="form-group mb-2">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" value="<?= $data["email"]; ?>">
                    </div>
                    <div class="form-group mb-2">
                        <label for="status_pendidikan">Status Pendidikan</label>
                        <select class="form-control" name='status_pendidikan' id='status_pendidikan'>
                            <option <?= ($data["status_pendidikan"]=='0') ? 'selected' : ''?> value="0">Lainnya</option>
                            <option <?= ($data["status_pendidikan"]=='1') ? 'selected' : ''?> value="1">Bidik Misi</option>
                            <option <?= ($data["status_pendidikan"]=='2') ? 'selected' : ''?> value="2">Beasiswa KIP</option>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="alasan_gabung">Alasan Bergabung</label>
                        <textarea class="form-control" id="alasan_gabung" data-id="textarea" rows="3"><?= $data["alasan_gabung"]; ?></textarea>
                    </div>
                    <div class="form-group mb-2">
                        <label for="minat_bakat">Minat dan Bakat</label>
                        <textarea class="form-control" id="minat_bakat" data-id="textarea" rows="3"><?= $data["minat_bakat"]; ?></textarea>
                    </div>
                    <div class="form-group mb-2">
                        <label for="div1">Pilihan Divisi 1</label>
                        <select class="form-control" name="div1" id="div1">
                            <option <?= ($data["jurusan"]=='Pengembangan Sumber Daya Manusia') ? 'selected' : ''?> value="Pengembangan Sumber Daya Manusia">Pengembangan Sumber Daya Manusia</option>
                            <option <?= ($data["jurusan"]=='Learning Center') ? 'selected' : ''?> value="Learning Center">Learning Center</option>
                            <option <?= ($data["jurusan"]=='Minat Bakat Akademik') ? 'selected' : ''?> value="Minat Bakat Akademik">Minat Bakat Akademik</option>
                            <option <?= ($data["jurusan"]=='Syiar') ? 'selected' : ''?> value="Syiar">Syiar</option>
                            <option <?= ($data["jurusan"]=='Humas Multimedia dan Pers') ? 'selected' : ''?> value="Humas Multimedia dan Pers">Humas Multimedia dan Pers</option>
                            <option <?= ($data["jurusan"]=='Kemuslimahan') ? 'selected' : ''?> value="Kemuslimahan">Kemuslimahan</option>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="alasan_div1">Alasan Memilih Divisi 1</label>
                        <textarea class="form-control" id="alasan_div1" data-id="textarea" rows="3"><?= $data["alasan_div1"]; ?></textarea>
                    </div>
                    <div class="form-group mb-2">
                        <label for="div2">Pilihan Divisi 1</label>
                        <select class="form-control" name="div2" id="div2">
                            <option <?= ($data["jurusan"]=='Pengembangan Sumber Daya Manusia') ? 'selected' : ''?> value="Pengembangan Sumber Daya Manusia">Pengembangan Sumber Daya Manusia</option>
                            <option <?= ($data["jurusan"]=='Learning Center') ? 'selected' : ''?> value="Learning Center">Learning Center</option>
                            <option <?= ($data["jurusan"]=='Minat Bakat Akademik') ? 'selected' : ''?> value="Minat Bakat Akademik">Minat Bakat Akademik</option>
                            <option <?= ($data["jurusan"]=='Syiar') ? 'selected' : ''?> value="Syiar">Syiar</option>
                            <option <?= ($data["jurusan"]=='Humas Multimedia dan Pers') ? 'selected' : ''?> value="Humas Multimedia dan Pers">Humas Multimedia dan Pers</option>
                            <option <?= ($data["jurusan"]=='Kemuslimahan') ? 'selected' : ''?> value="Kemuslimahan">Kemuslimahan</option>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="alasan_div2">Alasan Memilih Divisi 1</label>
                        <textarea class="form-control" id="alasan_div2" data-id="textarea" rows="3"><?= $data["alasan_div2"]; ?></textarea>
                    </div>
                    
                </div>  
            </div>

          </div>

          <div class="col-lg-4">
          
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <label for="password">Password</label>
                <div class="input-group">
                    <span class="input-group-text see" id="basic-addon1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16"><path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path><path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"></path></svg>
                    </span>
                    <input type="password" class="form-control" id="password" autocomplete="new-password" value="<?= $data["password"]; ?>" aria-describedby="basic-addon1">
                </div>
                
            </div>  
        </div>

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
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.main content -->

    <!-- /.last of main content -->


<!-- PAGE BOTTOM SECTION (required)-->
<?php require_once 'app/views/parts/bottom-dashboard.php'; ?>
<!-- MAIN SCRIPT -->
<?php require_once 'app/views/parts/mainjs.php'; ?>
<?php require_once 'app/views/parts/mainjsDashboard.php'; ?>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>

</body>
</html>

<script>
    function prodi(jurusan) 
    {
        switch (jurusan) 
        {
            case 'Teknik Elektro':
            $('#prodi').children().remove();
            $('#prodi').append('<option <?= ($data["prodi"]=="Teknik Listrik (D3)") ? "selected" : ""?> value="Teknik Listrik (D3)">Teknik Listrik (D3)</option>');
            $('#prodi').append('<option <?= ($data["prodi"]=="Teknik Elektronika (D3)") ? "selected" : ""?> value="Teknik Elektronika (D3)">Teknik Elektronika (D3)</option>');
            $('#prodi').append('<option <?= ($data["prodi"]=="Teknik Telekomunikasi (D3)") ? "selected" : ""?> value="Teknik Telekomunikasi (D3)">Teknik Telekomunikasi (D3)</option>');
            $('#prodi').append('<option <?= ($data["prodi"]=="Teknik Telekomunikasi (D4)") ? "selected" : ""?> value="Teknik Telekomunikasi (D4)">Teknik Telekomunikasi (D4)</option>');
            $('#prodi').append('<option <?= ($data["prodi"]=="Teknik Elektro Konsentrasi Mekatronika (D4)") ? "selected" : ""?> value="Teknik Elektro Konsentrasi Mekatronika (D4)">Teknik Elektro Konsentrasi Mekatronika (D4)</option>');
            break;

            case 'Teknik Sipil':
            $('#prodi').children().remove();
            $('#prodi').append('<option <?= ($data["prodi"]=="Teknik Sipil (D3)") ? "selected" : ""?> value="Teknik Sipil (D3)">Teknik Sipil (D3)</option>');
            $('#prodi').append('<option <?= ($data["prodi"]=="Perancangan Jalan dan Jembatan (D4)") ? "selected" : ""?> value="Perancangan Jalan dan Jembatan (D4)">Perancangan Jalan dan Jembatan (D4)</option>');
            break;

            case 'Teknik Mesin':
            $('#prodi').children().remove();
            $('#prodi').append('<option <?= ($data["prodi"]=="Teknik Mesin (D3)") ? "selected" : ""?> value="Teknik Mesin (D3)">Teknik Mesin (D3)</option>');
            $('#prodi').append('<option <?= ($data["prodi"]=="Teknik Mesin Produksi Perawatan (D4)") ? "selected" : ""?> value="Teknik Mesin Produksi Perawatan (D4)">Teknik Mesin Produksi Perawatan (D4)</option>');
            break;

            case 'Teknik Kimia':
            $('#prodi').children().remove();
            $('#prodi').append('<option <?= ($data["prodi"]=="Teknik Kimia (D3)") ? "selected" : ""?> value="Teknik Kimia (D3)">Teknik Kimia (D3)</option>');
            $('#prodi').append('<option <?= ($data["prodi"]=="Teknik Energi (D4)") ? "selected" : ""?> value="Teknik Energi (D4)">Teknik Energi (D4)</option>');
            $('#prodi').append('<option <?= ($data["prodi"]=="Teknik Kimia Industri (D4)") ? "selected" : ""?> value="Teknik Kimia Industri (D4)">Teknik Kimia Industri (D4)</option>');
            break;

            case 'Akuntansi':
            $('#prodi').children().remove();
            $('#prodi').append('<option <?= ($data["prodi"]=="Akuntansi (D3)") ? "selected" : ""?> value="Akuntansi (D3)">Akuntansi (D3)</option>');
            $('#prodi').append('<option <?= ($data["prodi"]=="Akuntansi Sektor Publik (D4)") ? "selected" : ""?> value="Akuntansi Sektor Publik (D4)">Akuntansi Sektor Publik (D4)</option>');
            break;

            case 'Administrasi Bisnis':
            $('#prodi').children().remove();
            $('#prodi').append('<option <?= ($data["prodi"]=="Administrasi Bisnis (D3)") ? "selected" : ""?> value="Administrasi Bisnis (D3)">Administrasi Bisnis (D3)</option>');
            $('#prodi').append('<option <?= ($data["prodi"]=="Usaha Perjalanan Wisata (D4)") ? "selected" : ""?> value="Usaha Perjalanan Wisata (D4)">Usaha Perjalanan Wisata (D4)</option>');
            $('#prodi').append('<option <?= ($data["prodi"]=="Manajemen Bisnis (D4)") ? "selected" : ""?> value="Manajemen Bisnis (D4)">Manajemen Bisnis (D4)</option>');
            break;

            case 'Teknik Komputer':
            $('#prodi').children().remove();
            $('#prodi').append('<option <?= ($data["prodi"]=="Teknik Komputer (D3)") ? "selected" : ""?> value="Teknik Komputer (D3)">Teknik Komputer (D3)</option>');
            $('#prodi').append('<option <?= ($data["prodi"]=="Teknik Informatika Multimedia Digital (D4)") ? "selected" : ""?> value="Teknik Informatika Multimedia Digital (D4)">Teknik Informatika Multimedia Digital (D4)</option>');
            break;

            case 'Manajemen Informatika':
            $('#prodi').children().remove();
            $('#prodi').append('<option <?= ($data["prodi"]=="Manajemen Informatika (D3)") ? "selected" : ""?> value="Manajemen Informatika (D3)">Manajemen Informatika (D3)</option>');
            $('#prodi').append('<option <?= ($data["prodi"]=="Manajemen Informatika (D4)") ? "selected" : ""?> value="Manajemen Informatika (D4)">Manajemen Informatika (D4)</option>');
            break;

            case 'Bahasa Inggris':
            $('#prodi').children().remove();
            $('#prodi').append('<option <?= ($data["prodi"]=="Bahasa Inggris (D3)") ? "selected" : ""?> value="Bahasa Inggris (D3)">Bahasa Inggris (D3)</option>');
            break;
        }
    }

    $(function() {
        prodi('<?= $data['jurusan']; ?>');

        $('.see').click(function() {
            if($('#password').attr('type')=='text'){
                $('#password').attr('type','password');
            } else {
                $('#password').attr('type','text');
            }
        });

        $('input,select,textarea').not('#foto').change(function(e) {
            e.preventDefault();
            var elem = $(this);
            var column = elem.attr('id');
            var value = elem.val();
            var data = elem.data('id');
            if (data=='textarea'){ value = elem.val(); }
            if (column=='jurusan') {
                prodi($('#jurusan').val());
            }

            $.ajax({
                url: '<?= BASEURL;?>biodata/update',
                method: 'POST',
                data: {
                    id : <?= $data['id']; ?>,
                    nim : '<?= $data['nim']; ?>',
                    column : column,
                    value : value
                },
                dataType: 'JSON',
                success: function(data){
                    if (data.status==1){
                        elem.removeClass('is-valid').next().remove();
                        elem.addClass('is-valid').after('<div class="valid-feedback">Berhasil disimpan!</div>');
                        setTimeout(function(){ elem.removeClass('is-valid').next().remove(); }, 5000);
                    } else if(data.status==0){
                        elem.removeClass('is-invalid').next().remove();
                        elem.addClass('is-invalid').after('<div class="invalid-feedback">Gagal disimpan!</div>');
                        setTimeout(function(){ elem.removeClass('is-invalid').next().remove(); }, 5000); 
                    }
                }
            })
        });

        var table = $('#tabel-sertifikat').DataTable( {
            "ajax"  : '<?= BASEURL;?>dokumen/getGlob',
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
                url: "<?= BASEURL;?>dokumen/saveDokumenRekomendasi",
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
                url: '<?= BASEURL;?>dokumen/saveDokumenSertifikat', 
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