<?php 
class Anggota extends Controller {
    public function index()
    {
        if(!isset($_SESSION['nim'])){
            header("location: login");
            exit();
        }
        
        $data['title'] = 'Data Anggota - LDK Karisma';
        $this->view('anggota/index', $data);
    }

    public function biodata(){
        $this->ajax('ajax-biodata-get');
    }
}