<?php
echo "<br/> mengambil tanggal saat ini dari system komputer dengan fungsi date";
$format1=date("d-m-y");
$format2=date("d-F-Y");
$format3=date("I,d-F-Y");
$format4=date("G:i:s");
$format5=date("g:i:s A");
echo "<br/>tanggal dengan format date(\"d-m-y\") : <b>$format1</b>";
echo "<br/>tanggal dengan format date(\"d-F-Y\") : <b>$format2</b>";
echo "<br/>tanggal dengan format date(\"I,d-F-Y\") : <b>$format3</b>";
echo "<br/>tanggal dengan format date(\"G:i:s\") : <b>$format4</b>";
echo "<br/>tanggal dengan format date(\"g:i:s A\") : <b>$format5</b>";
?>