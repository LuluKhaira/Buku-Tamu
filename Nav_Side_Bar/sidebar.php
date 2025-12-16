<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sidebar</title>

  <!-- Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />

  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }

    /* ===== Sidebar Desktop ===== */
    .sidebar {
      width: 280px;
      height: 100vh;
      padding: 25px;
      position: fixed;
      left: 0;
      top: 0;
    }

    .menu-item {
      transition: 0.2s;
      color: #6c757d;
    }

    .menu-item:hover,
    .active-menu {
      background-color: rgba(86, 108, 108, 0.15);
      color: #ffc107 !important;
    }

    .sidebar {
      width: 280px;
      height: 100vh;
      flex-shrink: 0;
      position: fixed;
      top: 0;
      left: 0;
      background: #fff;
      z-index: 1000;
    }

    .menu-item {
      color: #6c757d;
      transition: .2s;
      text-decoration: none;
    }

    .menu-item:hover,
    .active-menu {
      background: rgba(86, 108, 108, .15);
      color: #ffc107 !important;
    }

    @media (min-width: 992px) {
      .main-content {
        margin-left: 280px;
      }
    }

    @media (max-width: 991.98px) {
      .main-content {
        margin-left: 0 !important;
        width: 101%;
      }
    }
  </style>
</head>

<?php $current_page = basename($_SERVER['PHP_SELF']); ?>

<body>

  <!-- ===== Sidebar (Desktop only) ===== -->
  <div class="sidebar bg-white shadow-sm d-none d-lg-flex flex-column">

    <div class="d-flex align-items-center gap-3 mb-4">
      <img src="../foto/logo_polibatam.png" alt="Logo" style="width:45px;height:45px;object-fit:cover;" />
      <div>
        <div class="fw-semibold" style="font-size:1.25rem;">BukuTamu</div>
        <div class="text-muted" style="font-size:0.9rem;">Staff TU</div>
      </div>
    </div>

    <a href="beranda.php"
      class="menu-item d-flex align-items-center gap-3 p-3 rounded text-decoration-none mb-2 <?= $current_page == 'beranda.php' ? 'active-menu' : '' ?>">
      <i class="bi bi-house-door"></i> Dashboard
    </a>

    <a href="data_kunjungan.php"
      class="menu-item d-flex align-items-center gap-3 p-3 rounded text-decoration-none mb-2 <?= $current_page == 'data_kunjungan.php' ? 'active-menu' : '' ?>">
      <i class="bi bi-hourglass-split"></i> Data Kunjungan
    </a>

    <div class="mt-auto">
      <a href="../index.php" onclick="return confirm('Yakin ingin keluar?')"
        class="menu-item d-flex align-items-center gap-3 p-3 rounded text-decoration-none">
        <i class="bi bi-box-arrow-right"></i> Keluar
      </a>
    </div>
  </div>

  <!-- ===== Main Content ===== -->
  <div class="content">
    <div class="container mt-4">

    </div>
    <!-- isi halaman di sini -->
  </div>

  <!-- ===== Sidebar Offcanvas ===== -->
  <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebarMenu">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title fw-semibold">BukuTamu Staff TU</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body p-3">

      <a href="beranda.php"
        class="menu-item d-flex align-items-center gap-3 p-3 rounded mb-2 <?= $current_page == 'beranda.php' ? 'active-menu' : '' ?>">
        <i class="bi bi-house-door"></i> Dashboard
      </a>

      <a href="data_kunjungan.php"
        class="menu-item d-flex align-items-center gap-3 p-3 rounded mb-2 <?= $current_page == 'data_kunjungan.php' ? 'active-menu' : '' ?>">
        <i class="bi bi-hourglass-split"></i> Data Kunjungan
      </a>

      <hr>

      <a href="../index.php" onclick="return confirm('Yakin ingin keluar?')"
        class="menu-item d-flex align-items-center gap-3 p-3 rounded text-danger">
        <i class="bi bi-box-arrow-right"></i> Keluar
      </a>

    </div>
  </div>


</body>