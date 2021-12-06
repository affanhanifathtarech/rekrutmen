<?php

class Biodata extends Controller {
    public function index(){
        $data = $this->model("Biodata_model")->getDataUser($_SESSION["nim"], "nim");
        $data['title'] = 'Biodata - LDK Karisma';
        $this->view('biodata/index', $data);
    }

    public function update(){
        $this->ajax('ajax-biodata');
    }
}