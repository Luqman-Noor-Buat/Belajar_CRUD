<?php
include "koneksi.php";
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jk = $_POST['jenis_kelamin'];
$prodi = $_POST['prodi'];
$asal = $_POST['asal_kota'];

$sql ="UPDATE mahasiswa SET
        nama = '$nama',
        jenis_kelamin = '$jk',
        prodi = '$prodi',
        asal_kota = '$asal' 
        WHERE nim=$nim";
$hasil = mysqli_query($koneksi, $sql);
if(!$hasil){
    echo "
    <script>
      alert('Anda gagal memperbarui data, silahkan coba kembali :(');
      document.location.href='ubah-data.php';   
    </script>
    ";
}else{
    echo "
    <script>
      alert('Anda telah berhasil mengubah data');
      document.location.href='menampilkan-data.php';   
    </script>";
}

?>