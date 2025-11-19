<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>History</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body class="d-flex" style="background:#f2f2f2;">

  <!-- Sidebar -->
  <?php include '../Nav_Side_Bar/sidebar.php'; ?>

  <!-- Konten Utama -->
  <div class="flex-grow-1">
    <?php include '../Nav_Side_Bar/navbar.php'; ?>
    <!-- margin-left:280px biar gak ketimpa sidebar -->

    <div class="container mt-4">

      <!-- Filter Tanggal -->
      <div class="card shadow-sm mb-4">

        <!-- HEADER -->
        <div class="card-header py-3 fw-semibold" style="background:#ece3dc; color:#984216;">
          Filter Tanggal
        </div>

        <!-- BODY -->
        <div class="card-body">

          <form class="row g-5 justify-content-center">
            <div class="col-md-3">
              <label for="dariTanggal" class="form-label text-center w-100" style="color:#984216;">Dari Tanggal</label>
              <input type="date" class="form-control"  style="border: 1.9px solid #984216;" id="dariTanggal" value="2025-11-12">
            </div>

            <div class="col-md-3">
              <label for="sampaiTanggal" class="form-label text-center w-100" style="color:#984216;">Sampai Tanggal</label>
              <input type="date" class="form-control" style="border: 1.9px solid #984216;" id="sampaiTanggal" value="2025-11-12">
            </div>
          </form>

        </div>

      </div>


      <!-- History -->
      <div class="card shadow-sm mb-4">

        <!-- HEADER -->
        <div class="card-header d-flex justify-content-between align-items-center py-3 fw-semibold" style="background:#ece3dc; color:#984216;">
          <span>Laporan Buku Tamu</span>

          <div class="d-flex align-items-center gap-3">

            <!-- SEARCH BAR -->
            <form class="d-none d-sm-inline-block" >
              <div class="input-group">
                <span class="input-group-text bg-warning border-0">
                  <i class="fas fa-search"></i>
                </span>
                <input type="text" class="form-control border-0" style="width: 250px;" placeholder="Cari nama, instansi, tanggal...">
              </div>
            </form>

            <!-- EXPORT BUTTON -->
            <button class="btn btn-success btn-sm">
              <i class="fa fa-download"></i> Export Excel
            </button>

          </div>
        </div>

        <!-- BODY -->
        <div class="card-body">

          <div class="table-responsive">
            <table class="table table-hover align-middle text-center table-bordered">
              <thead class="table-light">
                <tr>
                  <th>No</th>
                  <th>Pengunjung</th>
                  <th>Tanggal</th>
                  <th>Waktu</th>
                  <th>Instansi</th>
                  <th>Tujuan</th>
                  <th>Aksi</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>01</td>
                  <td>Yanto</td>
                  <td>15/9/2025</td>
                  <td>09.00</td>
                  <td>Politeknik Negeri Batam</td>
                  <td>Observasi</td>
                  <td>
                    <button class="btn btn-link text-success p-0 me-2">
                      <i class="bi bi-pencil"></i>
                    </button>
                    <button class="btn btn-link text-danger p-0">
                      <i class="bi bi-trash"></i>
                    </button>
                  </td>
                </tr>

                <tr>
                  <td>02</td>
                  <td>Khaira</td>
                  <td>15/9/2025</td>
                  <td>09.30</td>
                  <td>PT. Pertamina</td>
                  <td>Kunjungan</td>
                  <td>
                    <button class="btn btn-link text-success p-0 me-2">
                      <i class="bi bi-pencil"></i>
                    </button>
                    <button class="btn btn-link text-danger p-0">
                      <i class="bi bi-trash"></i>
                    </button>
                  </td>
                </tr>

                <tr>
                  <td>03</td>
                  <td>Zahwa</td>
                  <td>15/9/2025</td>
                  <td>10.30</td>
                  <td>PT. SIX</td>
                  <td>Kunjungan</td>
                  <td>
                    <button class="btn btn-link text-success p-0 me-2">
                      <i class="bi bi-pencil"></i>
                    </button>
                    <button class="btn btn-link text-danger p-0">
                      <i class="bi bi-trash"></i>
                    </button>
                  </td>
                </tr>

              </tbody>

            </table>
          </div>
        </div>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>