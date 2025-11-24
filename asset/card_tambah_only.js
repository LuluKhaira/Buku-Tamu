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