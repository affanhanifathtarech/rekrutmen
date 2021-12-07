<?php 

class Anggota_model {

    private $table = 'biodata';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getBiodata($param='', $colName='id', $selectColumn='*')
    {
        $this->db->query("SELECT $selectColumn FROM $this->table WHERE $colName = :$colName");
        $this->db->bind($colName, $param);
        return $this->db->getData();
    }

    public function getAllBiodata()
    {
        $this->db->query("SELECT * FROM $this->table");
        return $this->db->getAllData();
    }

}