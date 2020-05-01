<?php
//mengurutkan array dengan fungsi sort()
$pegawai=array("mei","evi","nunik","dina");
echo "<br/>sebelum diurutkan :";
for ($b=0;$b<=count($pegawai);$b++){
  echo "<br/> $pegawai[$b]";
  }
  //mengurutkan data array
  sort($pegawai);
  echo "<br/>setelah data di urutkan :";
  for($c=0;$c<=count($pegawai);$c++){
  echo "<br/> $pegawai[$c]";
  }
  ?>