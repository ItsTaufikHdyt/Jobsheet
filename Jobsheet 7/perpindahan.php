<?php
/*
Variabel yang dibutuhkan 
$tanda -> tempat dilakukan perpindahan
$perintah -> perintah pindah : continue, break, return, exit
*/
function execute($tanda, $perintah){
for($i=0;$i<11;$i++){
if($i==$tanda){
if($perintah=="continue"){
continue;
}
elseif($perintah=="break"){
break;
}
elseif($perintah=="return"){
return;
}
elseif($perintah=="exit"){
exit;
}
}
echo($i."<br/>");
}
echo "looping selesai<br/>";
}
$tanda=isset($_POST['tanda'])?$_POST['tanda']:'';
$perintah=isset($_POST['perintah'])?$_POST['perintah']:'';
execute($tanda,$perintah);
echo("function execute selesai<br>");
?>