<?php
//didefinisikan dengan array nama
$nama=array(
     "id1"=>array("depan"=>"Distian","tengah"=>"Aulia","belakang"=>"Maharani"),
	 "id2"=>array ("tanggal"=>"31","bulan"=>"Desember","tahun"=>"2006"),
	 );
//tampilkan array nama (id1)(id2);
echo $nama["id1"]["depan"];
echo $nama["id2"]["tanggal"];
?>