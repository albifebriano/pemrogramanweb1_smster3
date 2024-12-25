<html>
<head>
	<title>IT UNSAM | VIEW</title>
	<link rel="stylesheet" type="text/css" media="all" href="style7.css">
</head>
<body>
	<div id="layout">
		<div id="header">
		<img src="header.gif" class="header">
		</div>
		
		<div id="runningtext"> 
		<marquee behavior="scroll" scrollamount="3" onmouseover="this.stop();" 
		onmouseout="this.start();" direction="left">
			Selamat Datang di Website Saya
		</marquee>
		</div>
		
		<div id="menu">
				<ul>
					<li><a href="index7.html">Beranda</a></li>
				</ul>
				<ul>
					<li><a href="#">Profil Fakultas</a>
						<ul>
						<li> <a href="#"> Fakultas Teknik </a></li>
						<li> <a href="#"> Teknik Informatika </a></li>
				</ul>
					</li>
				</ul>
				<ul>
					<li><a href="profil.html">Tentang Saya</a></li>
				</ul>
				<ul>
					<li><a href="kontak.html">Kontak Kami</a>
					<ul>
						<li>
							<a href="#"> FAQ</a>
							<a href="#"> Media Sosial</a>
							<a href="#"> Peta Lokasi</a>
						</li>
					</li>
					</ul>
				</ul>
				<ul>
					<li><a href="#">Info</a>
						<ul>
							<li>
								<a href="#"> Jam Operasional</a>
								<a href="#"> Testimoni</a>
								<a href="#"> Berita Baru</a>
							</li>
						</ul>
					</li>
				</ul>
				<ul>
					<li><a href="datakaryawan.php">Data Karyawan</a></li>
				</ul>
		</div>
		<!-- Sintax PHP VIEW -->
        <?php
        include 'koneksi.php';
        $id         = $_GET['view'];
        $karyawan   = mysqli_query($koneksi, "select * from datakaryawan where id = ". $id);
        $row        = mysqli_fetch_array($karyawan);


        // membuat data jurusan menjadi dinamis dalam bentuk array
        // membuat function untuk set aktif radio button
        function active_radio_button($value,$input){
            // apabilan value dari radio sama dengan yang di input
            $result =  $value==$input?'checked':'';
            return $result;
        }

        function result_jab(){
            return array("staf","manajer","direktur");
        }

        ?>

        <html>
            <head>
                <title>Belajarphp</title>
            </head>
            <style>
                input, select{
                    margin-bottom:8px;
                }
            </style>
            <body>
                <form method="post" action="update.php">
                    <input type="hidden" value="<?php echo $row['id'];?>" name="id">
                    <input type="hidden" value="1" name="submited">
                    <table>
                        <tr><td>Id</td><td><input type="varchar" value="<?php echo $row['id'];?>" name="id" style="background:#f2f2f2;" disabled></td></tr>
                        <tr><td>Nama</td><td><input type="varchar" value="<?php echo $row['nama'];?>" name="nama"></td></tr>
                        <tr><td>Jabatan</td><td>
                        
                        <select name="jabatan">
                            <?php foreach(result_jab() as $j){
                                echo '<option value='. $j .'>'. $j .'</option>';
                            } ?>						
                        </select>
                        
                        </td></tr>
                        <tr><td>Tgl lahir</td><td><input type="date" value="<?php echo $row['tgl lahir'];?>" name="tgl lahir"></td></tr>
                        <tr><td>No HP</td><td><input type="varchar" value="<?php echo $row['no hp'];?>" name="no_hp"></td></tr>
            
                        <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
                                <a href="datakaryawan.php">Kembali</a></td></tr>
                    </table>
                </form>
            </body>
        </html>
	    <!-- TUTUP SINTAX -->

		<div id="footer"> &copy 2019, by Teknik Unsam </div>
	</div>
</body>
</html>