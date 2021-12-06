<?php

$data = $this->model('Biodata_model')->updateBiodataByColumn($_POST['column'], $_POST['value'], 'nim' , $_POST['nim']);

if($data > 0){
    $out = array(
        "status" => 1,
        "data" => array(
            "msg" => "Data Berhasil Di Update"
        )
    );

} else {
   $out = array(
       "status" => 0,
       "data" => array(
           "msg" => "Data Gagal Di Update",
           "err" => "500 Lost Connection"
       )
   );
}


echo json_encode($out, JSON_PRETTY_PRINT);
