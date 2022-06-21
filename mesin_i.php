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
    </head>
    <body>
        <form method="POST" action="mesin_p.php">
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
            <center><p><h3><font color="white">Masukan Laptop</font color></h3></p></center>
            </br>
            <table align="center">
                <tr>
                <center><font color="white">Merk Laptop: <select name="id_merk"></font color>
											<?php
												include "kon.php";
												$sql = "select * from merk";
												$res = mysqli_query($kon, $sql) or die("Gagal Query");
												while($r = mysqli_fetch_assoc($res)){
												echo "<option value='{$r['id_merk']}'>{$r['merk_mesin']}</option>";
												}
											?>
                </tr></center>
                <tr>
                <center><font color="white">Jenis Laptop: <select name="id_jenis"></font color>
											<?php
												include "kon.php";
												$sql = "select * from jenis";
												$res = mysqli_query($kon, $sql) or die("Gagal Query");
												while($r = mysqli_fetch_assoc($res)){
												echo "<option value='{$r['id_jenis']}'>{$r['jenis_mesin']}</option>";
												}
											?>
            </select>
            </center>
                </tr>
                <tr>
                <td colspan="2"><center><font color="white">Tanggal Produksi</td><td>
                <input type="text" name="tgl_perolehan" 
                placeholder="Tanggal Produksi">
                </font>
                </center>
                </td>
                </tr>
                <tr>
                <td colspan="2"><center><font color="white">Harga laptop</td><td>
                <input type="text" name="hrg_perolehan" 
                placeholder="Harga Laptop">
                </font>
                </center>
                </td>
                </tr>
                <tr>
                <td colspan="2"><center><font color="white">Nilai Residu</td><td>
                <input type="text" name="nilai_residu" 
                placeholder="Nilai Residu">
                </font>
                </center>
                </td>
                </tr>
                <tr>
                <td colspan="2"><center><font color="white">Taksiran Produksi</td><td>
                <input type="text" name="taksiran_produksi" 
                placeholder="Taksiran Produksi">
                </font>
                </center>
                </td> 
                </tr>
                <tr>
                <td colspan="2"><center><button type="submit" value="simpan">SIMPAN</button></center>
                </td>
                <td colspan="2"><a href="home.php">
                <left><button type="submit" value="batal">BATAL</button></left></td></tr>
            </table>
        </form>
    </body>
</html>