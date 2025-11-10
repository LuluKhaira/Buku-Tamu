<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu Tata Usaha</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.css">
</head>

<body>
    <div class="container">
        <div class="top-bar">
            <h2>Buku Tamu Tata Usaha</h2>
            <div class="plusminus" style="display: flex; align-items: center; gap: 10px;">
                <button class="btn btn-dark" onclick="tambahPopup()">+ Tambah</button>
                <button class="btn btn-light rounded-5 px-3 py-2" onclick="keluarPopup()">Keluar</button>
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
                    echo "<tr>
                            <td class='no'>" . str_pad($no++, 2, '0', STR_PAD_LEFT) . "</td>
                            <td>{$row[0]}</td>
                            <td>{$row[1]}</td>
                            <td>{$row[2]}</td>
                            <td>{$row[3]}</td>
                            <td>{$row[4]}</td>
                        </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Popup Form -->
    <div id="popupForm" class="popup-bg">
        <div class="popup-box">
            <h3>Tambah Pengunjung</h3>
            <form>
                <!-- Nama -->
                <input type="text" placeholder="Nama Pengunjung" required
                    oninvalid="this.setCustomValidity('Nama tidak boleh kosong!')"
                    oninput="this.setCustomValidity('')">

                <!-- Tanggal -->
                <input type="date" required
                    oninvalid="this.setCustomValidity('Tanggal harus diisi ya!')"
                    oninput="this.setCustomValidity('')">

                <!-- Instansi -->
                <input type="text" placeholder="Instansi" required
                    oninvalid="this.setCustomValidity('Isi nama instansi pengunjung!')"
                    oninput="this.setCustomValidity('')">

                <!-- Tujuan -->
                <input type="text" placeholder="Tujuan" required
                    oninvalid="this.setCustomValidity('Tujuan kunjungan harus diisi!')"
                    oninput="this.setCustomValidity('')">

                <div class="popup-btn">
                    <button type="button" class="btn btn-light" onclick="closePopup('popupForm')">Batal</button>
                    <button type="submit" class="btn btn-dark">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        // Popup Tambah
        function tambahPopup() {
            document.getElementById('popupForm').style.display = 'flex';
        }
        function closePopup() {
            document.getElementById('popupForm').style.display = 'none';
        }

        // Popup keluar dan ganti role
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
    </script>
</body>

</html>
