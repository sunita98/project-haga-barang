<h2>Aplikasi data mahasiswa</h2>
<hr>
<a href="tambah.php">Tambah Data</a>


<?php
include "koneksi.php";
$koneksiObj = new koneksi();
$koneksi = $koneksiObj->ambilKoneksi();

if($koneksi->connect_error) {
    die("koneksi gagal : " . $koneksi->connect_error);
} //else {
   // echo "koneksi ke basis data SUKSES!";
//}

$qry ="select * from data_mahasiswa";
$data = $koneksi ->query($qry);
?>

<table border="1">
    <tr>
        <th>NIM</th>
        <th>NAMA</th>
        <th>JURUSAN</th>

    </tr>
<?php
if($data->num_rows <= 0){
    echo "<tr><td>";
    echo "DATA NIHIL";
    echo "</td></tr>";
}else{
    while($row = $data->fetch_assoc()){
        echo "<tr>";
        echo "<td>". $row["NIM"]."</td>";
        echo "<td>". $row["Nama"]."</td>";
        echo "<td>". $row["Jurusan"]."</td>";
        echo '<td><a href="edit-from.php?NIM='.
        $row["NIM"]. '">Edit</a>';
        echo '<td><a href="hapus.php?NIM='.
        $row["NIM"]. '">hapus</a>';
        echo "</tr>";

    }
}
?>
</table>