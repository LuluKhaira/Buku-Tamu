<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Buku Tamu</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico"/>
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;displaFy=swap"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>  
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
    <!-- Mashead header-->
    <header class="masthead">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <!-- Mashead text and app badges-->
                    <div class="mb-5 mb-lg-0 text-center text-lg-start">
                        <h1 class="display-1 lh-1 mb-3">Buku Tamu Staff TU</h1>
                        <p class="lead fw-normal text-muted mb-5">Sistem pencatatan kehadiran yang modern dan efisien
                        </p>
                        <a href="asset/tambah.php" class="btn btn-primary btn-lg ">Tambah Data</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Masthead device mockup feature-->
                    <div class="masthead-device-mockup">
                        <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                    <stop class="gradient-start-color" offset="0%"></stop>
                                    <stop class="gradient-end-color" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                                transform="translate(120.42 -49.88) rotate(45)"></rect>
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                                transform="translate(-49.88 120.42) rotate(-45)"></rect>
                        </svg><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg>
                        <div class="device-wrapper">
                            <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                                <div class="screen">
                                    <div class="laptop-frame">
                                        <img src="foto/tatausaha.png" class="laptop-screen">
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


<!-- Team Section -->
<section class="py-5">
  <div class="container">
    <div class="row text-center">
      <!-- Judul tetap -->
      <div class="col-lg-3 col-md-12 mb-4">
        <div class="h-100 d-flex justify-content-center align-items-center flex-column text-center mb-5">
          <h2>Team Kelompok 1</h2>
          <p>Tim hebat dibalik proyek kami</p>
        </div>
      </div>

      <!-- Anggota 1 -->
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card border-0 shadow h-100 overflow-hidden">
          <div class="d-flex justify-content-center align-items-center" style="height: 300px; overflow: hidden;">
            <img src="foto/lulu.jpg" class="w-100 h-auto" alt="Foto Lulu">
          </div>
          <div class="card-body text-center">
            <h5 class="card-title">Lulu Khaira Yudita</h5>
            <p class="text-muted">Ketua PBL</p>
            <p>Bertanggung jawab dalam pembuatan Dashboard Staff Tata Usaha dan Pengunjung</p>
            <div>
              <a href="#" class="text-dark mx-2"><i class="bi bi-facebook"></i></a>
              <a href="#" class="text-dark mx-2"><i class="bi bi-twitter-x"></i></a>
              <a href="#" class="text-dark mx-2"><i class="bi bi-linkedin"></i></a>
              <a href="#" class="text-dark mx-2"><i class="bi bi-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Anggota 2 -->
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card border-0 shadow h-100 overflow-hidden">
          <div class="d-flex justify-content-center align-items-center" style="height: 300px; overflow: hidden;">
            <img src="foto/zahwa.jpg" class="w-100 h-auto" alt="Foto Zahwa">
          </div>
          <div class="card-body text-center">
            <h5 class="card-title">Zahwa Aqila</h5>
            <p class="text-muted">Anggota</p>
            <p>Bertanggung jawab dalam membuat Landing Page.</p>
            <div>
              <a href="#" class="text-dark mx-2"><i class="bi bi-facebook"></i></a>
              <a href="#" class="text-dark mx-2"><i class="bi bi-twitter-x"></i></a>
              <a href="#" class="text-dark mx-2"><i class="bi bi-linkedin"></i></a>
              <a href="#" class="text-dark mx-2"><i class="bi bi-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Anggota 3 -->
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card border-0 shadow h-100 overflow-hidden">
          <div class="d-flex justify-content-center align-items-center" style="height: 300px; overflow: hidden;">
            <img src="foto/ezra.jpg" class="w-100 h-auto" alt="Foto Ezra">
          </div>
          <div class="card-body text-center">
            <h5 class="card-title">Ezra Merita Ringoringo</h5>
            <p class="text-muted">Anggota</p>
            <p>Bertanggung jawab dalam membuat Landing Page dan Role Button.</p>
            <div>
              <a href="#" class="text-dark mx-2"><i class="bi bi-facebook"></i></a>
              <a href="#" class="text-dark mx-2"><i class="bi bi-twitter-x"></i></a>
              <a href="#" class="text-dark mx-2"><i class="bi bi-linkedin"></i></a>
              <a href="#" class="text-dark mx-2"><i class="bi bi-instagram"></i></a>
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