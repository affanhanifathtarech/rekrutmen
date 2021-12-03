<?php 
if ($this->model('Register_model')->registData($_POST) > 0){        
    $out = array(
        "status" => 1,
        "data" => array(
            "msg" => "Berhasil Mendaftar"
        )
    );
    
} else {
   $out = array(
       "status" => 0,
       "data" => array(
           "msg" => "Gagal Mendaftar",
           "error" => mysqli_error($conn)
       )
   );
}

echo json_encode($out, JSON_PRETTY_PRINT);