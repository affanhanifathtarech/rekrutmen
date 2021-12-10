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
                        <input type="text" class="form-control" id="nama" autocomplete="off" class="input-text" value="<?= $data["nama"]; ?>" disabled>
                    </div>
                    <div class="form-group mb-2">
                        <label for="nim">NIM</label>
                        <input type="number" class="form-control" id="nim" autocomplete="off" value="<?= $data["nim"]; ?>" disabled>
                    </div>

                    <label for="password">Password</label>
                    <div class="input-group">
                        <span class="input-group-text see" id="basic-addon1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16"><path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path><path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"></path></svg>
                        </span>
                        <input type="password" class="form-control" id="password" autocomplete="new-password" value="<?= $data["password"]; ?>" aria-describedby="basic-addon1">
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

</body>
</html>