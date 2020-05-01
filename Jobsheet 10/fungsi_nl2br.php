<?php
//memberikan <br/> pada baris baru
$data1="Teks kesatu \n";
$data2="Teks kedua \n";
echo "<br/>Tanpa fungsi nl2br: ";
echo "$data1";
echo "$data2";
echo "<br/><br/>dengan fungsi nl2br: ";
echo nl2br($data1);
echo nl2br($data2);
?>