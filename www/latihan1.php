<?php
echo '<h1>Latihan 1 : Buka Tutup Koneksi Mysql</h1>
<hr>';

//$namaServer = "localhost";  via UNIX socket
$namaServer = "localhost"; // via TCP/IP
$namaUser = "id6029080_admin";
$password = "admin";

// membuat koneksi
$conn = mysqli_connect($namaServer, $namaUser, $password);

// Check koneksi
if (!$conn) {
     die("Koneksi Error: " . mysqli_connect_error());
}
echo "Berhasil koneksi";
?>

