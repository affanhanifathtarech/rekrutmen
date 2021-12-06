<?php
class Dokumen extends Controller {
    public function index(){
        $data["title"] = "Dokumen";
        $this->view('dokumen/index', $data);
    }

    public function saveDokumen(){
        $this->ajax('ajax-dokumen');
    }

  
}