<?php
// Mulai session
session_start();

// Hapus semua session
session_unset();
session_destroy();

// Arahkan kembali ke landing page (index.php)
header("Location: index.php");
exit();
?>
