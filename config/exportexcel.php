<?php
include '../config/connect.php';

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Data_Pengunjung.xls");
header("Pragma: no-cache");
header("Expires: 0");

$tgl1 = $_POST['tanggala'] ?? '';
$tgl2 = $_POST['tanggalb'] ?? '';

if ($tgl1 !== '' && $tgl2 !== '') {
    $sql = "SELECT * FROM pengunjung 
            WHERE tanggal BETWEEN '$tgl1' AND '$tgl2'
            ORDER BY tanggal ASC, waktu ASC";

} elseif ($tgl1 !== '' && $tgl2 === '') {
    $sql = "SELECT * FROM pengunjung 
            WHERE tanggal = '$tgl1'
            ORDER BY tanggal ASC, waktu ASC";

} else {
    $sql = "SELECT * FROM pengunjung ORDER BY tanggal ASC, waktu ASC";
}

$tampil = mysqli_query($connect, $sql);
?>

<table border="1">
    <thead>
        <tr>
            <th colspan="7"><strong>Data Pengunjung</strong></th>
        </tr>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Waktu</th>
            <th>Nama Pengunjung</th>
            <th>Instansi</th>
            <th>Jumlah</th>
            <th>No HP</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $no = 1;
        while ($row = mysqli_fetch_assoc($tampil)) {
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row['tanggal'] ?></td>
                <td><?= date('H:i', strtotime($row['waktu'])) ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['instansi'] ?></td>
                <td><?= $row['jumlah'] ?></td>
                <td><?= $row['no_hp'] ?></td>
            </tr>

        <?php } ?>
    </tbody>
</table>