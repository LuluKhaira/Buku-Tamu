const panel = document.getElementById("previewPanel");

// Tombol SIMPAN → tampilkan pesan sukses + kode unik
document.getElementById("btnSimpan").addEventListener("click", function (e){
    e.preventDefault();

    const form = document.getElementById("formTamu");

    // Jika masih ada yang kosong → stop
    if (!form.checkValidity()) {
        form.reportValidity(); 
        return;
    }

    let nama = document.querySelector("[name='nama']").value;
    let hp = document.querySelector("[name='no_hp']").value;
    let instansi = document.querySelector("[name='instansi']").value;
    let jumlah = document.querySelector("[name='jumlah']").value;
    let tujuan = document.querySelector("[name='tujuan']").value;

    // Buat kode unik (misal random 6 digit)
    let kode = Math.floor(100000 + Math.random() * 900000);

    // Tampilkan pesan sukses & kode
    panel.innerHTML = `
        <h5 class="fw-bold mb-3">Data Anda Berhasil!</h5>
        <p>Silahkan simpan atau screenshot kode dibawah ini:</p>
        <h3 class="text-primary fw-bold">KODE ANDA: ${kode}</h3>
        <p class="text-muted">Gunakan kode ini untuk keluar jika sudah selesai berkunjung.</p>
    `;

    // Kirim data ke PHP
    const formData = new FormData();
    formData.append('jenis', 'kelompok');
    formData.append('nama', nama);
    formData.append('no_hp', hp);
    formData.append('instansi', instansi);
    formData.append('jumlah', jumlah);
    formData.append('tujuan', tujuan);
    formData.append('kode', kode); // kirim juga kode ke server

    fetch('config/db_tim.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        // Reset form
        document.querySelector("form").reset();

        // Notifikasi sukses
        const alert = document.createElement("div");
        alert.className = "alert alert-success alert-dismissible fade show position-fixed";
        alert.style.top = "80px";
        alert.style.right = "20px";
        alert.style.zIndex = "9999";
        alert.innerHTML = `
            Data pengunjung berhasil disimpan!
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        `;
        document.body.appendChild(alert);

        setTimeout(() => alert.remove(), 3000);
    })
    .catch(err => console.error(err));
});
