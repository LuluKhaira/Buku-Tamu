const panel = document.getElementById("previewPanel");

// Tombol SIMPAN → tampilkan preview + 2 tombol
document.getElementById("btnSimpan").addEventListener("click", function (e) {
    e.preventDefault();

    const form = document.getElementById("formTamu");

    // Validasi form
    if (!form.checkValidity()) {
        form.reportValidity();
        return;
    }

    let nama = document.querySelector("[name='nama']").value;
    let hp = document.querySelector("[name='no_hp']").value;
    let instansi = document.querySelector("[name='instansi']").value;
    let jumlah = document.querySelector("[name='jumlah']").value;
    let tujuan = document.querySelector("[name='tujuan']").value;

    // === PREVIEW DATA (SAMA KAYAK ONLY) ===
    panel.innerHTML = `
        <h5 class="fw-bold mb-3">Preview Data</h5>

        <div><strong>Nama:</strong> ${nama || "-"}</div>
        <div><strong>No HP:</strong> ${hp || "-"}</div>
        <div><strong>Instansi:</strong> ${instansi || "-"}</div>
        <div><strong>Jumlah Orang:</strong> ${jumlah || "-"}</div>
        <div style="white-space: normal; word-break: break-word; max-width: 300px;">
            <strong>Tujuan:</strong> ${tujuan || "-"}
        </div>

        <hr>
        <p class="fw-bold">Apakah data sudah sesuai?</p>

        <button id="btnUlangi" class="btn btn-warning me-2">Ulangi</button>
        <button id="btnKonfirmasi" class="btn btn-success">Ya</button>
    `;

    // Tombol ULANGI
    document.getElementById("btnUlangi").addEventListener("click", function () {
        panel.innerHTML = `
            <h5 class="fw-bold mb-3">Preview Data</h5>
            <p class="opacity-75">Silakan isi data kembali.</p>
        `;
    });

    // Tombol YA → kirim ke PHP
    document.getElementById("btnKonfirmasi").addEventListener("click", function () {

        const formData = new FormData();
        formData.append('jenis', 'kelompok');
        formData.append('nama', nama);
        formData.append('no_hp', hp);
        formData.append('instansi', instansi);
        formData.append('jumlah', jumlah);
        formData.append('tujuan', tujuan);

        fetch('config/db_tim.php', {
            method: 'POST',
            body: formData
        })
        .then(res => res.json())
        .then(res => {

            if (res.status !== 'success') {
                alert('Gagal menyimpan data');
                return;
            }

            const kode = res.kode;

            // Reset form
            form.reset();

            // === TAMPILAN SUKSES (SAMA KONSEP ONLY) ===
            panel.innerHTML = `
                <div class="text-center mb-4">
                    <div class="mb-3">
                        <i class="bi bi-check-circle-fill"
                           style="font-size:60px;color:#b5e3d8;"></i>
                    </div>
                    <h4 class="fw-bold text-white">Masuk Berhasil!</h4>
                    <p class="opacity-75">Simpan kode kunjungan Anda</p>
                </div>

                <div class="bg-white text-dark p-4 rounded-4 shadow-sm text-center">
                    <small class="text-muted d-block mb-1">SESSION ID</small>

                    <div class="border border-dashed rounded-3 py-3 mb-3"
                         style="font-size:28px;letter-spacing:3px;font-weight:700;">
                        ${kode}
                    </div>

                    <small class="text-muted">
                        Gunakan ID ini saat proses keluar
                    </small>

                    <button id="btnUlangi"
                        class="btn btn-dark w-100 mt-4 rounded-pill">
                        Input Data Baru
                    </button>
                </div>
            `;

            document.getElementById("btnUlangi").addEventListener("click", () => {
                panel.innerHTML = `
                    <h5 class="fw-bold mb-3">Simpan data anda jika berhasil!</h5>
                    <p class="opacity-75">Silakan lengkapi data diri Anda.</p>
                `;
            });

        })
        .catch(err => console.error(err));
    });
});
