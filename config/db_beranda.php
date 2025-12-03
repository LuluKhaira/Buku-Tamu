<?php
include "../config/connect.php";
date_default_timezone_set('Asia/Jakarta');

// Hari ini
$q_hari = mysqli_query($connect, "SELECT COUNT(*) FROM pengunjung WHERE DATE(tanggal) = CURDATE()");
$hari_ini = mysqli_fetch_array($q_hari)[0];

// Minggu ini
$q_minggu = mysqli_query($connect, "
    SELECT COUNT(*) 
    FROM pengunjung 
    WHERE YEARWEEK(tanggal, 1) = YEARWEEK(CURDATE(), 1)
");
$minggu_ini = mysqli_fetch_array($q_minggu)[0];

// Bulan ini
$q_bulan = mysqli_query($connect, "
    SELECT COUNT(*) 
    FROM pengunjung 
    WHERE YEAR(tanggal) = YEAR(CURDATE()) 
    AND MONTH(tanggal) = MONTH(CURDATE())
");
$bulan_ini = mysqli_fetch_array($q_bulan)[0];
?>