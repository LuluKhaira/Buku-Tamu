<?php
include '../config/connect.php';
date_default_timezone_set('Asia/Jakarta');

function generateKode($length = 6) {
    return strtoupper(substr(str_shuffle('ABCDEFGHJKLMNPQRSTUVWXYZ23456789'), 0, $length));
}

$nama       = $_POST['nama'] ?? '';
$no_hp      = $_POST['no_hp'] ?? '';
$instansi   = $_POST['instansi'] ?? '';
$tujuan     = $_POST['tujuan'] ?? '';
$jumlah     = $_POST['jumlah'] ?? 1;
$jenis      = 'kelompok';

$tanggal     = date("Y-m-d");
$waktuDatang = date("H:i:s");
$status      = 'datang';

// === GENERATE KODE UNIK (SAMA KAYAK ONLY) ===
$kode = generateKode();
$cek  = mysqli_query($connect, "SELECT kode FROM pengunjung WHERE kode='$kode'");
while (mysqli_num_rows($cek) > 0) {
    $kode = generateKode();
    $cek  = mysqli_query($connect, "SELECT kode FROM pengunjung WHERE kode='$kode'");
}

// === INSERT DATA ===
$sql = "INSERT INTO pengunjung
        (kode, status, nama, no_hp, tanggal, waktu_datang, instansi, tujuan, jumlah, jenis)
        VALUES
        ('$kode','$status','$nama','$no_hp','$tanggal','$waktuDatang','$instansi','$tujuan','$jumlah','$jenis')";

if (mysqli_query($connect, $sql)) {
    echo json_encode([
        'status' => 'success',
        'kode'   => $kode
    ]);
} else {
    echo json_encode([
        'status'  => 'error',
        'message' => mysqli_error($connect)
    ]);
}
