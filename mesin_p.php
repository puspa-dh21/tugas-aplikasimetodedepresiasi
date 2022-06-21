<?php
 include "kon.php";

 print_r($_POST);

 $id_merk		= $_POST['id_merk'];
 $id_jenis		= $_POST['id_jenis'];
 $tgl_perolehan	= $_POST['tgl_perolehan'];
 $hrg_perolehan		= $_POST['hrg_perolehan'];
 $nilai_residu		= $_POST['nilai_residu'];
 $taksiran_produksi		= $_POST['taksiran_produksi'];

$sql = "insert into mesin values('$id_mesin','$id_merk','$id_jenis',
        '$tgl_perolehan','$hrg_perolehan','$nilai_residu',
        '$taksiran_produksi')";   
$hasil = $kon->query($sql);
if (!$hasil) {
    echo "Gagal Simpan, silakan diulangi! <br /> ".mysqli_error($koneksidb);
    echo "<input type='button' value='Kembali'
    onClick='self.history.back()'>";
    exit;
} else {
    header("location:mesin_t.php");
} 
?>