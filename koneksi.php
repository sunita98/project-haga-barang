<?php
class Koneksi{
    private $server = "localhost";
    private $username = "id5675777_uas_webprog";
    private $password = "sunita98";
    private $db = "id5675777_uas_webprog";
    private $hubungan;

    function ambilKoneksi (){
        $hubungan = new mysqli($this->server, $this->username, 
                $this->password, $this->db);
        return $hubungan;
    }

}
?>