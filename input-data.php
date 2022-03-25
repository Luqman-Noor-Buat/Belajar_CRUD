<?php

include "koneksi.php";

if(isset($_POST["submit"])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $prodi = $_POST['prodi'];
    $asal = $_POST['asal_kota'];


$sql = "INSERT INTO mahasiswa VALUE('$nim','$nama','$jk','$prodi','$asal')";
$hasil = mysqli_query($koneksi, $sql);
if(!$hasil){
    echo "
    <script>
      alert('Anda gagal menginputkan data, silahkan coba kembali :(');
      document.location.href='input-data.php';   
    </script>
    ";
}else{
    echo "
    <script>
      alert('Anda telah berhasil menginputkan data ke tabel mahasiswa');
      document.location.href='menampilkan-data.php';   
    </script>";}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masukkan data</title>
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
            <form action="" method="post">
            <tr>
                <td width="200px" class="label">NIM</td>
                <td style="width:250px"><input type="text" name="nim" class="form-input" required></td>
            </tr>
            <tr>
                <td class="label">Nama</td>
                <td><input type="text" name="nama" class="form-input" required></td>
            </tr>
            <tr>
                <td class="label">Jenis kelamin</td>
                <td><input type="text" name="jenis_kelamin" class="form-input" required></td>
            </tr>
            <tr>
                <td class="label">Prodi</td>
                <td><input type="text" name="prodi" class="form-input" required></td>
            </tr>
            <tr>
                <td class="label">Asal kota</td>
                <td><input type="text" name="asal_kota" class="form-input" required></td>
            </tr>
            <tr>
                <td colspan="2" class="label" height="60px">
                <button type="submit" name="submit">Kirim</button>
                </td>
            </tr>
            </form>
        </table>
</center>
</body>
</html>