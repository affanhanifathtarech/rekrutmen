<?php 
class Anggota extends Controller {
    public function index()
    {
        if(!isset($_SESSION['nim'])){
            header("location: login");
            exit();
        }
        
        $data = $this->model("Biodata_model")->getDataUser($_SESSION["nim"], "nim");
        $data['title'] = 'Data Anggota - LDK Karisma';
        $data['url'] = 'anggota';
        $this->viewDashboard('anggota/index', $data);

    }

    public function p($nim='')
    {
        if(!isset($_SESSION['nim'])){
            header("location: login");
            exit();
        }

        $data = $this->model("Biodata_model")->getDataUser($nim, "nim");
        $data['password'] = $this->model("Profile_model")->getUser($nim, 'nim', 'password')['password'];
        $data['title'] = $data['nama'] . ' - LDK Karisma';
        $data['url'] = 'detail';
        $this->viewDashboard('anggota/detail', $data);

    }

    public function biodata($nim=''){
        if($nim==''){
            $this->ajax('ajax-biodata-get');
        } else {
            return $this->model('Profile_model')->getUserImage($nim);
        }
    }
}