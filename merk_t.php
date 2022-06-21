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
                                        $sql_cek="select * from merk ORDER BY id_merk ASC";
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
                              <center><h2><font color="white">DAFTAR MERK LAPTOP</font></h2></center> 
							  <br/>
							  <br/>

                                  <center><table border_color="white" width="500" border="3" height="150">
                                        <thead>
                                            <th><font color="white">Id Merk</font></th>
                                            <th><font color="white">Merk Mesin</font></th>
                                            <th><font color="white">Lainnya</font></th>
									</tr>
                                        </thead>
                                        <tbody>
										<?php
										while ($data = $query_cek->fetch_array()) {
										?>
                                            <tr>
                                                <td><?php echo "<font color='white'>".$data['id_merk']."</font>"; ?></td>
                                                <td><?php echo "<font color='white'>".$data['merk_mesin']."</font>"; ?></td>
                                                <td><?php echo "<a href='hapus_merk.php?id_merk=" . $data['id_merk'] . "'>
                                                HAPUS </a> " ;?>
                                                <?php echo "<a href='merk_edit.php?id_merk=" . $data['id_merk'] . "'>
                                                EDIT </a> " ;?></td>
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