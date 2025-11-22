<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buku Tamu Staff TU</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
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

<body class="d-flex" style="background:#f2f2f2;">

  <?php include '../Nav_Side_Bar/sidebar.php'; ?>

  <div class="flex-grow-1">

    <?php include '../Nav_Side_Bar/navbar.php'; ?>

    <div class="container mt-4">

      <!-- 3 CARD ATAS -->
      <div class="row">

        <!-- Bulan Ini -->
        <div class="col-xl-4 col-md-6 mb-4">
          <div class="card h-100 py-2" style="border-left:8px solid #D4A373; box-shadow:0 4px 10px rgba(0,0,0,0.15);">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col">
                  <div class="text-uppercase fw-semibold mb-1" style="color:#8B5E34;">Bulan Ini</div>
                  <div class="h5 fw-semibold" style="color:#8B5E34;">15 Pengunjung</div>
                </div>
                <div class="col-auto">
                  <i class="bi bi-calendar3 fs-2" style="color:#8B5E34;"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Minggu Ini -->
        <div class="col-xl-4 col-md-6 mb-4">
          <div class="card h-100 py-2" style="border-left:8px solid #D4A373; box-shadow:0 4px 10px rgba(0,0,0,0.15);">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col">
                  <div class="text-uppercase fw-semibold mb-1" style="color:#8B5E34;">Minggu Ini</div>
                  <div class="h5 fw-semibold" style="color:#8B5E34;">7 Pengunjung</div>
                </div>
                <div class="col-auto">
                  <i class="bi bi-calendar-week fs-2" style="color:#8B5E34;"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Hari Ini -->
        <div class="col-xl-4 col-md-6 mb-4">
          <div class="card h-100 py-2" style="border-left:8px solid #D4A373; box-shadow:0 4px 10px rgba(0,0,0,0.15);">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col">
                  <div class="text-uppercase fw-semibold mb-1" style="color:#8B5E34;">Hari Ini</div>
                  <div class="h5 fw-semibold" style="color:#8B5E34;">2 Pengunjung</div>
                </div>
                <div class="col-auto">
                  <i class="bi bi-calendar-day fs-2" style="color:#8B5E34;"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- TABLE & CLOCK -->
      <div class="row">

        <!-- TABEL -->
        <div class="col-lg-8 mb-4">
          <div class="card shadow-sm h-100">

            <div class="card-header py-3 d-flex justify-content-between align-items-center" style="background:#EFE3D6;">
              <h5 class="mb-0 fw-semibold" style="color:#8B5E34;">Pengunjung Hari Ini</h5>
            </div>

            <div class="card-body">

              <!-- Tampilkan entri -->
              <div class="row mb-3 align-items-center justify-content-between">

                <div class="col-md-6">
                  <div class="input-group input-group-sm" style="width: 230px;">
                    <input class="form-control" style="background:#F7E9C8;" type="text"
                      placeholder="Cari nama, instansi, tanggal..." aria-label="Search">
                  </div>
                </div>

                <div class="col-md-6 d-flex align-items-center justify-content-end gap-2">

                  <div class="d-flex align-items-center gap-2">
                    <span class="col-form-label">tampilkan </span>
                    <select class="form-select form-select-sm" id="showEntries">
                      <option value="5">5</option>
                      <option value="10" selected>10</option>
                      <option value="25">25</option>
                      <option value="50">50</option>
                    </select>
                  </div>

                  <div class="dropdown" id="sortDropdown">
                    <button class="btn dropdown-toggle sort-button" type="button" id="dropdownMenuSort"
                      data-bs-toggle="dropdown" aria-expanded="false">
                      <span id="selectedSortOption">Jenis</span>
                    </button>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuSort">
                      <li>
                        <a class="dropdown-item sort-option" href="#" data-sort="last-accessed">
                          <span class="check-mark"></span> Semua
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item sort-option active" href="#" data-sort="course-name">
                          <span class="check-mark">✓</span> satuan
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item sort-option" href="#" data-sort="last-accessed">
                          <span class="check-mark"></span> gerombolan
                        </a>
                      </li>
                    </ul>
                  </div>

                </div>
              </div>

              <!-- DATA TABLE -->
              <div class="table-responsive" style="max-height: 350px; overflow-y: auto;">
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
                    <tr>
                      <td><span class="badge badge-jenis" style="background:#4CAF50;">Satuan</span></td>
                      <td>Yanto</td>
                      <td>1</td>
                      <td>19/11/2025</td>
                      <td>08.30</td>
                    </tr>

                    <tr>
                      <td><span class="badge badge-jenis" style="background:#4CAF50;">Satuan</span></td>
                      <td>Khaira</td>
                      <td>1</td>
                      <td>19/11/2025</td>
                      <td>09.15</td>
                    </tr>

                    <tr>
                      <td><span class="badge badge-jenis" style="background:#FFC107; color:#000;">Rombongan</span></td>
                      <td>Ibu Siti (PJ)</td>
                      <td>12</td>
                      <td>22/11/2025</td>
                      <td>10.30</td>
                    </tr>

                    <tr>
                      <td><span class="badge badge-jenis" style="background:#4CAF50;">Satuan</span></td>
                      <td>Zahwa</td>
                      <td>1</td>
                      <td>19/11/2025</td>
                      <td>10.00</td>
                    </tr>

                    <tr>
                      <td><span class="badge badge-jenis" style="background:#4CAF50;">Satuan</span></td>
                      <td>Budi</td>
                      <td>1</td>
                      <td>19/11/2025</td>
                      <td>11.00</td>
                    </tr>

                    <tr>
                      <td><span class="badge badge-jenis" style="background:#FFC107; color:#000;">Rombongan</span></td>
                      <td>Pak Ahmad (PJ)</td>
                      <td>5</td>
                      <td>22/11/2025</td>
                      <td>11.30</td>
                    </tr>

                  </tbody>
                </table>
              </div>

              <!-- PAGINATION -->
              <div class="row mt-3">
                <div class="col-md-6 d-flex align-items-center">
                  <p class="text-muted mb-0">
                    Menampilkan <span class="fw-bold">1</span> sampai <span class="fw-bold">10</span> dari
                    <span class="fw-bold">57</span> .
                  </p>
                </div>

                <div class="col-md-6">
                  <nav aria-label="Navigasi Halaman Pengunjung">
                    <ul class="pagination pagination-sm justify-content-end mb-0">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a>
                      </li>
                      <li class="page-item active"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>

            </div>
          </div>
        </div>

        <!-- CLOCK -->
        <div class="col-lg-4 mb-4">
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

  <!-- SCRIPT -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

  <script>
    function updateClock() {
      const now = new Date();

      document.getElementById("clockTime").textContent =
        String(now.getHours()).padStart(2, '0') + ":" +
        String(now.getMinutes()).padStart(2, '0');

      document.getElementById("clockDate").textContent =
        now.toLocaleDateString("id-ID", { weekday: "long" }) + ", " +
        now.toLocaleDateString("id-ID", { day: "2-digit", month: "long", year: "numeric" });
    }

    setInterval(updateClock, 1000);
    updateClock();

    new DataTable('#tabelPengunjung', {
      responsive: true,
      pageLength: 5
    });
  </script>

</body>

</html>