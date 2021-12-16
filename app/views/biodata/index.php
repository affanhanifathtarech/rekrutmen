    <!-- Main content -->
    <div class="main-content content m-auto">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">

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

</body>
</html>

<script>
    function prodi(jurusan) 
    {
        $('#prodi').children().remove();
        $('#prodi').append('<option selected value="NULL" hidden>Pilih Program Studi</option>');

        switch (jurusan) 
        {
            case 'Teknik Elektro':
            $('#prodi').append('<option <?= ($data["prodi"]=="Teknik Listrik (D3)") ? "selected" : ""?> value="Teknik Listrik (D3)">Teknik Listrik (D3)</option>');
            $('#prodi').append('<option <?= ($data["prodi"]=="Teknik Elektronika (D3)") ? "selected" : ""?> value="Teknik Elektronika (D3)">Teknik Elektronika (D3)</option>');
            $('#prodi').append('<option <?= ($data["prodi"]=="Teknik Telekomunikasi (D3)") ? "selected" : ""?> value="Teknik Telekomunikasi (D3)">Teknik Telekomunikasi (D3)</option>');
            $('#prodi').append('<option <?= ($data["prodi"]=="Teknik Telekomunikasi (D4)") ? "selected" : ""?> value="Teknik Telekomunikasi (D4)">Teknik Telekomunikasi (D4)</option>');
            $('#prodi').append('<option <?= ($data["prodi"]=="Teknik Elektro Konsentrasi Mekatronika (D4)") ? "selected" : ""?> value="Teknik Elektro Konsentrasi Mekatronika (D4)">Teknik Elektro Konsentrasi Mekatronika (D4)</option>');
            break;

            case 'Teknik Sipil':
            $('#prodi').append('<option <?= ($data["prodi"]=="Teknik Sipil (D3)") ? "selected" : ""?> value="Teknik Sipil (D3)">Teknik Sipil (D3)</option>');
            $('#prodi').append('<option <?= ($data["prodi"]=="Perancangan Jalan dan Jembatan (D4)") ? "selected" : ""?> value="Perancangan Jalan dan Jembatan (D4)">Perancangan Jalan dan Jembatan (D4)</option>');
            break;

            case 'Teknik Mesin':
            $('#prodi').append('<option <?= ($data["prodi"]=="Teknik Mesin (D3)") ? "selected" : ""?> value="Teknik Mesin (D3)">Teknik Mesin (D3)</option>');
            $('#prodi').append('<option <?= ($data["prodi"]=="Teknik Mesin Produksi Perawatan (D4)") ? "selected" : ""?> value="Teknik Mesin Produksi Perawatan (D4)">Teknik Mesin Produksi Perawatan (D4)</option>');
            break;

            case 'Teknik Kimia':
            $('#prodi').append('<option <?= ($data["prodi"]=="Teknik Kimia (D3)") ? "selected" : ""?> value="Teknik Kimia (D3)">Teknik Kimia (D3)</option>');
            $('#prodi').append('<option <?= ($data["prodi"]=="Teknik Energi (D4)") ? "selected" : ""?> value="Teknik Energi (D4)">Teknik Energi (D4)</option>');
            $('#prodi').append('<option <?= ($data["prodi"]=="Teknik Kimia Industri (D4)") ? "selected" : ""?> value="Teknik Kimia Industri (D4)">Teknik Kimia Industri (D4)</option>');
            break;

            case 'Akuntansi':
            $('#prodi').append('<option <?= ($data["prodi"]=="Akuntansi (D3)") ? "selected" : ""?> value="Akuntansi (D3)">Akuntansi (D3)</option>');
            $('#prodi').append('<option <?= ($data["prodi"]=="Akuntansi Sektor Publik (D4)") ? "selected" : ""?> value="Akuntansi Sektor Publik (D4)">Akuntansi Sektor Publik (D4)</option>');
            break;

            case 'Administrasi Bisnis':
            $('#prodi').append('<option <?= ($data["prodi"]=="Administrasi Bisnis (D3)") ? "selected" : ""?> value="Administrasi Bisnis (D3)">Administrasi Bisnis (D3)</option>');
            $('#prodi').append('<option <?= ($data["prodi"]=="Usaha Perjalanan Wisata (D4)") ? "selected" : ""?> value="Usaha Perjalanan Wisata (D4)">Usaha Perjalanan Wisata (D4)</option>');
            $('#prodi').append('<option <?= ($data["prodi"]=="Manajemen Bisnis (D4)") ? "selected" : ""?> value="Manajemen Bisnis (D4)">Manajemen Bisnis (D4)</option>');
            break;

            case 'Teknik Komputer':
            $('#prodi').append('<option <?= ($data["prodi"]=="Teknik Komputer (D3)") ? "selected" : ""?> value="Teknik Komputer (D3)">Teknik Komputer (D3)</option>');
            $('#prodi').append('<option <?= ($data["prodi"]=="Teknik Informatika Multimedia Digital (D4)") ? "selected" : ""?> value="Teknik Informatika Multimedia Digital (D4)">Teknik Informatika Multimedia Digital (D4)</option>');
            break;

            case 'Manajemen Informatika':
            $('#prodi').append('<option <?= ($data["prodi"]=="Manajemen Informatika (D3)") ? "selected" : ""?> value="Manajemen Informatika (D3)">Manajemen Informatika (D3)</option>');
            $('#prodi').append('<option <?= ($data["prodi"]=="Manajemen Informatika (D4)") ? "selected" : ""?> value="Manajemen Informatika (D4)">Manajemen Informatika (D4)</option>');
            break;

            case 'Bahasa Inggris':
            $('#prodi').append('<option <?= ($data["prodi"]=="Bahasa Inggris (D3)") ? "selected" : ""?> value="Bahasa Inggris (D3)">Bahasa Inggris (D3)</option>');
            break;
        }
    }

    $(function() {
        if ('<?=$data["jk"];?>'=='') { $('#jk').append('<option selected value="NULL" hidden>Pilih Jenis Kelamin</option>'); }
        if ('<?=$data["prodi"];?>'=='') { $('#prodi').append('<option selected value="NULL" hidden>Pilih Jurusan Terlebih Dahulu</option>'); }
        if ('<?=$data["jurusan"];?>'=='') { $('#jurusan').append('<option selected value="NULL" hidden>Pilih Jurusan</option>'); }
        if ('<?=$data["angkatan"];?>'=='') { $('#angkatan').append('<option selected value="NULL" hidden>Pilih Angkatan</option>'); }
        if ('<?=$data["goldar"];?>'=='') { $('#goldar').append('<option selected value="NULL" hidden>Pilih Golongan Darah</option>'); }
        if ('<?=$data["status_tinggal"];?>'=='') { $('#status_tinggal').append('<option selected value="NULL" hidden>Pilih Status Tinggal</option>'); }
        if ('<?=$data["rohis"];?>'=='') { $('#rohis').append('<option selected value="NULL" hidden>Pilih Status Rohis</option>'); }
        if ('<?=$data["liqo"];?>'=='') { $('#liqo').append('<option selected value="NULL" hidden>Pilih Status Liqo</option>'); }
        if ('<?=$data["status_pendidikan"];?>'=='') { $('#status_pendidikan').append('<option selected value="NULL" hidden>Pilih Status Pendidikan</option>'); }
        if ('<?=$data["status_kelas"];?>'=='') { $('#status_kelas').append('<option selected value="NULL" hidden>Pilih Status Kelas</option>'); }
        if ('<?=$data["div1"];?>'=='') { $('#div1').append('<option selected value="NULL" hidden>Pilih Divisi 1</option>'); }
        if ('<?=$data["div2"];?>'=='') { $('#div2').append('<option selected value="NULL" hidden>Pilih Divisi 2</option>'); }
        prodi('<?= $data['jurusan']; ?>');

        $('input,select,textarea').change(function(e) {
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
                url: 'biodata/update',
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
    });
</script>