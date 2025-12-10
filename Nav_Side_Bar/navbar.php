<?php
session_start();
?>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

<body>
    <nav class="navbar navbar-expand px-3 py-4" style="background-color:#2d5f5d;">
        <div class="me-auto d-none d-sm-inline-block">
            <?php if (basename($_SERVER['PHP_SELF']) == 'beranda.php'): ?>
                <h4 class="mb-0 fw-bold" style="color: #f9f5ed;">
                    <i class="fas fa-home me-2"></i> Dashboard
                </h4>
            <?php endif; ?>

            <?php if (basename($_SERVER['PHP_SELF']) == 'data_kunjungan.php'): ?>
                <h4 class="mb-0 fw-bold" style="color: #f9f5ed;">
                    <i class="bi bi-hourglass-split me-2"></i> Data Kunjungan
                </h4>
            <?php endif; ?>
        </div>

        <ul class="navbar-nav align-items-center ms-auto">
            <div class="vr mx-3 d-none d-sm-block" style="background-color:#ffffff;"></div>

            <li class="nav-item no-arrow">
                <a class="nav-link d-flex align-items-center">
                    <span class="me-2 d-none d-lg-inline small" style="color:#f9f5ed;">Selamat datang, <?php echo $_SESSION['username'] ?? ''; ?>
                    </span>
                </a>
            </li>
        </ul>

    </nav>
</body>

</html>