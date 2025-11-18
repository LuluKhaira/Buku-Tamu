<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../Nav_Side_Bar/navbar.css">
</head>

<body>
    <nav class="navbar navbar-expand px-3 py-4"
    style="background-color:#2d5f5d;">

    <!-- Sidebar Toggle (Mobile Only) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle me-3" style="color:#ffffff;">
        <i class="bi bi-list fs-4" style="color:#ffffff;"></i>
    </button>

    <!-- Search Bar (pindah ke kiri dari NAVBAR-NAV) -->
    <form class="d-none d-sm-inline-block form-inline ms-auto w-30">
        <div class="input-group">

            <input type="text" class="form-control small"
                placeholder="Search for..." aria-label="Search"
                style="background-color:#ffffff;color:#000;border:1px solid #dcdcdc !important;border-right:0 !important;border-radius:6px 0 0 6px;box-shadow:none !important;">

            <button class="btn bg-warning" type="button">
                <i class="bi bi-search"></i>
            </button>

        </div>
    </form>

    <!-- Topbar Navbar (hapus ms-auto) -->
    <ul class="navbar-nav align-items-center">
        <div class="vr mx-3 d-none d-sm-block" style="background-color:#ffffff;"></div>

        <!-- User Info -->
        <li class="nav-item no-arrow">
            <a class="nav-link d-flex align-items-center" style="color:#ffffff;">
                <span class="me-2 d-none d-lg-inline small" style="color:#ffffff;">
                    Selamat datang, <b>Staff TU</b>
                </span>
            </a>
        </li>
    </ul>

</nav>

</body>

</html>