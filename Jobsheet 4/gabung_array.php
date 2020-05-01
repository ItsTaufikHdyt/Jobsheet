<?php
echo "<b>menggabung array dengan fungsi array_merge<b/>";
$bulan1=array("januari","februari","maret");
$bulan2=array("april","mei");
echo "<br/>\$bulan1=array(\"januari\",\"februari\",\"maret\")";
echo "<br/>\$bulan2=array(\"april\",\"mei\")";
echo "<br/>menggabung array1 dan array2";
$gabung_bulan=array_merge($bulan1,$bulan2);
echo "<br/>hasil penggabungannya adalah:";
for ($a=0;$a<=count($gabung_bulan);$a++){
  echo "<br/>$gabung_bulan[$a]";
 }
 ?>