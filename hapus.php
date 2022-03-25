<?php
include "koneksi.php";
$nim = $_GET['id'];

$sql ="DELETE FROM mahasiswa WHERE nim=$nim";
$hasil = mysqli_query($koneksi, $sql);
if(!$hasil){
    echo "
    <script>
      alert('Anda gagal menghapus data, silahkan coba kembali :(');
      document.location.href='menampilkan-data.php';   
    </script>
    ";
}else{
    echo "
    <script>
      alert('Anda telah berhasil menghapus data ke tabel mahasiswa');
      document.location.href='menampilkan-data.php';   
    </script>";
}

?>