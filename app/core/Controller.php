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

    public function ajax($ajax)
    {
        require_once '../app/ajax/' . $ajax . '.php';
    }

    public function post($data=[])
    {
        if (isset($data))
        foreach ($data as $data) {
            $name = $data[0];
            $value = $data[1];
            $_POST[$name] = $value;
        }
    }
}