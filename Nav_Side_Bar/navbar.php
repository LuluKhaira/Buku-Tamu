<!-- <head>
    <link rel="stylesheet" href="../Nav_Side_Bar/navbar.css">
</head> -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

<body>
    <nav class="navbar navbar-expand px-3 py-4" style="background-color:#5e83ae;">

        <!-- Sidebar Toggle (Mobile Only) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle me-3" style="color:#ffffff;">
            <i class="bi bi-list fs-4" style="color:#ffffff;"></i>
        </button>

        <!-- SLOT SEARCH BAR (tempatnya tetap ada di navbar) -->
        <div class="ms-auto d-none d-sm-inline-block" style="width: 25%;">
            <?php if (basename($_SERVER['PHP_SELF']) == 'beranda.php') : ?>
                <form class="form-inline w-100">
                    <div class="input-group">
                        <span class="input-group-text border-0 bg-warning text-dark">
                            <i class="fas fa-search"></i>
                        </span>
                        <input type="text" class="form-control border-0" placeholder="Cari nama, instansi, tanggal...">
                    </div>
                </form>
            <?php endif; ?>
        </div>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav align-items-center">
            <div class="vr mx-3 d-none d-sm-block" style="background-color:#ffffff;"></div>

            <!-- User Info -->
            <li class="nav-item no-arrow">
                <a class="nav-link d-flex align-items-center">
                    <span class="me-2 d-none d-lg-inline small" style="color:#f9f5ed;">
                        Selamat datang, <b>Staff TU</b>
                    </span>
                </a>
            </li>
        </ul>

    </nav>
</body>
</html>
