<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sidebar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }

    .menu-item {
      transition: .2s;
      color: #6c757d;
    }

    .menu-item:hover {
      background-color: rgba(86, 108, 108, 0.15);
      color: #ffc107 !important;
    }

    .active-menu {
      background-color: rgba(86, 108, 108, 0.15);
      color: #ffc107 !important;
    }
  </style>
</head>

<?php $current_page = basename($_SERVER['PHP_SELF']); ?>

<body>
  <div class="d-flex flex-column bg-white shadow-sm sidebar"
    style="width: 280px; height: 100vh; padding: 25px; position: relative;">

    <div class="d-flex align-items-center gap-3 mb-4">
      <img src="../foto/logo_polibatam.png" alt="Logo" style="width:45px; height:45px; object-fit:cover;">
      <div>
        <p class="fw-semibold mb-0" style="font-size:1.25rem; color:#444;">BukuTamu</p>
        <p class="mb-0" style="font-size:0.9rem; color:#888;">Staff TU</p>
      </div>
    </div>

    <a href="../dashboard_staffTU/beranda.php" class="d-flex align-items-center gap-3 p-3 rounded fw-medium text-decoration-none menu-item mb-3
       <?= ($current_page == 'beranda.php') ? 'active-menu' : '' ?>">
      <i class="bi bi-house-door"></i> Beranda
    </a>

    <a href="../dashboard_staffTU/data_kunjungan.php" class="d-flex align-items-center gap-3 p-3 rounded fw-medium text-decoration-none menu-item
       <?= ($current_page == 'data_kunjungan.php') ? 'active-menu' : '' ?>">
      <i class="bi bi-hourglass-split"></i> Data Kunjungan
    </a>

    <div style="position:absolute; bottom:30px; width:230px;">
      <a href="../index.php" onclick="return confirm('Yakin ingin keluar?');"
        class="d-flex align-items-center gap-3 p-3 rounded fw-medium text-decoration-none menu-item">
        <i class="bi bi-box-arrow-right"></i> Keluar
      </a>
    </div>

  </div>
</body>

</html>