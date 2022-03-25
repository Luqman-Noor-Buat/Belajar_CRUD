<?php

include "koneksi.php";

$sql = "SELECT * FROM mahasiswa";
$hasil = mysqli_query($koneksi, $sql);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan data tabel mahasiswa</title>
    <style>
      table {
        border-collapse: collapse;
      }
      table,
      th,
      td {
        border: 2px solid black;
      }
      .ubah{
          color: green;
          font-weight: bold;
          text-decoration: none;
      }
      .hapus{
          color: red;
          font-weight: bold;
          text-decoration: none;
      }
      .ubah:hover, 
      .hapus:hover{
          text-decoration: underline;
      }
     
    </style>
  </head>
  <body>
    <center>
      <h1><strong>Tabel Mahasiswa</strong></h1>
      <br />
      <table width="1260" cellpadding="10">
        <tr style="background-color: yellow; font-size: 20px">
          <th width="210px"><center>Aksi</center></th>
          <th width="210px"><center>NIM</center></th>
          <th width="210px"><center>Nama</center></th>
          <th width="210px"><center>Jenis Kelamin</center></th>
          <th width="210px"><center>Prodi</center></th>
          <th width="210px"><center>Asal Kota</center></th>
        </tr>
        <?php while($row = mysqli_fetch_array($hasil)) : ?>
        <tr style="text-align: center">
          <td><a href="ubah-data.php?id=<?=$row['nim']?>" class="ubah">Ubah</a> | <a href="hapus.php?id=<?=$row['nim']?>" class="hapus">Hapus</a></td>
          <td><?= $row["nim"]; ?></td>
          <td><?= $row["nama"]; ?></td>
          <td><?= $row["jenis_kelamin"]; ?></td>
          <td><?= $row["prodi"]; ?></td>
          <td><?= $row["asal_kota"]; ?></td>
        </tr>
        <?php endwhile; ?>
      </table>
    </center>
  </body>
</html>