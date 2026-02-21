<?php
include '../config/connect.php';
date_default_timezone_set('Asia/Jakarta');

$id       = $_POST['no_pengunjung'] ?? '';
$nama     = $_POST['nama'] ?? '';
$no_hp    = $_POST['no_hp'] ?? '';
$instansi = $_POST['instansi'] ?? '';
$tujuan   = $_POST['tujuan'] ?? '';
$status   = $_POST['status'] ?? '';

if ($id == '') {
    echo json_encode(['status' => 'error', 'message' => 'ID kosong']);
    exit;
}

// Tentukan waktu_pulang berdasarkan status
if ($status === 'pulang') {
    $waktu_pulang = date('Y-m-d H:i:s'); // waktu sekarang
} else {
    $waktu_pulang = null; // kosongkan jika masih datang
}

// Prepared statement agar aman
$stmt = $connect->prepare("UPDATE pengunjung SET 
    nama = ?, 
    no_hp = ?, 
    instansi = ?, 
    tujuan = ?, 
    waktu_pulang = ?
    WHERE no_pengunjung = ?");

$stmt->bind_param("sssssi", $nama, $no_hp, $instansi, $tujuan, $waktu_pulang, $id);

if ($stmt->execute()) {
    echo json_encode(['status' => 'success']);
} else {
    echo json_encode(['status' => 'error', 'message' => $stmt->error]);
}
$stmt->close();
?>
