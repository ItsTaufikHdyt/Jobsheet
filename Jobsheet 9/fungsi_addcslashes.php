<html>
<body>
<?php
//fungsi addcslashes
$teks ="Distan Aulya Maharani";
echo "<br/> ini teks aslina : $teks";
$hasil=addcslashes($teks,"ai");
echo "<br/>Setelah ditambahkan \"\\\" pada huruf a dan i adalah :<br/>$hasil";
?>
</body>
</html>