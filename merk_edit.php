<!DOCTYPE html>
<html>
    <head>
        <title>Merk Laptop</title>
        <style type="text/css">
			header, section, footer, aside, nav, article, figure, figcaption {
				display: block;}
			body {
				color: #666666;
				background-color: #f9f8f6;
				background-image: url("aa.jpg");
				background-position: center;
				height: 600px;
			  	weight: 200px;
		</style>
</head>
<?php
	$id_merk = $_GET["id_merk"] ;
	include "kon.php";
	$sql_cek = "select * from merk where id_merk = '$id_merk'";
	$hasil = mysqli_query($kon, $sql_cek);
	if(!$hasil) die("Gagal query..");

	$data=mysqli_fetch_array($hasil);
	$merk_mesin= $data["merk_mesin"];
?>
<center>
<br/><br/><br/><br/><br/>
<h2><font color ='white'>Edit Merk</font></h2>
<form action="merk_edit_p.php" method="post">
<input type="hidden" name="id_merk" value="<?php echo $id_merk;?>" />
	<table border="1">
	<tr>
		<td><font color='white'>Merk Mesin Baru</font> </td>
		<td><input type="text" name="merk_mesin" value="<?php echo $merk_mesin;?>" /></td>
	</tr>

	<tr>
		<td colspan="2" align="center">
			<input type="submit" value="Simpan" name="proses" />
			<input type="reset" value="Reset" name="reset" />
		</td>
	</tr>
	</table>
</form>
</center>
</html>