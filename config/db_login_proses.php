<?php
include "connect.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($connect, "SELECT * FROM admin WHERE username='$username'");
$cek = mysqli_num_rows($query);

if ($cek > 0) {
    $data = mysqli_fetch_assoc($query);

    if ($password == $data['password']) {
        echo "<script>alert('Login berhasil');</script>";
    } else {
        echo "<script>alert('Password salah');</script>";
    }
} else {
    echo "<script>alert('Username tidak ditemukan');</script>";
}
header("Location: ../dashboard_staffTU/beranda.php");
exit();

?>
