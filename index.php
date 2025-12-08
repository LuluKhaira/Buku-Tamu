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
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:wght@600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;500;600;700&display=swap" rel="stylesheet" />
</head>

<body class="pt-5 pt-lg-4">
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand fw-bold d-flex align-items-center" href="dashboard_staffTU/beranda.php">
                <img src="foto/logo_polibatam.png" alt="Logo" class="me-2" style="width: 50px; height: 40px;">
                <span class="text-dark">Buku Tamu</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link px-3" href="#beranda">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#tentang">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#kontak">Kontak</a></li>
                </ul>
                <div class="d-flex gap-2 ms-lg-3">
                    <a href="login.php" class="btn btn-success rounded-pill px-4">
                        <i class="bi bi-box-arrow-in-right me-2"></i>Login
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <header id="beranda" class="bg-white d-flex align-items-center min-vh-lg-100 mt-5 pt-5 mt-lg-5">
        <div class="container px-3 px-md-4 px-lg-5 py-5">
            <div class="row g-4 g-lg-5 align-items-center justify-content-center text-center text-lg-start">

                <div class="col-lg-6">
                    <h1 class="display-3 fw-bold mb-4 lh-1">
                        Buku Tamu<br>
                        <span class="text-success">Staff Tata Usaha</span>
                    </h1>

                    <p class="lead text-muted mb-4 fs-5">
                        Sistem pencatatan kehadiran yang modern dan efisien untuk Tata Usaha.
                    </p>

                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-lg-start mb-5">
                        <a href="asset/tambah_only.php"
                            class="btn btn-warning btn-lg px-4 rounded-pill fw-semibold shadow-sm">
                            <i class="bi bi-plus-circle-fill me-2"></i>
                            Isi Data kunjungan
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 d-none d-lg-block">
                    <div class="card border-0 shadow-lg rounded-3 overflow-hidden">
                        <div class="card-body p-0">
                            <img src="foto/Tambah.png" class="img-fluid w-100">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </header>

    <section id="tentang" class="py-5 bg-white">
        <div class="container px-4 px-lg-5 py-5">
            <div class="row g-5">
                <div class="col-12 text-center mb-4">
                    <h2 class="display-5 fw-bold mb-3">Mengapa Memilih Kami?</h2>
                    <p class="lead text-muted">Solusi terbaik untuk pencatatan pengunjung yang efisien</p>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="text-center h-100">
                        <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-4"
                            style="width: 100px; height: 100px;">
                            <i class="bi bi-chat-square-dots text-primary fs-1"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Informasi</h4>
                        <p class="text-muted">Website buku tamu kami dibuat untuk mempermudah pendataan pengunjung mulai
                            dari nama hingga tujuan kunjungan.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="text-center h-100">
                        <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-4"
                            style="width: 100px; height: 100px;">
                            <i class="bi bi-puzzle text-success fs-1"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Fitur</h4>
                        <p class="text-muted">Fitur dari website kami meliputi Input data pengunjung, Pencarian data,
                            Mengubah data dan menghapus data.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="text-center h-100">
                        <div class="bg-warning bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-4"
                            style="width: 100px; height: 100px;">
                            <i class="bi bi-trophy text-warning fs-1"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Keunggulan</h4>
                        <p class="text-muted">Mudah digunakan, cepat, dan data tersimpan rapi untuk memudahkan akses
                            informasi kapan saja.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="text-center h-100">
                        <div class="bg-danger bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-4"
                            style="width: 100px; height: 100px;">
                            <i class="bi bi-shield-shaded text-danger fs-1"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Keamanan Data</h4>
                        <p class="text-muted">Website kami memastikan data yang Anda isi tersimpan dengan aman dan
                            terlindungi.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm rounded-4 h-100">
                        <div class="position-relative">
                            <img src="foto/Tambah.png" class="card-img-top rounded-top-4" alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="fw-bold">Tambah Pengunjung</h5>
                            <p class="text-muted small">
                                Dengan fitur Tambah Pengunjung, pencatatan tamu kini lebih cepat dan terorganisir.
                                Setiap data yang masuk langsung tersimpan dan siap digunakan untuk laporan harian.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card border-0 shadow-sm rounded-4 h-100">
                        <div class="position-relative">
                            <img src="foto/dashboard.png" class="card-img-top rounded-top-4" alt="">
                            <span
                                class="badge bg-white text-dark position-absolute top-0 m-3 px-3 py-2 shadow-sm rounded-pill">
                                Burnout
                            </span>
                        </div>
                        <div class="card-body">
                            <h5 class="fw-bold">Beranda Staff TU</h5>
                            <p class="text-muted small">
                                Dengan beranda ini secara instan menyajikan keterangan pengunjung (harian, mingguan,
                                bulanan).
                                Bagian "Pengunjung Hari Ini" memberikan detail data tamu terbaru,
                                termasuk jenis kunjungan dan waktu kedatangan, yang divalidasi oleh penunjuk waktu.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card border-0 shadow-sm rounded-4 h-100">
                        <div class="position-relative">
                            <img src="foto/riwayat.png" class="card-img-top rounded-top-4" alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="fw-bold">Riwayat Staff TU</h5>
                            <p class="text-muted small">
                                Dengan Fitur riwayat menyimpan seluruh cerita dan detail dari semua kunjungan yang
                                pernah terjadi bisa
                                disaring, dicari, dan diekspor melalui Excel.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="kontak" class="py-5 bg-white">
        <div class="container px-4 px-lg-5 py-5">
            <div class="row g-5 align-items-center">

                <div class="col-lg-12 text-center">
                    <h2 class="display-5 fw-bold mb-4">Hubungi Kami Jika Ada Kebutuhan</h2>
                    <p class="lead text-muted mb-4 px-lg-5">
                        Jika Anda membutuhkan informasi lebih lanjut, memiliki pertanyaan terkait layanan Tata Usaha,
                        atau memerlukan bantuan dalam menggunakan sistem Buku Tamu, silakan hubungi kami melalui kontak yang tersedia di bawah ini.
                </div>

            </div>
        </div>
    </section>

    <footer class="bg-dark text-white py-5">
    <div class="container px-4 px-lg-5">
        <div class="row g-4">

