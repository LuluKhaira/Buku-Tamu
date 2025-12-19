<?php
include '../config/connect.php';

$id       = $_POST['no_pengunjung'] ?? '';
$nama     = $_POST['nama'] ?? '';
$no_hp    = $_POST['no_hp'] ?? '';
$instansi = $_POST['instansi'] ?? '';
$tujuan   = $_POST['tujuan'] ?? '';
$jumlah   = $_POST['jumlah'] ?? '';


if ($id == '') {
    echo json_encode(['status' => 'error', 'message' => 'ID kosong']);
    exit;
}

$sql = "UPDATE pengunjung SET 
            nama='$nama',
            no_hp='$no_hp',
            instansi='$instansi',
            tujuan='$tujuan',
            jumlah='$jumlah'
        WHERE no_pengunjung='$id'
        AND status='datang'";

if (mysqli_query($connect, $sql)) {
    echo json_encode(['status' => 'success']);
} else {
    echo json_encode(['status' => 'error', 'message' => mysqli_error($connect)]);
}
