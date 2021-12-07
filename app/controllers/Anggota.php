<?php 

class Anggota extends Controller{
    public function index()
    {
        if(!isset($_SESSION['nim'])){
            echo 'Sorry. Login dulu ya';
            die;
        }
        
        $data['title'] = 'Data Anggota - LDK Karisma';
        $this->view('anggota/index', $data);
    }

    public function biodata(){
        $this->ajax('ajax-biodata-get');
    }
}