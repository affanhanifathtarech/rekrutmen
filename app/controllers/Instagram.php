<?php
class Instagram extends Controller {
    public function index(){
    }

    public function getJSON(){
        $this->ajax('ajax-instagram');
    }

  
}