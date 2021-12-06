<?php 

class Login extends Controller{
    public function index()
    {
        $data['title'] = 'Login - LDK Karisma';
        $this->view('login/index', $data);
    }

    public function login()
    {
        $this->ajax('ajax-login');   
    }
}