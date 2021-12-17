<?php
$path="public/dokumen/sertifikat/" . $_SESSION['nim'] . "/";
if(!glob($path)){
    mkdir($path);
}

$no = 0;
foreach ($_FILES as $key) {
    if($key['error'] == 0 ){
        $name = $key['name'];
        $temp = $key['tmp_name'];
        $eks = explode('.', $name);
        $eks = strtolower(end($eks));
        $filename = explode(".$eks",$name)[0];
        move_uploaded_file($temp, $path . time() . "-" . $filename . ".$eks");
        $status = 1;
    }else{
        $status = 0;
    }
    $out['data'][$no] = [ 'status' => $status, 'filename' => $name ];
    $no++;
}

$out['glob'] = glob($path . '*');

echo json_encode($out, JSON_PRETTY_PRINT);