<html>
<body>
<p> masukkan tanggal lahir anda </p>
<form id="form1" method="POST" action="uji_tanggal.php" />
<p> tanggal
<select name="tanggal" id="tanggal">
<?php
for($i=1;$i<=31;$i++){
	echo "<option value=\"$i\">$i</option>";
}
?>
Bulan
<select name="bulan" id="bulan">
	<option value="1">januari</option>
	<option value="2">februari</option>
	<option value="3">maret</option>
	<option value="4">april</option>
	<option value="5">mei</option>
	<option value="6">juni</option>
	<option value="7">juli</option>
	<option value="8">agustus</option>
	<option value="9">jseptember</option>
	<option value="10">oktober</option>
	<option value="11">november</option>
	<option value="12">desember</option>
</select>
<input type="text" name="tahun" id="tahun" size="10"/>
</p><p>
<input type="submit" name="kirim" value="cek tanggal" id="kirim" />
</p>
</form>
<p>&nbsp;</p><p>&nbsp;</p>
</body>
</html>