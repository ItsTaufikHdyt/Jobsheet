<?php/*
session_start();
include('config.php'); 
if (!empty($_POST[submit])){

$perintah_query=mysql_query(" SELECT * 
FROM tbluser
WHERE IDUser = '$_POST[username]'
AND Password = md5( '$_POST[password]' ) "); 
	if($hasil_cek=mysql_num_rows($perintah_query))
	{
	//sukess
	$datauser=mysql_fetch_array($perintah_query);
	$_SESSION[user] = $_POST[username];
	$_SESSION[nama] = $datauser[NamaUser];
	$_SESSION[level] = $datauser[Level];
	echo $_SESSION[level];

	header("Location: index.php");
	} else 
	{   
// gagal login
	header("Location: index.php?err=yes");

	}
	}
*/?>
<html>
	<head>
	<title></title>
	<link href="asset/css/bootstrap.css" rel="stylesheet" type="text/css">
	</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12" style="background-color:#425582; height:100px;">
				<h1><font color="white">Sistem Informasi Persediaan</font></h1>
			</div>
		</div>
		<?php/*
if (empty($_SESSION[user])) */{ ?>
&nbsp;&nbsp;
	<div class="row" style="height:1000px">
		<div class="col-lg-3" style="height:500px; background-color:#c0c0b0;">
			<h3 style="border-bottom:1px solid;">Silahkan Login</h3>
				<p>Untuk bisa mengakses aplikasi ini, silahkan anda login dengan 
				menggunakan username dan password yang anda miliki,
				jika belum memiliki password silahkan hubungi administrator !</p>
	<table width="100%">
		<form method="post"  action="index.php">
			<tr><td>Username</td><td><input type="text" name="username" size="15"></td></tr>
			<tr><td>Password</td><td><input type="password" name="password" size="15"></td></tr>
			<tr><td colspan=2><input class="btn-info" type="submit" name="submit" value="LOGIN"></td></tr>
		</form>
	</table>
	<?php/*
} else { 
include('menu.php');
}
if (!empty($_GET[err])){
*/?>
	<p><font color="red"><b>Gagal Login .. !!<br/>Cek Username dan Password</b></font></p>
	<?php/* } */?>
	<td rowspan="2" width="3" bgcolor="white">&nbsp;</td>
	</td>
	<td class="td_konten_atas"><h3 class="judul">
</div>
<div class="col-lg-9" style="height:150px; background-color:#c0c0b0;">
<h4 style="border-bottom:1px solid;">Selamat Datang <?php/* echo $_SESSION[nama];*/?></h4>
</div>
<?php /*
if(!empty($_GET[file])) 
{
	if(file_exists("file/$_GET[file].php")) 
	{
	include("file/$_GET[file].php");
	} else 
	{
	echo "<h2>Error !<br/>Halaman tidak ditemukan !</h2>";
	}
} else 
{
include('file/intro.php');
}
*/?>
<div class="col-lg-12" style="background-color:#2f4860; height:500px;">
 <font color="white" align="right" ><h4 class="footer">adalah footer &copy;
</h4> </font>
</div>
</div>
</div>
</body>
</html>

