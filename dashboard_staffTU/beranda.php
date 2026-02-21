<?php session_start();
if (!isset($_SESSION['username'])) {
  header("Location: ../login.php");
  exit();
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buku Tamu Staff TU</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif !important;
    }

    body {
      font-family: 'Poppins', sans-serif !important;
      background: #f2f2f2;
    }

    html,
    body {
      margin: 0 !important;
      padding: 0 !important;
      overflow-x: hidden;
    }

    .navbar {
      margin: 0 !important;
      padding: 0 !important;
    }

    .badge-jenis {
      width: 90px;
      display: inline-block;
      text-align: center;
      font-size: 0.85rem;
      padding: 6px 0;
    }

    .page-wrapper {
      margin-top: 0px;
      padding: 0;
    }

    .main-content {
      flex-grow: 1;
      padding: 0px;
      padding-top: 45px !important;
      margin-top: 0 !important;
    }

    .container-fluid {
      padding-left: 15px !important;
      padding-right: 15px !important;
    }

    @media (max-width: 1200px) and (min-width: 768px) {
      .stats-row {
        display: flex;
        flex-wrap: nowrap;
        gap: 12px;
      }

      .stats-row>div {
        flex: 1 1 0;
        max-width: 33.333%;
      }

      .stats-label,
      .stats-text {
        display: none !important;
      }

      .stats-number {
        font-size: 1.3rem !important;
      }

      .stats-card i {
        font-size: 2rem !important;
      }

      .stats-card .row {
        align-items: center;
      }
    }

    @media (max-width: 576px) {
      .container-fluid {
        padding-left: 10px !important;
        padding-right: 10px !important;
      }

      .card-body {
        padding: 12px !important;
      }

      .table th,
      .table td {
        padding: 8px 5px !important;
        font-size: 12px;
      }

      .badge-jenis {
        width: 70px;
        font-size: 0.7rem;
      }

      .card-header .row {
        flex-direction: column;
        gap: 10px;
      }

      .input-group {
        width: 100% !important;
      }

      @media (max-width: 991.98px) and (min-width: 577px) {
        .card .h5 {
          font-size: 1rem;
        }

        .card i {
          font-size: 1.8rem !important;
        }
      }
    }
  </style>
</head>

<?php
include "../config/db_beranda.php";
include "../config/db_pengunjung_hariini.php";

