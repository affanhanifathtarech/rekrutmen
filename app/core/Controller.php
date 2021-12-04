<?php 

class Controller {
    public function view($view, $data=[])
    {
        require_once '../app/views/parts/top.php';
        require_once '../app/views/' . $view . '.php';
        require_once '../app/views/parts/bottom.php';
    }

    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }
}