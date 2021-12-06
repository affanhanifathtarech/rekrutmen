<?php

class Biodata extends Controller {
    public function index(){
        $data['title'] = 'Biodata - LDK Karisma';
        $this->view('biodata/index', $data);
    }

    public function update(){
        $this->ajax('ajax-updateBiodata');
    }
}