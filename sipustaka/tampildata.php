<?php
    include "koneksi.php";
    echo "<html>";
    echo "<head>";
    echo "<style>
    table,td {
        border: 1px solid #ddd;
        padding: 8px;
        font-family: sugoe ui;
    }
    th{
        padding-left: 15px;}";
    echo "</style>";
    echo "</head>";
    echo "<body>";
    echo "</body>";
    echo "</html>";

    $panggil_db = mysqli_query($koneksi, "select*from mahasiswa");
        echo "<h3>Data Mahasiswa</h3>";
        echo "<table>";
        echo "<tr>";
        echo "<th>NIM</th>";
        echo "<th>Nama</th>";
        echo "<th>Prodi</th>";
        echo "<th>Opsi</th>";
        echo "</tr>";
while ($row = mysqli_fetch_array($panggil_db, MYSQLI_ASSOC))
    {
        echo "<tr>";
        echo "<td>".$row['nim'],"</td>";
        echo "<td>".$row['nama'],"</td>";
        echo "<td>".$row['prodi'],"</td>";
        echo "<td><a class='view' href=deletemahasiswa.php?del=$row[nim]>Hapus</a> ||
        <a class='link_view' href=viewmahasiswa.php?view=$row[nim]>View</a> ||
        <a class='link_view' href=editmahasiswa.php?view=$row[nim]>Edit</a></td>";
        echo "</tr>";
    }
?>

<form action='form_tambah_mahasiswa.php' method="POST">
    <table>
        <tr>
            <center><td><input type="submit" name="tambah" value="Tambah data"></td></center>
        </tr>
    </table>
</form>

<?php 
  $panggil_db = mysqli_query($koneksi, "select*from buku");
      echo "<h3>Data Buku</h3>";
      echo "<table>";
      echo "<tr>";
      echo "<th>ID Buku</th>";
      echo "<th>Nama Buku</th>";
      echo "<th>Pengarang</th>";
      echo "<th>Penerbit</th>";
      echo "<th>Opsi</th>";
      echo "</tr>";

  while ($row = mysqli_fetch_array($panggil_db, MYSQLI_ASSOC))
  {
      echo "<tr>";
      echo "<td>".$row['id_buku'],"</td>";
      echo "<td>".$row['nama_buku'],"</td>";
      echo "<td>".$row['pengarang'],"</td>";
      echo "<td>".$row['penerbit'],"</td>";
      echo "<td><a class='view' href=deletebuku.php?del=$row[id_buku]>Hapus</a> ||
      <a class='link_view' href=viewbuku.php?view=$row[id_buku]>View</a> ||
      <a class='link_view' href=editbuku.php?view=$row[id_buku]>Edit</a></td>";
      echo "</tr>";
  }  
?>

<form action='form_tambah_buku.php' method="POST">
    <table>
        <tr>
            <center><td><input type="submit" name="tambah" value="Tambah data"></td></center>
        </tr>
    </table>
</form>

<?php

