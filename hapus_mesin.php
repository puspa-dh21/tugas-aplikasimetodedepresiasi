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
	$id_mesin = $_GET['id_mesin'] ;
	include "kon.php" ;
	$sql = "select * from mesin where id_mesin = '$id_mesin' ";
	$hasil = mysqli_query($kon,$sql) ;
	if (!$hasil) die ('Gagal query ....');
	
	$data = mysqli_fetch_array($hasil);
	$id_mesin = $data['id_mesin'];
	$id_merk = $data['id_merk'];
	$id_jenis = $data['id_jenis'];
	$tgl_perolehan = $data['tgl_perolehan'];
	$hrg_perolehan = $data['hrg_perolehan'];
	$nilai_residu = $data['nilai_residu'];
	$taksiran_produksi = $data['taksiran_produksi'];
   
    echo "<br/><br/><br/><br/><br/>";
	echo "<center>";
	echo "<font color = white>";
	echo "<h2>Konfirmasi Hapus</h2>" ;
	echo "Id Mesin : ".$id_mesin."<br/>" ;
    echo "Id Merk : ".$id_merk."<br/>" ;
    echo "Id Jenis : ".$id_jenis."<br/>" ;
	echo "Tanggal Perolehan : ".$tgl_perolehan."<br/>" ;
	echo "Harga Perolehan : ".$hrg_perolehan."<br/>" ;
	echo "Nilai Residu : ".$nilai_residu."<br/>" ;
	echo "Taksiran Produksi : ".$taksiran_produksi."<br/>" ;
	echo "APAKAH DATA INI AKAN DI HAPUS ?? <br/>";
	echo "<a href='hapus_mesin.php?id_mesin=$id_mesin&hapus=1'> YA </a>";
	echo "&nbsp;&nbsp;" ;
	echo "<a href='mesin_t.php'> TIDAK </a> <br/><br/>" ;
    echo "</center>";
	
	if (isset($_GET['hapus'])) {
		$sql = "delete from mesin where id_mesin = '$id_mesin'";
		$hasil = mysqli_query($kon,$sql);
		if (!$hasil){
			echo "Gagal Hapus Mesin : $id_mesin ....<br/> ";
			echo "<a href='mesin_t.php'>Kembali ke Daftar Mesin</a>";
		} else {
			header('location:mesin_t.php');
		}
	}
?>