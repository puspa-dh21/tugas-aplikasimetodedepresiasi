<?php
 include "kon.php";

 print_r($_POST);

 $jenis_mesin		= $_POST['jenis_mesin'];
 $id_merk		= $_POST['id_merk'];

$sql = "insert into jenis values('$id_jenis','$id_merk','$jenis_mesin')";   
$hasil = $kon->query($sql);
if (!$hasil) {
    echo "Gagal Simpan, silakan diulangi! <br /> ".mysqli_error($koneksidb);
    echo "<input type='button' value='Kembali'
    onClick='self.history.back()'>";
    exit;
} else {
    header("location:jenis_t.php");
} 
?>