<htm>
<body>
<?php
$data="180.5km";
echo "<br/>$data=$data";
echo "<br/>hasil \$data dicetak dengan beberapa format(printf)";
echo "<br/>";
printf("format d: %d <br/>",$data);
printf("format b: %b <br/>",$data);
printf("format o: %o <br/>",$data);
printf("format x: %x <br/>",$data);
printf("format X: %X <br/>",$data);
printf("format c: %c <br/>",$data);
printf("format s: %s <br/>",$data);
printf("format f: %.3f <br/>",$data);
?>
</body>
</html>