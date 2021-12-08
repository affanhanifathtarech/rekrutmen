<?php
$path="public/dokumen/sertifikat/";//server path
$no = 1;
foreach ($_FILES as $key) {
    if($key['error'] == 0 ){
        $name = $key['name'];
        $temp = $key['tmp_name'];
        // $size= ($key['size'] / 1000)."Kb";
        $eks = explode('.', $name);
        $eks = strtolower(end($eks));
        move_uploaded_file($temp, $path . $_SESSION["nama"] . " - " . $_SESSION["nim"]. " - fs" . $no++ . " .$eks");
        $out = array(
            "status" => 1,
            "data" => array(
                "msg" => "file berhasil di upload",
                // "url" => BASEURL . $url
            )
        );
    }else{
        $out = array(
            "status" => 0,
            "data" => array(
                "msg" => "File gagal di upload",
                "err" => "500 Lost Connection"
            )
        );
    }
}

echo json_encode($out, JSON_PRETTY_PRINT);