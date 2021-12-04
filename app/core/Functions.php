<?php 

class Functions {
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