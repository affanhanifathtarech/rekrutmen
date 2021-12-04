<?php
// array (size=5)
// 'name' => string 'FB_IMG_1611103854258.jpg' (length=24)
// 'type' => string 'image/jpeg' (length=10)
// 'tmp_name' => string 'C:\xampp\tmp\php7A98.tmp' (length=24)
// 'error' => int 0
// 'size' => int 58227
$file = $_FILES["foto"];
// echo var_dump($file);
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