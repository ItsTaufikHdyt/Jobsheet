<html>
<body>
<p> masukkan tanggal lahir anda</P>
<form id="form1" method="POST" action=""/>
<p>masukkan password anda
<input type="password" name="password" id="password" /> (admin)
</p><p>
<input type="submit" name="kirim" value="login" id="kirim"/>
</p>
</form>
<?php
$str="10";
$pass_valid=crypt("admin",$str);
if($kirim){
  $cek=crypt($password,$srt);
  if(ereg($pass_valid,$cek)){
  echo "<br/>password benar, selamat datang ";
  }else{
  echo "<br/>password salah, ulangi kembali";
  }
}
 ?>
 </body>
 </html>