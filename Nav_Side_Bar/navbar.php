

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
<style>
    .nav-link.dropdown-toggle::after {
        border-top-color: #fff !important;
    }
</style>

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

            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="me-2 d-none d-lg-inline small" style="color:#f9f5ed;">
                        Selamat datang, <?= $_SESSION['username'] ?? ''; ?>
                    </span>
                </a>

                <ul class="dropdown-menu dropdown-menu-end shadow animated--fade-in" aria-labelledby="userDropdown">
                    <li>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modalGantiUsername">
                            Ganti Username
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modalTambahUsername">
                            Tambah Username
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <div class="modal fade" id="modalGantiUsername" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ganti Username</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div id="alertResult" class="alert d-none mb-2"></div>

                    <form id="formGantiUsername">
                        <label class="form-label">Username Baru</label>
                        <input type="text" name="username_baru" class="form-control" required>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" form="formGantiUsername" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalTambahUsername" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Username Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="formTambahUsername">
                        <label class="form-label">Username</label>
                        <input type="text" name="username_tambah" class="form-control" required>

                        <label class="form-label mt-3">Password</label>
                        <input type="password" name="password_tambah" class="form-control" required>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" form="formTambahUsername" class="btn btn-primary">Tambah</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../Nav_Side_Bar/ganti_user.js"></script>

</body>

</html>