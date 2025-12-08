<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buku Tamu Staff TU</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <style>
    .badge-jenis {
      width: 90px;
      display: inline-block;
      text-align: center;
      font-size: 0.85rem;
      padding: 6px 0;
    }
  </style>
</head>

<?php
include "../config/db_beranda.php";
include "../config/db_pengunjung_hariini.php";

?>


<body class="d-flex" style="background:#f2f2f2;">

  <?php include '../Nav_Side_Bar/sidebar.php'; ?>

  <div class="flex-grow-1">

    <?php include '../Nav_Side_Bar/navbar.php'; ?>

    <div class="container mt-4">
      <div class="row">
        <div class="col-xl-4 col-md-6 mb-4">
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

      <div class="row">
        <div class="col-lg-8 mb-3">
          <div class="card shadow-sm" style=" overflow-y: auto;">

            <div class="card-header py-3 d-flex justify-content-between align-items-center" style="background:#EFE3D6;">
              <h5 class="mb-0 fw-semibold" style="color:#8B5E34;">Pengunjung Hari Ini</h5>
            </div>

            <div class="card-body">
              <div class="row mb-3 align-items-center justify-content-between">
                <div class="col-md-6">
                  <div class="input-group input-group-sm" style="width: 230px;">
                    <input class="form-control" style="background:#F7E9C8;" type="text" id="searchInput" name="search"
                      placeholder="Cari nama, tanggal..."
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
                      <th>Nama / PJ</th>
                      <th>Jumlah</th>
                      <th>Tanggal</th>
                      <th>Waktu</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php if (!empty($pengunjung_hari_ini)): ?>
                      <?php foreach ($pengunjung_hari_ini as $p): ?>
                        <tr>
                          <td>
                            <?php if ($p['jenis'] == 'satuan'): ?>
                              <span class="badge badge-jenis" style="background:#4CAF50;">Satuan</span>
                            <?php else: ?>
                              <span class="badge badge-jenis" style="background:#FFC107; color:#000;">Kelompok</span>
                            <?php endif; ?>
                          </td>

                          <td><?= htmlspecialchars($p['nama']) ?></td>
                          <td><?= $p['jumlah'] ?></td>

                          <td><?= date("d/m/Y", strtotime($p['tanggal'])) ?></td>
                          <td><?= date("H.i", strtotime($p['waktu'])) ?></td>
                        </tr>
                      <?php endforeach; ?>
                    <?php else: ?>
                      <tr>
                        <td colspan="5" class="text-muted">Belum ada pengunjung hari ini.</td>
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

        <div class="col-lg-4 mb-3">
          <div class="card h-100 shadow-sm text-center">
            <div class="card-header py-3" style="background:#EFE3D6;">
              <h5 class="mb-0 fw-semibold" style="color:#8B5E34;">Waktu Sekarang</h5>
            </div>

            <div class="card-body d-flex flex-column justify-content-center align-items-center">
              <h1 id="clockTime" class="fw-bold display-3 mb-0" style="color:#8B5E34;"></h1>
              <p id="clockDate" class="text-muted fs-4 mt-2"></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../dashboard_staffTU/beranda.js"></script>
</body>

</html>