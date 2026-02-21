<?php
require '../config/connect.php';
require '../config/fpdf/fpdf.php';

$tgl1 = $_POST['tanggala'] ?? '';
$tgl2 = $_POST['tanggalb'] ?? '';

// Ambil semua pengunjung sesuai tanggal
if ($tgl1 !== '' && $tgl2 !== '') {
    $sql = "SELECT * FROM pengunjung 
            WHERE tanggal BETWEEN '$tgl1' AND '$tgl2'
            ORDER BY tanggal ASC, waktu_datang ASC";
} elseif ($tgl1 !== '' && $tgl2 === '') {
    $sql = "SELECT * FROM pengunjung 
            WHERE tanggal = '$tgl1'
            ORDER BY tanggal ASC, waktu_datang ASC";
} else {
    $sql = "SELECT * FROM pengunjung ORDER BY tanggal ASC, waktu_datang ASC";
}

$result = mysqli_query($connect, $sql);

$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();
$pdf->SetFont('Times', 'B', 14);
$pdf->Cell(0, 10, 'Data Pengunjung', 0, 1, 'C');
$pdf->Ln(5);

// Lebar kolom
$w_no      = 10;
$w_tanggal = 23;
$w_waktu   = 35;
$w_nama    = 40;
$w_inst    = 40;
$w_jml     = 15;
$w_hp      = 27;
$total_width = $w_no + $w_tanggal + $w_waktu + $w_nama + $w_inst + $w_jml + $w_hp;
$marginX = ($pdf->GetPageWidth() - $total_width) / 2;

// ================== TABEL DATANG ==================
$pdf->SetFont('Times', 'B', 12);
$pdf->Cell(0, 8, 'Pengunjung Datang', 0, 1, 'C');
$pdf->Ln(2);

$pdf->SetFont('Times', 'B', 10);
$pdf->SetX($marginX);
$pdf->Cell($w_no, 10, 'No', 1, 0, 'C');
$pdf->Cell($w_tanggal, 10, 'Tanggal', 1, 0, 'C');
$pdf->Cell($w_waktu, 10, 'Waktu Datang', 1, 0, 'C');
$pdf->Cell($w_nama, 10, 'Nama', 1, 0, 'C');
$pdf->Cell($w_inst, 10, 'Instansi', 1, 0, 'C');
$pdf->Cell($w_jml, 10, 'Jumlah', 1, 0, 'C');
$pdf->Cell($w_hp, 10, 'No HP', 1, 1, 'C');

$pdf->SetFont('Times', '', 10);
$no = 1;
mysqli_data_seek($result, 0); // reset pointer
while ($row = mysqli_fetch_assoc($result)) {
    $pdf->SetX($marginX);
    $pdf->Cell($w_no, 8, $no++, 1, 0, 'C');
    $pdf->Cell($w_tanggal, 8, $row['tanggal'], 1, 0, 'C');
    $pdf->Cell($w_waktu, 8, date('H:i', strtotime($row['waktu_datang'])), 1, 0, 'C');
    $pdf->Cell($w_nama, 8, $row['nama'], 1, 0, 'L');
    $pdf->Cell($w_inst, 8, $row['instansi'], 1, 0, 'L');
    $pdf->Cell($w_jml, 8, $row['jumlah'], 1, 0, 'C');
    $pdf->Cell($w_hp, 8, $row['no_hp'], 1, 1, 'L');
}

// ================== TABEL PULANG ==================
$pdf->Ln(5);
$pdf->SetFont('Times', 'B', 12);
$pdf->Cell(0, 8, 'Pengunjung Pulang', 0, 1, 'C');
$pdf->Ln(2);

$pdf->SetFont('Times', 'B', 10);
$pdf->SetX($marginX);
$pdf->Cell($w_no, 10, 'No', 1, 0, 'C');
$pdf->Cell($w_tanggal, 10, 'Tanggal', 1, 0, 'C');
$pdf->Cell($w_waktu, 10, 'Waktu Pulang', 1, 0, 'C');
$pdf->Cell($w_nama, 10, 'Nama', 1, 0, 'C');
$pdf->Cell($w_inst, 10, 'Instansi', 1, 0, 'C');
$pdf->Cell($w_jml, 10, 'Jumlah', 1, 0, 'C');
$pdf->Cell($w_hp, 10, 'No HP', 1, 1, 'C');

$pdf->SetFont('Times', '', 10);
$no = 1;
mysqli_data_seek($result, 0); // reset pointer
while ($row = mysqli_fetch_assoc($result)) {
    if (!empty($row['waktu_pulang'])) { // tampilkan hanya yang sudah pulang
        $pdf->SetX($marginX);
        $pdf->Cell($w_no, 8, $no++, 1, 0, 'C');
        $pdf->Cell($w_tanggal, 8, $row['tanggal'], 1, 0, 'C');
        $pdf->Cell($w_waktu, 8, date('H:i', strtotime($row['waktu_pulang'])), 1, 0, 'C');
        $pdf->Cell($w_nama, 8, $row['nama'], 1, 0, 'L');
        $pdf->Cell($w_inst, 8, $row['instansi'], 1, 0, 'L');
        $pdf->Cell($w_jml, 8, $row['jumlah'], 1, 0, 'C');
        $pdf->Cell($w_hp, 8, $row['no_hp'], 1, 1, 'L');
    }
}

$pdf->Output('D', 'data_kunjungan.pdf');
?>
