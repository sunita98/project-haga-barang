<?php

include "koneksi.php";
$koneksiObj=new Koneksi();
$koneksi= $koneksiObj->ambilKoneksi();

if($koneksi->connect_error) {
	die("Konesi Gagal : " . $koneksi->connect_error);
}else{
	echo "Koneksi ke basis data sukses!";
}


//$query = "update harga_barang " .
//        "set nama_barang = '" . $_POST["namaBarang"] . "'," .
//        "   harga = " . $_POST["harga"] . " " . 
//        "where kode = " . $_POST["kode"];
$query = "delete from data_mahasiswa where NIM = " . 
        $_GET["NIM"];
        
//echo $query

if($koneksi->query($query)==true){
    echo "<br>Data dengan NIM " . $_GET["NIM"] . 
    " sudah DIHAPUS. Data bisa dilihat " . 
    '<a href="main.php">disini</a>';
}else {
    echo "error : ".$query." -> ".$koneksi->error;
}

$koneksi->close();
?>