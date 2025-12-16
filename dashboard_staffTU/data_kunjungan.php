<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: ../login.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Kunjungan</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
  <style>
    .badge-jenis {
      width: 90px;
      display: inline-block;
      text-align: center;
      font-size: 0.85rem;
      padding: 6px 0;
    }

    .page-wrapper {
      margin-top: -30px;
    }

    .main-content {
      flex-grow: 1;

    }

    /* Tablet panel di dalam card */


    /* Table look */
    .table-custom {
      overflow: hidden;
      font-size: 0.9rem;
    }

    .table-custom thead th {
      background: #EFE3D6;
      color: #8B5E34;
      font-weight: 600;
      text-align: center;
      vertical-align: middle;
    }

    .table-custom tbody td {
      vertical-align: middle;
      text-align: center;
      background: #fff;
    }

    /* Kolom teks panjang */
    .td-text {
      max-width: 200px;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
  </style>
</head>

<?php
include "../config/db_data_kunjungan.php";
?>

<body style="background:#f2f2f2;">
  <div class="page-wrapper">
    <?php include '../Nav_Side_Bar/sidebar.php'; ?>

    <div class="main-content">
      <?php include '../Nav_Side_Bar/navbar.php'; ?>

      <div class="container-fluid mt-4 px-2">

        <div class="card shadow-sm mb-4">

          <div class="card-header py-3 fw-semibold d-flex justify-content-between align-items-center flex-wrap"
            style="background:#EFE3D6; color:#8B5E34;">

            <span class="fw-bold mb-2 mb-md-0">Laporan Buku Tamu</span>

            <div class="d-flex align-items-center gap-3">

              <form class="d-none d-sm-inline-block" method="GET">
                <div class="input-group input-group-sm">
                  <span class="input-group-text border-0" style="background:#D4A373; color:white;">
                    <i class="fas fa-search"></i>
                  </span>
                  <input type="text" name="search" class="form-control border-0"
                    style="width: 230px; background:#F7E9C8;" placeholder="Cari nama, Instansi, tanggal..."
                    value="<?= $_GET['search'] ?? '' ?>">
                </div>
              </form>

              <form method="POST" action="../config/exportexcel.php" class="d-flex gap-2">
                <input type="hidden" name="tanggala" value="<?= $_GET['dari'] ?? '' ?>">
                <input type="hidden" name="tanggalb" value="<?= $_GET['sampai'] ?? '' ?>">

                <button class="btn flex-grow-1" style="background:#2d5f5d; color: #f9f5ed;" name="export_excel">
                  <i class="bi bi-file-earmark-excel" style="color:white;"></i> Export Data Excel
                </button>
              </form>

              <form method="POST" action="../config/exportpdf.php" class="d-flex gap-2">

                <button class="btn btn-danger flex-grow-1" name="export_pdf">
                  <i class="bi bi-file-earmark-pdf"></i> Export Data PDF
                </button>
              </form>
            </div>
          </div>
          <div class="card-body">
            <form method="GET" class="row g-3 mb-4 align-items-end justify-content-center">
              <div class="col-md-3 col-lg-2 text-center">
                <label class="form-label mb-0 small" style="color:#8B5E34;">Dari Tanggal</label>
                <input type="date" name="dari" class="form-control form-control-sm" style="border: 1.9px solid #8B5E34;"
                  value="<?= $_GET['dari'] ?? '' ?>">
              </div>

              <div class="col-md-3 col-lg-2 text-center">
                <label class="form-label mb-0 small" style="color:#8B5E34;">Sampai Tanggal</label>
                <input type="date" name="sampai" class="form-control form-control-sm"
                  style="border: 1.9px solid #8B5E34;" value="<?= $_GET['sampai'] ?? '' ?>">
              </div>

              <div class="col-auto">
                <button type="submit" class="btn btn-sm text-white" style="background:#D4A373; border-color:#D4A373;">
                  <i class="bi bi-funnel"></i> Filter
                </button>
              </div>

            </form>

            <div class="table-responsive" style="max-height: 465px; overflow-y: auto; overflow-x: auto;">
              <table class="table table-hover table-bordered table-custom align-middle mb-0">

                <thead style="background:#EFE3D6; color:#8B5E34; position: sticky; top: 0; z-index: 5;">
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

                  <?php
                  include_once '../config/connect.php';
                  include '../config/db_data_kunjungan.php';
                  $q = mysqli_query($connect, $sql);

                  if (!$q) {
                    echo '<tr><td colspan="10" class="text-danger">Query error: ' . mysqli_error($connect) . '</td></tr>';
                  } else {
                    if (mysqli_num_rows($q) == 0) {
                      echo '<tr>
                <td colspan="10" class="text-muted text-center">
                  Belum ada pengunjung dibulan / tanggal ini.
                </td>
              </tr>';
                    } else {
                      $no = 1;
                      while ($row = mysqli_fetch_assoc($q)):
                        ?>
                        <tr data-id="<?= $row['no_pengunjung'] ?>">
                          <td><?= str_pad($no++, 2, "0", STR_PAD_LEFT) ?></td>
                          <td><?= htmlspecialchars($row['nama']) ?></td>
                          <td><?= htmlspecialchars($row['no_hp']) ?></td>
                          <td><?= date('d/m/Y', strtotime($row['tanggal'])) ?></td>
                          <td><?= date('H.i', strtotime($row['waktu'])) ?></td>
                          <td class="td-text" data-bs-toggle="tooltip" title="<?= htmlspecialchars($row['instansi']) ?>">
                            <?= htmlspecialchars($row['instansi']) ?>
                          </td>

                          <td style="max-width:200px; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;"
                            data-bs-toggle="tooltip" title="<?= htmlspecialchars($row['tujuan']) ?>">
                            <?= htmlspecialchars($row['tujuan']) ?>
                          </td>
                          <td><?= $row['jumlah'] ?></td>
                          <td>
                            <?php if ($row['jenis'] == 'satuan'): ?>
                              <span class="badge bg-success badge-jenis">Satuan</span>
                            <?php else: ?>
                              <span class="badge bg-warning text-dark badge-jenis">Kelompok</span>
                            <?php endif; ?>
                          </td>

                          <td class="text-center align-middle">
                            <div class="d-flex justify-content-center align-items-center gap-2">
                              <button
                                class="btn btn-success d-flex align-items-center justify-content-center btn-sm btn-edit">
                                <i class="bi bi-pencil"></i>
                              </button>

                              <button
                                class="btn btn-danger d-flex align-items-center justify-content-center btn-sm btn-delete">
                                <i class="bi bi-trash"></i>
                              </button>
                            </div>
                          </td>


                        </tr>
                        <?php
                      endwhile;
                    }
                  }
                  ?>
                </tbody>
              </table>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>

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


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../dashboard_staffTU/data_kunjungan.js"></script>

  <script>
    let selectedId = null;

    const modalEdit = new bootstrap.Modal(document.getElementById('modalEdit'));
    const modalDelete = new bootstrap.Modal(document.getElementById('modalDelete'));

    document.querySelectorAll('.btn-edit').forEach(btn => {
      btn.addEventListener('click', function () {

        let tr = this.closest('tr');
        selectedId = tr.dataset.id; // FIX: ID taken from no_pengunjung

        let data = tr.querySelectorAll('td');

        document.getElementById('editNama').value = data[1].textContent.trim();
        document.getElementById('editNoHp').value = data[2].textContent.trim();
        document.getElementById('editInstansi').value = data[5].textContent.trim();
        document.getElementById('editTujuan').value = data[6].textContent.trim();
        document.getElementById('editJumlah').value = data[7].textContent.trim();

        modalEdit.show();
      });
    });

    document.getElementById('btnSimpanEdit').addEventListener('click', function () {

      let formData = new FormData();
      formData.append('no_pengunjung', selectedId);
      formData.append('nama', document.getElementById('editNama').value);
      formData.append('no_hp', document.getElementById('editNoHp').value);
      formData.append('instansi', document.getElementById('editInstansi').value);
      formData.append('tujuan', document.getElementById('editTujuan').value);
      formData.append('jumlah', document.getElementById('editJumlah').value);

      fetch('../config/data_kunjungan_update.php', {
        method: 'POST',
        body: formData
      })
        .then(res => res.json())
        .then(res => {
          if (res.status === 'success') {
            alert("Data berhasil diupdate!");
            location.reload();
          } else {
            alert("Gagal update: " + res.message);
          }
        });

    });

    document.querySelectorAll('.btn-delete').forEach(btn => {
      btn.addEventListener('click', function () {
        let tr = this.closest('tr');
        selectedId = tr.dataset.id;
        modalDelete.show();
      });
    });

    document.getElementById('btnConfirmDelete').addEventListener('click', function () {

      let formData = new FormData();
      formData.append('no_pengunjung', selectedId);

      fetch('../config/data_kunjungan_delete.php', {
        method: 'POST',
        body: formData
      })
        .then(res => res.json())
        .then(res => {
          if (res.status === 'success') {
            alert("Data berhasil dihapus!");
            location.reload();
          } else {
            alert("Gagal hapus: " + res.message);
          }
        });

    });

    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    [...tooltipTriggerList].forEach(el => new bootstrap.Tooltip(el));
  </script>

</body>

</html>