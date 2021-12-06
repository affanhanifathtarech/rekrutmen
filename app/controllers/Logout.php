<?php 

class Logout extends Controller{
    public function index()
    {
        $data['title'] = 'Logout';
        session_destroy();
        header("Location: " . BASEURL);
    }
}