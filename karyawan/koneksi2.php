<?php 
    $koneksi= mysqli_connect('localhost','root','','dbpustaka');
    if ($koneksi) {
        echo "sukses";
    }
    else {
        echo "Koneksi PHP dan mysql gagal";
    }
?>