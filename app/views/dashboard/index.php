    <!-- Main content -->
 
    <div class="main-content content m-auto">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8">

            <div class="card">
                <!-- /.card-header -->
                <div class="card-body py-2">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item px-1">
                      <span class="badge bg-cyan mr-2">1</span>
                      <a href="biodata">Lengkapi Biodata</a>   
                      <span class="badge badge-danger ml-2">belum</span>
                    </li>
                    <li class="list-group-item px-1">
                      <span class="badge bg-cyan mr-2">2</span>
                      <a href="#" data-bs-toggle="modal" data-bs-target="#change-profile">Upload Pas Foto</a>
                      <span class="badge badge-success ml-2">sudah</span>
                    </li>
                    <li class="list-group-item px-1">
                      <span class="badge bg-cyan mr-2">3</span>
                      <a href="dokumen">Upload Lembar Rekomendasi HMJ</a>
                      <span class="badge badge-danger ml-2">belum</span>
                    </li>
                  </ul>
                </div>  
            </div>

            <?php 

            function encodeimg($url){
              $imageData = base64_encode(file_get_contents($url));
              $src = 'data:image/png ;base64,'.$imageData;
              return $src;
            }

            $instagram_photos = json_decode(file_get_contents(glob("public/images/instagram/*.json")[0]));
            ?>

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Terbaru di Instagram</h5>
              </div>
              <div class="card-body row instagram-content">
                <div class="col-4 p-3">   
                  <div class="card-text">
                    <div class='loader'> 
                      <p class="mb-2 loading-skeleton">.</p>
                      <p class="mb-2 loading-skeleton">.</p>
                      <p class="mb-2 loading-skeleton">.</p>
                    </div>
                    <a href="" target="_BLANK">
                      <img width="100%" src="">
                    </a>
                  </div>
                </div>
                <div class="col-4 p-3">   
                  <div class="card-text">
                    <div class='loader'> 
                      <p class="mb-2 loading-skeleton">.</p>
                      <p class="mb-2 loading-skeleton">.</p>
                      <p class="mb-2 loading-skeleton">.</p>
                    </div>
                    <a href="" target="_BLANK">
                      <img width="100%" src="">
                    </a>
                  </div>
                </div>
                <div class="col-4 p-3">   
                  <div class="card-text">
                    <div class='loader'> 
                      <p class="mb-2 loading-skeleton">.</p>
                      <p class="mb-2 loading-skeleton">.</p>
                      <p class="mb-2 loading-skeleton">.</p>
                    </div>
                    <a href="" target="_BLANK">
                      <img width="100%" src="">
                    </a>
                  </div>
                </div>
              </div>
            </div>

          </div>
          
          <div class="col-lg-4">
            <div class="card card-primary card-outline">
                <div class="card-header">
                  <h5 class="m-0">Ringkasan Biodata</h5>
                </div>
                <div class="card-body py-3">
                  <table class='ringkasan-biodata'>
                    <tr>
                      <td><i class="fas fa-graduation-cap"></i></td>
                      <td>Jurusan Teknik Elektro</td>
                    </tr>
                    <tr>
                      <td><i class="fas fa-user-graduate"></i></td>
                      <td>Prodi Teknik Listrik</td>
                    </tr>
                    <tr>
                      <td><i class="fas fa-birthday-cake"></i></td>
                      <td>Lahir di <strong>Prabumulih</strong></td>
                    </tr>
                    <tr>
                      <td><i class="fas fa-heart"></i></td>
                      <td>Golongan Darah <strong>O</strong></td>
                    </tr>
                    <tr>
                      <td><i class="fab fa-whatsapp"></i></td>
                      <td>082269599529</td>
                    </tr>
                  </table>
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

<script src="public/assets/pages/dashboard/adminlte.min.js"></script>

<script>
  $(function() {
    $('.instagram-content div:nth-child(1) div .loader').remove();
    $('.instagram-content div:nth-child(1) div a').attr('href','https://www.instagram.com/p/<?= $instagram_photos[0]->node->shortcode; ?>');
    $('.instagram-content div:nth-child(1) div a img').attr('src','<?= encodeimg($instagram_photos[0]->node->thumbnail_src)?>');
    $('.instagram-content div:nth-child(2) div .loader').remove();
    $('.instagram-content div:nth-child(2) div a').attr('href','https://www.instagram.com/p/<?= $instagram_photos[1]->node->shortcode; ?>');
    $('.instagram-content div:nth-child(2) div a img').attr('src','<?= encodeimg($instagram_photos[1]->node->thumbnail_src)?>');
    $('.instagram-content div:nth-child(3) div .loader').remove();
    $('.instagram-content div:nth-child(3) div a').attr('href','https://www.instagram.com/p/<?= $instagram_photos[2]->node->shortcode; ?>');
    $('.instagram-content div:nth-child(3) div a img').attr('src','<?= encodeimg($instagram_photos[2]->node->thumbnail_src)?>');
  });
</script>

</body>
</html>