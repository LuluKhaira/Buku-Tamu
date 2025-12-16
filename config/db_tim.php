<?php
include '../config/connect.php';
date_default_timezone_set('Asia/Jakarta');

$nama       = $_POST['nama'] ?? '';
$no_hp      = $_POST['no_hp'] ?? '';
$tanggal    = date("Y-m-d");
$waktu      = date("H:i:s");
$instansi   = $_POST['instansi']?? '';
$tujuan     = $_POST['tujuan']?? '';
$jenis      = $_POST['jenis']?? '';
$jumlah   = $_POST['jumlah'] ?? 1;

if ($jumlah > 1) {
    $jenis = "kelompok";
} else {
    $jenis = "satuan";
}


$input = mysqli_query(
    $connect,
    "INSERT INTO pengunjung (nama, no_hp, tanggal, waktu, instansi, tujuan, jenis, jumlah)
     VALUES ('$nama', '$no_hp', '$tanggal', '$waktu', '$instansi', '$tujuan', '$jenis', '$jumlah')"
);

if ($input) {
    echo "<script>
            alert('Data Berhasil Disimpan');
            window.location.href = 'asset/tambah_tim.php';
          </script>";
} else {
    echo mysqli_error($connect);
}
?>
