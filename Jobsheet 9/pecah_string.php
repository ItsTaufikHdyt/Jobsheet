<html>
<body>
<?php
//fungsi explode dan split 
$data="pemrograman web dinamis | rekayasa perangkat lunak | XI | 2016/2017 | ganjil";
echo "<br/> variable \$data berisi : $data";
$potong=explode("|",$data);
echo "<br/> hasil potongan string adalah : ";
echo "<br/>".$potong[0];
echo "<br/>".$potong[1];
echo "<br/>".$potong[2];
echo "<br/>".$potong[3];
echo "<br/>".$potong[4];
echo "<br/><br/>";
$data2=" januari februari maret april mei juni";
$potong2=split(" ",$data2,4);
echo "<br/> hasil setelah dipotong menjadi 4 adalah:";
for($i=0;$i<=count($potong2);$i++){
	echo "<br/> $potong2[$i]";
}
?>
</body>
</html>