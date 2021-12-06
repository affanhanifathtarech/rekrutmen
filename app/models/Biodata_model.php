<?php
class Biodata_model {
    private $table = 'biodata';
    private $db;
    public function __construct(){
        $this->db = new Database();
    }

    public function getBiodataUser($param='', $colName="id", $selectColumn = "*"){
        $this->db->query("SELECT $selectColumn FROM " . $this->table . " WHERE $colName = :$colName");
        $this->db->bind($colName, $param);
        return $this->db->getData();
    }

    public function updateBiodataByColumn($data)
    {
        $col = $data["column"];
        $val = $data["value"];
        $id = $data["id"];
        $query = "UPDATE " . $this->table . " SET $col = :val WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('val', $val);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
 
}