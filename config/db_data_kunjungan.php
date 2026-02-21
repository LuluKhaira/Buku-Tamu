<?php
include_once '../config/connect.php';

$search = mysqli_real_escape_string($connect, $_GET['search'] ?? '');
$dari = $_GET['dari'] ?? '';
$sampai = $_GET['sampai'] ?? '';

$sql = "SELECT * FROM pengunjung WHERE 1=1";

if ($search !== '') {
    $sql .= " AND (
        nama LIKE '%$search%'
        OR instansi LIKE '%$search%'
        OR tanggal LIKE '%$search%'
    )";
}

if ($dari !== '' && $sampai !== '') {
    $sql .= " AND tanggal BETWEEN '$dari' AND '$sampai'";
}   

$sql .= " ORDER BY 
            (waktu_pulang IS NULL) DESC,
            tanggal DESC,
            waktu_datang DESC";

if (!function_exists('generateKode')) {
    function generateKode($length = 6)
    {
        $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $kode = '';
        for ($i = 0; $i < $length; $i++) {
            $kode .= $chars[rand(0, strlen($chars) - 1)];
        }
        return $kode;
    }
}
?>