<?php

$koneksi = mysqli_connect("localhost", "root", "", "kampus");
if (!$koneksi){
    echo "Koneksi ke database kampus GAGAL";
}

?>