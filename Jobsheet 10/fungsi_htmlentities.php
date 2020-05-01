<?php
//menghaous tag cetak miring 
$teks="<i>contoh teks yang diberi efek cetak miring</i>";
echo "<br/> tanpa fungsi htmlentities :";
echo "<br/>$teks";
echo "<br/><br/>dengan fungsi htmlentities: ";
echo htmlentities($teks);
?>