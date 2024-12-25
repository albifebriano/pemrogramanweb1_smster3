<html>
<head>
	<title>IT UNSAM | Data Karyawan</title>
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
		<!-- Sintax PHP Yang ditambahkan-->
        <?php
            include "koneksi.php";
            echo "<html>";
            echo "<head>";
            echo "<style type='text/css'>";
            echo "table,td {border: 1px solid #ddd;
            padding:4px;
            font-family:segoe ui;}";
            echo "th{border: 1px solid #ddd;
            padding:1px;
            color:#000;
            font-family:Segoe Ui;}";
            
            echo "</style>";
            echo "<head>";
            echo "</body>";
            
            $panggil_db = mysqli_query($koneksi, "select*from datakaryawan");
                echo "<h3>DATA KARYAWAN<h3>";
                echo "<br/>";

                echo "<table>";
                echo "<tr>";
                echo "<th>Id</th>";
                echo "<th>Nama</th>";
                echo "<th>Jabatan</th>";
                echo "<th>Tgl Lahir</th>";
                echo "<th>No Hp</th>";
                echo "<th>Opsi</th>";
                echo "</tr>";
            
            while ($row = mysqli_fetch_array($panggil_db, MYSQLI_ASSOC))
            {
                echo "<tr>";
                echo "<td>", $row['id'], "</td>";
                echo "<td>", $row['nama'], "</td>";
                echo "<td>", $row['jabatan'], "</td>";
                echo "<td>", $row['tgl lahir'], "</td>";
                echo "<td>", $row['no hp'], "</td>";
                echo "<td><a class='link' href=delete.php?del=$row[id]>Hapus</a> || 
                            <a class='link_view' href=view.php?view=$row[id]>View</a> || 
                            <a class='link_view' href=edit.php?view=$row[id]>Edit</a>
                            </td>";
                echo "</tr>";
            }
            echo "</table>"; 
            echo "</body>";
                echo "</html>";
        ?>
        <!-- /////////////////////////////tombol untuk menambah data//////////////////////////////////-->
        <form action='form_tambah.php' method='POST'>
        <table >
        <tr>
        <center><td> <input type='submit' name='tambah' value='Tambah data'> </td> 
        </tr>
        </table>
        </form>

		<div id="footer"> &copy 2019, by Teknik Unsam </div>
	</div>
</body>
</html>

<!-- Nama: M. Albi Febriano -->
<!-- NIM : 230504025 -->
<!-- Unit: 1 -->
<!-- Nama Matakuliah: Pemrograman Web1 -->