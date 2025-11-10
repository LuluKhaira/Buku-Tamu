<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu Tata Usaha</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.css">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="top-bar d-flex align-items-center justify-content-end flex-wrap gap-3 py-3">
            <h2 class="m-0 me-auto">Buku Tamu Tata Usaha</h2>

            <!-- Search versi Bootstrap tanpa CSS tambahan -->
            <div class="d-flex align-items-center bg-light rounded px-3 py-2">
                <i class="bi bi-search me-2 text-secondary"></i>
                <input type="text" class="form-control border-0 bg-light shadow-none" placeholder="Mencari...">
            </div>

            <!-- Tombol Profile -->
            <div class="dropdown">
                <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="../foto/lulu.jpg" alt="Profile" width="32" height="32" class="rounded-circle">
                </a>
                <ul class="dropdown-menu">
                    <li><a class="btn-profile dropdown-item" href="#" onclick="profilePopup()">Profile</a></li>
                    <hr class="dropdown-divider">
                    <li><a class="dropdown-item" href="#" onclick="keluarPopup()">Keluar</a></li>
                </ul>
            </div>
        </div>

        <!-- Popup Keluar -->
        <div id="popupKeluar" class="popup-bg">
            <div class="popup-box text-center">
                <h3>Pilih Opsi</h3>
                <p>Kamu ingin melakukan apa?</p>
                <div class="d-flex justify-content-center gap-2 mt-3">
                    <button class="btn btn-danger rounded-3 px-3 py-1" onclick="logoutConfirm()">Logout</button>
                    <button class="btn btn-primary rounded-3 px-3 py-1" onclick="roleConfirm()">Role Akun</button>
                    <button class="btn btn-light rounded-3 px-3 py-1" onclick="closeKeluar()">Batal</button>
                </div>
            </div>
        </div>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Pengunjung</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Instansi</th>
                    <th>Tujuan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $data = [
                    ["yanto", "15/9/2025", "09.00", "Politeknik Negeri Batam", "Observasi"],
                    ["khaira", "15/9/2025", "09.30", "PT. Pertamina", "Silaturahmi"],
                    ["Zahwa", "15/9/2025", "10.30", "PT. SIIX", "Kunjungan"],
                    ["Ezra", "15/9/2025", "15.00", "Universitas Negeri Padang", "Kunjungan"],
                    ["lulu", "15/9/2025", "16.30", "PT. JMS Batam", "Kunjungan"],
                ];

                $no = 1;
                foreach ($data as $row) {
                    echo '<tr>
                     <td class="no">' . str_pad($no++, 2, "0", STR_PAD_LEFT) . '</td>
                     <td>' . $row[0] . '</td>
                     <td>' . $row[1] . '</td>
                     <td>' . $row[2] . '</td>
                     <td>' . $row[3] . '</td>
                     <td>' . $row[4] . '</td>
                     <td>
                        <button class="action-btn" onclick="openPopup(\'popupEdit\')">
                             <img src="https://img.icons8.com/material-outlined/24/000000/edit--v1.png"/>
                        </button>
                        <button class="action-btn" onclick="openPopup(\'popupHapus\')">
                             <img src="https://img.icons8.com/material-outlined/24/000000/trash--v1.png"/>
                        </button>
                     </td>
                      </tr>';
                }
                ?>
            </tbody>
        </table>

        <!-- Popup Profile -->
        <div id="profilePopup" class="popup-bg">
            <div class="popup-box text-center">
                <h3>Profil Akun</h3>
                <div class="photo-wrapper mt-3">
                    <img src="../foto/lulu.jpg" alt="Profile Photo" class="profile-photo" id="profilePhoto">
                    <button class="edit-photo-btn" onclick="document.getElementById('photoInput').click()">✏️</button>
                    <input type="file" id="photoInput" accept="image/*" class="d-none" onchange="changePhoto(event)">
                </div>
                <div class="mt-3">
                    <h5 class="mb-0">Lulu Khaira Yudita</h5>
                    <small class="text-muted">Admin</small>
                </div>
                <div class="mt-3">
                    <button class="btn btn-light" onclick="closePopup('profilePopup')">Tutup</button>
                </div>
            </div>
        </div>

        <!-- Popup Edit -->
        <div id="popupEdit" class="popup-bg">
            <div class="popup-box">
                <h3>Edit Pengunjung</h3>
                <input type="text" placeholder="Nama" value="Yanto">
                <input type="text" placeholder="Tanggal" value="15/9/2025">
                <input type="text" placeholder="Asal" value="Politeknik Negeri Batam">
                <input type="text" placeholder="Keterangan" value="Observasi">
                <div class="popup-btn">
                    <button class="btn btn-light" onclick="closePopup('popupEdit')">Batal</button>
                    <button class="btn btn-dark">Simpan</button>
                </div>
            </div>
        </div>

        <!-- Popup Hapus -->
        <div id="popupHapus" class="popup-bg">
            <div class="popup-box popup-small">
                <div class="icon-question">?</div>
                <p>Yakin ingin hapus <b>Yanto</b> ini?</p>
                <div class="popup-btn">
                    <button class="btn btn-light" onclick="closePopup('popupHapus')">Tidak</button>
                    <button class="btn btn-danger">Ya</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        function profilePopup() {
            openPopup('profilePopup');
        }

        function openPopup(id) {
            document.getElementById(id).style.display = "flex";
        }

        function closePopup(id) {
            document.getElementById(id).style.display = "none";
        }

        function keluarPopup() {
            document.getElementById('popupKeluar').style.display = 'flex';
        }

        function closeKeluar() {
            document.getElementById('popupKeluar').style.display = 'none';
        }

        function logoutConfirm() {
            alert("Logout Berhasil!");
            window.location.href = "../index.php";
        }

        function roleConfirm() {
            alert("Pilih Role Akun!");
            window.location.href = "../asset/role.php";
        }

        function changePhoto(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById('profilePhoto').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        }

        // Close popup dengan klik di luar box
        document.querySelectorAll('.popup-bg').forEach(popup => {
            popup.addEventListener('click', function (e) {
                if (e.target === this) {
                    this.style.display = 'none';
                }
            });
        });

        // Close popup dengan tombol Escape
        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape') {
                document.querySelectorAll('.popup-bg').forEach(popup => {
                    popup.style.display = 'none';
                });
            }
        });
    </script>
</body>

</html>
