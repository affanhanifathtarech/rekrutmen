<?php 

class Register_model {

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function registData($data)
    {
        $query = "
        INSERT INTO `user` VALUES ('', :nim, :password); 
        INSERT INTO `biodata` (id, nim, nama, wa, jk, jurusan, prodi, kelas, angkatan, tempat_lahir, tanggal_lahir, goldar, alamat, anak_ke, ayah, ibu, kerja_ayah, kerja_ibu, status_tinggal, status_kelas, rohis, liqo, organisasi, hobi, email, status_pendidikan, alasan_gabung, minat_bakat, div1, alasan_div1, div2, alasan_div2) VALUES ('', :nim, '', :wa, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
        ";
        $this->db->query($query);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('wa', $data['wa']);
        $this->db->execute();

        return $this->db->rowCount();
    }
}