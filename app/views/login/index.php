<!-- Custom styles for this template -->
<?php css('<link href="public/assets/pages/login-signup/style.css" rel="stylesheet">'); ?>
    
<main class="form-signin">
  <form>
    <img class="mb-5" src="public/images/logo.webp" alt="logo" width="100">

    <div class="form-floating mb-2">
      <input type="number" class="form-control" id="nim" autocomplete="off" placeholder="06213031xxxx">
      <label for="nim">NIM</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="password" autocomplete="new-password" placeholder="Password">
      <label for="password">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <input class="w-100 btn btn-lg btn-primary mt-2" type="submit" value="Masuk">
    <p class="mt-5 mb-3 text-muted">LDK Karisma &copy; 2021</p>
  </form>
</main>

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
                    alert(data.data.msg);
                }
            })
        });
    });
</script>