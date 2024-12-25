<html>
<head>
	<title>IT UNSAM | Data Pustaka</title>
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
		<!-- Sintax PHP VIEW -->
        <?php
        if(isset($_POST['submit'])){

            $nim_user = $_POST['nim'];
            $nama_user = $_POST['nama'];
            $prodi_user = $_POST['prodi'];

            $koneksi = mysqli_connect('localhost','root','','dbpustaka');
            if (mysqli_connect_errno()) { echo "Failed to connect to MysQL: " .
                mysqli_connect_error(); }

            $q = "INSERT INTO mahasiswa
            values ('". $nim_user ."','". $nama_user ."','". $prodi_user . "')";

            if(!mysqli_query ($koneksi, $q)){
                echo mysqli_error($koneksi);
            }else{
                echo "Database dbpustaka telah ditambahkan:";
                echo "</br>";
                echo "NIM :$nim_user";
                echo "</br>";
                echo "Nama :$nama_user";
                echo "</br>";
                echo "Prodi :$prodi_user";
                echo "</br>";

                print '<br> Insert Berhasil!<br><a href="tampildata.php">Lihat Data</a>';
            }
        }
        else{
        echo 'Form tidak terkirim!';
        }
        ?>
	    <!-- TUTUP SINTAX -->

		<div id="footer"> &copy 2019, by Teknik Unsam </div>
	</div>
</body>
</html>