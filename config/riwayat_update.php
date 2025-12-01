<?php
include '../config/connect.php';

$nama       = $_POST['nama'];
$no_hp      = $_POST['no_hp'];
$tanggal    = date("Y-m-d");
$waktu      = date("H:i:s");
$instansi   = $_POST['instansi'];
$tujuan     = $_POST['tujuan'];
$jenis      = $_POST['jenis'];
$id         = $_POST['id']; 

$query = "UPDATE pengunjung SET 
            nama='$nama',
            no_hp='$no_hp',
            tanggal='$tanggal',
            waktu='$waktu',
            instansi='$instansi',
            tujuan='$tujuan',
            jenis='$jenis'
          WHERE id='$id'";

mysqli_query($connect, $query);

// Redirect kembali
header("Location: ../riwayat_update.php");
exit();
?>
