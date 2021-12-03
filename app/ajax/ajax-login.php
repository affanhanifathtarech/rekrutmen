<?php 
$data = $this->model('Login_model')->getUser($_POST['nim'], 'nim');
$cek = true;

if(!$data){
    $msg = "User Belum Terdaftar";
    $error = 0;
    $cek = false;
} else if($data["password"] !== $_POST['password']){
    $msg = "Password Anda Salah";
    $error = 1;
    $cek = false;
} 

if($cek){
    $out = array(
        "status" => 1,
        "data" => array(
            "msg" => "Berhasil Login"
        )
    );
    $_SESSION["nim"] = $data["nim"];

} else {
   $out = array(
       "status" => 0,
       "data" => array(
           "msg" => $msg,
           "err" => $error
       )
   );
}

echo json_encode($out, JSON_PRETTY_PRINT);