<?php 
$data = $this->model('Login_model')->getUser(@$_POST['nim'], 'nim');
@$null = [];
@$err = null;

if(!$data){
    @$status = 0;
    @$msg = "User Tidak Terdaftar";
    @$err = 0;
} else {
    if (@$data["password"] !== @$_POST['password']) {
        @$status = 0;
        $msg = "Password Anda Salah";
        $err = 1;
    } else {
        $status = 1;
        $msg = "Berhasil Login";
      
        $this->model('Login_model')->set_cookie("nama", "Irpan");
        // setcookie("nama", "dilan", time()+60);
            // setcookie("value", $data["wa"], time()+300);

        $_SESSION["nim"] = $data["nim"];
        $_SESSION["id"] = $data["id"];

        
    }
}

if (@$_POST['nim']=='') {
    array_push($null, 'nim');
    $err = 2;
    $msg = "NIM dan Password Harus Diisi";
}

if (@$_POST['password']=='') {
    array_push($null, 'password');
    $err = 2;
    $msg = "NIM dan Password Harus Diisi";
}

$out = [
    "status" => $status,
    "data" => [
        "msg" => $msg,
        "err" => $err,
        "null" => $null,
        "cookie" => @$cookie
    ]
];

echo json_encode($out, JSON_PRETTY_PRINT);