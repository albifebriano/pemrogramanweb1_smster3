<?php
	$koneksi = mysqli_connect('localhost','root' ,'','karyawan');
		if($koneksi){
			echo "";
		}
		else {
			echo "Koneksi PHP dan mysql gagal";
		}
?>