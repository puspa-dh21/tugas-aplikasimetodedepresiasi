<!DOCTYPE html>
<html>
    <head>
        <title>Laptop</title>
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
</html>
<?php
	$id_merk = $_GET['id_merk'] ;
	include "kon.php" ;
	$sql = "select * from merk where id_merk = '$id_merk' ";
	$hasil = mysqli_query($kon,$sql) ;
	if (!$hasil) die ('Gagal query ....');
	
	$data = mysqli_fetch_array($hasil);
	$id_merk = $data['id_merk'];
	$merk_mesin = $data['merk_mesin'];
	
	echo "<br/><br/><br/><br/><br/>";
	echo "<center>";
	echo "<font color = white>";
	echo "<h2>Konfirmasi Hapus</h2>" ;
	echo "Id Merk : ".$id_merk."<br/>" ;
	echo "Merk Mesin : ".$merk_mesin."<br/>" ;
	echo "APAKAH DATA INI AKAN DI HAPUS ?? <br/>";
	echo "<a href='hapus_merk.php?id_merk=$id_merk&hapus=1'> YA </a>";
	echo "&nbsp;&nbsp;" ;
	echo "<a href='merk_t.php'> TIDAK </a> <br/><br/>" ;
	echo "</center>";
	
	if (isset($_GET['hapus'])) {
		$sql = "delete from merk where id_merk = '$id_merk'";
		$hasil = mysqli_query($kon,$sql);
		if (!$hasil){
			echo "Gagal Hapus Merk Mesin : $merk_mesin ....<br/> ";
			echo "<a href='merk_t.php'>Kembali ke Daftar Merk</a>";
		} else {
			header('location:merk_t.php');
		}
	}
?>