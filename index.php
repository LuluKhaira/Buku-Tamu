<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Buku Tamu</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;displaFy=swap"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
        <div class="container px-5">

            <a class="navbar-brand fw-bold d-flex align-items-center" href="./dashboard_staffTU/beranda.php">
                <img src="foto/logo_polibatam.png" alt="Logo" width="47" height="42" class="me-3">
                Buku Tamu
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#tentang">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#kontak">Kontak</a></li>
                </ul>
                <div class="d-flex gap-2">
                    <a href="login.php" class="btn btn-outline-primary rounded-pill px-3 mb-2 mb-lg-0">
                        <span class="d-flex align-items-center">
                            <i class="bi bi-box-arrow-in-right me-2"></i>
                            <span class="small">Login</span>
                        </span>
                    </a>
                    <a href="sign_up.php" class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0">
                        <span class="d-flex align-items-center">
                            <i class="bi bi-person-plus-fill me-2"></i>
                            <span class="small">Sign Up</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Mashead Header -->
<header class="masthead">
    <div class="container px-5">
        <div class="row gx-5 align-items-center">

            <!-- Left Text Section -->
            <div class="col-lg-6">
                <div class="mb-5 mb-lg-0 text-center text-lg-start">
                    <h1 class="display-1 lh-1 mb-3">Buku Tamu Staff TU</h1>
                    <p class="lead fw-normal text-muted mb-5">
                        Sistem pencatatan kehadiran yang modern dan efisien
                    </p>
                    <a href="asset/tambah_only.php" class="btn btn-primary btn-lg">
                        Tambah Data
                    </a>
                </div>
            </div>

            <!-- Right Image / Mockup -->
            <div class="col-lg-6">
                <div class="masthead-device-mockup">
                    <div class="device-wrapper">
                        <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                            <div class="screen">
                                <div class="laptop-frame">
                                    <img src="foto/tatausaha.png" class="laptop-screen" alt="Tata Usaha">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>



    <!-- App tentang section-->
    <section id="tentang">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center text-center">
                <div class="col-md-3 mb-5">
                    <!-- Tentang -->
                    <i class="bi bi-chat-square-dots icon-feature text-gradient d-block mb-3"></i>
                    <h3 class="font-alt">Informasi</h3>
                    <p class="text-muted mb-0">Website buku tamu kami dibuat untuk mempermudah pendataan
                        pengunjung mulai dari nama hingga tujuan kunjungan.</p>
                </div>
                <div class="col-md-3 mb-5">
                    <!-- Fitur -->
                    <i class="bi bi-puzzle icon-feature text-gradient d-block mb-3"></i>
                    <h3 class="font-alt">Fitur</h3>
                    <p class="text-muted mb-0">Fitur dari website kami meliputi Input data pengunjung,
                        Pencarian data, Mengubah data dan menghapus data.</p>
                </div>
                <div class="col-md-3 mb-5">
                    <!-- Keunggulan -->
                    <i class="bi bi-trophy icon-feature text-gradient d-block mb-3"></i>
                    <h3 class="font-alt">Keunggulan</h3>
                    <p class="text-muted mb-0">Mudah digunakan, cepat, dan data tersimpan rapi</p>
                </div>
                <div class="col-md-3 mb-5">
                    <!-- Keamanan Data -->
                    <i class="bi bi-shield-shaded icon-feature text-gradient d-block mb-3"></i>
                    <h3 class="font-alt">Keamanan Data</h3>
                    <p class="text-muted mb-0">Website kami memastikan data yang Anda isi
                        tersimpan dengan aman.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row g-4">

                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm rounded-4 h-100">
                        <div class="position-relative">
                            <img src="foto/Tambah.png" class="card-img-top rounded-top-4" alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="fw-bold">Tambah Pengunjung</h5>
                            <p class="text-muted small">
                                Dengan fitur Tambah Pengunjung, pencatatan tamu kini lebih cepat dan terorganisir. Setiap data yang masuk langsung tersimpan dan siap digunakan untuk laporan harian.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm rounded-4 h-100">
                        <div class="position-relative">
                            <img src="foto/Gedung.jpg" class="card-img-top rounded-top-4" alt="">
                            <span
                                class="badge bg-white text-dark position-absolute top-0 m-3 px-3 py-2 shadow-sm rounded-pill">
                                Burnout
                            </span>
                        </div>
                        <div class="card-body">
                            <h5 class="fw-bold">Beranda</h5>
                            <p class="text-muted small">
                                Do less. Take a walk. Look up at trees. Break in the drudgery of daily overload…
                            </p>
                        </div>
                        <div class="card-footer bg-white border-0 d-flex align-items-center gap-2 pb-4">
                            <img src="https://i.pravatar.cc/41" class="rounded-circle" width="40" height="40" alt="">
                            <div>
                                <div class="fw-semibold small">Dr. Nick Wilsford</div>
                                <div class="text-muted small">March 19 · 5 min read</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm rounded-4 h-100">
                        <div class="position-relative">
                            <img src="foto/Gedung.jpg" class="card-img-top rounded-top-4" alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="fw-bold">Tambah Pengunjung</h5>
                            <p class="text-muted small">
                                Understanding emotions better may reduce the risk of addictive behaviors.
                            </p>
                        </div>
                        <div class="card-footer bg-white border-0 d-flex align-items-center gap-2 pb-4">
                            <img src="https://i.pravatar.cc/42" class="rounded-circle" width="40" height="40" alt="">
                            <div>
                                <div class="fw-semibold small">Dr. Sarah Longwell</div>
                                <div class="text-muted small">March 18 · 7 min read</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="kontak" class="py-md-20 py-12 bg-white">
        <div class="container">

            <!-- Hero Section -->
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="mb-4 mb-xl-0 text-center text-md-start">
                        <!-- Caption -->
                        <h1 class="display-2 fw-bold mb-3 ls-sm ">Ada kesan atau saran? Ceritakan pada kami!</h1>
                        <p class="mb-4 lead ">
                            Pada PBL semester 1 ini, kami sangat terbuka menerima kritik dan saran dari kalian. Semua
                            masukan kalian akan sangat membantu kami untuk menjadi lebih baik.
                        </p>
                    </div>
                </div>
                <div class="offset-xl-1 col-xl-5 col-lg-6 col-md-12">
                    <!-- Card -->
                    <div class="card smooth-shadow-md" style="z-index: 1;">
                        <!-- Card body -->
                        <div class="card-body p-6">
                            <div class="mb-4">
                                <!-- Form -->
                                <form>
                                    <!-- Username -->
                                    <div class="mb-3">
                                        <label for="email" class="form-label visually-hidden">Email</label>
                                        <input type="email" id="email" class="form-control" name="email"
                                            placeholder="Email" required="">
                                    </div>
                                    <!-- Textarea -->
                                    <div class="mb-3">
                                        <label for="textarea-input" class="form-label visually-hidden">Pendapat
                                            mu</label>
                                        <textarea class="form-control" id="textarea-input"
                                            placeholder="Masukkan pendapatmu" rows="5"></textarea>
                                    </div>
                                    <!-- Tombol -->
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Kirim</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>


    <!-- Footer-->
    <!-- Footer -->
    <footer class="bg-dark text-light py-4 mt-5 border-top border-secondary">
        <div class="container text-center">
            <h5 class="fw-bold mb-2">Buku Tamu Tata Usaha</h5>

            <div class="d-flex justify-content-center mb-3">
                <a href="#" class="text-light mx-2 fs-5"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-light mx-2 fs-5"><i class="bi bi-instagram"></i></a>
                <a href="#" class="text-light mx-2 fs-5"><i class="bi bi-envelope"></i></a>
            </div>

            <hr class="border-secondary w-50 mx-auto my-3">

            <small class="text-secondary d-block">
                <span class="text-light fw-semibold">The Fighter</span> | IFA Pagi-1
            </small>
        </div>
    </footer>



    <!-- Bootstrap core JS-->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>