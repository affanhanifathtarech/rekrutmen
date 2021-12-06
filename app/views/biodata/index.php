<h1>Biodata Mahasiswa</h1>
<?php 
$data = $this->model("Biodata_model")->getBiodataUser($_SESSION["nim"], "nim");
?>
<form action="" method="POST">
    <table>
        <tr>
            <td>Nim : </td>
            <td><input type="text" value="<?= $_SESSION["nim"]; ?>" disabled></td>
        </tr>
        <tr>
            <td>Nama : </td>
            <td><input type="text" id="nama" class="input-text" name="nama" value="<?= $data["nama"]; ?>"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin : </td>
            <td>
                <input type="radio" value="Laki-Laki" id="jk" name="jenis_kelamin">
                <label for="lk">Laki-Laki</label>
                <input type="radio" value="Perempuan" id="jk" name="jenis_kelamin"> 
                <label for="pr">Perempuan</label>
            </td>
        </tr>
        <tr>
            <td>Jurusan : </td>
            <td>
                <select name="jurusan" id="jurusan">
                    <!-- <option selected value="<?= $data["jurusan"] ?>"><?= $data["jurusan"]; ?></option> -->
                    <option value="Teknik Komputer">Teknik Komputer</option>
                    <option value="Teknik Elektro">Teknik Elektro</option>
                    <option value="Teknik Sipil">Teknik Sipil</option>
                    <option value="Teknik Kimia">Teknik Kimia</option>
                    <option value="Teknik Mesin">Teknik Mesin</option>
                    <option value="Administrasi Perkantoran">Administrasi Perkantoran</option>
                    <option value="Akutansi">Akutansi</option>
                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Program Studi : </td>
            <td>
                <select name="prodi" id="prodi">
                    <option value="D4 Teknologi Informatika dan Multimedia Digital">Teknologi Informatika dan Multimedia Digital</option>
                    <option value="D4 Akutansi">Akutansi</option>
                    <option value="D4 Perancangan Jalan dan Jembatan">Perancangan Jalan dan Jembatan</option>
                    <option value="D4 Perhotelan">Perhotelan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Kelas : </td>
            <td><input type="text" name="kelas" id="kelas" value="<?= $data["kelas"]; ?>" ></td>
        </tr>
        <tr>
            <td>Angkatan : </td>
            <td>
                <select name="angkatan" id="angkatan">
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tempat Lahir : </td>
            <td><input type="text" name="tempat_lahir" id="tempat_lahir" value="<?= $data["tempat_lahir"]; ?>"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir : </td>
            <td><input type="date" name="tanggal_lahir" id="tanggal_lahir" value="<?= $data["tanggal_lahir"]; ?>" ></td>
        </tr>
        <tr>
            <td>Golongan Darah : </td>
            <td><input type="text" name="goldar" id="goldar" value="<?= $data["goldar"]; ?>" ></td>
        </tr>
        <tr>
            <td>Anak Ke - : </td>
            <td><input type="number" name="anak_ke" id="anak_ke" value="<?= $data["anak_ke"]; ?>" ></td>
        </tr>
        <tr>
            <td>Nama Ayah : </td>
            <td><input type="text" name="ayah" id="ayah" value="<?= $data["ayah"]; ?>" ></td>
        </tr>
        <tr>
            <td>Nama Ibu: </td>
            <td><input type="text" name="ibu" id="ibu" value="<?= $data["ibu"]; ?>"></td>
        </tr>
        <tr>
            <td>Pekerjaan Ayah : </td>
            <td><input type="text" name="kerja_ayah"  id="kerja_ayah" value="<?= $data["kerja_ayah"]; ?>"></td>
        </tr>
        <tr>
            <td>Pekerjaan Ibu : </td>
            <td><input type="text" name="kerja_ibu" id="kerja_ibu" value="<?= $data["kerja_ibu"]; ?>" ></td>
        </tr>
        <tr>
            <td>Status Tinggal : </td>
            <td><input type="text" name="status_tinggal" id="status_tinggal" value="<?= $data["status_tinggal"]; ?>" ></td>
        </tr>
        <tr>
            <td>Status Kelas : </td>
            <td><input type="text" name="status_kelas" id="status_kelas" value="<?= $data["status_kelas"]; ?>" ></td>
        </tr>
        <tr>
            <td>Liqo : </td>
            <td><input type="text" name="liqo" id="liqo" value="<?= $data["liqo"]; ?>" ></td>
        </tr>
        <tr>
            <td>Organisasi : </td>
            <td><input type="text" name="organisasi" id="organisasi" value="<?= $data["organisasi"]; ?>" ></td>
        </tr>
        <tr>
            <td>Hobi : </td>
            <td><input type="text" name="hobi" id="hobi" value="<?= $data["hobi"]; ?>"></td>
        </tr>
        <tr>
            <td>Email : </td>
            <td><input type="email" name="email" id="email" value="<?= $data["email"]; ?>" ></td>
        </tr>
        <tr>
            <td>Status Pendidikan : </td>
            <td><input type="text" name="status_pendidikan" id="status_pendidikan" value="<?= $data["status_pendidikan"]; ?>" ></td>
        </tr>
        <tr>
            <td>Alasan Gabung : </td>
            <td><textarea name="alasan_gabung" id="alasan_gabung" cols="20" rows="5">
            <?= $data["alasan_gabung"]; ?>
            </textarea></td>
        </tr>
    </table>
</form>

<?php require_once 'app/views/parts/mainjs.php'; ?>

<script>
    $(function() {
        $('input').change(function(e) {
            e.preventDefault();
            var column = $(this).attr('id');
            var value = $(this).val();
            $.ajax({
                url: 'biodata/update',
                method: 'POST',
                data: {
                    id : <?= $data['id']; ?>,
                    column : column,
                    value : value
                },
                dataType: 'JSON',
                success: function(data){
                    console.log(data);
                }
            })
        });
    });
</script>