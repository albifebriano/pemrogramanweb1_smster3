<?php 

include 'koneksi.php';
 
if(isset($_POST['submited'])){
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$jab = $_POST['jabatan'];
	
	$tgl_lahir = $_POST['tgl lahir'];
	$no_hp = $_POST['no hp'];

	print '<pre>';
	print_r($_POST);
	
	mysqli_query($koneksi,"update datakaryawan set nama='$nama', jabatan = '$jab', tgl lahir = '$tgl_lahir', no hp = '$no_hp' where id=$id");
	mysqli_error($koneksi);
	header("location:datakaryawan.php");	
}else{
	echo 'invalid form';
}

 
?>