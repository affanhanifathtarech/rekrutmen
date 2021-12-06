<div class="container p-4">
<h1 class="h3 mb-3">Biodata Mahasiswa</h1>
<form action="" method="POST">
<div class="form-group mb-2">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" value="<?= $data["nama"]; ?>">
</div>
<div class="form-group mb-2">
    <label for="nim">NIM</label>
    <input type="number" class="form-control" id="nim" value="<?= $data["nim"]; ?>" disabled>
</div>
<div class="form-group mb-2">
    <label for="jk">Jenis Kelamin</label>
    <select class="form-control" name='jk' id='jk'>
        <option <?= ($data["angkatan"]=='Laki-Laki') ? 'selected' : ''?> value="Laki-Laki">Laki-Laki</option>
        <option <?= ($data["angkatan"]=='Perempuan') ? 'selected' : ''?> value="Perempuan">Perempuan</option>
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
    <input type="text" class="form-control" id="status_tinggal" value="<?= $data["status_tinggal"]; ?>">
</div>
<div class="form-group mb-2">
    <label for="status_kelas">Status Kelas</label>
    <input type="text" class="form-control" id="status_kelas" value="<?= $data["status_kelas"]; ?>">
</div>
<div class="form-group mb-2">
    <label for="liqo">Liqo</label>
    <input type="text" class="form-control" id="liqo" value="<?= $data["liqo"]; ?>">
</div>
<div class="form-group mb-2">
    <label for="organisasi">Organisasi</label>
    <input type="text" class="form-control" id="organisasi" value="<?= $data["organisasi"]; ?>">
</div>
<div class="form-group mb-2">
    <label for="hobi">Hobi</label>
    <input type="text" class="form-control" id="hobi" value="<?= $data["hobi"]; ?>">
</div>
<div class="form-group mb-2">
    <label for="email">Email</label>
    <input type="text" class="form-control" id="email" value="<?= $data["email"]; ?>">
</div>
<div class="form-group mb-2">
    <label for="status_pendidikan">Status Pendidikan</label>
    <input type="text" class="form-control" id="status_pendidikan" value="<?= $data["status_pendidikan"]; ?>">
</div>
<div class="form-group mb-2">
    <label for="alasan_gabung">Alasan Gabung</label>
    <textarea class="form-control" id="alasan_gabung" data-id="textarea" rows="3"><?= $data["alasan_gabung"]; ?></textarea>
</div>
</form>
</div>

<?php require_once 'app/views/parts/mainjs.php'; ?>

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
                    console.log(data);
                    if (data.status==1){
                        elem.addClass('is-valid').after('<div class="valid-feedback">Berhasil disimpan!</div>');
                        setTimeout(function(){ elem.removeClass('is-valid').next().remove(); }, 3000);
                    } else if(data.status==0){
                        elem.addClass('is-invalid').after('<div class="invalid-feedback">Gagal disimpan!</div>');
                        setTimeout(function(){ elem.removeClass('is-invalid').next().remove(); }, 3000); 
                    }
                }
            })
        });
    });
</script>