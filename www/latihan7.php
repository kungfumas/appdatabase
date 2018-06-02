<html>
<head>
<title>Menghapus data MySQL - Nyekrip</title>
</head>
<body>
 
<?php
echo '<h1>Latihan 7 : Hapus Data</h1>
<hr>';




if(isset($_POST['hapus']))
{

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
 
$id_karyawan = $_POST['id_karyawan'];
 
$sql = "DELETE FROM karyawan ".
       "WHERE id_karyawan = $id_karyawan" ;
 
if ($conn->query($sql) === TRUE) {
    echo "Record berhasil di delete";
} else {
    echo "Error mendelete record: " . $conn->error;
}

$conn->close();
}
else
{
?>
<form method="post" action="latihan7.php">
<table width="500" border="0" cellspacing="1" cellpadding="2">
<tr>
<td width="100">ID KARYAWAN</td>
<td><input name="id_karyawan" type="text" id="id_karyawan"></td>
</tr>
<tr>
<td width="100"> </td>
<td> </td>
</tr>
<tr>
<td width="100"> </td>
<td>
<input name="hapus" type="submit" id="hapus" value="Delete">
</td>
</tr>
</table>
</form>
<?php
}
?>
</body>
</html>
