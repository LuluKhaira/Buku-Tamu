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
            <!-- Judul -->
            <div class="text-center mb-4">
                <h2 class="fw-bold">
                    Silakan isi Informasi Keluar
                    <span style="color: #f4b942; font-style: italic;">Pengunjung!</span>
                </h2>
                <p class="text-secondary mb-0">
                    Masukkan Session ID Anda.
                </p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <div class="card shadow-sm border-0 rounded-4">


                        <div class="input-group input-group-lg">
                            <input type="text" id="sessionId" class="form-control border-0"
                                placeholder="Masukkan SESSION ID anda">

                            <button class="btn btn-success px-4" type="button" id="btnCari">
                                <i class="bi bi-search me-1"></i> Cari
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="hasilTicket" class="mt-4"></div>

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


    <script>
        document.addEventListener("DOMContentLoaded", function () {

            const btnCari = document.getElementById("btnCari");
            const sessionInput = document.getElementById("sessionId");
            const hasilTicket = document.getElementById("hasilTicket");

            if (!btnCari) {
                console.error("btnCari tidak ditemukan");
                return;
            }

            btnCari.addEventListener("click", cariData);
            sessionInput.addEventListener("keyup", e => {
                if (e.key === "Enter") cariData();
            });

            function cariData() {
                let kode = sessionInput.value.trim();

                if (kode === "") {
                    hasilTicket.innerHTML = `
                <div class="alert alert-warning rounded-4">
                    Session ID tidak boleh kosong.
                </div>`;
                    return;
                }

                hasilTicket.innerHTML = `
            <div class="text-center text-muted py-4">
                <div class="spinner-border"></div>
                <p class="mt-2 mb-0">Mencari data...</p>
            </div>
        `;

                fetch("config/caridata.php", {
                    method: "POST",
                    headers: { "Content-Type": "application/x-www-form-urlencoded" },
                    body: "kode=" + encodeURIComponent(kode)
                })
                    .then(res => res.text())
                    .then(html => {
                        hasilTicket.innerHTML = html;
                    })
                    .catch(() => {
                        hasilTicket.innerHTML = `
                <div class="alert alert-danger">
                    Gagal mengambil data.
                </div>`;
                    });
            }

            window.checkout = function (kode) {
                if (!confirm("Yakin ingin check-out?")) return;

                fetch("config/pulang.php", {
                    method: "POST",
                    headers: { "Content-Type": "application/x-www-form-urlencoded" },
                    body: "kode=" + encodeURIComponent(kode)
                })
                    .then(res => res.text())
                    .then(html => {
                        hasilTicket.innerHTML = html;
                        sessionInput.value = "";
                    });
            };

        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>