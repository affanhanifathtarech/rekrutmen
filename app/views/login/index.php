<?php //css('<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">');?>

<h1>Halaman Login</h1>
<form action="" method="post">
    <label for="nim">NIM : </label>
    <input type="number" id="nim" name="nim" autocomplete="off">
    <label for="password">Password : </label>
    <input type="password" id="password" name="password" autocomplete="off">
    <input type="submit" value="Login">
</form>

<?php mainjs(); ?>

<script>
    $(function() {
        $('input[type=submit]').click(function(e) {
            e.preventDefault();
            var nim = $('#nim').val();
            var password = $('#password').val();
            $.ajax({
                url: 'login/login',
                method: 'POST',
                data: {
                    nim : nim,
                    password : password
                },
                dataType: 'JSON',
                success: function(data){
                    console.log(data);
                }
            })
        });
    });
</script>