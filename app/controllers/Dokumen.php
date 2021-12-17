<?php
class Dokumen extends Controller {
    public function index(){
        if(!isset($_SESSION['nim'])){
            header("location: login");
            exit();
        }
        
        $data['url'] = 'dokumen';
        $data['title'] = 'Dokumen - LDK Karisma';
        $this->viewDashboard('dokumen/index', $data);
    }

    public function saveDokumenRekomendasi(){
        $this->ajax('ajax-file-rekomendasi');
    }

    public function saveDokumenSertifikat(){
        $this->ajax('ajax-file-sertifikat');
    }

    public function hapusSertifikat(){
        return (unlink($_POST['dir'])) ? 'berhasil' : 'gagal';
    }

    public function getGlob(){
        $this->ajax('ajax-glob-dir');
    }

  
}