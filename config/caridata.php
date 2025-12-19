<?php
require_once __DIR__ . '/connect.php';

$kode = $_POST['kode'] ?? '';

if ($kode === '') {
    echo '
    <div class="alert alert-warning rounded-4">
        Session ID tidak boleh kosong.
    </div>';
    exit;
}

$q = mysqli_query($connect, "
    SELECT * FROM pengunjung
    WHERE kode='$kode' AND waktu_pulang IS NULL
    LIMIT 1
");

if (mysqli_num_rows($q) === 0) {
    echo '
    <div class="alert alert-danger rounded-4 d-flex gap-2 align-items-center">
        <i class="bi bi-exclamation-triangle-fill"></i>
        <div>
            <strong>Session ID tidak ditemukan.</strong><br>
            Mohon periksa kembali.
        </div>
    </div>';
    exit;
}

$d = mysqli_fetch_assoc($q);

echo '
<div class="card border-0 shadow rounded-4 p-4">
    <h5 class="fw-bold mb-3">'.$d['kode'].'</h5>

    <p><b>Instansi:</b> '.$d['instansi'].'</p>
    <p><b>No HP:</b> '.$d['no_hp'].'</p>
    <p><b>Tujuan:</b><br>'.$d['tujuan'].'</p>

    <button onclick="checkout(\''.$d['kode'].'\')" 
        class="btn btn-danger w-100">
        KONFIRMASI CHECK-OUT
    </button>
</div>';
