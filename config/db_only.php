<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: application/json');


include '../config/connect.php';
date_default_timezone_set('Asia/Jakarta');

function generateKode($length = 6) {
    return strtoupper(substr(str_shuffle('ABCDEFGHJKLMNPQRSTUVWXYZ23456789'), 0, $length));
}

$nama     = $_POST['nama'] ?? '';
$no_hp    = $_POST['no_hp'] ?? '';
$instansi = $_POST['instansi'] ?? '';
$tujuan   = $_POST['tujuan'] ?? '';
$jenis    = $_POST['jenis'] ?? '';
$jumlah   = $_POST['jumlah'] ?? 1;

if ($nama === '' || $no_hp === '') {
    echo json_encode([
        'status' => 'error',
        'msg'    => 'Data tidak lengkap'
    ]);
    exit;
}

$tanggal = date("Y-m-d");
$waktu   = date("H:i:s");


// generate kode unik
do {
    $kode = generateKode();
    $cek  = mysqli_query($connect, "SELECT kode FROM pengunjung WHERE kode='$kode'");
} while (mysqli_num_rows($cek) > 0);

$sql = "INSERT INTO pengunjung
(kode, nama, no_hp, tanggal, waktu_datang, instansi, tujuan, jumlah, jenis)
VALUES
('$kode','$nama','$no_hp','$tanggal','$waktu','$instansi','$tujuan','$jumlah','$jenis')";

if (!mysqli_query($connect, $sql)) {
    echo json_encode([
        'status' => 'error',
        'msg'    => 'Gagal menyimpan'
    ]);
    exit;
}

// ✅ SUKSES → JSON
echo json_encode([
    'status' => 'success',
    'kode'   => $kode
]);
exit;
