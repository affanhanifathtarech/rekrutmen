<?php
$foto_lama = explode('/', $_POST['foto_lama']);
$foto_lama = end($foto_lama);
($foto_lama=='logo.webp') ? $is_default=true : $is_default=false;

$file = $_FILES["foto"];

$eks = explode('.', $file["name"]);
$eks = strtolower(end($eks));
$url = 'public/images/user/'. $_SESSION['nim'] . ".$eks";

$upload = move_uploaded_file($file["tmp_name"], $url );

if(!$is_default){
    unlink('public/images/user/'. $foto_lama );
}


if($upload){
    $out = array(
        "status" => 1,
        "data" => array(
            "msg" => "Foto berhasil di upload",
            "url" => BASEURL . $url
        )
    );

} else {
   $out = array(
       "status" => 0,
       "data" => array(
           "msg" => "Foto gagal di upload",
           "err" => "500 Lost Connection"
       )
   );
}

echo json_encode($out, JSON_PRETTY_PRINT);