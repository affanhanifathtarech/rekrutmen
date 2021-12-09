<?php
class Biodata extends Controller {
    public function index()
    {
        if(!isset($_SESSION['nim'])){
            header("location: login");
            exit();
        }

        $data = $this->model("Biodata_model")->getDataUser($_SESSION["nim"], "nim");
        $data['title'] = 'Biodata - LDK Karisma';
        $data['url'] = 'biodata';
        $this->viewDashboard('biodata/index', $data);
    }

    public function update(){
        $this->ajax('ajax-biodata');
    }
}