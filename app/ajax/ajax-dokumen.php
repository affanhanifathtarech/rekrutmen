<?php
// $foto_lama = explode('/', $_POST['foto_lama']);
// $foto_lama = end($foto_lama);
// ($foto_lama=='logo.webp') ? $is_default=true : $is_default=false;
// echo json_encode($_FILES["file_rekomendasi"], JSON_PRETTY_PRINT);
$glob = glob('public/dokumen/rekomendasi/'. $_SESSION['nim'] . ".*");
(!empty($glob)) ? unlink($glob[0]) : '' ;

$file = $_FILES["file_rekomendasi"];
$eks = explode('.', $file["name"]);
$eks = strtolower(end($eks));
$url = 'public/dokumen/rekomendasi/'. $_SESSION['nim'] . ".$eks";

$upload = move_uploaded_file($file["tmp_name"], $url );

if($upload){
    $out = array(
        "status" => 1,
        "data" => array(
            "msg" => "file berhasil di upload",
            "url" => BASEURL . $url
        )
    );

} else {
   $out = array(
       "status" => 0,
       "data" => array(
           "msg" => "File gagal di upload",
           "err" => "500 Lost Connection"
       )
   );
}

echo json_encode($out, JSON_PRETTY_PRINT);