<?php
    include "koneksi.php";
    $id = $_GET['del'];
    $query = $koneksi->query("DELETE FROM datakaryawan WHERE id='$id'") ;

        if($query){
                    header("location:datakaryawan.php");
        }else{
                echo "Data Gagal Dihapus. <a href='index.php'>Kembali ke halaman sebelumnya</a>";
        }
?>
