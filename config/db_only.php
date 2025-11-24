<?php
include '../config/connect.php';

$nama       = $_POST['nama'];
$no_hp      = $_POST['no_hp'];
$tanggal    = date("Y-m-d");
$waktu      = date("H:i:s");
$instansi   = $_POST['instansi'];
$tujuan     = $_POST['tujuan'];
$jenis      = $_POST['jenis']; // otomatis "satuan"

// jumlah otomatis 1 untuk satuan
$jumlah = 1;

$input = mysqli_query(
    $connect,
    "INSERT INTO pengunjung (nama, no_hp, tanggal, waktu, instansi, tujuan, jenis, jumlah)
     VALUES ('$nama', '$no_hp', '$tanggal', '$waktu', '$instansi', '$tujuan', '$jenis', '$jumlah')"
);

if ($input) {
    echo "<script>
            alert('Data Berhasil Disimpan');
            window.location.href = '../asset/tambah_only.php';
          </script>";
} else {
    echo mysqli_error($connect);
}
?>
