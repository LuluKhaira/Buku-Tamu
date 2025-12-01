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

            <!-- SEARCH BAR -->
            <form class="d-none d-sm-inline-block">
              <div class="input-group input-group-sm">
                <span class="input-group-text border-0" style="background:#D4A373; color:white;">
                  <i class="fas fa-search"></i>
                </span>
                <input type="text" class="form-control border-0" style="width: 200px; background:#F7E9C8;"
                  placeholder="Cari...">
              </div>
            </form>

          </div>

        </div>

        <div class="card-body">

          <!-- FORM FILTER TANGGAL -->
          <form method="GET" class="row g-3 mb-4 align-items-end justify-content-center">

            <div class="col-md-3 col-lg-2 text-center">
              <label class="form-label mb-0 small" style="color:#8B5E34;">Dari Tanggal</label>
              <input type="date" name="dari" class="form-control form-control-sm"
                style="border: 1.9px solid #8B5E34;" value="<?= $_GET['dari'] ?? '' ?>">
            </div>

            <div class="col-md-3 col-lg-2 text-center">
              <label class="form-label mb-0 small" style="color:#8B5E34;">Sampai Tanggal</label>
              <input type="date" name="sampai" class="form-control form-control-sm"
                style="border: 1.9px solid #8B5E34;" value="<?= $_GET['sampai'] ?? '' ?>">
            </div>

            <div class="col-auto">
              <button type="submit" class="btn btn-sm text-white" style="background:#D4A373;">
                <i class="bi bi-funnel"></i> Filter
              </button>
            </div>

          </form>

          <!-- FORM EXPORT EXCEL (TERPISAH, TIDAK BUNGKUS TABLE) -->
          <form method="POST" action="../config/exportexcel.php" class="mb-2">
            <input type="hidden" name="tanggala" value="<?= $_GET['dari'] ?? '' ?>">
            <input type="hidden" name="tanggalb" value="<?= $_GET['sampai'] ?? '' ?>">

            <button class="btn btn-success btn-sm">
              <i class="fa fa-download"></i> Export Excel
            </button>
          </form>

          <!-- TABLE -->
          <div class="table-responsive" style="max-height: 460px; overflow-y: auto;">
            <table class="table table-hover align-middle text-center table-bordered">
              <thead style="background:#EFE3D6; color:#8B5E34; position: sticky; top: 0;">
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
                include '../config/connect.php';
                include '../config/db_tanggal.php';

                $q = mysqli_query($connect, $sql);
                if (!$q) {
                  echo '<tr><td colspan="10" class="text-danger">Query Error</td></tr>';
                } else {
                  $rows = mysqli_fetch_all($q, MYSQLI_ASSOC);

                  if (empty($rows)) {
                    echo '<tr><td colspan="10">Tidak ada data.</td></tr>';
                  } else {
                    $no = 1;
                    foreach ($rows as $row):
                ?>
                      <tr data-id="<?= $row['id'] ?>">
                        <td><?= $no++ ?></td>
                        <td><?= htmlspecialchars($row['nama']) ?></td>
                        <td><?= htmlspecialchars($row['no_hp']) ?></td>
                        <td><?= date('d/m/Y', strtotime($row['tanggal'])) ?></td>
                        <td><?= date('H.i', strtotime($row['waktu'])) ?></td>
                        <td><?= htmlspecialchars($row['instansi']) ?></td>
                        <td><?= htmlspecialchars($row['tujuan']) ?></td>
                        <td><?= $row['jumlah'] ?></td>
                        <td>
                          <?php if ($row['jenis'] == 'satuan'): ?>
                            <span class="badge bg-success">Satuan</span>
                          <?php else: ?>
                            <span class="badge bg-warning text-dark">Kelompok</span>
                          <?php endif; ?>
                        </td>

                        <td class="d-flex justify-content-center gap-2">
                          <button class="btn btn-success btn-sm edit-button"
                            data-bs-toggle="modal"
                            data-bs-target="#editPengunjungModal"
                            data-id="<?= $row['id'] ?>"
                            data-nama="<?= $row['nama'] ?>"
                            data-nohp="<?= $row['no_hp'] ?>"
                            data-instansi="<?= $row['instansi'] ?>"
                            data-tujuan="<?= $row['tujuan'] ?>"
                            data-jenis="<?= $row['jenis'] ?>">
                            <i class="bi bi-pencil-square"></i>
                          </button>

                          <button class="btn btn-danger btn-sm btn-delete"
                            data-bs-toggle="modal"
                            data-bs-target="#modalDelete"
                            data-id="<?= $row['id'] ?>"
                            data-nama="<?= $row['nama'] ?>">
                            <i class="bi bi-trash"></i>
                          </button>
                        </td>
                      </tr>
                <?php
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

  <!-- ======================= MODAL EDIT ======================= -->
  <div class="modal fade" id="editPengunjungModal" tabindex="-1">
    <div class="modal-dialog">
      <form action="../config/riwayat_update.php" method="POST" class="modal-content">

        <div class="modal-header bg-success text-white">
          <h5 class="modal-title">Edit Data Pengunjung</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">

          <input type="hidden" id="edit-id" name="id">

          <div class="mb-2">
            <label>Nama</label>
            <input type="text" id="edit-nama" name="nama" class="form-control" required>
          </div>

          <div class="mb-2">
            <label>No HP</label>
            <input type="text" id="edit-nohp" name="no_hp" class="form-control" required>
          </div>

          <div class="mb-2">
            <label>Instansi</label>
            <input type="text" id="edit-instansi" name="instansi" class="form-control" required>
          </div>

          <div class="mb-2">
            <label>Tujuan</label>
            <input type="text" id="edit-tujuan" name="tujuan" class="form-control" required>
          </div>

          <div class="mb-2">
            <label>Jenis</label>
            <input type="text" id="edit-jenis" name="jenis" class="form-control" required>
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button class="btn btn-success">Simpan</button>
        </div>

      </form>
    </div>
  </div>

  <!-- ======================= MODAL DELETE ======================= -->
  <div class="modal fade" id="modalDelete" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title">Hapus Data</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">
          Apakah kamu yakin ingin menghapus data ini?
          <input type="hidden" id="delete-id">
          <p class="mt-2">Nama: <b id="delete-nama"></b></p>
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
    let rowDelete = null;

    // Edit
    document.querySelectorAll('.edit-button').forEach(btn => {
      btn.addEventListener('click', function() {
        document.getElementById('edit-id').value = this.dataset.id;
        document.getElementById('edit-nama').value = this.dataset.nama;
        document.getElementById('edit-nohp').value = this.dataset.nohp;
        document.getElementById('edit-instansi').value = this.dataset.instansi;
        document.getElementById('edit-tujuan').value = this.dataset.tujuan;
        document.getElementById('edit-jenis').value = this.dataset.jenis;
      });
    });

    // Delete
    document.querySelectorAll('.btn-delete').forEach(btn => {
      btn.addEventListener('click', function() {
        rowDelete = this.closest('tr');
        document.getElementById('delete-id').value = this.dataset.id;
        document.getElementById('delete-nama').innerText = this.dataset.nama;
      });
    });

    // Confirm Delete
    document.getElementById('btnConfirmDelete').addEventListener('click', () => {
      const id = document.getElementById('delete-id').value;

      const form = new FormData();
      form.append('id', id);

      fetch('../config/riwayat_delete.php', {
        method: 'POST',
        body: form
      })
      .then(r => r.json())
      .then(res => {
        if (res.success) {
          rowDelete.remove();
          bootstrap.Modal.getInstance(document.getElementById('modalDelete')).hide();
        }
      });
    });
  </script>

</body>
</html>
