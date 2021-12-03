<?php 

class User_model {

    private $table = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUser($param='', $colName='id', $selectColumn='*')
    {
        $this->db->query("SELECT $selectColumn FROM " . $this->table . " WHERE $colName = :$colName");
        $this->db->bind($colName, $param);
        return $this->db->getData();
    }

    public function getAllUser()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->getAllData();
    }
}