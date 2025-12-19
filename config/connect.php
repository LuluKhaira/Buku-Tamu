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
     die(json_encode([
        'status' => 'error',
        'message' => 'Koneksi database gagal'
    ]));
}
?>