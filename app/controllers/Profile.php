<?php 

class Profile extends Controller{
    public function index()
    {
        $data['title'] = 'Profile';
        $this->view('profile/index', $data);
    }
}