<?php
header('Content-Type: application/json');
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
    exit;
}

$id = isset($_POST['id']) ? (int)$_POST['id'] : 0;

if ($id <= 0) {
    echo json_encode(['success' => false, 'message' => 'Invalid id']);
    exit;
}

$sql = "DELETE FROM pengunjung WHERE id = $id";

if (mysqli_query($connect, $sql)) {
    echo json_encode(['success' => true, 'message' => 'Data berhasil dihapus']);
} else {
    echo json_encode(['success' => false, 'message' => mysqli_error($connect)]);
}

?>
