<!DOCTYPE html>
<html>
    <head>
        <title>Hitung Depresiasi</title>
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
    </head>
    <body>
        <form method="POST" action="depresiasi_p.php">
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
            <center><p><h3><font color="white">Hitung Depresiasi</font color></h3></p></cente>
            </br>
            <table align="center">
            <tr>
                <center><font color="white">Tanggal Perolehan: <select name="id_mesin"></font color>
											<?php
												include "kon.php";
												$sql = "select * from mesin";
												$res = mysqli_query($kon, $sql) or die("Gagal Query");
												while($r = mysqli_fetch_assoc($res)){
												echo "<option value='{$r['id_mesin']}'>{$r['tgl_perolehan']}</option>";
												}
											?>
                </tr></center>
            <tr>
                <center><font color="white">Harga Perolehan: <select name="hrg_perolehan"></font color>
											<?php
												include "kon.php";
												$sql = "select * from mesin";
												$res = mysqli_query($kon, $sql) or die("Gagal Query");
												while($r = mysqli_fetch_assoc($res)){
												echo "<option value='{$r['hrg_perolehan']}'>{$r['hrg_perolehan']}</option>";
												}
											?>
                </tr></center>
                <tr>
                <center><font color="white">Nilai Residu: <select name="nilai_residu"></font color>
											<?php
												include "kon.php";
												$sql = "select * from mesin";
												$res = mysqli_query($kon, $sql) or die("Gagal Query");
												while($r = mysqli_fetch_assoc($res)){
												echo "<option value='{$r['nilai_residu']}'>{$r['nilai_residu']}</option>";
												}
											?>
                </tr></center>
                <tr>
                <center><font color="white">Taksiran Produksi: <select name="taksiran_produksi" 
                                        onBlur="depresiasi_perunit.value=(hrg_perolehan.value - nilai_residu.value) / taksiran_produksi.value">
                                        </font color>
											<?php
												include "kon.php";
												$sql = "select * from mesin";
												$res = mysqli_query($kon, $sql) or die("Gagal Query");
												while($r = mysqli_fetch_assoc($res)){
												echo "<option value='{$r['taksiran_produksi']}'>{$r['taksiran_produksi']}</option>";
												}
											?>
                </tr></center>
                <tr>
                <tr><td>
                <center><font color="white">Depresiasi Per Unit	: <input type="text" name="depresiasi_perunit" placeholder="0">
                </font></center>
                </td></tr>
                <center><font color="white">Produksi Setahun : <select name="satuan_hasil" 
                                        onBlur="total_depresiasi.value=depresiasi_perunit.value * satuan_hasil.value">
                                        </font color>
											<?php
												include "kon.php";
												$sql = "select * from detailmesin";
												$res = mysqli_query($kon, $sql) or die("Gagal Query");
												while($r = mysqli_fetch_assoc($res)){
												echo "<option value='{$r['satuan_hasil']}'>{$r['satuan_hasil']}</option>";
												}
											?>
                </tr></center>                 
                <tr><td>
                <center><font color="white">Total Depresiasi	: <input type="text" name="total_depresiasi" onBlur="" placeholder="0">
                </font></center>
                </td></tr> 
                <tr>
                <td colspan="2"><center><button type="submit" value="simpan">SIMPAN</button></center></td>
                <td colspan=""><a href="home.php">
                <button type="submit" value="batal">BATAL</button></td></tr>           
            </table>
        </form>
    </body>
</html>
