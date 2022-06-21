<?php
	if (isset($_POST['id_merk'])){
		$id_merk = $_POST['id_merk'] ;
		$simpan = "EDIT" ;
	} else {
		$simpan = "BARU" ;
	}
	$merk_mesin = $_POST['merk_mesin'];
	
	include "kon.php";
	
	if($simpan == "EDIT"){
		$sql = "update merk set
				merk_mesin = '$merk_mesin'
				where id_merk = $id_merk ";
	} else {
		$sql = "insert into merk
				(merk_mesin) values ('$merk_mesin') ";
	}
	
	$hasil = mysqli_query($kon, $sql);
		
	if (!$hasil) {
		echo "Gagal Simpan, silahkan diulangi! <br /> ";
		echo mysqli_error($kon);
		echo "<br/> <input type='button' value='Kembali'
		onClick='self.history.back()'>";
		exit;
	} else {
		echo "Simpan Data Berhasil" ;
			header("location:merk_t.php");
	}
?>
