
<?php
//konfigurasi database
$host ="localhost";
$dbname ="persediaan";
$username ="root";
$password ="";

$mysqli= mysqli_connect($host,$username,$password,$dbname);
if(!$mysqli){
	die("Koneksi Gagal:".mysqli_connect_error());
}
?>