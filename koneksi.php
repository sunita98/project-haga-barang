<?php
class Koneksi{
    private $server = "localhost";
    private $username = "id5675777_def";
    private $password = "sunita98";
    private $db = "id5675777_toko";
    private $hubungan;

    function ambilKoneksi (){
        $hubungan = new mysqli($this->server, $this->username, 
                $this->password, $this->db);
        return $hubungan;
    }

}
?>