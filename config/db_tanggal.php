<?php
include_once '../config/connect.php';

$dari   = $_GET['dari'] ?? '';
$sampai = $_GET['sampai'] ?? '';

if ($dari !== '' && $sampai !== '') {
    $sql = "SELECT * FROM pengunjung 
            WHERE tanggal BETWEEN '$dari' AND '$sampai'
            ORDER BY tanggal DESC, waktu DESC";
} else {
    $sql = "SELECT * FROM pengunjung 
            ORDER BY tanggal DESC, waktu DESC";
}

$q = mysqli_query($connect, $sql);

?>
