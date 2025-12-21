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
        <i class="bi bi-exclamation-triangle-fill fs-4"></i>
        <div>
            <strong>Session ID tidak ditemukan.</strong><br>
            Mohon periksa kembali.
        </div>
    </div>';
    exit;
}

$d = mysqli_fetch_assoc($q);


$waktu_datang = isset($d['waktu_datang']) && $d['waktu_datang'] != null 
    ? date('H:i', strtotime($d['waktu_datang']))
    : '-'; 


echo '
<div class="card border-0 shadow-lg rounded-4 p-4 mb-3" style="max-width: 500px; margin:auto;">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="fw-bold mb-0">'.$d['kode'].'</h5>
        <div class="text-end">
            <span class="badge bg-warning me-2">MASUK</span>
            <small class="text-muted">'.$waktu_datang.'</small>
        </div>
    </div>

    <ul class="list-group list-group-flush mb-3">
        <li class="list-group-item py-2"><i class="bi bi-building me-2"></i><strong>Instansi:</strong> '.$d['instansi'].'</li>
        <li class="list-group-item py-2"><i class="bi bi-telephone me-2"></i><strong>No HP:</strong> '.$d['no_hp'].'</li>
        <li class="list-group-item py-2"><i class="bi bi-geo-alt me-2"></i><strong>Tujuan:</strong><br>'.$d['tujuan'].'</li>
    </ul>

    <button onclick="checkout(\''.$d['kode'].'\')" 
        class="btn btn-danger w-100 fw-semibold shadow-sm">
        <i class="bi bi-box-arrow-right me-2"></i> KONFIRMASI KELUAR
    </button>
</div>';