<footer class="bg-dark text-white py-5">
    <div class="container px-4 px-lg-5">
        <div class="row g-4">

            <div class="col-lg-4 mb-4 mb-lg-0">
                <h5 class="fw-bold mb-3">
                    <i class="bi bi-book me-2"></i>Buku Tamu Tata Usaha
                </h5>
                <p class="text-white-50 mb-3">
                    Sistem pencatatan kehadiran yang modern dan efisien untuk Tata Usaha Politeknik Negeri Batam.
                </p>
            </div>

            <div class="col-lg-8">
                <div class="row justify-content-end">

                    <div class="col-lg-3 col-md-4 col-6 text-start">
                        <h6 class="fw-bold mb-3">Menu</h6>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="#beranda" class="text-white-50 text-decoration-none">Beranda</a></li>
                            <li class="mb-2"><a href="#tentang" class="text-white-50 text-decoration-none">Tentang</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-5 col-md-4 col-6 text-start">
                        <h6 class="fw-bold mb-3">Kontak Kami</h6>
                        <ul class="list-unstyled text-white-50 small">
                            <li class="mb-2">
                                <i class="bi bi-geo-alt me-2"></i>
                                Politeknik Negeri Batam
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-telephone me-2"></i>
                                +62 778 123456
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-envelope me-2"></i>
                                info@polibatam.ac.id
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>

        <hr class="border-secondary my-4">

        <div class="row">
            <div class="col-md-6 text-start mb-3 mb-md-0">
                <small class="text-white-50">
                    &copy; 2025 Buku Tamu Staff TU.
                </small>
            </div>
            <div class="col-md-6 text-start">
                <small class="text-white-50">
                    Pencipta dari <span class="text-white fw-semibold">The Fighter</span> | IF A Pagi - 1
                </small>
            </div>
        </div>

    </div>
</footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>