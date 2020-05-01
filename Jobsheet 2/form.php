<html>
<body>
<form id="form1" name"form1" method"POST" action="">
<p align="left">Nama<input type text="text" name="nama" id="nama"/></p>
<p align="left">Alamat<input type="text" name="alamat" id="alamat"/></p>
<p align="left"> <input type="submit" name="button" id="button" value="kirim"/></p>
</form>
<?php
//Variabel_form.php 
if($button){
echo"<br/> Nama  : $nama";
echo"<br/> Alamat: $alamat";
}
?>
</body>
</html>
