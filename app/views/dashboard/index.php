<?php
$glob1 = glob('public/images/user/'. $_SESSION['nim'] . ".*");
$display['foto_profil'] = (empty($glob1)) ? '<i class="fas fa-times-circle text-danger"></i>' : '<i class="berhasil fas fa-check-circle text-success"></i>';

$glob2 = glob('public/dokumen/rekomendasi/*'. $_SESSION['nim'] . ".*");
$display['rekomendasi'] = (empty($glob2)) ? 'style="display:none;"' : '';
$display['tampilan_rekomendasi'] = (empty($glob2)) ? '<i class="fas fa-times-circle text-danger"></i>' : '<i class="berhasil fas fa-check-circle text-success"></i>';
$link = (empty($glob2)) ? '' : $glob2[0] ;

// $display['biodata'] = ($isNull);

$doc = new DOMDocument;
$columns = $this->model("Biodata_model")->getColumnNames();
$isNull = 0;
foreach ($columns as $key => $value) {
  if($this->model("Biodata_model")->isNull($value, $_SESSION["nim"])) {
    $li = $doc->createElement("li");
    $doc->appendChild($li);
    $li->appendChild($doc->createTextNode($value));
    $isNull++;
  }
}

$display['biodata'] = $doc->saveHTML();
?>

<!-- Main content -->
    <div class="main-content content m-auto">
      <div class="container-fluid">
        <div class="row">
          
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

          <div class="col-lg-8">

            <div class="card">
                <!-- /.card-header -->
                <div class="card-body py-2">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item px-1">
                      <span class="badge bg-cyan mr-2">1</span>
                      <a href="biodata" class="nav-link" style="display:inline; padding:unset;">Lengkapi Biodata</a>   
                      <span class="badge rounded-pill bg-danger"><?= $isNull; ?></span>
                      <ol class="list-group-numbered collapse" id="biodata">
                        <?= $display['biodata']; ?>
                      </ol>
                    </li>
                    <li class="list-group-item px-1">
                      <span class="badge bg-cyan mr-2">2</span>
                      <a href="#" id="display_profil" class="nav-link" style="display:inline; padding:unset;" data-bs-toggle="modal" data-bs-target="#change-profile">Upload Pas Foto</a>
                      <?= $display['foto_profil'] ?>
                    </li>
                    <li class="list-group-item px-1">
                      <span class="badge bg-cyan mr-2">3</span>
                      <a class="nav-link" href="dokumen" style="display:inline; padding:unset;">Upload Lembar Rekomendasi HMJ</a>
                      <?= $display['tampilan_rekomendasi'] ?>
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

            <div class="row instagram-content">
              <p class="loading-skeleton ml-2 w-75">.</p>
              <div class="col-sm-4">
                  <div class="card">
                  <div class='loader p-2'> 
                  <p class="mb-0 loading-skeleton">.</p>
                  <p class="mb-0 loading-skeleton">.</p>
                  <p class="mb-0 loading-skeleton">.</p>
                  <p class="mb-2 loading-skeleton">.</p>
                  <p class="mb-2 loading-skeleton">.</p>
                  <p class="mb-2 loading-skeleton">.</p>
                  </div>
                  </div>
              </div>

              <div class="col-sm-4">
                  <div class="card">
                  <div class='loader p-2'> 
                  <p class="mb-0 loading-skeleton">.</p>
                  <p class="mb-0 loading-skeleton">.</p>
                  <p class="mb-0 loading-skeleton">.</p>
                  <p class="mb-2 loading-skeleton">.</p>
                  <p class="mb-2 loading-skeleton">.</p>
                  <p class="mb-2 loading-skeleton">.</p>
                  </div>
                  </div>
              </div>

              <div class="col-sm-4">
                  <div class="card">
                  <div class='loader p-2'> 
                  <p class="mb-0 loading-skeleton">.</p>
                  <p class="mb-0 loading-skeleton">.</p>
                  <p class="mb-0 loading-skeleton">.</p>
                  <p class="mb-2 loading-skeleton">.</p>
                  <p class="mb-2 loading-skeleton">.</p>
                  <p class="mb-2 loading-skeleton">.</p>
                  </div>
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

<script src="public/assets/pages/dashboard/adminlte.min.js"></script>

<script>
  $(function() {
    $('.instagram-content').empty();
    $('.instagram-content').append('<h5 class="mb-3">Terbaru di Instagram</h5>');
    $('.instagram-content').append('<div class="col-6 col-sm-4 col-md-3 col-lg-4"><div class="card shadow-sm"><a href="https://www.instagram.com/p/<?= $instagram_photos[0]->node->shortcode; ?>" target="_BLANK"><img width="100%" src="<?= encodeimg($instagram_photos[0]->node->thumbnail_src)?>"></a></div></div>');
    $('.instagram-content').append('<div class="col-6 col-sm-4 col-md-3 col-lg-4"><div class="card shadow-sm"><a href="https://www.instagram.com/p/<?= $instagram_photos[1]->node->shortcode; ?>" target="_BLANK"><img width="100%" src="<?= encodeimg($instagram_photos[1]->node->thumbnail_src)?>"></a></div></div>');
    $('.instagram-content').append('<div class="col-6 col-sm-4 col-md-3 col-lg-4"><div class="card shadow-sm"><a href="https://www.instagram.com/p/<?= $instagram_photos[2]->node->shortcode; ?>" target="_BLANK"><img width="100%" src="<?= encodeimg($instagram_photos[2]->node->thumbnail_src)?>"></a></div></div>');
    $('.instagram-content').append('<div class="col-6 col-sm-4 col-md-3 col-lg-4"><div class="card shadow-sm"><a href="https://www.instagram.com/p/<?= $instagram_photos[3]->node->shortcode; ?>" target="_BLANK"><img width="100%" src="<?= encodeimg($instagram_photos[3]->node->thumbnail_src)?>"></a></div></div>');
    $('.instagram-content').append('<div class="col-6 col-sm-4 col-md-3 col-lg-4"><div class="card shadow-sm"><a href="https://www.instagram.com/p/<?= $instagram_photos[4]->node->shortcode; ?>" target="_BLANK"><img width="100%" src="<?= encodeimg($instagram_photos[4]->node->thumbnail_src)?>"></a></div></div>');
    $('.instagram-content').append('<div class="col-6 col-sm-4 col-md-3 col-lg-4"><div class="card shadow-sm"><a href="https://www.instagram.com/p/<?= $instagram_photos[5]->node->shortcode; ?>" target="_BLANK"><img width="100%" src="<?= encodeimg($instagram_photos[5]->node->thumbnail_src)?>"></a></div></div>');
   });
</script>

</body>
</html>