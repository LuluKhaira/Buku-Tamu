<?php
include '../config/connect.php';

$id = $_POST['no_pengunjung'] ?? '';

if ($id == '') {
    echo json_encode(['status' => 'error', 'message' => 'ID kosong']);
    exit;
}

$sql = "UPDATE pengunjung 
        SET status='pulang',
            waktu_pulang = CURTIME()
        WHERE no_pengunjung='$id'
          AND status='datang'";

if (mysqli_query($connect, $sql)) {
    echo json_encode(['status' => 'success']);
} else {
    echo json_encode(['status' => 'error', 'message' => mysqli_error($connect)]);
}
