<html>
<body>
<?php
//fungsi addslasahes
echo "menggunakan fungsi addslasahes untuk menambahkan  data slash pada
petik tunggal dan petik ganda";
$buka=fopen("data.txt","r");
$baca=fread($buka,4049);
$cetak=addslashes($baca);
echo "<br/><br/>$cetak";
?>
</body>
</html>