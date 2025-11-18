<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../Nav_Side_Bar/navbar.css"> <!-- Hubungkan CSS eksternal -->
</head>


<body>
    <nav class="navbar navbar-expand bg-white topbar mb-4 shadow-bottom px-3 py-4">

        <!-- Sidebar Toggle (Mobile Only) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle me-3">
            <i class="bi bi-list fs-4"></i>
        </button>

        <!-- Search Bar -->
        <form class="d-none d-sm-inline-block form-inline me-auto ms-md-3 w-50">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                    aria-label="Search">
                <button class="btn btn-primary" type="button">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </form>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ms-auto align-items-center">
            <!-- Divider -->
            <div class="vr mx-3 d-none d-sm-block"></div>

            <!-- User Info -->
            <li class="nav-item no-arrow">
                <a class="nav-link d-flex align-items-center">
                    <span class="me-2 d-none d-lg-inline text-gray-600 small">
                        Selamat datang, <b>Staff TU</b>
                    </span>
                </a>
            </li>
        </ul>


    </nav>
</body>

</html>