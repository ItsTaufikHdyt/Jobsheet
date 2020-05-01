<?php
//memotong dan menggabung element array
$data=array("a","b","c","d","e","f");
echo "<br/>data sebelum dipotong : \$data=array(\"a\",\"b\",\"c\",\"d\",\"e\",\"f\")";
//memotong array menjadi 2 bagian
$potongan_satu=array_slice($data,4);
$potongan_dua=array_slice($data,2,-1);
echo "<br/> hasil potongan satu adalah :";
for($y=00
;$y<=count($potongan_satu);$y++){
   echo "$potongan_satu[$y]";
}
echo "<br/> hasil potongan dua adalah :";
for($i=0;$i<=count($potongan_dua);$i++){
   echo "$potongan_dua[$i]";
}
//menggabung potongan satu dan dua
$gabung=array_merge($potongan_satu,$potongan_dua);
echo "<br/>hasil gabungan potongan satu dan dua adalah :";
for($e=0;$e<=count($gabung);$e++){
echo "$gabung[$e]";
}
?>