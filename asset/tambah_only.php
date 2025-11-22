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

                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label small fw-semibold">Nama *</label>
                                <input type="text" name="pengunjung" class="form-control"
                                    placeholder="Masukkan nama anda" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label small fw-semibold">No Handphone *</label>
                                <input type="text" name="instansi" class="form-control" placeholder="08xxxxxxxxxx"
                                    required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label small fw-semibold">Instansi *</label>
                            <input type="tel" name="no_hp" class="form-control" placeholder="xxxxxx" required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label small fw-semibold">Tujuan *</label>
                            <textarea name="tujuan" class="form-control" rows="5"
                                placeholder="Masukkan tujuan kedatangan..." required></textarea>
                        </div>

                        <div class="d-flex align-items-center gap-2">
                            <button type="submit" class="btn btn-send ms-2">Simpan Data</button>
                        </div>
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


        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../asset/card_tambah.js"></script>



</body>

</html>