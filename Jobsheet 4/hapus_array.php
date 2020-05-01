<?php
//menghapus array dengan fungsi array_shift()
$hapus_array= array("monitor","cpu","keyboard","printer");
echo "<br/> data array asli adalah:";
for($x=0;$x<=count($hapus_array);$x++){
 echo "<br/> $hapus_array[$x]";
 }
//menghapus data array
$hasil=array_shift($hapus_array);
echo "<br/>setelah data pertama dihapus menjadi:";
for($x=0;$x<=count($hasil);$x++){
 echo "<br/> $hasil[$x]";
 }
 ?>
 