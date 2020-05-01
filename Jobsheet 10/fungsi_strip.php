<?php
//fungsi strip_tags
$data="<b>Sekolah Menengah Negeri 1 Bontang</b>";
echo "<br/>tanpa fungsi strip_tags :";
echo "$data";

echo "<br/><br/> dengan fungsi strip_tags: ";
echo strip_tags($data);

?>