<?php
class Dokumen extends Controller {
    public function index(){
        $data["title"] = "Dokumen";
        $this->view('dokumen/index', $data);
    }

    public function saveDokumenRekomendasi(){
        $this->ajax('ajax-file-rekomendasi');
    }

    public function saveDokumenSertifikat(){
        $this->ajax('ajax-file-sertifikat');
    }

  
}