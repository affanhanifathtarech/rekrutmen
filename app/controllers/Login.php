<?php 
class Login extends Controller{
    public function index()
    {
        if(isset($_SESSION['nim'])){
            header("location: dashboard");
            exit();
        }

        $data['title'] = 'Login - LDK Karisma';
        $this->view('login/index', $data);
    }

    public function login()
    {
        $this->ajax('ajax-login');   
    }
}