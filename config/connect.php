<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "bukutamu";
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