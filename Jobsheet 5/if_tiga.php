<html>
<body>
<?php
$siswa="Anton Nur Anggraito";
$nilai="A";
if($nilai=="A"){
  $predikat="Memuaskan";
  }elseif($predikat="B"){
  $predikat="Baik";
  }elseif($predikat="C"){
  $predikat="Cukup";
  }elseif($predikat="D"){
  $predikat="Kurang";
  }else{
  $predikat="Kurang Sekali";
  }
  echo "<br/>Nama siswa: $siswa";
  echo "<br/>Nilai Ujian: $nilai";
  echo "<br/>Predikat: $predikat";
  ?>
  </body>
  </html>