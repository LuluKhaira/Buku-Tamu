<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>History</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

</head>

<body class="d-flex" style="background:#F5EFE7;">

  <?php include '../Nav_Side_Bar/sidebar.php'; ?>

  <div class="flex-grow-1">
    <?php include '../Nav_Side_Bar/navbar.php'; ?>

    <div class="container mt-4">

      <div class="card shadow-sm mb-4">

        <div class="card-header py-3 fw-semibold d-flex justify-content-between align-items-center flex-wrap"
          style="background:#EFE3D6; color:#8B5E34;">

          <span class="fw-bold mb-2 mb-md-0">Laporan Buku Tamu</span>

          <div class="d-flex align-items-center gap-3">

            <form class="d-none d-sm-inline-block">
              <div class="input-group input-group-sm">
                <span class="input-group-text border-0" style="background:#D4A373; color:white;">
                  <i class="fas fa-search"></i>
                </span>
                <input type="text" class="form-control border-0" style="width: 200px; background:#F7E9C8;"
                  placeholder="Cari...">
              </div>
            </form>

            <button class="btn btn-success btn-sm">
              <i class="fa fa-download"></i> Export Excel
            </button>

          </div>

        </div>

        <div class="card-body">

          <div class="table-responsive">
            <table class="table table-hover align-middle text-center table-bordered" id="tabelData">
              <thead style="background:#EFE3D6; color:#8B5E34;">
                <tr>
                  <th>No</th>
                  <th>Pengunjung</th>
                  <th>No HP</th>
                  <th>Tanggal</th>
                  <th>Waktu</th>
                  <th>Instansi</th>
                  <th>Tujuan</th>
                  <th>Jumlah</th>
                  <th>Jenis</th>
                  <th>Aksi</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>01</td>
                  <td>Yanto</td>
                  <td>0812xxxx8888</td>
                  <td>15/9/2025</td>
                  <td>09.00</td>
                  <td>Politeknik Negeri Batam</td>
                  <td>Observasi</td>
                  <td>1</td>
                  <td><span class="badge bg-success">Satuan</span></td>
                  <td>
                    <button class="btn btn-link p-0 me-2 text-success btn-edit"><i class="bi bi-pencil"></i></button>
                    <button class="btn btn-link p-0 text-danger btn-delete"><i class="bi bi-trash"></i></button>
                  </td>
                </tr>

                <tr>
                  <td>02</td>
                  <td>Khaira</td>
                  <td>0857xxxx9999</td>
                  <td>15/9/2025</td>
                  <td>09.30</td>
                  <td>PT. Pertamina</td>
                  <td>Kunjungan</td>
                  <td>10</td>
                  <td><span class="badge bg-warning text-dark">Rombongan</span></td>
                  <td>
                    <button class="btn btn-link p-0 me-2 text-success btn-edit"><i class="bi bi-pencil"></i></button>
                    <button class="btn btn-link p-0 text-danger btn-delete"><i class="bi bi-trash"></i></button>
                  </td>
                </tr>

                <tr>
                  <td>03</td>
                  <td>Zahwa</td>
                  <td>0813xxxx7777</td>
                  <td>15/9/2025</td>
                  <td>10.30</td>
                  <td>PT. SIX</td>
                  <td>Kunjungan</td>
                  <td>10</td>
                  <td><span class="badge bg-warning text-dark">Rombongan</span></td>
                  <td>
                    <button class="btn btn-link p-0 me-2 text-success btn-edit"><i class="bi bi-pencil"></i></button>
                    <button class="btn btn-link p-0 text-danger btn-delete"><i class="bi bi-trash"></i></button>
                  </td>
                </tr>

              </tbody>
            </table>
          </div>

        </div>
      </div>

    </div>
  </div>

  <!-- ====================== MODAL EDIT ===================== -->
  <div class="modal fade" id="modalEdit" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title">Edit Data Pengunjung</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">
          <form id="formEdit">
            <div class="mb-2">
              <label class="form-label small">Nama Pengunjung</label>
              <input type="text" class="form-control" id="editNama">
            </div>

            <div class="mb-2">
              <label class="form-label small">Nomor HP</label>
              <input type="text" class="form-control" id="editNoHp">
            </div>

            <div class="mb-2">
              <label class="form-label small">Instansi</label>
              <input type="text" class="form-control" id="editInstansi">
            </div>

            <div class="mb-2">
              <label class="form-label small">Tujuan</label>
              <input type="text" class="form-control" id="editTujuan">
            </div>

            <div class="mb-2">
              <label class="form-label small">Jumlah</label>
              <input type="number" class="form-control" id="editJumlah">
            </div>

          </form>
        </div>

        <div class="modal-footer">
          <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button class="btn btn-primary" id="btnSimpanEdit">Simpan</button>
        </div>

      </div>
    </div>
  </div>


  <!-- ====================== MODAL DELETE ===================== -->
  <div class="modal fade" id="modalDelete" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title">Hapus Data</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">
          Apakah kamu yakin ingin menghapus data ini?
        </div>

        <div class="modal-footer">
          <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button class="btn btn-danger" id="btnConfirmDelete">Hapus</button>
        </div>

      </div>
    </div>
  </div>


  <!-- ====================== SCRIPT ===================== -->
  <script>
    let rowEdit = null;
    let rowDelete = null;

    // === KLIK EDIT ===
    document.querySelectorAll(".btn-edit").forEach(btn => {
      btn.addEventListener("click", function () {
        rowEdit = this.closest("tr");
        const data = rowEdit.querySelectorAll("td");

        document.getElementById("editNama").value = data[1].innerText;
        document.getElementById("editNoHp").value = data[2].innerText;
        document.getElementById("editInstansi").value = data[5].innerText;
        document.getElementById("editTujuan").value = data[6].innerText;
        document.getElementById("editJumlah").value = data[7].innerText;

        new bootstrap.Modal(document.getElementById("modalEdit")).show();
      });
    });

    // === SIMPAN EDIT ===
    document.getElementById("btnSimpanEdit").addEventListener("click", () => {
      const inputs = rowEdit.querySelectorAll("td");
      inputs[1].innerText = document.getElementById("editNama").value;
      inputs[2].innerText = document.getElementById("editNoHp").value;
      inputs[5].innerText = document.getElementById("editInstansi").value;
      inputs[6].innerText = document.getElementById("editTujuan").value;
      inputs[7].innerText = document.getElementById("editJumlah").value;

      bootstrap.Modal.getInstance(document.getElementById("modalEdit")).hide();
    });


    // === KLIK DELETE ===
    document.querySelectorAll(".btn-delete").forEach(btn => {
      btn.addEventListener("click", function () {
        rowDelete = this.closest("tr");
        new bootstrap.Modal(document.getElementById("modalDelete")).show();
      });
    });

    // === HAPUS BARIS ===
    document.getElementById("btnConfirmDelete").addEventListener("click", () => {
      rowDelete.remove();
      bootstrap.Modal.getInstance(document.getElementById("modalDelete")).hide();
    });
  </script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>