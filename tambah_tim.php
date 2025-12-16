<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelompok Pengunjung</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="asset/tambah.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif !important;
        }

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

<body class="pt-5 pt-lg-4 mt-5" style="background:#f3f4f6;">

    <div class="container py-5 mt-5 align-items-center" style="min-height: 90vh;">
       
            <?php include 'Nav_Side_Bar/nav_index.php'; ?>
            <div class="row gy-4 gx-4">

                <div class="col-lg-6">
                    <div class="no-bg-panel">

                        <?php $active = 'kelompok'; ?>
                        <?php include 'Nav_Side_Bar/nav_tambah.php'; ?>

                        <h2 class="fw-bold mb-4">
                            Silahkan isi Informasi <span style="color: #f4b942; font-style: italic;">Pengunjung!</span>
                        </h2>

                        <form id="formTamu">
                            <input type="hidden" name="jenis" value="kelompok">

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label small fw-semibold">Nama Penanggung Jawab *</label>
                                    <input type="text" name="nama" class="form-control"
                                        placeholder="Nama PIC/Ketua Rombongan" required
                                        oninvalid="this.setCustomValidity('Nama Penanggung Jawab wajib diisi')"
                                        oninput="this.setCustomValidity('')">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label small fw-semibold">No Handphone PJ *</label>
                                    <input type="number" name="no_hp" class="form-control" placeholder="08xxxxxxxxxx"
                                        required oninvalid="this.setCustomValidity('Nomor HP wajib diisi')" oninput="this.setCustomValidity('');
                                    if (this.value.length > 12) {
                                    this.value = this.value.slice(0, 12); }
                                    ">

                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label small fw-semibold">Instansi/Asal *</label>
                                <input type="text" name="instansi" class="form-control"
                                    placeholder="Nama instansi / asal rombongan" required
                                    oninvalid="this.setCustomValidity('Instansi wajib diisi')"
                                    oninput="this.setCustomValidity('')">

                            </div>

                            <div class="mb-3">
                                <label class="form-label small fw-semibold">Jumlah Anggota *</label>
                                <input type="number" name="jumlah" class="form-control" placeholder="Contoh: 35"
                                    required oninvalid="this.setCustomValidity('Jumlah anggota wajib diisi')"
                                    oninput="this.setCustomValidity('')">

                            </div>

                            <div class="mb-3">
                                <label class="form-label small fw-semibold">Tujuan Kedatangan *</label>
                                <textarea name="tujuan" class="form-control" rows="2"
                                    placeholder="Masukkan tujuan kedatangan..." required
                                    oninvalid="this.setCustomValidity('Tujuan kedatangan wajib diisi')"
                                    oninput="this.setCustomValidity('')"></textarea>

                            </div>

                            <div class="d-flex align-items-center mt-3">
                                <button type="submit" id="btnSimpan" class="btn btn-warning px-4" style="border-radius: 20px; font-weight: 600;">
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

    <footer class="bg-dark text-white py-5">
        <div class="container px-4 px-lg-5">

            <!-- Row Utama -->
            <div class="row g-4 align-items-center">

                <!-- Logo + Judul -->
                <div class="col-lg-6 d-flex align-items-center gap-3">
                    <img src="foto/logo_polibatam.png" alt="Logo Polibatam" style="height: 70px; width: auto;">

                    <div>
                        <h5 class="fw-bold mb-0">
                            <i class="bi bi-book me-2"></i>Buku Tamu Tata Usaha
                        </h5>

                    </div>
                </div>
            </div>

            <hr class="border-secondary my-4">

            <!-- Bawah -->
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <small class="text-white-50">
                        &copy; 2025 Buku Tamu Staff TU.
                    </small>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <small class="text-white-50">
                        Pencipta dari <span class="text-white fw-semibold">The Fighter</span> | IF A Pagi - 1
                    </small>
                </div>
            </div>

        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="asset/card_tambah_tim.js"></script>

</body>

</html>