<!-- Custom styles for this template -->

<link href="public/assets/pages/login-signup/style.css" rel="stylesheet">

<div class="container">
  <div class="row">
    <div class="col-lg-6 row d-flex align-content-center text-left saved-login">
      <h1>LDK KARISMA</h1>
      <h3 class="mb-0">Masuk Terbaru</h3>
      <p>Klik pada foto untuk langsung login.</p>
      <div class="row mt-3">
        <div class="col-lg-4">
          <div class="card shadow">
            <div class="card-body p-0">
              <div class="cover-image" style="background: url() center center/cover no-repeat;"></div>
            </div>
            <div class="card-footer text-truncate">
              Affan Hanif Ath Tarech
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card shadow">
            <div class="card-body p-0">
            <div class="cover-image" style="background: url() center center/cover no-repeat;"></div>
            </div>
            <div class="card-footer text-truncate">
              Affan Hanif Ath Tarech
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card shadow">
            <div class="card-body p-0">
              <div class="cover-image" style="background: url() center center/cover no-repeat;"></div>
            </div>
            <div class="card-footer text-truncate">
              Affan Hanif Ath Tarech
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="col-lg-6">
    <main class="form-signin">
      <form action="" id="form-login" method="post">
        <div class="card p-3 shadow">
          <div class="mb-5 m-auto logo">
            <h1 class="text-center">LDK KARISMA</h1>
            <p class="text-center">Open Recruitment UKM Karisma</p>
          </div>
          <div class="message"></div>
          <div class="form-floating mb-2">
            <input type="number" class="form-control" id="nim-login" autocomplete="off" placeholder="06213031xxxx">
            <label class="overflow-hidden empasis" for="nim-login">NIM</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="password-login" autocomplete="new-password" placeholder="Password">
            <label for="password-login">Kata Sandi</label>
          </div>
          <div class="checkbox mt-3 mb-3">
            <label>
              <input type="checkbox" id="remember_me" name="remember"> Remember me
            </label>
          </div>
          <div class="form-group">
            <button class="w-100 btn btn-lg btn-primary mt-2" type="submit" id="form-login">Masuk</button>
          </div>
          <div class="form-group">
            <input class="w-100 btn btn-lg btn-success my-2" value="Mendaftar" data-bs-toggle="modal" data-bs-target="#register">
          </div>
          <a class="nav-link text-center" href="lupa_password.php">Lupa Kata Sandi?</a>
        </div>
      </form>
    </main>
    </div>
  </div>
</div>

<div class="modal fade" id="register" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header align-items-center justify-content-center pb-0">
        <div class="modal-title">
          <h5 class="mb-1">Mendaftar</h5>
          <p>Sangat mudah dan cepat</p>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4">
        <form action="" id="form-register" method="post">
          <div class="form-floating mb-2">
            <input type="number" class="form-control" id="nim-register" autocomplete="off" placeholder="06213031xxxx">
            <label for="nim-register">NIM</label>
          </div>
          <div class="form-floating mb-2">
            <input type="number" class="form-control" id="wa-register" autocomplete="off" placeholder="08125523xxxx">
            <label for="wa-register">No Whatsapp</label>
          </div>
          <div class="form-floating mb-2">
              <input type="password" class="form-control" id="password-register" autocomplete="new-password" placeholder="Password">
              <label for="password-register">Password</label>
          </div>
          <p class="text-small">Dengan mengklik Daftar, kami akan membuatkan sebuah akun keanggotaan LDK Karisma baru. Selamat bergabung di LDK Karisma.</p>
          <div class="d-flex justify-content-center">
          <input type="submit" class="btn btn-lg btn-success" value="Daftar">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<?php require_once 'app/views/parts/mainjs.php'; ?>

<script> 
    $(function() {
      
        $('#form-login').submit(function(e) {
            e.preventDefault();
            var nim = $('#nim-login').val();
            var password = $('#password-login').val();
            var remember_me = false;
           
            if ($('#remember_me').is(':checked')) {
              remember_me = true;
            }
            // var remember_me = $('#remember_me').val();
            $.ajax({
                url: 'login/login',
                method: 'POST',
                data: {
                    nim : nim,
                    password : password,
                    remember : remember_me
                },
                dataType: 'JSON',
                success: function(data){
                    if (data.status==1){
                      window.location.href = 'dashboard';
                    } else if (data.status==0){
                      if(data.data.err==2) {
                        $.each(data.data.null, function( index, value ) {
                          if (value=='nim') {
                            $('#nim-login').removeClass('is-invalid');
                            $('.nim-feedback').remove();
                            $('#nim-login').addClass('is-invalid').after('<div class="invalid-feedback nim-feedback">Tidak Boleh Kosong</div>');
                            setTimeout(function(){ $('#nim-login').removeClass('is-invalid').next().remove(); }, 5000); 
                          } else if (value=='password') {
                            $('#password-login').removeClass('is-invalid');
                            $('.password-feedback').remove();
                            $('#password-login').addClass('is-invalid').after('<div class="invalid-feedback password-feedback">Tidak Boleh Kosong</div>');
                            setTimeout(function(){ $('#password-login').removeClass('is-invalid').next().remove(); }, 5000); 
                          }
                        });
                      } else {
                        $('.message').html('<div class="alert alert-danger text-center p-2" role="alert">' + data.data.msg + '</div>');
                        setTimeout(function(){ $('.message').html(''); }, 5000); 
                      }
                    }
                }
            })
        });

        $('#form-register').submit(function(e) {
            e.preventDefault();
            var nim = $('#nim-register').val();
            var password = $('#password-register').val();
            var wa = $('#wa-register').val();
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
                  if(data.status==1){
                      window.location.href = 'dashboard';
                    } else if (data.status==0){
                      alert(data.data.msg);
                  }
                }
            })
        });
    });
</script>