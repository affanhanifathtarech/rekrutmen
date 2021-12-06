<?php 

class Profile extends Controller{
    public function index()
    {
        if(!isset($_SESSION['nim'])){
            echo 'Sorry. Login dulu ya';
            die;
        }
        
        $data = $this->model('Profile_model')->getUser($_SESSION['nim'], 'nim', $selectColumn='*');
        $data['title'] = 'Profile';
        $this->view('profile/index', $data);
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