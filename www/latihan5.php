<?php
echo '<h1>Latihan 5 : Menampilkan Data</h1>
<hr>';





$namaServer = "localhost"; // via TCP/IP
$namaUser = "id6029080_admin";
$password = "admin";
$namadb = "id6029080_akademik";
// membuat koneksi
$conn = mysqli_connect($namaServer, $namaUser, $password,$namadb);

if(! $conn )
{
   die("Koneksi Error: " . mysqli_connect_error());
}

$sql = 'SELECT id_karyawan, nama_karyawan, gaji_karyawan FROM karyawan';
 $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // data yang dihasilkan untuk masih-masing baris
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id_karyawan"]. " - Nama Lengkap: " . $row["nama_karyawan"]. " " . $row["gaji_karyawan"]. "<br>";
    }
} else {
    echo "0 Hasil";
}


echo "Berhasil ambil data\n";
mysqli_close($conn);
?>
