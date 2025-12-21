<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: ../login.php");
  exit();
}

include_once '../config/connect.php';
include "../config/db_tanggal.php"; // file ini sudah men-generate $pengunjung array

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Kunjungan</title>

  <!-- Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
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

    .td-text {
      max-width: 200px;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
  </style>
</head>

<body style="background:#f2f2f2;">
  <div class="page-wrapper">

    <?php include '../Nav_Side_Bar/sidebar.php'; ?>
    <div class="main-content">
      <?php include '../Nav_Side_Bar/navbar.php'; ?>

      <div class="container-fluid mt-4 px-2">

        <!-- Filter Tanggal & Export -->
        <div class="card shadow-sm border-0 rounded-4">
  <div class="card-header p-3 border-0 bg-white">
    <div class="d-flex justify-content-between align-items-start flex-wrap">

      <!-- Bagian Kiri: Filter Tanggal -->
      <form method="GET" class="d-flex gap-2 flex-wrap">
        <div>
          <label class="small fw-semibold text-muted mb-1">DARI TANGGAL</label>
          <input type="date" name="dari" class="form-control rounded-3" value="<?= htmlspecialchars($_GET['dari'] ?? '') ?>">
        </div>
        <div>
          <label class="small fw-semibold text-muted mb-1">SAMPAI TANGGAL</label>
          <input type="date" name="sampai" class="form-control rounded-3" value="<?= htmlspecialchars($_GET['sampai'] ?? '') ?>">
        </div>
        <div class="d-flex align-items-end">
          <button type="submit" class="btn btn-sm text-white" style="background:#D4A373; border-color:#D4A373;">
            <i class="bi bi-funnel"></i> Filter
          </button>
        </div>
      </form>

      <!-- Bagian Kanan: Export & Status -->
      <div class="text-end">
        <!-- Export Buttons -->
        <div class="d-flex gap-2 mb-2 flex-wrap justify-content-end">
          <form method="POST" action="../config/exportexcel.php">
            <input type="hidden" name="tanggala" value="<?= $_GET['dari'] ?? '' ?>">
            <input type="hidden" name="tanggalb" value="<?= $_GET['sampai'] ?? '' ?>">
            <button class="btn btn-success px-4 rounded-3" name="export_excel">
              <i class="bi bi-download me-1"></i> EXCEL
            </button>
          </form>
          <form method="POST" action="../config/exportpdf.php">
            <input type="hidden" name="tanggala" value="<?= $_GET['dari'] ?? '' ?>">
            <input type="hidden" name="tanggalb" value="<?= $_GET['sampai'] ?? '' ?>">
            <button class="btn btn-danger px-4 rounded-3" name="export_pdf">
              <i class="bi bi-download me-1"></i> PDF
            </button>
          </form>
        </div>

        <!-- Penjelasan Status -->
        <div style="font-size: 12px;">
          <em class="me-2 text-body-tertiary">*Status</em>
          <span class="me-3"><i class="bi bi-circle-fill text-success"></i> Sudah Pulang</span>
          <span><i class="bi bi-circle-fill text-danger"></i> Belum Pulang</span>
        </div>
      </div>

    </div>
  </div>
</div>


        <!-- Search & Status Filter -->
        <div class="card shadow-sm border-0 rounded-4 mt-4">
          <div class="card-header py-0" style="background:#EFE3D6; color:#8B5E34;">
            <form method="GET" class="rounded-4 p-3 row g-2 align-items-center">
              <div class="col">
                <div class="input-group">
                  <span class="input-group-text bg-white"><i class="bi bi-search"></i></span>
                  <input type="text" name="search" value="<?= htmlspecialchars($_GET['search'] ?? '') ?>" class="form-control" placeholder="Cari nama, instansi, tanggal...">
                </div>
              </div>
              <div class="col-auto">
                <select name="status" class="form-select shadow-sm px-4" onchange="this.form.submit()">
                  <option value="">Semua Status</option>
                  <option value="datang" <?= ($_GET['status'] ?? '') == 'datang' ? 'selected' : '' ?>>Sedang Berkunjung</option>
                  <option value="pulang" <?= ($_GET['status'] ?? '') == 'pulang' ? 'selected' : '' ?>>Sudah Pulang</option>
                </select>
              </div>
            </form>
          </div>

          <!-- Table -->
          <div class="card-body p-0">
            <div class="table-responsive" style="max-height:465px; overflow:auto;">
              <table class="table table-hover table-bordered align-middle mb-0">
                <thead class="text-center" style="background:#EFE3D6; color:#8B5E34; position:sticky; top:0; z-index:5;">
                  <tr>
                    <th>No</th>
                    <th>Status</th>
                    <th>KODE</th>
                    <th>Nama Pengunjung</th>
                    <th>No HP</th>
                    <th>Tanggal</th>
                    <th>Waktu Datang</th>
                    <th>Waktu Pulang</th>
                    <th>Instansi</th>
                    <th>Tujuan</th>
                    <th>Jumlah</th>
                    <th>Jenis</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if (empty($pengunjung)) : ?>
                    <tr>
                      <td colspan="13" class="text-center text-muted py-4">
                        Belum ada pengunjung pada periode <?= htmlspecialchars($dari) ?> sampai <?= htmlspecialchars($sampai) ?>
                      </td>
                    </tr>
                    <?php else : $no = 1;
                    foreach ($pengunjung as $row) : ?>
                      <tr data-id="<?= $row['no_pengunjung'] ?>" data-status="<?= $row['waktu_pulang'] ? 'pulang' : 'datang' ?>">
                        <td><?= str_pad($no++, 2, "0", STR_PAD_LEFT) ?></td>
                        <td class="text-center"><i class="bi bi-circle-fill <?= $row['waktu_pulang'] ? 'text-success' : 'text-danger' ?>"></i></td>
                        <td><?= htmlspecialchars($row['kode']) ?></td>
                        <td><?= htmlspecialchars($row['nama']) ?></td>
                        <td><?= htmlspecialchars($row['no_hp']) ?></td>
                        <td class="text-center"><?= date('d/m/Y', strtotime($row['tanggal'])) ?></td>
                        <td class="text-center"><?= date('H:i', strtotime($row['waktu_datang'])) ?></td>
                        <td class="text-center"><?= $row['waktu_pulang'] ? date('H:i', strtotime($row['waktu_pulang'])) : '-' ?></td>
                        <td class="td-text" data-bs-toggle="tooltip" title="<?= htmlspecialchars($row['instansi']) ?>"><?= htmlspecialchars($row['instansi']) ?></td>
                        <td class="td-text" data-bs-toggle="tooltip" title="<?= htmlspecialchars($row['tujuan']) ?>"><?= htmlspecialchars($row['tujuan']) ?></td>
                        <td class="text-center"><?= $row['jumlah'] ?></td>
                        <td class="text-center"><span class="badge <?= $row['jenis'] == 'satuan' ? 'bg-success' : 'bg-warning text-dark' ?>"><?= ucfirst($row['jenis']) ?></span></td>
                        <td class="text-center">
                          <div class="d-flex justify-content-center gap-2">
                            <button class="btn btn-success btn-sm btn-edit"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-danger btn-sm btn-delete"><i class="bi bi-trash"></i></button>
                          </div>
                        </td>
                      </tr>
                  <?php endforeach;
                  endif; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Modal Edit & Delete tetap sama seperti sebelumnya -->
  <!-- Modal Edit -->
  <div class="modal fade" id="modalEdit" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5>Edit Data Pengunjung</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <form id="formEdit">
            <div class="mb-2"><label>Nama</label><input type="text" class="form-control" id="editNama"></div>
            <div class="mb-2"><label>No HP</label><input type="text" class="form-control" id="editNoHp"></div>
            <div class="mb-2"><label>Instansi</label><input type="text" class="form-control" id="editInstansi"></div>
            <div class="mb-2"><label>Tujuan</label><input type="text" class="form-control" id="editTujuan"></div>
            <div class="mb-2"><label>Status</label>
              <select id="editStatus" class="form-select">
                <option value="datang">Sedang Berkunjung</option>
                <option value="pulang">Sudah Pulang</option>
              </select>
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
  </div> <!-- Modal Delete -->
  <div class="modal fade" id="modalDelete" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Hapus Data</h5> <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">Apakah kamu yakin ingin menghapus data ini?</div>
        <div class="modal-footer"> <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button> <button class="btn btn-danger" id="btnConfirmDelete">Hapus</button> </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../dashboard_staffTU/data_kunjungan.js"></script>

  <script>
    const modalEdit = new bootstrap.Modal(document.getElementById('modalEdit'));
    const modalDelete = new bootstrap.Modal(document.getElementById('modalDelete'));
    let selectedId = null;

    // Edit
    document.querySelectorAll('.btn-edit').forEach(btn => {
      btn.addEventListener('click', function() {
        const tr = this.closest('tr');
        selectedId = tr.dataset.id;
        document.getElementById('editNama').value = tr.children[3].textContent.trim();
        document.getElementById('editNoHp').value = tr.children[4].textContent.trim();
        document.getElementById('editInstansi').value = tr.children[8].textContent.trim();
        document.getElementById('editTujuan').value = tr.children[9].textContent.trim();
        document.getElementById('editStatus').value = tr.dataset.status;
        modalEdit.show();
      });
    });
    

    document.getElementById('btnSimpanEdit').addEventListener('click', () => {
      const formData = new FormData();
      formData.append('no_pengunjung', selectedId);
      formData.append('nama', document.getElementById('editNama').value);
      formData.append('no_hp', document.getElementById('editNoHp').value);
      formData.append('instansi', document.getElementById('editInstansi').value);
      formData.append('tujuan', document.getElementById('editTujuan').value);
      formData.append('status', document.getElementById('editStatus').value);

      fetch('../config/data_kunjungan_update.php', {
          method: 'POST',
          body: formData
        })
        .then(res => res.json())
        .then(res => {
          if (res.status === 'success') {
            alert('Berhasil update');
            location.reload();
          } else alert('Gagal: ' + res.message);
        });
    });

    // Delete
    document.querySelectorAll('.btn-delete').forEach(btn => {
      btn.addEventListener('click', () => {
        selectedId = btn.closest('tr').dataset.id;
        modalDelete.show();
      });
    });
    document.getElementById('btnConfirmDelete').addEventListener('click', () => {
      const formData = new FormData();
      formData.append('no_pengunjung', selectedId);
      fetch('../config/data_kunjungan_delete.php', {
          method: 'POST',
          body: formData
        })
        .then(res => res.json())
        .then(res => {
          if (res.status === 'success') {
            alert('Berhasil hapus');
            location.reload();
          } else alert('Gagal: ' + res.message);
        });
    });

    // Tooltip
    document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(el => new bootstrap.Tooltip(el));
  </script>

</body>

</html>