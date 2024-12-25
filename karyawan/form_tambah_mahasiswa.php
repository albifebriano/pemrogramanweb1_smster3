<html>
<head>
	<title>Tambah Data Karyawan</title>
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
				<ul>
					<li><a href="tampildata.php">Data Pustaka</a></li>
				</ul>
		</div>
		<!-- Sintax PHP -->
		<?php
        ?>
        <html>
        <body>
        <p>
            Tambah data mahasiswa
            </br>
			<br>
			<a href="tampildata.php">Kembali</a>
			<br>
            <form action="tambah_db_mahasiswa.php" method="post">
                Nim : <input type="text" name="nim"/></br>
                Nama : <input type="text" name="nama"/></br>
                Prodi : <input type="text" name="prodi"/></br>
                <input type="submit" name="submit" value="kirim" />
            </form>
        </p>
        </body>
        </html>
        <!-- Tutup PHP -->
		<div id="footer"> &copy 2019, by Teknik Unsam </div>
	</div>
</body>
</html>