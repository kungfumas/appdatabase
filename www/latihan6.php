<html>
 <head>
  <title>Update data dalam database MySQL</title>
 </head>
	<body>
 
	<?php
	echo '<h1>Latihan 6 : Update Data</h1>
	<hr>';

	if(isset($_POST['update']))
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
 
	$id = $_POST['id_karyawan'];
	$gaji = $_POST['gaji_karyawan'];
 
	$sql = "UPDATE karyawan ".
		   "SET gaji_karyawan = $gaji ".
		   "WHERE id_karyawan = $id" ;
 if (mysqli_query($conn, $sql)) {
    echo "Record berhasil di update";
} else {
    echo "Error mengupdate record: " . mysqli_error($conn);
}

mysqli_close($conn);
	}
	else
	{
	?>
	<form method="post" action="latihan6.php">
		<table width="500" border="0" cellspacing="1" cellpadding="2">
			<tr>
			<td width="100">ID Karyawan</td>
			<td><input name="id_karyawan" type="text" id="id_karyawan"></td>
			</tr>
			<tr>
			<td width="100">Gaji Karyawan</td>
			<td><input name="gaji_karyawan" type="text" id="gaji_karyawan"></td>
			</tr>
			<tr>
			<td width="100"> </td>
			<td> </td>
			</tr>
			<tr>
			<td width="100"> </td>
			<td>
			<input name="update" type="submit" id="update" value="Update">
			</td>
		</tr>
		</table>
	</form>
	<?php
	}
	?>
	</body>
</html>
