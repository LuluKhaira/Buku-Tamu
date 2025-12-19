const panel = document.getElementById("previewPanel");

// Tombol SIMPAN → tampilkan preview + 2 tombol
document.getElementById("btnSimpan").addEventListener("click", function (e) {
    e.preventDefault();
    const form = document.getElementById("formTamu");

    // Jika masih ada yang kosong → stop
    if (!form.checkValidity()) {
        form.reportValidity(); // munculkan popup “please fill out this field” + custom message
        return;
    }

    let nama = document.querySelector("[name='nama']").value;
    let hp = document.querySelector("[name='no_hp']").value;
    let instansi = document.querySelector("[name='instansi']").value;
    let tujuan = document.querySelector("[name='tujuan']").value;

    // Tampilkan preview konfirmasi
    panel.innerHTML = `
        <h5 class="fw-bold mb-3">Preview Data</h5>
        
        <div><strong>Nama:</strong> ${nama || "-"}</div>
        <div><strong>No HP:</strong> ${hp || "-"}</div>
        <div><strong>Instansi:</strong> ${instansi || "-"}</div>
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

    // Tombol YA → kirim data ke PHP
    document.getElementById("btnKonfirmasi").addEventListener("click", function () {

        const formData = new FormData();
        formData.append('jenis', 'satuan'); // ← bagian penting
        formData.append('nama', nama);
        formData.append('no_hp', hp);
        formData.append('instansi', instansi);
        formData.append('tujuan', tujuan);

        fetch('config/db_only.php', {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(res => {

                if (res.status !== 'success') {
                    alert('Gagal menyimpan data');
                    return;
                }

                const kode = res.kode;

                // Reset form
                document.getElementById("formTamu").reset();

                // TAMPILAN PREVIEW SEPERTI FOTO (TANPA QR)
                panel.innerHTML = `
        <div class="text-center mb-4">
            <div class="mb-3">
                <i class="bi bi-check-circle-fill"
                   style="font-size:60px;color:#b5e3d8;"></i>
            </div>
            <h4 class="fw-bold text-white">Check-In Berhasil!</h4>
            <p class="opacity-75">Simpan kode kunjungan Anda</p>
        </div>

        <div class="bg-white text-dark p-4 rounded-4 shadow-sm text-center">
            <small class="text-muted d-block mb-1">SESSION ID</small>

            <div class="border border-dashed rounded-3 py-3 mb-3"
                 style="font-size:28px;letter-spacing:3px;font-weight:700;">
                ${kode}
            </div>

            <small class="text-muted">
                Gunakan ID ini saat proses check-out
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
