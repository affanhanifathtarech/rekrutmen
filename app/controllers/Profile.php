<?php 

class Profile extends Controller{
    public function index()
    {
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