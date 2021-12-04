<?php 

class Profile_model {

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

    public function updateDataByColumn($val='', $columnToUpdate='', $id='')
    {
        $query = "UPDATE " . $this->table . " SET $columnToUpdate = :$columnToUpdate WHERE 'id' = :id)";
        $this->db->query($query);
        $this->db->bind($columnToUpdate, $value);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }
}