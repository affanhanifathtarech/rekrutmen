<?php 

class Login_model {

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
    
    public function registData($data)
    {
        $query = "INSERT INTO " . $this->table . " VALUES ('', :nim, :password, :wa)";
        $this->db->query($query);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('wa', $data['wa']);
        $this->db->execute();

        return $this->db->rowCount();
    }
}