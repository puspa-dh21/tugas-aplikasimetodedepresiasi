<?php
 include "kon.php";

 print_r($_POST);

 $id_mesin		= $_POST['id_mesin'];
 $depresiasi_perunit	= $_POST['depresiasi_perunit'];
 $total_depresiasi	= $_POST['total_depresiasi'];


$sql = "insert into depresiasi values('$id_mesin','$depresiasi_perunit','$total_depresiasi')";  
$hasil = $kon->query($sql);
if (!$hasil) {
    echo "Gagal Simpan, silakan diulangi! <br /> ".mysqli_error($koneksidb);
    echo "<input type='button' value='Kembali'
    onClick='self.history.back()'>";
    exit;
} else {
    header("location:depresiasi_t.php");
} 
?>
