<?php
//menentukan hari esok
$tomorrow=mktime(0,0,0,date("m"),date("d")+1,date("Y"));
echo "tomorrow is " . date("Y/m/d", $tomorrow);
?>