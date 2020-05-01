<html>
<body>
<?php
$hari=date("D");
switch($hari){
case "Sun";
$day="Minggu";
break;
case "Mon";
$day="Senin";
break;
case "Tue";
$day="Selasa";
break;
case "Wed";
$day="Rabu";
break;
case "Thu";
$day="Kamis";
break;
case "Fri";
$day="Jumat";
break;
case "Sat";
$day="sabtu";
break;
default:
 echo "Format hari salah";
 }
 echo "hari ini adalah hari ".$day;
 ?>
 </body>
 </html>