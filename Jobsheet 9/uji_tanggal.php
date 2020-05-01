<?php
$tanggal=isset($_POST['tanggal'])? $_POST['tanggal']:'';
$bulan=isset($_POST['bulan'])? $_POST['bulan']:'';
$tahun=isset($_POST['tahun'])? $_POST['tahun']:'';
if($tahun!=''){
	if(checkdate($bulan,$tanggal,$tahun)){
		echo "<br/>tanggal lahir anda adalah tanggal valid";
	}else{
		echo "<br/>tanggal lahir anda tidak valid";
	}
}else{
	echo "Warning... data tahun belum terisi";
}
?>