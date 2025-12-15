<?php
session_start();
header('Content-Type: application/json');
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!isset($_SESSION['username'])) {
        echo json_encode(['status' => 'error', 'message' => 'Session username tidak ditemukan!']);
        exit;
    }

    $username_baru = trim($_POST['username_baru'] ?? '');
    $username_lama = $_SESSION['username'];

    if ($username_baru === '') {
        echo json_encode(['status' => 'error', 'message' => 'Username tidak boleh kosong!']);
        exit;
    }

    if (strpos($username_baru, ' ') !== false) {
        echo json_encode(['status' => 'error', 'message' => 'Username tidak boleh mengandung spasi!']);
        exit;
    }

    $stmt = $connect->prepare("UPDATE admin SET username = ? WHERE username = ?");
    $stmt->bind_param("ss", $username_baru, $username_lama);

    if ($stmt->execute()) {
        $_SESSION['username'] = $username_baru;
        echo json_encode(['status' => 'success', 'message' => 'Username berhasil diganti!']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Gagal mengganti username.']);
    }

    $stmt->close();
    $connect->close();
}
