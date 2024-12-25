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
		</div>
		<!-- Sintax PHP -->
		<?php 
		function result_jab(){
			return array("staf","menejer","direktur","satpam");
		}
		?>
		<html>
		<body>
		<h3>Tambah data karyawan</h3>
		<a style="text-decoration: none" href="datakaryawan.php">Kembali</a>
		<br><br>
			<form action="tambah_db.php" method="post">
				Id : <input type="text" name="id"/></br>
				Nama : <input type="text" name="nama"/></br>
				Jabatan : 
				
						<select name="jabatan">
							<?php foreach(result_jab() as $j){
								echo '<option value='. $j .'>'. $j .'</option>';
							} ?>						
						</select>
				</br>
				Tgl Lahir : <input type="date" name="tgl_lahir"/></br>
				No Hp : <input type="text" name="no_hp"/></br>
				<input type="submit" name="submit" value="kirim" />
			</form>
		</p>
		</body>
		</html>

		<div id="footer"> &copy 2019, by Teknik Unsam </div>
	</div>
</body>
</html>