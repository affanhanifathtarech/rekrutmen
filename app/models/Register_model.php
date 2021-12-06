<?php 

class Register_model {

    private $table = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function registData($data)
    {
        $query = "INSERT INTO " . $this->table . " VALUES ('', :nim, '', :password, :wa)";
        $this->db->query($query);
        $this->db->bind('nim', $_POST['nim']);
        $this->db->bind('password', $_POST['password']);
        $this->db->bind('wa', $_POST['wa']);
        $this->db->execute();

        return $this->db->rowCount();
    }
}