<?php
 include "kon.php";

 print_r($_POST);

 $id_mesin		= $_POST['id_mesin'];
 $id_jenis		= $_POST['id_jenis'];
 $id_merk		= $_POST['id_merk'];
 $tahun		= $_POST['tahun'];
 $satuan_hasil		= $_POST['satuan_hasil'];

$sql = "insert into detailmesin values('$id_detailMesin','$id_mesin','$id_jenis',
        '$id_merk','$tahun','$satuan_hasil')";  
$hasil = $kon->query($sql);
if (!$hasil) {
    echo "Gagal Simpan, silakan diulangi! <br /> ".mysqli_error($koneksidb);
    echo "<input type='button' value='Kembali'
    onClick='self.history.back()'>";
    exit;
} else {
    header("location:detailMesin_t.php");
} 
?>