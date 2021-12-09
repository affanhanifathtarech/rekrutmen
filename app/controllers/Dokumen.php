<?php
class Dokumen extends Controller {
    public function index()
    {
        if(!isset($_SESSION['nim'])){
            header("location: login");
            exit();
        }

        $data["title"] = "Dokumen";
        $this->view('dokumen/index', $data);
    }

    public function saveDokumen(){
        $this->ajax('ajax-dokumen');
    }

  
}