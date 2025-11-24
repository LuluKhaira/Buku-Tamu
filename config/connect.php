<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "bukutamu"; //Nama Database 
// melakukan koneksi ke db 
$connect = mysqli_connect(
    $host,
    $user,
    $pass,
    $db
);
if (!$connect) {
    echo "Gagal konek: " . mysqli_connect_error();
}
?>