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
                                        $sql_cek="SELECT jenis.id_jenis, merk.merk_mesin, jenis.jenis_mesin 
                                        FROM jenis JOIN merk ON jenis.id_merk = merk.id_merk
                                        ORDER BY id_jenis ASC";
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
                              <center><h2><font color="white">DAFTAR JENIS LAPTOP</font></h2></center> 
							  <br/>
							  <br/>

                                  <center><table border_color="white" width="200" border="3" height="150">
                                        <thead>
                                            <th><font color="white">Id Jenis</font></th>
                                            <th><font color="white">Merk Laptop</font></th>
                                            <th><font color="white">Jenis Mesin</font></th>
                                            <th><font color="white">Lainnya</font></th>
									</tr>
                                        </thead>
                                        <tbody>
										<?php
										while ($data = $query_cek->fetch_array()) {
										?>
                                            <tr>
                                                <td><?php echo "<font color='white'>".$data['id_jenis']."</font>"; ?></td>
                                                <td><?php echo "<font color='white'>".$data['merk_mesin']."</font>"; ?></td>
                                                <td><?php echo "<font color='white'>".$data['jenis_mesin']."</font>"; ?></td>
                                                <td><?php echo "<a href='hapus_jenis.php?id_jenis=" . $data['id_jenis'] . "'>
                                                HAPUS</a> " ;?></td>
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