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
	$id_jenis = $_GET['id_jenis'] ;
	include "kon.php" ;
	$sql = "select * from jenis where id_jenis = '$id_jenis' ";
	$hasil = mysqli_query($kon,$sql) ;
	if (!$hasil) die ('Gagal query ....');
	
	$data = mysqli_fetch_array($hasil);
	$id_jenis = $data['id_jenis'];
	$id_merk = $data['id_merk'];
	$jenis_mesin = $data['jenis_mesin'];
	
	echo "<br/><br/><br/><br/><br/>";
	echo "<center>";
	echo "<font color = white>";
	echo "<h2>Konfirmasi Hapus</h2>" ;
	echo "Id Jenis : ".$id_jenis."<br/>" ;
    echo "Id Merk : ".$id_merk."<br/>" ;
	echo "Jenis Mesin : ".$jenis_mesin."<br/>" ;
	echo "APAKAH DATA INI AKAN DI HAPUS ?? <br/>";
	echo "<a href='hapus_jenis.php?id_jenis=$id_jenis&hapus=1'> YA </a>";
	echo "&nbsp;&nbsp;" ;
	echo "<a href='jenis_t.php'> TIDAK </a> <br/><br/>" ;
	echo "</center>";	
	
	if (isset($_GET['hapus'])) {
		$sql = "delete from jenis where id_jenis = '$id_jenis'";
		$hasil = mysqli_query($kon,$sql);
		if (!$hasil){
			echo "Gagal Hapus Jenis Mesin : $jenis_mesin ....<br/> ";
			echo "<a href='jenis_t.php'>Kembali ke Daftar Jenis</a>";
		} else {
			header('location:jenis_t.php');
		}
	}
?>