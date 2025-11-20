<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buku Tamu Staff TU</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body class="d-flex" style="background:#f2f2f2;">

  <!-- Sidebar -->
  <?php include '../Nav_Side_Bar/sidebar.php'; ?>

  <!-- Konten Utama -->
  <div class="flex-grow-1">

    <?php include '../Nav_Side_Bar/navbar.php'; ?>

    <div class="container mt-4">
      <div class="row">
        <!-- Bulan Ini -->
        <div class="col-xl-4 col-md-6 mb-4">
          <div class="card h-100 py-2"
            style="border-left:8px solid #fff1b5; box-shadow:0 4px 10px rgba(0,0,0,0.15);">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col">
                  <div class="text-uppercase fw-bold mb-1" style="color:#984216;">Bulan Ini</div>
                  <div class="h5 fw-bold" style="color:#984216;">15 Pengunjung</div>
                </div>
                <div class="col-auto">
                  <i class="bi bi-calendar3 fs-2" style="color:#984216;"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Minggu Ini -->
        <div class="col-xl-4 col-md-6 mb-4">
          <div class="card h-100 py-2"
            style="border-left:8px solid #5e83ae; box-shadow:0 4px 10px rgba(0,0,0,0.15);">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col">
                  <div class="text-uppercase fw-bold mb-1" style="color:#984216;">Minggu Ini</div>
                  <div class="h5 fw-bold" style="color:#984216;">7 Pengunjung</div>
                </div>
                <div class="col-auto">
                  <i class="bi bi-calendar-week fs-2" style="color:#984216;"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Hari Ini -->
        <div class="col-xl-4 col-md-6 mb-4">
          <div class="card h-100 py-2"
            style="border-left:8px solid #43302e; box-shadow:0 4px 10px rgba(0,0,0,0.15);">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col">
                  <div class="text-uppercase fw-bold mb-1" style="color:#984216;">Hari Ini</div>
                  <div class="h5 fw-bold" style="color:#984216;">2 Pengunjung</div>
                </div>
                <div class="col-auto">
                  <i class="bi bi-calendar-day fs-2" style="color:#984216;"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- END ROW CARD -->

      <!-- =========================== -->
      <!--      TABEL + WAKTU SEKARANG  -->
      <!-- =========================== -->

      <div class="row">

        <!-- TABEL PENGUNJUNG HARI INI -->
        <div class="col-lg-8 mb-4">
          <div class="card shadow-sm h-100">

            <div class="card-header py-3 d-flex justify-content-between align-items-center" style="background:#ece3dc;">
              <h5 class="mb-0 fw-semibold" style="color:#984216;">Pengunjung Hari Ini</h5>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-hover text-center align-middle table-bordered">
                  <thead class="table-light">
                    <tr>
                      <th>Nama</th>
                      <th>Tanggal</th>
                      <th>Waktu</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td>Yanto</td>
                      <td>19/11/2025</td>
                      <td>08.30</td>
                    </tr>

                    <tr>
                      <td>Khaira</td>
                      <td>19/11/2025</td>
                      <td>09.15</td>
                    </tr>

                    <tr>
                      <td>Zahwa</td>
                      <td>19/11/2025</td>
                      <td>10.00</td>
                    </tr>
                  </body>
                </table>
              </div>
            </div>
          </div>
        </div>

        <!-- WAKTU SEKARANG (STATIS DARI SERVER) -->
        <?php
        date_default_timezone_set("Asia/Jakarta");
        $jam = date("H:i:s");
        $hari = date("l");
        $tanggal = date("d F Y");
        ?>
        <div class="col-lg-4 mb-4">
          <div class="card h-100 shadow-sm">

            <div class="card-header bg-light text-center">
              <h5 class="mb-0 fw-semibold text-primary">Waktu Sekarang</h5>
            </div>

            <div class="card-body d-flex flex-column justify-content-center align-items-center">
              <h1 class="fw-bold display-3 mb-0"><?php echo $jam; ?></h1>
              <p class="text-muted fs-4 mt-2"><?php echo $hari . ', ' . $tanggal; ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>