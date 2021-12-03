<h1>Mendaftar</h1>
<form action="" method="post">
    <label for="nim">NIM : </label>
    <input type="number" id="nim" name="nim" autocomplete="off">
    <label for="password">Password : </label>
    <input type="password" id="password" name="password" autocomplete="off">
    <label for="wa">No Wa : </label>
    <input type="number" id="wa" name="wa" autocomplete="off">
    <input type="submit" value="Daftar">
</form>

<?php require_once '../app/views/parts/script.php'; ?>

<script>
    $(function() {
        $('input[type=submit]').click(function(e) {
            e.preventDefault();
            var nim = $('#nim').val();
            var password = $('#password').val();
            var wa = $('#wa').val();
            $.ajax({
                url: 'register/register',
                method: 'POST',
                data: {
                    nim : nim,
                    password : password,
                    wa : wa
                },
                dataType: 'JSON',
                success: function(data){
                    console.log(data);
                    alert(data.data.msg);
                }
            })
        });
    });
</script>