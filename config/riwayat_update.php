<?php
header('Content-Type: application/json');
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
    exit;
}

$id = isset($_POST['id']) ? (int)$_POST['id'] : 0;
$nama = isset($_POST['nama']) ? mysqli_real_escape_string($connect, $_POST['nama']) : '';
$no_hp = isset($_POST['no_hp']) ? mysqli_real_escape_string($connect, $_POST['no_hp']) : '';
$instansi = isset($_POST['instansi']) ? mysqli_real_escape_string($connect, $_POST['instansi']) : '';
$tujuan = isset($_POST['tujuan']) ? mysqli_real_escape_string($connect, $_POST['tujuan']) : '';
$jumlah = isset($_POST['jumlah']) ? (int)$_POST['jumlah'] : 1;

if ($id <= 0) {
    echo json_encode(['success' => false, 'message' => 'Invalid id']);
    exit;
}

$sql = "UPDATE pengunjung SET 
            nama = '$nama', 
            no_hp = '$no_hp', 
            instansi = '$instansi', 
            tujuan = '$tujuan', 
            jumlah = $jumlah
         WHERE id = $id";

if (mysqli_query($connect, $sql)) {
    echo json_encode(['success' => true, 'message' => 'Data berhasil diperbarui']);
} else {
    echo json_encode(['success' => false, 'message' => mysqli_error($connect)]);
}

?>
