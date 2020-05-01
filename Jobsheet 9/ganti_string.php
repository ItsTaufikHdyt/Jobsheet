<html>
<body>
<?php
$teks="Bontang adalah salah satu kota di provinsi Kalimantahn Timur";
echo "<br/><b>Data stringnya";


echo "<br/><br/>diganti menggunakan fungsi str_replace()";
$str="Bontang";
$ganti_str=str_replace($str,"<b>$str</b>",$teks);
echo "<br/>$ganti_str";

echo "<br/><br/>diganti menggunakan fungsi ereg_replace()";
$ereg="Kalimantan";
$ganti_ereg=ereg_replace($ereg,"<b>$ereg</b>",$teks);
		echo "<br/>$ganti_ereg";

echo "<br/><br/>diganti menggunakan fungsi eregi_replace()";
$eregi="Kalimantan";
$ganti_eregi=eregi_replace($eregi,"<b>$eregi</b>",$teks);
	echo "<br/>$ganti_eregi";

?>
</body>
</html>