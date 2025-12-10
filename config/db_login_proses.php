<?php
session_start();

include "connect.php";

 $username = $_POST['username'];
 $password = $_POST['password'];

 $stmt = $connect->prepare("SELECT * FROM admin WHERE username = ?");
 $stmt->bind_param("s", $username);
 $stmt->execute();
 $result = $stmt->get_result();

if ($result->num_rows > 0) {
    $data = $result->fetch_assoc();

    if ($password === $data['password']) {
        
        $_SESSION['username'] = $data['username'];
        $_SESSION['login'] = true; 

        header("Location: ../dashboard_staffTU/beranda.php");
        exit();

    } else {
        header("Location: ../login.php?error=wrongpass");
        exit();
    }
} else {
    header("Location: ../login.php?error=notfound");
    exit();
}
?>