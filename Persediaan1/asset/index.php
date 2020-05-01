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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="asset/css/bootstrap.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type"
content="text/html; charset=windows-1252" />
<meta name="description" content="" />
<meta name="generator" content="HTML-Kit" />
<title><?php echo nama_perusahaan;?></title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<div class="container">
<div class="row">
<div class="col-lg-12">
<table width="100%" cellpading="0" cellspacing="0" border="0">
<tr><td  colspan="3" style="background-color:#c0c0b0; height:100px;">
<h1 id="top">Sistem Informasi Persediaan</h1></td></tr>
<tr height="4"><td  colspan="3" bgcolor="white"></td></tr>
<tr valign="top"><td class="td_menu"  rowspan="2">
</div>
<?php/*
if (empty($_SESSION[user])) */{ ?>
<div class="row">
<div class="col-lg-3" style="background-color:#c0c0b0; height:100px;>
<h3 class="judul">Silahkan Login</h3>
<p>Untuk bisa mengakses aplikasi ini, silahkan anda login dengan menggunakan username dan password yang anda miliki, jika belum memiliki password silahkan hubungi administrator !</p>
<table width="100%">
<form method="post"  action="index.php">
<tr><td>Username</td><td><input type="text" name="username" size="15"></td></tr>
<tr><td>Password</td><td><input type="password" name="password" size="15"></td></tr>
<tr><td colspan=2><input type="submit" name="submit" value="LOGIN"></td></tr>
</form>
</table>
<?php/*
} else { 
include('menu.php');
}
if (!empty($_GET[err])){
*/?>
</div>
<p><font color="red"><b>Gagal Login!<br/>Cek Username dan Password anda!</b></font></p>
<?php/* } */?>
<div class="row">
<div class="col-lg-9">
</td><td rowspan="2" width="3" style="background-color:#c0c0b0; height:100px;>&nbsp;</td><td class="td_konten_atas">
<h3 class="judul">Selamat Datang <?php/* echo $_SESSION[nama];*/?>&nbsp;</h3></td></tr>
<tr valign="top"><td class="td_konten">
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
</div>
</div>
</td></tr>
<tr><td  colspan="3" align="right"><h4 class="footer">&copy; ©<br /></h4>
</td></tr>
</table>
</body>
</html>