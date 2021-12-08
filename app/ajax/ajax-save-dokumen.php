<?php
// $foto_lama = explode('/', $_POST['foto_lama']);
// $foto_lama = end($foto_lama);
// ($foto_lama=='logo.webp') ? $is_default=true : $is_default=false;
// echo json_encode($_FILES["file_rekomendasi"], JSON_PRETTY_PRINT);

$data = $this->model('Biodata_model')->getDataUser($_SESSION["nim"], "nim", "nama");
$file = $_FILES["file_rekomendasi"];
$eks = explode('.', $file["name"]);
$eks = strtolower(end($eks));
$url = 'public/dokumen/rekomendasi/'. $data["nama"] . " - ". $_SESSION['nim'] . ".$eks";

$upload = move_uploaded_file($file["tmp_name"], $url );

// if(!$is_default){
//     unlink('public/dokumen/rekomendasi'. $foto_lama );
// }

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