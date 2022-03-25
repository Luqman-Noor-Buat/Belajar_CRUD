<?php

include "koneksi.php";
$nim = $_GET['id'];

$sql ="SELECT * FROM mahasiswa WHERE nim=$nim";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Query salah";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu ubah data</title>
    <style>
      table {
        border-collapse: collapse;
        border: 2px solid black;
      }
      .form-input{
          width: 250px;
          height: 20px;
          font-size: 15px;
          font-weight: 700;
      }
      .label{
        background-color: yellow; 
        font-size: 20px; 
        text-align:center; 
      }
      button{
        width:100px; 
        height:40px; 
        font-size:20px; 
        border-radius:10px;
        cursor: pointer;
      }
      button:hover{
          height: 45px;
          width: 110px;
          font-weight: bold;
      }
      </style>
</head>
<body>
    <center>
    <h1><strong>Inputkan data diri anda</strong></h1>
        <table width="450" border="0" cellpadding="10">
            <?php while($row = mysqli_fetch_array($hasil)) : ?>
            <form action="ubah.php" method="post">
            <tr>
                <td width="200px" class="label">NIM</td>
                <td style="width:250px"><input type="text" name="nim" class="form-input" value="<?php echo $row['nim'] ?>" required></td>
            </tr>
            <tr>
                <td class="label">Nama</td>
                <td><input type="text" name="nama" class="form-input" value="<?php echo $row['nama'] ?>" required></td>
            </tr>
            <tr>
                <td class="label">Jenis kelamin</td>
                <td><input type="text" name="jenis_kelamin" class="form-input" value="<?php echo $row['jenis_kelamin'] ?>" required></td>
            </tr>
            <tr>
                <td class="label">Prodi</td>
                <td><input type="text" name="prodi" class="form-input" value="<?php echo $row['prodi'] ?>" required></td>
            </tr>
            <tr>
                <td class="label">Asal kota</td>
                <td><input type="text" name="asal_kota" class="form-input" value="<?php echo $row['asal_kota'] ?>" required></td>
            </tr>
            <tr>
                <td colspan="2" class="label" height="60px">
                <button type="submit" name="submit">Ubah</button>
                </td>
            </tr>
            </form>
            <?php endwhile; ?>
        </table>
</center>
</body>
</html>