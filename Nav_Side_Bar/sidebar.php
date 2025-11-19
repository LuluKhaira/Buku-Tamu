<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sidebar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="../Nav_Side_Bar/sidebar.css">
</head>

<?php
// Tangkap nama file saat ini
$current_page = basename($_SERVER['PHP_SELF']);
?>

<body >
  <div class="sidebar d-flex flex-column position-relative" >
    <div>
      <!-- Bagian Logo + Judul -->
      <div class="brand-section">
        <img src="../foto/logo_polibatam.png" alt="Logo">
        <div class="brand-text">
          <p class="brand">BukuTamu</p>
          <p class="role">Staff TU</p>
        </div>
      </div>

      <!-- Menu -->
      <a href="../dashboard_staffTU/beranda.php"
        class="nav-link mb-2 <?= ($current_page == 'beranda.php') ? 'active' : '' ?>">
        <i class="bi bi-house-door"></i> Beranda
      </a>
      
      <a href="../dashboard_staffTU/laporan.php"
        class="nav-link <?= ($current_page == 'laporan.php') ? 'active' : '' ?>">
        <i class="bi bi-file-earmark-text"></i> Laporan
      </a>
    </div>

    <!-- Logout -->
    <div class="logout">
      <a href="../index.php" class="nav-link"><i class="bi bi-box-arrow-right"></i>Logout</a>
    </div>
  </div>
</body>

</html>