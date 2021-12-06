<?php
class Biodata_model {
    private $table = 'biodata';
    private $db;
    public function __construct(){
        $this->db = new Database();
    }

    public function getDataUser($param='', $colName="id", $selectColumn = "*"){
        $this->db->query("SELECT $selectColumn FROM " . $this->table . " WHERE $colName = :$colName");
        $this->db->bind($colName, $param);
        return $this->db->getData();
    }

    public function updateBiodataByColumn($columnToUpdate, $val='', $updateByColumn='id' , $updatedColumnVal='')
    {
        $query = "UPDATE " . $this->table . " SET `$columnToUpdate` = :val WHERE $updateByColumn = :updatedColumnVal";
        $this->db->query($query);
        $this->db->bind('val', $val);
        $this->db->bind('updatedColumnVal', $updatedColumnVal);
        $this->db->execute();
        return $this->db->rowCount();
    }
 
}