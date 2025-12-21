<?php
require_once __DIR__ . '/connect.php';

$kode = $_POST['kode'] ?? '';

if ($kode === '') {
    echo '<div class="alert alert-danger">Kode kosong</div>';
    exit;
}

mysqli_query($connect, "
    UPDATE pengunjung 
    SET waktu_pulang = NOW() 
    WHERE kode='$kode'
");

echo '
<div class="alert alert-success rounded-4">
    Keluar berhasil. Terima kasih telah berkunjung^^
</div>';
