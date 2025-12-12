<?php
session_start();
include '../config/connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $connect->prepare("SELECT * FROM admin WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    header("Location: ../login.php?error=notfound");
    exit();
}

$data = $result->fetch_assoc();

// Cek password
if ($password !== $data['password']) {
    header("Location: ../login.php?error=wrongpass");
    exit();
}

// Jika berhasil login
$_SESSION['username'] = $data['username'];
$_SESSION['login'] = true;

// Redirect kembali, tampilkan alert success
header("Location: ../login.php?success=1");
exit();
?>