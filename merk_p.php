<?php
 include "kon.php";

 print_r($_POST);

 $merk_mesin		= $_POST['merk_mesin'];

$sql = "insert into merk values('$id_merk','$merk_mesin')";   
$hasil = $kon->query($sql);
if (!$hasil) {
    echo "Gagal Simpan, silakan diulangi! <br /> ".mysqli_error($koneksidb);
    echo "<input type='button' value='Kembali'
    onClick='self.history.back()'>";
    exit;
} else {
    header("location:merk_t.php");
} 
?>