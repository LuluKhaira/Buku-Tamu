<?php
include_once '../config/connect.php';

$dari   = $_GET['dari'] ?? '';
$sampai = $_GET['sampai'] ?? '';

if ($dari !== '' && $sampai !== '') {
    // Query ketika user filter tanggal
    $sql = "SELECT * FROM pengunjung 
            WHERE tanggal BETWEEN '$dari' AND '$sampai'
            ORDER BY tanggal DESC, waktu DESC";
} else {
    // Query default
    $sql = "SELECT * FROM pengunjung 
            ORDER BY tanggal DESC, waktu DESC";
}

$q = mysqli_query($connect, $sql);

?>
