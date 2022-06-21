<html lang="en">
<?php

include "kon.php";
?>
<head>
<title>SISTEM DEPRESIASI</title>
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
                                <?php  
                                        $sql_cek="SELECT detailmesin.id_detailMesin, merk.merk_mesin, jenis.jenis_mesin, mesin.tgl_perolehan,
                                                    mesin.hrg_perolehan, mesin.nilai_residu, mesin.taksiran_produksi, detailmesin.tahun,
                                                    detailmesin.satuan_hasil
                                                    FROM detailmesin JOIN mesin ON
                                                    detailmesin.id_mesin = mesin.id_mesin
                                                    JOIN merk ON detailmesin.id_merk = merk.id_merk
                                                    JOIN jenis ON detailmesin.id_jenis = jenis.id_jenis
                                                    ORDER BY id_detailMesin ASC";
                                        $query_cek = $kon->query($sql_cek);
                                        $result_cek = $query_cek->num_rows;
                                        if($result_cek=='0'){
                                        echo "<center>Maaf Data Yang anda cari tidak ada <br> Silahkan Masukkan Data Terlebih Dahulu</center>";
                                         }
                                ?>
								<br/>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                              <center><h2><font color="white">DAFTAR DETAIL LAPTOP</font></h2></center> 
							  <br/>
							  <br/>

                                  <center><table width="1000" border="3" height="150">
                                        <thead>
                                            <th><font color="white">Id Detail Mesin</font></th>
                                            <th><font color="white">Merk Mesin</font></th>
                                            <th><font color="white">Jenis Mesin</font></th>
                                            <th><font color="white">Tanggal Perolehan</font></th>
                                            <th><font color="white">Harga Perolehan</font></th>
                                            <th><font color="white">Nilai Residu</font></th>
                                            <th><font color="white">Taksiran Produksi</font></th>
                                            <th><font color="white">Produksi Tahun ke -</font></th>
                                            <th><font color="white">Jumlah Produksi</font></th>
									</tr>
                                        </thead>
                                        <tbody>
										<?php
										while ($data = $query_cek->fetch_array()) {
										?>
                                            <tr>
                                                <td><?php echo "<font color='white'>".$data['id_detailMesin']."</font>"; ?></td>
                                                <td><?php echo "<font color='white'>".$data['merk_mesin']."</font>"; ?></td>
                                                <td><?php echo "<font color='white'>".$data['jenis_mesin']."</font>"; ?></td>
                                                <td><?php echo "<font color='white'>".$data['tgl_perolehan']."</font>"; ?></td>
                                                <td><?php echo "<font color='white'>".number_format($data['hrg_perolehan'],0,".",",")."</font>"; ?></td>
                                                <td><?php echo "<font color='white'>".number_format($data['nilai_residu'],0,".",",")."</font>"; ?></td>
                                                <td><?php echo "<font color='white'>".number_format($data['taksiran_produksi'],0,".",",")."</font>"; ?></td>
                                                <td><?php echo "<font color='white'>".$data['tahun']."</font>"; ?></td>
                                                <td><?php echo "<font color='white'>".$data['satuan_hasil']."</font>"; ?></td>
                                            </tr>
										 <?php 
                                         }
                                    ?>
                                        </tbody>
                                    </table>
									<br/>
									<br/>
									<a href="home.php" onClick='self.history()'>
									<input type="Submit" name="kembali" value="Kembali"></a>
									</center>
</body>
</html>