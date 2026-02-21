<?php
include '../config/connect.php';

$id = $_POST['no_pengunjung'] ?? '';

if ($id == '') {
    echo json_encode(['status' => 'error', 'message' => 'ID kosong']);
    exit;
}

$sql = "DELETE FROM pengunjung WHERE no_pengunjung='$id'";

if (mysqli_query($connect, $sql)) {
    echo json_encode(['status' => 'success']);
} else {
    echo json_encode(['status' => 'error', 'message' => mysqli_error($connect)]);
}
