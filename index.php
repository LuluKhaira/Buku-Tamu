<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Sistem Buku Tamu Staff TU - Pencatatan kehadiran modern dan efisien" />
    <meta name="author" content="The Fighter - IFA Pagi-1" />
    <title>Buku Tamu Staff TU</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="asset/tambah.css">


</head>

<style>
    body {
        font-family: 'Poppins', sans-serif !important;
    }

    .card-img-top {
        height: 220px;
        object-fit: cover;
        width: 100%;
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

<body class="pt-5 pt-lg-4 mt-5" style="background:#f3f4f6;">
    <div class="container py-5 mt-5 align-items-center" style="min-height: 90vh;">
        <?php include 'Nav_Side_Bar/nav_index.php'; ?>
        <div class="row gy-4 gx-4">


            <div class="col-lg-6">
                <div class="no-bg-panel">

                    <?php $active = 'satuan'; ?>
                    <?php include 'Nav_Side_Bar/nav_tambah.php'; ?>

                    <h2 class="fw-bold mb-4">
                        Silahkan isi Informasi <span style="color: #f4b942; font-style: italic;">Pengunjung!</span>
                    </h2>

                    <form id="formTamu">

                        <input type="hidden" name="jenis" value="satuan">

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label small fw-semibold">Nama *</label>
                                <input type="text" name="nama" class="form-control" placeholder="Masukkan nama anda"
                                    required oninvalid="this.setCustomValidity('Nama wajib diisi')"
                                    oninput="this.setCustomValidity('')">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label small fw-semibold">No Handphone *</label>
                                <input type="number" name="no_hp" class="form-control" placeholder="08xxxxxxxxxx"
                                    required oninvalid="this.setCustomValidity('No Handphone wajib diisi')" oninput="this.setCustomValidity('');
                                    if (this.value.length > 12) {
                                    this.value = this.value.slice(0, 12); }
                                    ">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label small fw-semibold">Instansi *</label>
                            <input type="text" name="instansi" class="form-control"
                                placeholder="Instansi / Sekolah / Perusahaan" required
                                oninvalid="this.setCustomValidity('Instansi wajib diisi')"
                                oninput="this.setCustomValidity('')">
                        </div>

                        <div class="mb-3">
                            <label class="form-label small fw-semibold">Tujuan *</label>
                            <textarea type="text" name="tujuan" class="form-control" rows="4"
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
                    <h5 class="fw-bold mb-3">Simpan data anda jika berhasil!</h5>
                    <p class="opacity-75">Silakan lengkapi data diri Anda.</p>
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
    <script src="asset/card_tambah_only.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>