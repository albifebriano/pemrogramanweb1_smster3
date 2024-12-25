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
			$id = $_GET['view'];
			$data = mysqli_query($koneksi,"select * from datakaryawan where id='$id'");
			while($d = mysqli_fetch_array($data)){
				?>
				<h3>View Data karyawan</h3>
			<br/>
			<a href="datakaryawan.php">Kembali</a>
			<br/>
			<br/>
			<table class="table" border="1">
				<tr >			
					<td>Id</td>
					<td>
						<?php echo $d['id']; ?>
					</td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><?php echo $d['nama']; ?></td>
				</tr>
				<tr >
					<td>Jabatan</td>
					<td><?php echo $d['jabatan']; ?></td>
				</tr>
				<tr>
					<td>Tgl lahir</td>
					<td><?php echo $d['tgl lahir']; ?></td>
				</tr>
				<tr>
					<td>No HP</td>
					<td><?php echo $d['no hp']; ?></td>
				</tr>
				<tr>
			</table>
		</form>
		<?php 
		}
		?>
	<!-- TUTUP SINTAX -->

		<div id="footer"> &copy 2019, by Teknik Unsam </div>
	</div>
</body>
</html>