document.addEventListener("DOMContentLoaded", function () {

            const btnCari = document.getElementById("btnCari");
            const sessionInput = document.getElementById("sessionId");
            const hasilTicket = document.getElementById("hasilTicket");

            if (!btnCari) {
                console.error("btnCari tidak ditemukan");
                return;
            }

            btnCari.addEventListener("click", cariData);
            sessionInput.addEventListener("keyup", e => {
                if (e.key === "Enter") cariData();
            });

            function cariData() {
                let kode = sessionInput.value.trim();

                if (kode === "") {
                    hasilTicket.innerHTML = `
                <div class="alert alert-warning rounded-4">
                    Session ID tidak boleh kosong.
                </div>`;
                    return;
                }

                hasilTicket.innerHTML = `
            <div class="text-center text-muted py-4">
                <div class="spinner-border"></div>
                <p class="mt-2 mb-0">Mencari data...</p>
            </div>
        `;

                fetch("config/caridata.php", {
                    method: "POST",
                    headers: { "Content-Type": "application/x-www-form-urlencoded" },
                    body: "kode=" + encodeURIComponent(kode)
                })
                    .then(res => res.text())
                    .then(html => {
                        hasilTicket.innerHTML = html;
                    })
                    .catch(() => {
                        hasilTicket.innerHTML = `
                <div class="alert alert-danger">
                    Gagal mengambil data.
                </div>`;
                    });
            }

            window.checkout = function (kode) {
                if (!confirm("Yakin ingin check-out?")) return;

                fetch("config/pulang.php", {
                    method: "POST",
                    headers: { "Content-Type": "application/x-www-form-urlencoded" },
                    body: "kode=" + encodeURIComponent(kode)
                })
                    .then(res => res.text())
                    .then(html => {
                        hasilTicket.innerHTML = html;
                        sessionInput.value = "";
                    });
            };

        });