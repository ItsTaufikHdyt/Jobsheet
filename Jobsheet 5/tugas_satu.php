<html>
<body>
<?php
$lama=$_GET['lama'];
$gol=$_GET['gol'];
if(($lama>5)&&($gol=="A")){
  $gaji="RP.3.000.000";
  }elseif(($lama>5)||($gol=="A")){
  $gaji="RP.2.500.000";
  }elseif(($lama<5)&&($gol=="B")){
  $gaji="RP.2.000.000";
  }else{
  $gaji="RP.1.500.000";
  }
 echo "<br/>Lama kerja anda $lama";
 echo "<br/>Golongan anda $gol";
 echo "<br/>Gaji kerja anda $gaji";
 ?>
 </body>
 </html>