<html>
<body>
<?php
 echo "<br/><b>fungsi strtoupper dan strtolower</b>";
  $data="kota kota yang pernah saya kunjungi adalah jakarta,bogor,bandung,semarang,yogyakarta,malang,dan denpasar";
  echo "<br/>teks aslinya adalah : ";
  echo "<br/>$data";
  $besar=strtoupper($data);
  $kecil=strtolower($data);
$kalimat=ucfirst($data);
$kata=ucwords($data);
echo "<br/> setelah diubah menjadi huruf kapital : $besar";
echo "<br/> setelah diubah menjadi huruf kecil : $kecil";
echo "<br/> setelah diubah menjadi huruf kapital awal kalimat : $kalimat";
echo "<br/> setelah diubah menjadi huruf kapital awal kata : $kata";
 ?>
</body>
</html>