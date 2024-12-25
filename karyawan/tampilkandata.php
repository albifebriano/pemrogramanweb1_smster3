<?php
	$koneksi = mysqli_connect('localhost','root' ,'','karyawan');
		if($koneksi){
			echo "koneksi PHP dan Mysql berhasil";
			echo "<br/>";
			
		}
		else {
			echo "Koneksi PHP dan mysql gagal";
		}
	$panggil_db = mysqli_query($koneksi, "select*from datakaryawan");
		echo "data karyawan";
		echo "<br/>";
	
	$baris_db = mysqli_fetch_row($panggil_db);
		echo "$baris_db[0] $baris_db[1] $baris_db[2] $baris_db[3]  ";
		echo "<br/>";
		
	$baris_db = mysqli_fetch_row($panggil_db);
		echo "$baris_db[0] $baris_db[1] $baris_db[2] $baris_db[3]  ";
		echo "<br/>";
	
	$baris_db = mysqli_fetch_row($panggil_db);
		echo "$baris_db[0] $baris_db[1] $baris_db[2] $baris_db[3]  ";
		
?>