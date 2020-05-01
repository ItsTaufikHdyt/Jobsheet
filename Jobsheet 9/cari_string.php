<html>
<body>
<?php
$teks="Bontang adalah salah satu kota di provinsi Kalimantan Timur";
echo "<br/><b>Data stringnya</b>";
$kunci="bontang";
echo "<br/>kata kunci pencarian adalah : $kunci";
echo "<br/><br/>pencarian dengan fungsi ereg()";
$ereg=ereg($kunci,$teks);
	if($ereg){
		echo "<br/>kata $kunci ditemukan dalam kalimat $teks";
	}else{
		echo "<br/>kata $kunci tidak ditemukan dalam kalimat $teks";	
	}
echo "<br/><br/>pencarian dengan fungsi ereg()";
$eregi=eregi($kunci,$teks);
	if($eregi){
		echo "<br/>kata $kunci ditemukan dalam kalimat $teks";
	}else{
		echo "<br/>kata $kunci tidak ditemukan dalam kalimat $teks";
	}
echo "<br/><br/>pencarian dengan fungsi stristr()";
$stristr=stristr($teks,$kunci);
	if($stristr){
		echo "<br/>kata $kunci ditemukan dalam kalimat $teks";
	}else{
		echo "<br/>kata $kunci tidak ditemukan dalam kalimat $teks";
	}
?>
</body>
</html>