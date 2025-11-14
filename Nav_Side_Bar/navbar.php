<nav class="navbar navbar-expand bg-white topbar mb-4 shadow px-3">

    <!-- Sidebar Toggle (Mobile Only) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle me-3">
        <i class="bi bi-list fs-4"></i>
    </button>

    <!-- Search Bar -->
    <form class="d-none d-sm-inline-block form-inline me-auto ms-md-3 w-50">
        <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search">
            <button class="btn btn-primary" type="button">
                <i class="bi bi-search"></i>
            </button>
        </div>
    </form>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ms-auto align-items-center">

        <!-- Alerts -->
        <li class="nav-item dropdown no-arrow mx-2">
            <a class="nav-link dropdown-toggle position-relative" href="#" id="alertsDropdown"
               role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-bell fs-5"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    3+
                </span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="alertsDropdown">
                <li><a class="dropdown-item small text-muted">No new alerts</a></li>
            </ul>
        </li>

        <!-- Messages -->
        <li class="nav-item dropdown no-arrow mx-2">
            <a class="nav-link dropdown-toggle position-relative" href="#" id="messagesDropdown"
               role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-envelope fs-5"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    7
                </span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="messagesDropdown">
                <li><a class="dropdown-item small text-muted">No new messages</a></li>
            </ul>
        </li>

        <!-- Divider -->
        <div class="vr mx-3 d-none d-sm-block"></div>

        <!-- User Info -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown"
               role="button" data-bs-toggle="dropdown" aria-expanded="false">

                <span class="me-2 d-none d-lg-inline text-gray-600 small">Staff TU</span>

                <img class="rounded-circle"
                     src="https://ui-avatars.com/api/?name=Staff+TU&background=4e73df&color=fff"
                     width="40" height="40">
            </a>

            <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="userDropdown">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <a class="dropdown-item text-danger" href="#">
                        <i class="bi bi-box-arrow-right me-2"></i> Logout
                    </a>
                </li>
            </ul>
        </li>

    </ul>

</nav>
