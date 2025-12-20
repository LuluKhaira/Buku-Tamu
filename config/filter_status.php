<?php
include "../config/connect.php";
date_default_timezone_set('Asia/Jakarta');

// Ambil parameter
$status = $_GET['status'] ?? '';
$search = $_GET['search'] ?? '';

// Query builder
$where = []; // array kondisi WHERE



// Filter status
if ($status === "datang") {
    $where[] = "waktu_pulang IS NULL";       // Belum pulang
} elseif ($status === "pulang") {
    $where[] = "waktu_pulang IS NOT NULL";   // Sudah pulang
}

// Search
if (!empty($search)) {
    $search_safe = mysqli_real_escape_string($connect, $search);
    $where[] = "(nama LIKE '%$search_safe%' OR CAST(tanggal AS CHAR) LIKE '%$search_safe%')";
}

// Gabungkan kondisi
$where_sql = '';
if (!empty($where)) {
    $where_sql = ' WHERE ' . implode(' AND ', $where);
}

// Query data semua pengunjung sesuai filter
$sql = "SELECT * FROM pengunjung $where_sql ORDER BY waktu_datang DESC";
$result = mysqli_query($connect, $sql) or die(mysqli_error($connect));

// Ambil data
$pengunjung = [];
while ($row = mysqli_fetch_assoc($result)) {
    $pengunjung[] = $row;
}

// Jumlah total
$total_data = count($pengunjung);
?>
