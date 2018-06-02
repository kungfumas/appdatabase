<html>
<head>
<title>Tambah DATA ke DATABASE - Nyekrip</title>
</head>
<body>
<?php
echo '<h1>Latihan 4 : Tambah Data</h1>
<hr>';




if(isset($_POST['tambah']))
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
 
if(! get_magic_quotes_gpc() )
{
   $nama_karyawan = addslashes ($_POST['nama_karyawan']);
   $alm_karyawan = addslashes ($_POST['alm_karyawan']);
}
else
{
   $nama_karyawan = $_POST['nama_karyawan'];
   $alm_karyawan = $_POST['alm_karyawan'];
}
$gaji_karyawan = $_POST['gaji_karyawan'];
 
$sql = "INSERT INTO karyawan ".
       "(nama_karyawan,alm_karyawan, gaji_karyawan, tgl_gabung) ".
       "VALUES('$nama_karyawan','$alm_karyawan',$gaji_karyawan, NOW())";
	   
// buat insert data ke tabel di database
if (mysqli_query($conn, $sql)) {
   echo "Penambahan data berhasil";
} else {
    echo "Penambahan data error : " . mysqli_error($conn);
}

mysqli_close($conn);

}
else
{
?>


<form method="post" action="latihan4.php">
<table width="500" border="0" cellspacing="1" cellpadding="2">
<tr>
<td width="100">Nama Karyawan</td>
<td><input name="nama_karyawan" type="text" id="nama_karyawan"></td>
</tr>
<tr>
<td width="110">Alamat Karyawan</td>
<td><input name="alm_karyawan" type="text" id="alm_karyawan"></td>
</tr>
<tr>
<td width="110">Gaji Karyawan</td>
<td><input name="gaji_karyawan" type="text" id="gaji_karyawan"></td>
</tr>
<tr>
<td width="110"> </td>
<td> </td>
</tr>
<tr>
<td width="110"> </td>
<td>
<input name="tambah" type="submit" id="tambah" value="Tambah Karyawan">
</td>
</tr>
</table>
</form>
<?php
}
?>
</body>
</html>
