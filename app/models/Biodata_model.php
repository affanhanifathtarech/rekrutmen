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

    public function isNull($column, $nim){ 
        $query = "SELECT * FROM " . $this->table . " WHERE nim = :nim AND $column IS NULL";
        $this->db->query($query);
        $this->db->bind('nim', $nim);
        $this->db->execute();
        return $this->db->rowCount();
    }
 
    public function getColumnNames(){
        $query = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = :table";
        $this->db->query($query);
        $this->db->bind('table', 'biodata');
        $this->db->execute();
        $rows = $this->db->getAllData();
        $output = array();
        foreach ($rows as $key => $row) {
            $output[] = $rows[$key]['COLUMN_NAME'];                
        }
        return $output; 
    }
}