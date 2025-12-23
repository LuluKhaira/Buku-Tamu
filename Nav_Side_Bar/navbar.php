<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

<nav class="navbar navbar-expand sticky-top p-0 m-0" style="background-color:#2d5f5d; min-height:64px;">
  
  <!-- HAMBURGER -->
  <button class="btn btn-outline-light ms-3 d-lg-none" 
          data-bs-toggle="offcanvas" 
          data-bs-target="#sidebarMenu">
    <i class="fas fa-bars"></i>
  </button>

  <!-- TITLE -->
  <div class="ms-3 d-none d-sm-flex align-items-center">
    <?php if (basename($_SERVER['PHP_SELF']) == 'beranda.php'): ?>
      <span class="fw-bold text-light">
        <i class="fas fa-home me-1"></i> Dashboard
      </span>
    <?php endif; ?>

    <?php if (basename($_SERVER['PHP_SELF']) == 'data_kunjungan.php'): ?>
      <span class="fw-bold text-light">
        <i class="bi bi-hourglass-split me-1"></i> Data Kunjungan
      </span>
    <?php endif; ?>
  </div>

  <!-- RIGHT -->
  <div class="ms-auto me-3 text-light small">
    Selamat datang, <?= $_SESSION['username'] ?? '' ?>
  </div>

</nav>
