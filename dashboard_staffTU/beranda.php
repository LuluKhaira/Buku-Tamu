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
          <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                    Bulan Ini</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">15 Pengunjung</div>
                </div>
                <div class="col-auto">
                  <i class="bi bi-calendar3 fs-2 text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Minggu Ini -->
        <div class="col-xl-4 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                    Minggu Ini</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">7 Pengunjung</div>
                </div>
                <div class="col-auto">
                  <i class="bi bi-calendar-week fs-2 text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Hari Ini -->
        <div class="col-xl-4 col-md-6 mb-4">
          <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                    Hari Ini</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">2 Pengunjung</div>
                </div>
                <div class="col-auto">
                  <i class="bi bi-calendar-day fs-2 text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>


      <!-- Tabel Buku Tamu -->
      <div class="card shadow-sm border-0">
        <div class="card-body">
          <h5 class="card-title mb-3">Buku Tamu Tata Usaha</h5>
          <div class="table-responsive">
            <table class="table table-hover table-sm align-middle text-center">
              <thead class="table-light">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Pengunjung</th>
                  <th scope="col">Tanggal</th>
                  <th scope="col">Waktu</th>
                  <th scope="col">Instansi</th>
                  <th scope="col">Tujuan</th>
                  <th scope="col">Aksi</th>
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