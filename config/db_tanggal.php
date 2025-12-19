<?php
include_once '../config/connect.php';

$dari   = $_GET['dari'] ?? '';
$sampai = $_GET['sampai'] ?? '';

if ($dari !== '' && $sampai !== '') {
    $stmt = $connect->prepare(
        "SELECT * FROM pengunjung 
         WHERE tanggal BETWEEN ? AND ?
         ORDER BY tanggal DESC, waktu_datang DESC"
    );
    $stmt->bind_param("ss", $dari, $sampai);
    $stmt->execute();
    $q = $stmt->get_result();
} else {
    $q = mysqli_query(
        $connect,
        "SELECT * FROM pengunjung 
         ORDER BY tanggal DESC, waktu_datang DESC"
    );
}
?>
