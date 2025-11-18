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
                  <div class="text-xs font-weight-bold text-uppercase mb-1" style="color:#000;">
                    Bulan Ini</div>
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
          <div class="card h-100 py-2" style="background-color:#2d5f5d; border-left:.25rem solid #2d5f5d; box-shadow:0 0.15rem 1rem #2d5f5d;">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-uppercase mb-1" style="color:#ffffff;">
                    Minggu Ini</div>
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
          <div class="card h-100 py-2" style="background-color:#2d5f5d; border-left:.25rem solid #2d5f5d; box-shadow:0 0.15rem 1rem #2d5f5d;">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-uppercase mb-1" style="color:#ffffff;">
                    Hari Ini</div>
                  <div class="h5 mb-0 font-weight-bold" style="color:#ffffff;">2 Pengunjung</div>
                </div>
                <div class="col-auto">
                  <i class="bi bi-calendar-day fs-2" style="color:#ffffff;"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- Tabel Buku Tamu -->
      <div class="card shadow-sm mb-4">

        <!-- HEADER -->
        <div class="card-header py-3">
          <h5 class="mb-0">Buku Tamu Tata Usaha</h5>
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
                    <button class="btn btn-link text-primary p-0">
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
                    <button class="btn btn-link text-primary p-0">
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
                    <button class="btn btn-link text-primary p-0">
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


    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>