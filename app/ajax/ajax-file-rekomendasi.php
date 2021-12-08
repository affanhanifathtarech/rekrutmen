<?php

$data = $this->model('Biodata_model')->getDataUser($_SESSION["nim"], "nim", "nama");
$file = $_FILES["file_rekomendasi"];
$eks = explode('.', $file["name"]);
$eks = strtolower(end($eks));
$url = 'public/dokumen/rekomendasi/'. $data["nama"] . " - ". $_SESSION['nim'] . ".$eks";

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