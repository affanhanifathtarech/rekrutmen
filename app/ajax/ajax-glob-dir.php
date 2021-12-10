<?php 

$files = [];
$sertifikat = glob('public/dokumen/sertifikat/' . $_SESSION['nim'] . "/*");
$length = count($sertifikat);
    foreach ($sertifikat as $key => $value) {
        $file = explode('public/dokumen/sertifikat/'. $_SESSION["nim"] . '/' .$_SESSION["nim"] . ' - ', $value)[1];
        $files[$key]['id'] = $length-$key;
        $files[$key]['timestamp'] = explode(' - ', $file)[0];
        $files[$key]['filename'] = explode(' - ', $file)[1];
        $files[$key]['dir'] = $value;
    }

$out = ['data' => array_reverse($files)];

echo json_encode($out, JSON_PRETTY_PRINT);
