<?php
include_once '../config/connect.php';

$search = mysqli_real_escape_string($connect, $_GET['search'] ?? '');
$dari   = $_GET['dari'] ?? '';
$sampai = $_GET['sampai'] ?? '';

$sql = "SELECT * FROM pengunjung WHERE 1=1";

// FILTER SEARCH
if ($search !== '') {
    $sql .= " AND (
        nama LIKE '%$search%'
        OR instansi LIKE '%$search%'
        OR tanggal LIKE '%$search%'
    )";
}

// FILTER TANGGAL
if ($dari !== '' && $sampai !== '') {
    $sql .= " AND tanggal BETWEEN '$dari' AND '$sampai'";
}

$sql .= " ORDER BY tanggal DESC, waktu DESC";
