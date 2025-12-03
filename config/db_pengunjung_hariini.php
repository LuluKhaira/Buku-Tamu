<?php
include "../config/connect.php";
date_default_timezone_set('Asia/Jakarta');

// ================================
// Ambil FILTER dari URL
// ================================
$filter_jenis = isset($_GET['jenis']) ? $_GET['jenis'] : 'all';

// ================================
// Ambil PAGINATION & LIMIT
// ================================
$limit = isset($_GET['limit']) ? (int)$_GET['limit'] : 10;
$page  = isset($_GET['page'])  ? (int)$_GET['page'] : 1;
$search = isset($_GET['search']) ? $_GET['search'] : '';

if ($page < 1) $page = 1; 

$offset = ($page - 1) * $limit;

// ================================
// HITUNG TOTAL DATA
// ================================
$sql_count = "SELECT COUNT(*) AS total 
              FROM pengunjung 
              WHERE DATE(tanggal) = CURDATE()";

// filter jenis
if ($filter_jenis == "satuan") {
    $sql_count .= " AND jenis = 'satuan'";
} elseif ($filter_jenis == "kelompok") {
    $sql_count .= " AND jenis = 'kelompok'";
}

// filter search
if (!empty($search)) {
    $sql_count .= " AND (
        nama LIKE '%$search%' OR
        instansi LIKE '%$search%' OR
        tujuan LIKE '%$search%' OR
        DATE(tanggal) LIKE '%$search%'
    )";
}

$q_count = mysqli_query($connect, $sql_count);
$total_data = mysqli_fetch_assoc($q_count)['total'];

// ================================
// QUERY AMBIL DATA (LIMIT + FILTER)
// ================================
$sql = "SELECT * FROM pengunjung 
        WHERE DATE(tanggal) = CURDATE()";

// filter jenis
if ($filter_jenis == "satuan") {
    $sql .= " AND jenis = 'satuan'";
} elseif ($filter_jenis == "kelompok") {
    $sql .= " AND jenis = 'kelompok'";
}

// filter search
if (!empty($search)) {
    $sql .= " AND (
        nama LIKE '%$search%' OR
        instansi LIKE '%$search%' OR
        tujuan LIKE '%$search%' OR
        DATE(tanggal) LIKE '%$search%'
    )";
}

$sql .= " ORDER BY waktu DESC LIMIT $limit OFFSET $offset";

$result = mysqli_query($connect, $sql);

// ================================
// SIMPAN DATA KE ARRAY
// ================================
$pengunjung_hari_ini = [];
while ($row = mysqli_fetch_assoc($result)) {
    $pengunjung_hari_ini[] = $row;
}

// ================================
// TOTAL HALAMAN
// ================================
$total_page = ceil($total_data / $limit);

// untuk tulisan "Menampilkan X - Y"
$first_number = ($total_data > 0) ? $offset + 1 : 0;
$last_number  = $offset + count($pengunjung_hari_ini);
?>
