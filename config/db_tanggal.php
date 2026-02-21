<?php
include_once '../config/connect.php';

// Ambil filter
$dari   = $_GET['dari'] ?? '';
$sampai = $_GET['sampai'] ?? '';
$status = $_GET['status'] ?? '';
$search = $_GET['search'] ?? '';

// Query builder
$where = [];

// Filter tanggal range
if ($dari && $sampai) {
    $where[] = "tanggal BETWEEN ? AND ?";
}

// Filter status
if ($status === "datang") {
    $where[] = "waktu_pulang IS NULL";
} elseif ($status === "pulang") {
    $where[] = "waktu_pulang IS NOT NULL";
}

// Filter search (nama, instansi, tujuan, tanggal)
if (!empty($search)) {
    $where[] = "(nama LIKE ? OR instansi LIKE ? OR tujuan LIKE ?)";
}

$where_sql = $where ? 'WHERE ' . implode(' AND ', $where) : '';

// Prepare query
$stmt = $connect->prepare("SELECT * FROM pengunjung $where_sql ORDER BY tanggal DESC, waktu_datang DESC");

// Bind param
$bind_types = '';
$bind_values = [];

if ($dari && $sampai) {
    $bind_types .= 'ss';
    $bind_values[] = $dari;
    $bind_values[] = $sampai;
}

if (!empty($search)) {
    $bind_types .= 'sss';
    $likeSearch = "%$search%";
    $bind_values[] = $likeSearch;
    $bind_values[] = $likeSearch;
    $bind_values[] = $likeSearch;
}

// Bind parameter dynamically
if ($bind_values) {
    $stmt->bind_param($bind_types, ...$bind_values);
}

$stmt->execute();
$q = $stmt->get_result();

// Ambil semua data ke array
$pengunjung = [];
while ($row = mysqli_fetch_assoc($q)) {
    $pengunjung[] = $row;
}
?>
