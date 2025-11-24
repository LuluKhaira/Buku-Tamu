<?php
include '../config/connect.php';

$no_pengunjung   = $_POST['no_pengunjung'];
$nama       = $_POST['nama'];
$no_hp      = $_POST['no_hp'];
$tanggal    = date("Y-m-d"); 
$waktu      = date("H:i:s");   
$instansi   = $_POST['instansi'];
$tujuan     = $_POST['tujuan'];
$jenis      = $_POST['jenis'];


$input = mysqli_query(
    $connect,
    "INSERT INTO pengunjung (no_pengunjung, nama, no_hp, tanggal, waktu, instansi, tujuan, jenis) 
     VALUES('$no_pengunjung', '$nama', '$no_hp', '$tanggal', '$waktu', '$instansi', '$tujuan', '$jenis' )"
) or die(mysqli_error($connect));

if ($input) {
    echo "<script>
            alert('Data Berhasil Disimpan');
            window.location.href = '../asset/tambah_only.php';
          </script>";
} else {
    echo "<script>
            alert('Gagal Menyimpan Data');
            window.location.href = '../asset/tambah_only.php';
          </script>";
}
