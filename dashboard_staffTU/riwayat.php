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

          <form method="GET" class="row g-3 mb-4 align-items-end justify-content-center">

            <div class="col-md-3 col-lg-2 text-center">
              <label for="dariTanggal" class="form-label mb-0 small" style="color:#8B5E34;">Dari Tanggal</label>
              <input type="date" name="dari" class="form-control form-control-sm" style="border: 1.9px solid #8B5E34;"
                value="<?= $_GET['dari'] ?? '' ?>">
            </div>

            <div class="col-md-3 col-lg-2 text-center">
              <label for="sampaiTanggal" class="form-label mb-0 small" style="color:#8B5E34;">Sampai Tanggal</label>
              <input type="date" name="sampai" class="form-control form-control-sm" style="border: 1.9px solid #8B5E34;"
                value="<?= $_GET['sampai'] ?? '' ?>">
            </div>

            <div class="col-auto">
              <button type="submit" class="btn btn-sm text-white" style="background:#D4A373; border-color:#D4A373;">
                <i class="bi bi-funnel"></i> Filter
              </button>
            </div>

          </form>


          <div class="table-responsive" style="max-height: 460px; overflow-y: auto; overflow-x: auto;">
            <table class="table table-hover align-middle text-center table-bordered" id="tabelData">
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
                include '../config/db_tanggal.php';

                
                $q = mysqli_query($connect, $sql);

                if ($q === false) {
                  echo '<tr><td colspan="10" class="text-danger">Query error: ' . htmlspecialchars(mysqli_error($connect)) . '</td></tr>';
                } else {
                  $rows = [];
                  while ($r = mysqli_fetch_assoc($q)) {
                    $rows[] = $r;
                  }

                  if (count($rows) === 0) {
                    echo '<tr><td colspan="10" class="text-muted">Belum ada data pengunjung.</td></tr>';
                  } else {
                    $no = 1;
                    // detect if 'id' column exists
                    $hasId = array_key_exists('id', $rows[0]);

                    foreach ($rows as $row):
                      ?>
                      <tr <?= $hasId ? 'data-id="' . $row['id'] . '"' : 'data-has-id="0"' ?>>
                        <td><?= str_pad($no, 2, '0', STR_PAD_LEFT) ?></td>
                        <td><?= htmlspecialchars($row['nama']) ?></td>
                        <td><?= htmlspecialchars($row['no_hp']) ?></td>
                        <td><?= date('d/m/Y', strtotime($row['tanggal'])) ?></td>
                        <td><?= date('H.i', strtotime($row['waktu'])) ?></td>
                        <td><?= htmlspecialchars($row['instansi']) ?></td>
                        <td><?= htmlspecialchars($row['tujuan']) ?></td>
                        <td><?= $row['jumlah'] ?></td>
                        <td>
                          <?php if (isset($row['jenis']) && $row['jenis'] == 'satuan'): ?>
                            <span class="badge bg-success">Satuan</span>
                          <?php else: ?>
                            <span class="badge bg-warning text-dark">Kelompok</span>
                          <?php endif; ?>
                        </td>
                        <td class="d-flex justify-content-center gap-2">
                          <?php if ($hasId): ?>
                            <button class="btn btn-link p-0 text-success btn-edit"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-link p-0 text-danger btn-delete"><i class="bi bi-trash"></i></button>
                          <?php else: ?>
                            <button class="btn btn-link p-0 text-secondary" disabled title="No id column">
                              <i class="bi bi-pencil"></i>
                            </button>
                            <button class="btn btn-link p-0 text-secondary" disabled title="No id column">
                              <i class="bi bi-trash"></i>
                            </button>
                          <?php endif; ?>
                        </td>

                      </tr>
                      <?php
                      $no++;
                    endforeach;
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


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    let rowEdit = null;
    let rowDelete = null;

    // helper: show alert
    function showAlert(message, type = 'success') {
      const alert = document.createElement('div');
      alert.className = `alert alert-${type} alert-dismissible fade show position-fixed`;
      alert.style.top = '20px';
      alert.style.right = '20px';
      alert.style.zIndex = '9999';
      alert.innerHTML = `${message}<button type="button" class="btn-close" data-bs-dismiss="alert"></button>`;
      document.body.appendChild(alert);
      setTimeout(() => alert.remove(), 3000);
    }

    // === KLIK EDIT ===
    document.querySelectorAll('.btn-edit').forEach(btn => {
      btn.addEventListener('click', function () {
        rowEdit = this.closest('tr');
        const cells = rowEdit.querySelectorAll('td');
        document.getElementById('editNama').value = cells[1].innerText.trim();
        document.getElementById('editNoHp').value = cells[2].innerText.trim();
        document.getElementById('editInstansi').value = cells[5].innerText.trim();
        document.getElementById('editTujuan').value = cells[6].innerText.trim();
        document.getElementById('editJumlah').value = cells[7].innerText.trim();

        new bootstrap.Modal(document.getElementById('modalEdit')).show();
      });
    });

    // === SIMPAN EDIT (AJAX) ===
    document.getElementById('btnSimpanEdit').addEventListener('click', () => {
      if (!rowEdit) return;
      const id = rowEdit.getAttribute('data-id');
      const nama = document.getElementById('editNama').value.trim();
      const no_hp = document.getElementById('editNoHp').value.trim();
      const instansi = document.getElementById('editInstansi').value.trim();
      const tujuan = document.getElementById('editTujuan').value.trim();
      const jumlah = document.getElementById('editJumlah').value || 1;

      const form = new FormData();
      form.append('id', id);
      form.append('nama', nama);
      form.append('no_hp', no_hp);
      form.append('instansi', instansi);
      form.append('tujuan', tujuan);
      form.append('jumlah', jumlah);

      fetch('../config/riwayat_update.php', {
        method: 'POST',
        body: form
      })
        .then(res => res.json())
        .then(data => {
          if (data.success) {
            // update DOM
            const cells = rowEdit.querySelectorAll('td');
            cells[1].innerText = nama;
            cells[2].innerText = no_hp;
            cells[5].innerText = instansi;
            cells[6].innerText = tujuan;
            cells[7].innerText = jumlah;

            showAlert('Data berhasil diperbarui', 'success');
            bootstrap.Modal.getInstance(document.getElementById('modalEdit')).hide();
          } else {
            showAlert('Gagal memperbarui: ' + data.message, 'danger');
          }
        })
        .catch(err => {
          console.error(err);
          showAlert('Terjadi kesalahan jaringan', 'danger');
        });
    });

    // === KLIK DELETE ===
    document.querySelectorAll('.btn-delete').forEach(btn => {
      btn.addEventListener('click', function () {
        rowDelete = this.closest('tr');
        new bootstrap.Modal(document.getElementById('modalDelete')).show();
      });
    });

    // === HAPUS BARIS (AJAX) ===
    document.getElementById('btnConfirmDelete').addEventListener('click', () => {
      if (!rowDelete) return;
      const id = rowDelete.getAttribute('data-id');

      const form = new FormData();
      form.append('id', id);

      fetch('../config/riwayat_delete.php', {
        method: 'POST',
        body: form
      })
        .then(res => res.json())
        .then(data => {
          if (data.success) {
            rowDelete.remove();
            showAlert('Data berhasil dihapus', 'success');
            bootstrap.Modal.getInstance(document.getElementById('modalDelete')).hide();
          } else {
            showAlert('Gagal menghapus: ' + data.message, 'danger');
          }
        })
        .catch(err => {
          console.error(err);
          showAlert('Terjadi kesalahan jaringan', 'danger');
        });
    });
  </script>


</body>

</html>