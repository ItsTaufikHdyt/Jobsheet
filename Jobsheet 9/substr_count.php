<html>
<body>
<?php//fungsi substr_count
$teks="Sekolah Menegah Kejuruan Negeri 1 Bontang";
echo "<br/>Data yang akan di hitung adalah <br/><b>$teks</b>";
$jumlah=substr_count($teks,"a");
echo "<br/>Jumlah karakter  <b> a </b> pada \$teks adalah :$jumlah";
?>
</body>
</html>