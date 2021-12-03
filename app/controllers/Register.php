<?php 

class Register extends Controller{
    public function index()
    {
        $data['title'] = 'Register';
        $this->view('register/index', $data);
    }

    public function register()
    {
        $this->ajax('ajax-register');
    }
}