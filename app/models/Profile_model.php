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

    public function getUserImage($nim='')
    {
        ($nim=='') ? $nim=$_SESSION['nim'] : '';
        $ext = ALLOWED_IMAGES_EXT;
        foreach ($ext as $eks){
            if (file_exists('public/images/user/'. $nim . '.' . $eks)) {
                echo BASEURL . 'public/images/user/' . $nim . '.' . $eks;
                unset($ext);
                break;
            }
        }

        if (!empty($ext)){
        echo BASEURL . 'public/images/logo.webp';
        }
    }
    
    public function updateDataByColumn($val='', $columnToUpdate='', $id='')
    {
        $query = "UPDATE " . $this->table . " SET `$columnToUpdate` = :val WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('val', $val);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }
}