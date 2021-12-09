<?php 
class Profile extends Controller{
    public function index()
    {
        if(!isset($_SESSION['nim'])){
            header("location: login");
            exit();
        }
        
        $data = $this->model('Profile_model')->getUser($_SESSION['nim'], 'nim');
        $data['nama'] = $this->model('Biodata_model')->getDataUser($_SESSION['nim'], 'nim', 'nama')['nama'];
        $data['title'] = 'Profil - LDK Karisma';
        $data['url'] = 'profile';
        $this->viewDashboard('profile/index', $data);
    }

    public function save()
    {
        $this->ajax('ajax-profile');   
    }
    public function saveImage()
    {
        $this->ajax('ajax-profile-image');   
    }
    

}