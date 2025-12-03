const panel = document.getElementById("previewPanel");

// Tombol SIMPAN → tampilkan preview + 2 tombol
document.getElementById("btnSimpan").addEventListener("click", function () {

    let nama = document.querySelector("[name='nama']").value;
    let hp = document.querySelector("[name='no_hp']").value;
    let instansi = document.querySelector("[name='instansi']").value;
    let jumlah = document.querySelector("[name='jumlah']").value;
    let tujuan = document.querySelector("[name='tujuan']").value;

    // Tampilkan preview konfirmasi
    panel.innerHTML = `
        <h5 class="fw-bold mb-3">Preview Data</h5>
        
        <div><strong>Nama:</strong> ${nama || "-"}</div>
        <div><strong>No HP:</strong> ${hp || "-"}</div>
        <div><strong>Instansi:</strong> ${instansi || "-"}</div>
        <div><strong>Jumlah:</strong> ${jumlah || "-"}</div>
        <div style="white-space: normal; word-wrap: break-word; max-width: 200px;">
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
        formData.append('jumlah', jumlah);
        formData.append('tujuan', tujuan);

        fetch('../config/db_tim.php', {
            method: 'POST',
            body: formData
        })
            .then(response => response.text())
            .then(data => {

                // Reset form
                document.querySelector("form").reset();

                // Reset panel
                panel.innerHTML = `
                <h5 class="fw-bold mb-3">Preview Data</h5>
                <p class="opacity-75">Belum ada data yang diinput.</p>
            `;

                // Notifikasi sukses
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

                setTimeout(() => {
                    alert.remove();
                }, 3000);

            })
            .catch(err => console.error(err));
    });
});
