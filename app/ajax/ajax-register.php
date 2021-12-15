<?php 
if ($this->model('Register_model')->registData($_POST) > 0){  
    $data = $this->model('Login_model')->getUser(@$_POST['nim'], 'nim');      
    $data2 = $this->model('Biodata_model')->getDataUser(@$_POST['nim'], 'nim', 'nama');
    $out = array(
        "status" => 1,
        "data" => array(
            "msg" => "Berhasil Mendaftar"
        )
    );
    $_SESSION["nim"] = $data["nim"];
    $_SESSION["id"] = $data["id"];
    $_SESSION["nama"] = $data2["nama"];

    
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