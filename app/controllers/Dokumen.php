<?php
class Dokumen extends Controller {
    public function index(){
        $data["title"] = "Upload Dokument";
        $this->view('dokumen/index', $data);
    }

    public function saveDokumen(){
        $this->ajax('ajax-save-dokumen');
    }
}