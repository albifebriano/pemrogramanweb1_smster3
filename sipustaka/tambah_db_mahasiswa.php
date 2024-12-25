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
