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
            <input type="text" class="form-control" id="nama" autocomplete="off" class="input-text" value="<?= $data["nama"]; ?>" disabled>
        </div>
        <div class="form-group mb-2">
            <label for="nim">NIM</label>
            <input type="number" class="form-control" id="nim" autocomplete="off" value="<?= $data["nim"]; ?>" disabled>
        </div>

        <label for="password">Password</label>
        <div class="input-group mb-2">
            <span class="input-group-text see" id="basic-addon1">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16"><path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path><path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"></path></svg>
            </span>
            <input type="password" class="form-control" id="password" autocomplete="new-password" value="<?= $data["password"]; ?>" aria-describedby="basic-addon1">
        </div>

        <div class="form-group mb-2">
            <label for="wa">No WA</label>
            <input type="number" class="form-control" id="wa" autocomplete="off" class="input-text" value="<?= $data["wa"]; ?>">
        </div>

    </form>
</div>

<?php require_once 'app/views/parts/mainjs.php'; ?>

<script>
    $(function() {
        $('.see').click(function() {
            if($('#password').attr('type')=='text'){
                $('#password').attr('type','password');
            } else {
                $('#password').attr('type','text');
            }
        });

        $('input[type=text],input[type=number],input[type=password]').change(function(e) {
            e.preventDefault();
            var elem = $(this);
            var column = elem.attr('id');
            var value = elem.val();
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