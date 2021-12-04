<?php 
d($_SESSION);
?>

<div class="row m-3">
<h1>Profile</h1>
</div>
<div class="row m-3">
    <form action="" method="post">
        <div class="form-group">
            <label for="nim"><b>Foto Profil</b></label></br>
            <img src="<?php $this->model('Profile_model')->getUserImage(); ?>" alt="foto-profil" width="100px"></br>
            <input type="file" id="foto" name="foto">
        </div>
        <div class="form-group mt-5 mb-2">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" data-id="nama">
        </div>
        <div class="form-group mb-2">
            <label for="nim">NIM</label>
            <input type="number" id="nim" name="nim" data-id="nim" autocomplete="off" disabled>
        </div>
        <div class="form-group mb-2">
            <label for="nim">Password</label>
            <input type="password" id="password" name="password" data-id="password" autocomplete="off">
        </div>
        <div class="form-group mb-2">
            <label for="nim">No WA</label>
            <input type="number" id="wa" name="wa" data-id="wa" autocomplete="off">
        </div>

    </form>
</div>

<?php require_once '../app/views/parts/script.php'; ?>

<script>
    $(function() {
        $('input').change(function(e) {
            e.preventDefault();
            const column = $(this).data('id');
            var value = $(this).val();
            $.ajax({
                url: 'profile/save',
                method: 'POST',
                data: {
                    id : <?= $_SESSION['id'] ?>,
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