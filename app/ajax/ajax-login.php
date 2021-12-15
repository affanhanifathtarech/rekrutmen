<?php 
$data = $this->model('Login_model')->getUser(@$_POST['nim'], 'nim');
$data2 = $this->model('Biodata_model')->getDataUser(@$_POST['nim'], 'nim', 'nama');
$null = [];
$err = null;

if(!$data){
    $status = 0;
    $msg = "User Tidak Terdaftar";
    $err = 0;
} else {
    if (@$data["password"] !== @$_POST['password']) {
        $status = 0;
        $msg = "Password Anda Salah";
        $err = 1;
    } else {
        $status = 1;
        $msg = "Berhasil Login";
        $_SESSION["nim"] = $data["nim"];
        $_SESSION["id"] = $data["id"];
        $_SESSION["nama"] = $data2["nama"];
    }
}

if (@$_POST['nim']=='') {
    array_push($null, 'nim');
    $err = 2;
    $msg = "NIM dan Passeord Harus Diisi";
}

if (@$_POST['password']=='') {
    array_push($null, 'password');
    $err = 2;
    $msg = "NIM dan Passeord Harus Diisi";
}

$out = [
    "status" => $status,
    "data" => [
        "msg" => "$msg",
        "err" => $err,
        "null" => $null
    ]
];

echo json_encode($out, JSON_PRETTY_PRINT);