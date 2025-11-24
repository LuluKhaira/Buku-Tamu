<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>satuan Pengunjung</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../asset/tambah.css">
</head>

<body>
    <div class="container py-5 mt-3">
        <div class="row gy-4 gx-0">

            <!-- Left - Form Section -->
            <div class="col-lg-7">
                <div class="form-panel">
                    <div class="mb-3">
                        <?php $active = 'satuan'; ?>
                        <?php include '../Nav_Side_Bar/nav_tambah.php'; ?>
                        <p class="text-uppercase text-secondary mb-2"
                            style="letter-spacing: 3px; font-size: 13px; font-weight: 500;">TAMBAH PENGUNJUNG</p>
                        <h2 class="fw-bold mb-0">
                            Silahkan isi Informasi <span style="color: #f4b942; font-style: italic;">Pengunjung!</span>
                        </h2>
                    </div>

                    <form action="../config/db_only.php" method="POST">

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label small fw-semibold">Nama *</label>
                                <input type="text" name="nama" class="form-control"
                                    placeholder="Masukkan nama anda" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label small fw-semibold">No Handphone *</label>
                                <input type="text" name="no_hp" class="form-control" placeholder="08xxxxxxxxxx"
                                    required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label small fw-semibold">Instansi *</label>
                            <input type="text" name="instansi" class="form-control" placeholder="xxxxxx" required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label small fw-semibold">Tujuan *</label>
                            <textarea name="tujuan" class="form-control" rows="5"
                                placeholder="Masukkan tujuan kedatangan..." required></textarea>
                        </div>

                        <button type="submit" class="btn btn-send ms-2">Simpan Data</button>
                    </form>


                </div>
            </div>

            <!-- Right - Info Section -->
            <div class="col-lg-5">
                <div class="info-panel" id="previewPanel">
                    <h5 class="fw-bold mb-3">Preview Data</h5>
                    <p class="opacity-75">Belum ada data yang diinput.</p>
                </div>
            </div>
            <table class="table table-striped table-bordered">
                <tbody>
                    <?php
                    include '../config/connect.php';
                    $query = mysqli_query($connect, "SELECT * FROM pengunjung");
                    $no = 1;
                    while ($data = mysqli_fetch_assoc($query)) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data['no_pengunjung']; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['no_hp']; ?></td>
                            <td><?php echo $data['instansi']; ?></td>
                            <td><?php echo $data['tanggal']; ?></td>
                            <td><?php echo $data['waktu']; ?></td>

                            <td><?php echo $data['tujuan']; ?></td>
                            <td><?php echo $data['jumlah']; ?></td>
                            <td>
                            </td>
                        </tr>
                    <?php
                    } ?>
                </tbody>
            </table>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../asset/card_tambah_only.js"></script>



</body>

</html>