?>
<body style="background:#f2f2f2;">
  <div class="page-wrapper">
    <?php include '../Nav_Side_Bar/sidebar.php'; ?>

    <div class="main-content">

      <?php include '../Nav_Side_Bar/navbar.php'; ?>

      <div class="container-fluid mt-3 px-2 px-md-3">
        <div class="row stats-row">
          <div class="col-xl-4 col-lg-4 col-md-4 mb-4">
            <div class="card h-100 py-2" style="border-left:8px solid #D4A373; box-shadow:0 4px 10px rgba(0,0,0,0.15);">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">
                    <div class="text-uppercase fw-semibold mb-1" style="color:#8B5E34;">Bulan Ini</div>
                    <div class="h5 fw-semibold" style="color:#8B5E34;">
                      <?php echo $bulan_ini; ?> Pengunjung
                    </div>
                  </div>
                  <div class="col-auto">
                    <i class="bi bi-calendar3 fs-2" style="color:#8B5E34;"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 mb-4">
            <div class="card h-100 py-2" style="border-left:8px solid #D4A373; box-shadow:0 4px 10px rgba(0,0,0,0.15);">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">
                    <div class="text-uppercase fw-semibold mb-1" style="color:#8B5E34;">Minggu Ini</div>
                    <div class="h5 fw-semibold" style="color:#8B5E34;">
                      <?php echo $minggu_ini; ?> Pengunjung
                    </div>
                  </div>
                  <div class="col-auto">
                    <i class="bi bi-calendar-week fs-2" style="color:#8B5E34;"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 mb-4">
            <div class="card h-100 py-2" style="border-left:8px solid #D4A373; box-shadow:0 4px 10px rgba(0,0,0,0.15);">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">
                    <div class="text-uppercase fw-semibold mb-1" style="color:#8B5E34;">Hari Ini</div>
                    <div class="h5 fw-semibold" style="color:#8B5E34;">
                      <?php echo $hari_ini; ?> Pengunjung
                    </div>
                  </div>
                  <div class="col-auto">
                    <i class="bi bi-calendar-day fs-2" style="color:#8B5E34;"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-12 mb-3">
          <div class="card shadow-sm" style=" overflow-y: auto;">
            <div class="card-header py-3 d-flex justify-content-between align-items-center" style="background:#EFE3D6;">
              <h5 class="mb-0 fw-semibold" style="color:#8B5E34;">Pengunjung Hari Ini</h5>
            </div>

            <div class="card-body">
              <div class="row mb-3 align-items-center justify-content-between">
                <div class="col-md-6">
                  <div class="input-group input-group-sm" style="width: 230px;">
                    <input class="form-control" style="background:#F7E9C8;" type="text" id="searchInput" name="search"
                      placeholder="Cari nama..."
                      value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>"
                      onkeyup="searchEnter(event)">
                  </div>
                </div>

                <div class="col-md-6 d-flex align-items-center justify-content-end gap-2">
                  <div class="dropdown" id="sortDropdown">
                    <button class="btn dropdown-toggle sort-button" type="button" id="dropdownMenuSort"
                      data-bs-toggle="dropdown" aria-expanded="false">
                      <span id="selectedSortOption">
                        <?= ($filter_jenis == 'all') ? 'Semua' : ucfirst($filter_jenis); ?>
                      </span>
                    </button>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuSort">
                      <li>
                        <a class="dropdown-item <?= ($filter_jenis == 'all') ? 'active' : '' ?>" href="?jenis=all">
                          Semua
                        </a>
                      </li>

                      <li>
                        <a class="dropdown-item <?= ($filter_jenis == 'satuan') ? 'active' : '' ?>"
                          href="?jenis=satuan">
                          Satuan
                        </a>
                      </li>

                      <li>
                        <a class="dropdown-item <?= ($filter_jenis == 'kelompok') ? 'active' : '' ?>"
                          href="?jenis=kelompok">
                          Kelompok
                        </a>
                      </li>

                    </ul>
                  </div>
                </div>
              </div>

              <div class="table-responsive" style="max-height: 310px; overflow-y: auto;">
                <table id="tabelPengunjung" class="table table-hover text-center align-middle table-bordered mb-0">
                  <thead class="table-light sticky-top" style="top: 0; z-index: 10;">
                    <tr>
                      <th>Jenis</th>
                      <th>Status</th>
                      <th>KODE</th>
                      <th>Nama / PJ</th>
                      <th>Jumlah</th>
                      <th>Tanggal</th>
                      <th>Datang</th>
                      <th>Pulang</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php if (!empty($pengunjung_hari_ini)): ?>
                      <?php foreach ($pengunjung_hari_ini as $p): ?>
                        <tr>
                          <!-- Jenis -->
                          <td>
                            <?php if ($p['jenis'] == 'satuan'): ?>
                              <span class="badge badge-jenis bg-success">Satuan</span>
                            <?php else: ?>
                              <span class="badge badge-jenis bg-warning text-dark">Kelompok</span>
                            <?php endif; ?>
                          </td>

                          <!-- Status -->
                          <td>
                            <?php if ($p['waktu_pulang'] == NULL): ?>
                              <span class="badge bg-danger">Belum Pulang</span>
                            <?php else: ?>
                              <span class="badge bg-success">Sudah Pulang</span>
                            <?php endif; ?>
                          </td>

                          <td>
                            <?= htmlspecialchars($p['kode'] ?? '-') ?>
                          </td>


                          <!-- Nama -->
                          <td class="td-text" data-bs-toggle="tooltip" title="<?= htmlspecialchars($p['nama']) ?>"><?= htmlspecialchars($p['nama']) ?></td>

                         
                          <td><?= $p['jumlah'] ?></td>

                          <!-- Tanggal -->
                          <td><?= date('d/m/Y', strtotime($p['tanggal'])) ?></td>

                          <!-- Datang -->
                          <td><?= date('H:i', strtotime($p['waktu_datang'])) ?></td>

                          <!-- Pulang -->
                          <td>
                            <?= $p['waktu_pulang']
                              ? date('H:i', strtotime($p['waktu_pulang']))
                              : '-' ?>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    <?php else: ?>
                      <tr>
                        <td colspan="8" class="text-muted">Belum ada pengunjung hari ini.</td>
                      </tr>
                    <?php endif; ?>
                  </tbody>



                </table>
              </div>

              <p class="text-muted mb-0">
                <span class="fw-bold"><?= $first_number ?></span>
                - <span class="fw-bold"><?= $last_number ?></span>
                dari <span class="fw-bold"><?= $total_data ?></span>.
              </p>
              <ul class="pagination pagination-sm justify-content-end mb-0">

                <li class="page-item <?= ($page <= 1) ? 'disabled' : '' ?>">
                  <a class="page-link"
                    href="?page=<?= $page - 1 ?>&limit=<?= $limit ?>&jenis=<?= $filter_jenis ?>">&laquo;</a>
                </li>

                <?php for ($i = 1; $i <= $total_page; $i++): ?>
                  <li class="page-item <?= ($i == $page) ? 'active' : '' ?>">
                    <a class="page-link" href="?page=<?= $i ?>&limit=<?= $limit ?>&jenis=<?= $filter_jenis ?>">
                      <?= $i ?>
                    </a>
                  </li>
                <?php endfor; ?>

                <li class="page-item <?= ($page >= $total_page) ? 'disabled' : '' ?>">
                  <a class="page-link"
                    href="?page=<?= $page + 1 ?>&limit=<?= $limit ?>&jenis=<?= $filter_jenis ?>">&raquo;</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../dashboard_staffTU/beranda.js"></script>
  <script>
    document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(el => new bootstrap.Tooltip(el));</script>
</body>

</html>