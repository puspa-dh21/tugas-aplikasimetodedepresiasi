<?php
error_reporting(E_ALL ^ E_DEPRECATED);
	$host = "localhost";
	$user = "root";
	$pass = "";
	$dbName = "pbd";
	
	$kon = mysqli_connect($host, $user, $pass);
	if (!$kon)
		die("Gagal Kembali .....");
		
	$hasil = mysqli_select_db($kon, $dbName);
	if (!$hasil) {
		$hasil = mysqli_query($kon, "CREATE DATABASE $dbName");
		if (!$hasil)
			die("Gagal Buat Database");
		else
			$hasil = mysqli_select_db($kon, $dbName);
			if(!$hasil) die ("Gagal Konek Database");
    }
    
	$sqlTabelAdmin = "create table if not exists admin(
        kd_admin int auto_increment not null primary key,
        user varchar(25) not null,
        password varchar(50) not null
        )";
    mysqli_query ($kon, $sqlTabelAdmin) or die("Gagal Buat Tabel Admin");

	$sqlTabelMerk = "create table if not exists merk(
        id_merk int auto_increment not null primary key,
        merk_mesin varchar(25) not null)";
	mysqli_query ($kon, $sqlTabelMerk) or die("Gagal Buat Tabel Merk");
	
	$sqlTabelJenis = "create table if not exists jenis(
		id_jenis int auto_increment not null primary key,
		id_merk int not null,
        jenis_mesin varchar(25) not null)";
	mysqli_query ($kon, $sqlTabelJenis) or die("Gagal Buat Tabel Jenis");
	
	$sqlTabelMesin = "create table if not exists mesin(
		id_mesin int auto_increment not null primary key,
		id_merk int not null,
		id_jenis int not null,
		tgl_perolehan date not null,
		hrg_perolehan int not null,
		nilai_residu int not null,
		taksiran_produksi int not null)";
    mysqli_query ($kon, $sqlTabelMesin) or die("Gagal Buat Tabel Mesin");
	
	$sqlTabelDetailMesin = "create table if not exists detailmesin(
		id_detailMesin int auto_increment not null primary key,
		id_mesin int not null,
		id_jenis int not null,
		id_merk int not null,
		tahun int not null,
		satuan_hasil int not null)";
	mysqli_query ($kon, $sqlTabelDetailMesin) or die("Gagal Buat Tabel Detail Mesin");	
	
	$sqlTabelDepresiasi = "create table if not exists depresiasi(
		id_depresiasi int auto_increment not null primary key,
		id_mesin int not null,
		depresiasi_perunit int not null)";
    mysqli_query ($kon, $sqlTabelDepresiasi) or die("Gagal Buat Tabel Depresiasi");	

	$sql="select*from admin";
	$hasil=mysqli_query($kon,$sql);
	$jumlah=mysqli_num_rows($hasil);
	if($jumlah==0){
		$sql="insert into admin(user, password)
		values('admin',md5('admin'))";
		mysqli_query($kon,$sql);
	}
?>
