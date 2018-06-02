<?php
echo '<h1>Latihan 2i : Membuat Table </h1>
<hr>';






//membuat table database
$dbhost = 'localhost';
$dbuser = 'id6029080_admin';
$dbpass = 'admin';
$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $koneksi )
{
  die('Gagal Koneksi: ' . mysql_error());
}


echo 'Koneksi Berhasil';
$sql = 'CREATE TABLE karyawan( '.
       'id_karyawan INT NOT NULL AUTO_INCREMENT, '.
       'nama_karyawan VARCHAR(20) NOT NULL, '.
       'alm_karyawan  VARCHAR(20) NOT NULL, '.
       'gaji_karyawan   INT NOT NULL, '.
       'tgl_gabung    timestamp(14) NOT NULL, '.
       'primary key ( id_karyawan ))';
 
mysql_select_db('karyawan');
$buattabel = mysql_query( $sql, $koneksi );
if(! $buattabel )
{
  die('Gagal Membuat Tabel: ' . mysql_error());
}
echo "Tabel Karyawan sukses dibuat\n";
mysql_close($koneksi);
?>
