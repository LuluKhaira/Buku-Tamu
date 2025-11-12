<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>History</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-light d-flex">

  <!-- Sidebar -->
  <?php include '../Nav_Side_Bar/sidebar.php'; ?>

  <!-- Konten Utama -->
  <div class="flex-grow-1 p-4" style="margin-left:10px;">
    <!-- margin-left:280px biar gak ketimpa sidebar -->

    <div class="container mt-4">
      <div class="card shadow-sm">
        <div class="card-body">

          <!-- Filter tanggal -->
          <form class="row g-3 align-items-end">
            <div class="col-md-5">
              <label for="dariTanggal" class="form-label">Dari Tanggal</label>
              <input type="date" class="form-control" id="dariTanggal" value="2025-11-12">
            </div>
            <div class="col-md-5">
              <label for="sampaiTanggal" class="form-label">Sampai Tanggal</label>
              <input type="date" class="form-control" id="sampaiTanggal" value="2025-11-12">
            </div>
          </form>
          <br>

          <!-- Tabel Buku Tamu -->
          <div class="card shadow-sm border-0">
            <div class="card-body">
              <h5 class="card-title mb-3">History</h5>
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
                    </tr>
                    <tr>
                      <td>02</td>
                      <td>Khaira</td>
                      <td>15/9/2025</td>
                      <td>09.30</td>
                      <td>PT. Pertamina</td>
                      <td>Kunjungan</td>
                    </tr>
                    <tr>
                      <td>03</td>
                      <td>Zahwa</td>
                      <td>15/9/2025</td>
                      <td>10.30</td>
                      <td>PT. SIX</td>
                      <td>Kunjungan</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <!-- Tombol export -->
          <div class="d-flex justify-content-end mt-3">
            <div class="col-md-2">
              <button class="align-items-center btn btn-success form-control" name="bexport">
                <i class="fa fa-download"></i> Export Data Excel
              </button>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
