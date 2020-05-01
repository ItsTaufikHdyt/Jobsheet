<?php
//membuat dan membaca data array multi dimensi
$data=@array(
  array(nama =>"distian aulya maharani",
        jurusan =>"Teknik Informatika",
        ),
  array(nama =>"anton nur anggraito",
        jurusan =>"manjemen keuangan",
        )
);
echo "membuat array multidimensi <br/><br/>";
foreach ($data as $val)
{
  foreach ($val as $key =>$data2)
  {
echo "$key:$data2 <br/>";
  }
echo "<br/>";
}
?>