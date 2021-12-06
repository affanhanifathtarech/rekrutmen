<?php 
// d($_SESSION);
?>

<div class="row m-3">
<h1>Profile</h1>
</div>
<div class="row m-3">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nim"><b>Foto Profil</b></label></br>
            <img src="<?php $this->model('Profile_model')->getUserImage(); ?>" alt="foto-profil" width="100px" id="foto_profile"></br>
            <input type="file" id="foto" name="foto">
        </div>
        <div class="form-group mt-5 mb-2">
            <label for="nama">Nama</label>
            <input type="text" data-id="nama" autocomplete="off" class="input-text" value="">
        </div>
        <div class="form-group mb-2">
            <label for="nim">NIM</label>
            <input type="number" data-id="nim" autocomplete="off" value="<?= $data["nim"]; ?>" disabled>
        </div>
        <div class="form-group mb-2">
            <label for="nim">Password</label>
            <input type="password" data-id="password" autocomplete="new-password" class="input-text" value="<?= $data["password"]; ?>">
        </div>
        <div class="form-group mb-2">
            <label for="nim">No WA</label>
            <input type="number" data-id="wa" autocomplete="off" class="input-text" value="<?= $data["wa"]; ?>">
        </div>

    </form>
</div>

<?php require_once 'app/views/parts/mainjs.php'; ?>

<script>
    $(function() {
        $('.input-text').change(function(e) {
            e.preventDefault();
            var column = $(this).data('id');
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

        $('input[type=file]').change(function(e) {
            e.preventDefault();
            var file_data = $("#foto").prop("files")[0];   
            var foto_lama = $("#foto_profile").attr('src');
            var form_data = new FormData();
            form_data.append("foto", file_data);
            form_data.append("foto_lama", foto_lama);
            $.ajax({
                url: "profile/saveImage",
                dataType: 'JSON',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,                      
                type: 'post',
                success: function(data){
                    if (data.status==1){
                        $('#foto_profile').attr('src', data.data.url);
                    } else if (data.status==0){
                        alert(data.data.msg);
                    }
                }
                
            });
            })
    });
</script>