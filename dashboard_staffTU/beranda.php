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

      <!-- Kotak Ringkasan -->
      <div class="row mb-4">
        <div class="col-md-4">
          <div class="card shadow-sm border-start-primary border-4">
            <div class="card-body d-flex justify-content-between align-items-center">
              <div>
                <h6 class="text-primary mb-1">BULAN INI</h6>
                <h5 class="fw-bold mb-0">15 Pengunjung</h5>
              </div>
              <i class="bi bi-calendar3 text-muted fs-3"></i>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card shadow-sm border-start-success border-4">
            <div class="card-body d-flex justify-content-between align-items-center">
              <div>
                <h6 class="text-success mb-1">MINGGU INI</h6>
                <h5 class="fw-bold mb-0">7 Pengunjung</h5>
              </div>
              <i class="bi bi-calendar-week text-muted fs-3"></i>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card shadow-sm border-start-info border-4">
            <div class="card-body d-flex justify-content-between align-items-center">
              <div>
                <h6 class="text-info mb-1">HARI INI</h6>
                <h5 class="fw-bold mb-0">2 Pengunjung</h5>
              </div>
              <i class="bi bi-calendar-day text-muted fs-3"></i>
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
