<?php 
class Register extends Controller{
    public function index()
    {
        if(isset($_SESSION['nim'])){
            header("location: dashboard");
            exit();
        }

        $data['title'] = 'Pendaftaran - LDK Karisma';
        $this->view('register/index', $data);
    }

    public function register()
    {
        $this->ajax('ajax-register');
    }
}