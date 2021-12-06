<?php 

class Logout extends Controller{
    public function index()
    {
        $data['title'] = 'Logout - LDK Karisma';
        session_destroy();
        header("Location: " . BASEURL);
    }
}