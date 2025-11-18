<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pengunjung</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: #f5f5f5;
        }

        .info-panel,
        .form-panel {
            border-radius: 15px;
            padding: 45px 35px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .info-panel {
            background: #2d5f5d;
            padding: 45px 40px;
            color: #fff;
        }

        .form-panel {
            background: #fff;
            padding: 45px 50px;
            padding: 45px 40px;
            background: transparent;
            box-shadow: none;
        }

        .btn-send {
            background: #f4b942;
            border: none;
            color: #000;
            font-weight: 600;
            padding: 10px 35px;
            border-radius: 25px;
        }

        .btn-send:hover {
            background: #e5a932;
        }



        .form-control {
            border: 1px solid #ddd;
            padding: 10px 15px;
        }

        .form-control:focus {
            border-color: #2d5f5d;

        }
    </style>
</head>

<body>
    <div class="container py-5 mt-5">
        <div class="row gy-4 gx-0">

            <!-- Left - Form Section -->
            <div class="col-lg-7">
                <div class="form-panel">
                    <div class="mb-4">
                        <p class="text-uppercase text-secondary mb-2"
                            style="letter-spacing: 3px; font-size: 13px; font-weight: 500;">TAMBAH PENGUNJUNG</p>
                        <h2 class="fw-bold mb-0">
                            Silahkan isi Informasi <span style="color: #f4b942; font-style: italic;">Pengunjung!</span>
                        </h2>
                    </div>

                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label small fw-semibold">Nama *</label>
                                <input type="text" name="pengunjung" class="form-control"
                                    placeholder="Masukkan nama anda" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label small fw-semibold">No Handphone *</label>
                                <input type="text" name="instansi" class="form-control" placeholder="08xxxxxxxxxx"
                                    required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label small fw-semibold">Instansi *</label>
                            <input type="tel" name="no_hp" class="form-control" placeholder="xxxxxx" required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label small fw-semibold">Tujuan *</label>
                            <textarea name="tujuan" class="form-control" rows="5"
                                placeholder="Masukkan tujuan kedatangan..." required></textarea>
                        </div>

                        <div class="d-flex align-items-center gap-2">
                            <button type="submit" class="btn btn-send ms-2">Simpan Data</button>
                        </div>
                    </form>

                </div>
            </div>

            <!-- Right - Info Section -->
            <div class="col-lg-5">
                <div class="info-panel" id="previewPanel">
                    <h5 class="fw-bold mb-3">Preview Data</h5>
                    <p class="opacity-75">Belum ada data yang diinput.</p>
                </div>
            </div>


        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.querySelector("form").addEventListener("submit", function (e) {
            e.preventDefault(); // cegah reload

            let nama = document.querySelector("[name='pengunjung']").value;
            let hp = document.querySelector("[name='no_hp']").value;
            let instansi = document.querySelector("[name='instansi']").value;
            let tujuan = document.querySelector("[name='tujuan']").value;

            let panel = document.getElementById("previewPanel");

            panel.innerHTML = `
            <h5 class="fw-bold mb-3">Konfirmasi Data</h5>

            <div class="mb-3">
                <strong>Nama:</strong>
                <p class="opacity-75 mb-0">${nama}</p>
            </div>

            <div class="mb-3">
                <strong>No Handphone:</strong>
                <p class="opacity-75 mb-0">${hp}</p>
            </div>

            <div class="mb-3">
                <strong>Instansi:</strong>
                <p class="opacity-75 mb-0">${instansi}</p>
            </div>


            <div class="mb-3">
                <strong>Tujuan:</strong>
                <p class="opacity-75 mb-0">${tujuan}</p>
            </div>

            <p class="mt-3 mb-2 fw-semibold">Apakah data sudah sesuai?</p>

            <div class="d-flex gap-2 mt-2">
            <button class="btn btn-outline-secondary btn-sm rounded-pill px-3 fw-semibold" id="btnUlangi">Ulangi</button>
            <button class="btn btn-warning btn-sm rounded-pill px-3 fw-semibold" id="btnSimpan">Ya, Simpan</button>
            </div>

        `;

            // Tombol ulangi → kembali ke form
            document.getElementById("btnUlangi").addEventListener("click", function () {
                panel.innerHTML = `
                <h5 class="fw-bold mb-3">Preview Data</h5>
                <p class="opacity-75">Belum ada data yang diinput.</p>
            `;
            });

            // Tombol simpan → reset dan notifikasi sukses
            document.getElementById("btnSimpan").addEventListener("click", function () {

                // reset form
                document.querySelector("form").reset();

                // reset panel
                panel.innerHTML = `
                <h5 class="fw-bold mb-3">Preview Data</h5>
                <p class="opacity-75">Belum ada data yang diinput.</p>
            `;

                // Notifikasi Bootstrap
                const alert = document.createElement("div");
                alert.className = "alert alert-success alert-dismissible fade show position-fixed";
                alert.style.top = "20px";
                alert.style.right = "20px";
                alert.style.zIndex = "9999";
                alert.innerHTML = `
                Data pengunjung berhasil disimpan!
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            `;
                document.body.appendChild(alert);

                // hilang otomatis 3 detik
                setTimeout(() => {
                    alert.classList.remove("show");
                    alert.classList.add("hide");
                }, 3000);
            });

        });
    </script>



</body>

</html>