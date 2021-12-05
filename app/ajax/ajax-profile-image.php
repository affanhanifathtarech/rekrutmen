<?php
$file = $_FILES["foto"];
$eks = explode('.', $file["name"]);
$eks = strtolower(end($eks));
$upload = move_uploaded_file($file["tmp_name"], 'images/main/foto/'. $_SESSION["nim"] . ".$eks" );

if($upload){
    $out = array(
        "status" => 1,
        "data" => array(
            "msg" => "Foto berhasil di upload"
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