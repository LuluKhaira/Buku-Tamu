<?php
include "../config/connect.php";
date_default_timezone_set('Asia/Jakarta');

// ======================
// Ambil parameter
// ======================
$filter_jenis = $_GET['jenis'] ?? 'all';
$status = $_GET['status'] ?? '';
$search = $_GET['search'] ?? '';

$limit = isset($_GET['limit']) ? (int) $_GET['limit'] : 10;
$page = isset($_GET['page']) ? (int) $_GET['page'] : 1;

if ($page < 1)
    $page = 1;
$offset = ($page - 1) * $limit;

// ======================
// QUERY COUNT
// ======================
$sql_count = "SELECT COUNT(*) AS total 
              FROM pengunjung 
              WHERE DATE(tanggal) = CURDATE()";



// filter status
if ($status === "datang") {
    $sql .= " AND waktu_pulang IS NULL";
} elseif ($status === "pulang") {
    $sql .= " AND waktu_pulang IS NOT NULL";
}

// search
if (!empty($search)) {
    $sql_count .= " AND (
        nama LIKE '%$search%' OR
        DATE(tanggal) LIKE '%$search%'
    )";
}

$q_count = mysqli_query($connect, $sql_count);
$total_data = mysqli_fetch_assoc($q_count)['total'];

// ======================
// QUERY DATA
// ======================
$sql = "SELECT * FROM pengunjung 
        WHERE DATE(tanggal) = CURDATE()";

// filter jenis
if ($filter_jenis === "satuan") {
    $sql .= " AND jenis = 'satuan'";
} elseif ($filter_jenis === "kelompok") {
    $sql .= " AND jenis = 'kelompok'";
}

// filter status
if ($status === "datang") {
    $sql .= " AND waktu_datang IS NOT NULL AND waktu_pulang IS NULL";
} elseif ($status === "pulang") {
    $sql .= " AND waktu_pulang IS NOT NULL";
}

// search
if (!empty($search)) {
    $sql .= " AND (
        nama LIKE '%$search%' OR
        DATE(tanggal) LIKE '%$search%'
    )";
}

$sql .= " ORDER BY waktu_datang DESC LIMIT $limit OFFSET $offset";

$result = mysqli_query($connect, $sql);

// ======================
// Ambil data
// ======================
$pengunjung_hari_ini = [];
while ($row = mysqli_fetch_assoc($result)) {
    $pengunjung_hari_ini[] = $row;
}

// ======================
// Pagination info
// ======================
$total_page = ceil($total_data / $limit);
$first_number = ($total_data > 0) ? $offset + 1 : 0;
$last_number = $offset + count($pengunjung_hari_ini);
?>