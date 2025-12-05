<?php
include "connect.php"; 

$username   = $_POST['username'];
$password   = $_POST['password'];

$cek = mysqli_query($connect, "SELECT * FROM admin WHERE username='$username'");
$jumlah = mysqli_num_rows($cek);

if ($jumlah > 0) {
    mysqli_query($connect, "UPDATE admin SET password='$password' WHERE username='$username'");
    echo "success";
} else {
    echo "not_found";
}
?>
