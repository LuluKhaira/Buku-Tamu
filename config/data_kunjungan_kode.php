<?php
include '../config/connect.php';
include '../config/db_data_kunjungan.php';

// Ambil data dari form
$nama       = $_POST['nama'] ?? '';
$no_hp      = $_POST['no_hp'] ?? '';
$instansi   = $_POST['instansi']?? '';
$tujuan     = $_POST['tujuan']?? '';
$jumlah   = $_POST['jumlah'] ?? 1;
$jenis      = $_POST['jenis']?? '';
$tanggal    = date("Y-m-d");
$waktuDatang = date("H:i:s");

// Generate kode random
$kode = generateKode();

// Cek kode unik (opsional)
$qcek = mysqli_query($connect, "SELECT kode FROM pengunjung WHERE kode='$kode'");
while(mysqli_num_rows($qcek) > 0){
    $kode = generateKode(); // generate ulang kalau bentrok
    $qcek = mysqli_query($connect, "SELECT kode FROM pengunjung WHERE kode='$kode'");
}

// Insert ke database
$sql = "INSERT INTO pengunjung (kode, nama, no_hp, instansi, tujuan, jumlah, jenis, tanggal, waktu_datang, status)
        VALUES ('$kode', '$nama', '$no_hp', '$instansi', '$tujuan', '$jumlah', '$jenis', '$tanggal', '$waktu_datang', 'sedang')";

if(mysqli_query($connect, $sql)){
    echo json_encode(['status'=>'success','kode'=>$kode]);
}else{
    echo json_encode(['status'=>'error','message'=>mysqli_error($connect)]);
}
?>
