<?php
echo "<br/>menambah data array<br/>";
//array pertama
$nama=array("badu","budi","wati");
echo "<br/>array yang pertama \$nama=array(\"badu\".\"budi\",\"wati\")";
//fungsi array_push untuk menambah data array
array_push($nama,"eka","iwan","deni");
echo "<br/> array setealah penambahan";
//menampilkan isi array
for($i=0;$i<=5;$i++)
{
 echo "<br/>$i: $nama[$i]";
}
?>