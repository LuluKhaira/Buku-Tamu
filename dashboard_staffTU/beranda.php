<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buku Tamu Staff TU</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body class="bg-light d-flex">

  <!-- Sidebar -->
  <?php include '../Nav_Side_Bar/sidebar.php'; ?>

  <!-- Konten Utama -->
  <div class="flex-grow-1">

    <?php include '../Nav_Side_Bar/navbar.php'; ?>

    <div class="container mt-4">

      <div class="row">

        <!-- Bulan Ini -->
        <div class="col-xl-4 col-md-6 mb-4">
          <div class="card h-100 py-2" style="background-color:#f4b942; border-left:.25rem solid #f4b942;">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-uppercase mb-1" style="color:#000;">Bulan Ini</div>
                  <div class="h5 mb-0 font-weight-bold" style="color:#000;">15 Pengunjung</div>
                </div>
                <div class="col-auto">
                  <i class="bi bi-calendar3 fs-2" style="color:#000;"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Minggu Ini -->
        <div class="col-xl-4 col-md-6 mb-4">
          <div class="card h-100 py-2"
            style="background-color:#2d5f5d; border-left:.25rem solid #2d5f5d; box-shadow:0 0.15rem 1rem #2d5f5d;">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-uppercase mb-1" style="color:#ffffff;">Minggu Ini</div>
                  <div class="h5 mb-0 font-weight-bold" style="color:#ffffff;">7 Pengunjung</div>
                </div>
                <div class="col-auto">
                  <i class="bi bi-calendar-week fs-2" style="color:#ffffff;"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Hari Ini -->
        <div class="col-xl-4 col-md-6 mb-4">
          <div class="card h-100 py-2"
            style="background-color:#2d5f5d; border-left:.25rem solid #2d5f5d; box-shadow:0 0.15rem 1rem #2d5f5d;">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-uppercase mb-1" style="color:#ffffff;">Hari Ini</div>
                  <div class="h5 mb-0 font-weight-bold" style="color:#ffffff;">2 Pengunjung</div>
                </div>
                <div class="col-auto">
                  <i class="bi bi-calendar-day fs-2" style="color:#ffffff;"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div> <!-- END ROW CARD -->



      <!-- =========================== -->
      <!--      TABEL + CHART ROW      -->
      <!-- =========================== -->

      <div class="row">

        <!-- TABEL PENGUNJUNG HARI INI -->
        <div class="col-lg-8 mb-4">
          <div class="card shadow-sm h-100">

            <div class="card-header py-3 d-flex justify-content-between align-items-center">
              <h5 class="mb-0 fw-semibold">Pengunjung Hari Ini</h5>
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
                  </tbody>

                </table>
              </div>
            </div>

          </div>
        </div>



        <!-- CHART SAMPING TABEL -->
        <div class="col-lg-4 mb-4">
          <div class="card shadow-sm h-100">
            <div class="card-header py-3">
              <h5 class="mb-0 fw-semibold">Jumlah Pengunjung</h5>
            </div>

            <div class="card-body">
              <canvas id="visitorTodayChart" height="200"></canvas>
            </div>
          </div>
        </div>



      </div> <!-- END ROW -->

    </div> <!-- END CONTAINER -->

  </div> <!-- END KONTEN -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script>
    const ctxToday = document.getElementById('visitorTodayChart').getContext('2d');

    new Chart(ctxToday, {
      type: 'bar',
      data: {
        labels: [
          'Jan', 'Feb', 'Maret', 'Apr', 'Mei', 'Juni',
          'Juli', 'Ags', 'Sep', 'Okt', 'Nov', 'Des'
        ],
        datasets: [{
          label: 'Jumlah Pengunjung',
          data: [12, 15, 18, 20, 25, 22, 30, 28, 26, 24, 19, 14],  // contoh data
          backgroundColor: [
            '#2d5f5d', '#f4b942', '#2d5f5d', '#f4b942', '#2d5f5d', '#f4b942',
            '#2d5f5d', '#f4b942', '#2d5f5d', '#f4b942', '#2d5f5d', '#f4b942'
          ]
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: { display: false }
        },
        scales: {
          y: { beginAtZero: true }
        }
      }
    });
  </script>

</body>

</html>