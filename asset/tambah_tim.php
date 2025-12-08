<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelompok Pengunjung</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../asset/tambah.css">

    <style>
        .info-panel {
            background-color: #1f5f57;
            color: white;
            padding: 25px;
            border-radius: 20px;
            width: 100%;
        }
        .no-bg-panel {
            padding: 10px 0;
        }
    </style>
</head>

<body>
    <div class="container py-5 mt-3">
        <div class="row gy-4 gx-4">

            <div class="col-lg-6">
                <div class="no-bg-panel">

                    <?php $active = 'kelompok'; ?>
                    <?php include '../Nav_Side_Bar/nav_tambah.php'; ?>

                    <h2 class="fw-bold mb-4">
                        Silahkan isi Informasi <span style="color: #f4b942; font-style: italic;">Pengunjung!</span>
                    </h2>

                    <form id="formTamu">
                        <input type="hidden" name="jenis" value="kelompok">

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label small fw-semibold">Nama Penanggung Jawab *</label>
                                <input type="text" name="nama" class="form-control"
                                    placeholder="Nama PIC/Ketua Rombongan" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label small fw-semibold">No Handphone PJ *</label>
                                <input type="text" name="no_hp" class="form-control" placeholder="08xxxxxxxxxx" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label small fw-semibold">Instansi/Asal *</label>
                            <input type="text" name="instansi" class="form-control"
                                placeholder="Nama instansi / asal rombongan" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label small fw-semibold">Jumlah Anggota *</label>
                            <input type="number" name="jumlah" class="form-control" placeholder="Contoh: 35" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label small fw-semibold">Tujuan Kedatangan *</label>
                            <textarea name="tujuan" class="form-control" rows="2"
                                placeholder="Masukkan tujuan kedatangan..." required></textarea>
                        </div>

                        <div class="d-flex align-items-center gap-3 mt-3">
                            <a href="../logout.php" class="btn btn-danger px-4"
                                style="border-radius: 20px; font-weight: 600;">
                                Kembali
                            </a>

                            <button type="button" id="btnSimpan" class="btn btn-send px-4">
                                Simpan Data
                            </button>
                        </div>
                    </form>

                </div>
            </div>


            <div class="col-lg-6">
                <div class="info-panel" id="previewPanel">
                    <h5 class="fw-bold mb-3">Preview Data</h5>
                    <p class="opacity-75">Belum ada data yang diinput.</p>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../asset/card_tambah_tim.js"></script>

</body>

</html>
