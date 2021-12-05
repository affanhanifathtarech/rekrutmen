<?php

class Biodata extends Controller {
    public function index(){
        $data['title'] = 'Biodata';
        $this->view('biodata/index', $data);
    }

    public function update(){
        $this->ajax('ajax-updateBiodata');
    }
}