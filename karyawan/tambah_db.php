<?php

if(isset($_POST['submit'])){
	
	$id_user	=$_POST['id'];
	$nama_user	=$_POST['nama'];
	$jabatan_user	=$_POST['jabatan'];
	$tgl_lahir_user = $_POST['tgl_lahir'];
	$no_hp_user	=$_POST['no_hp'];
	
	
	$koneksi=mysqli_connect('localhost','root','','karyawan');
	if (mysqli_connect_errno()) { echo "Failed to connect to MySQL: " . mysqli_connect_error(); }


	$q = "INSERT INTO datakaryawan 
	values ('". $id_user ."','". $nama_user ."','". $jabatan_user . "','".$tgl_lahir_user ."','". $no_hp_user ."')";
	
	
	if(!mysqli_query ($koneksi,$q)){
      echo mysqli_error($koneksi);
	}else{
		echo "database karyawan telah ditambahkan:";
		echo "</br>";
		echo "id :$id_user";
		echo "</br>";
		echo "nama :$nama_user";
		echo "</br>";
		echo "jabatan :$jabatan_user";
		echo "</br>";
		echo "tgl. lahir :$tgl_lahir_user";
		echo "</br>";
		echo "no. hp :$no_hp_user";
		
		

		print '<br> insert ok!<br><a href="datakaryawan.php">LIHAT DATA</a>';
	}	
}		
else{
	echo 'form tidak terkirim!';
}		
?>