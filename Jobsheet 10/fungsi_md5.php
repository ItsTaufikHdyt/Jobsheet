<html>
<body>
<?php
if($button){
$pass_valid=md5("admin:12345");
$pass=md5("$user:$password");
	if(ereg($pass_valid,$pass)){
		echo "<br/>selamat datang, login anda sukses";
		echo "<br/>hasil enskripsi user adalah <b>$pass</b>";
	}else{
		echo "<br/>password anda salah !!....";
	}
}else{
?>
<p align="center"><strong>Selamat Datang !!!</strong><br/>
Silahkan login untuk masuk ke web</p>
<form id="form1" method="POST" action="" />
<div align="center">
	<table width="600" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td width="131"User</td>
			<td width="469"><input type="text" name="user" id="user" /></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password" id="password" /></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="login" value="login" id="login" /></td>
		</tr>
	</table>
</div>
</form>
<?php
}
?>
</body>
</html>