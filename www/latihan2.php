<?php
echo '<h1>Latihan 2 : Membuat Database</h1>
<hr>';



//membuat database
$dbhost = 'localhost';
$dbuser = 'id6029080_admin';
$dbpass = 'admin';
$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $koneksi )
{
  die('Gagal Koneksi: ' . mysql_error());
}
echo 'Koneksi Berhasil';
$sql = 'CREATE Database test_db';
$buatdb = mysql_query( $sql, $koneksi );
if(! $buatdb )
{
  die('Pembuatan database, gagal: ' . mysql_error());
}
echo "Database test_db berhasil dibuat\n";
mysql_close($koneksi);


?>
