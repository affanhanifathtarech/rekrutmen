<?php 
// $out = $_POST;
// // $out = array(
// //     "status" => 1,
// //     "data" => array(
// //         "msg" => "Data Berhasil Di Update"
// //     )
// // );
// echo json_encode($out, JSON_PRETTY_PRINT);

// $column = $_POST["column"];
// $value = $_POST["value"];
// $id = $_POST["id"];

$data = $this->model('Profile_model')->updateDataByColumn($_POST['value'], $_POST['column'], $_POST['id']);

// echo json_encode($data, JSON_PRETTY_PRINT);
// die();

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