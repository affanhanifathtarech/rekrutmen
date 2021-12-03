<?php 

class Login extends Controller{
    public function index()
    {
        $data['title'] = 'Login';
        $this->view('login/index', $data);
    }

    public function login()
    {
        $this->ajax('ajax-login');   
    }
}