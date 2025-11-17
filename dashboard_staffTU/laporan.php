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

      <!-- Filter Tanggal -->
      <div class="card shadow-sm mb-4">

        <!-- HEADER -->
        <div class="card-header py-3">
          Filter Tanggal
        </div>

        <!-- BODY -->
        <div class="card-body">

          <form class="row g-5 justify-content-center">
            <div class="col-md-3">
              <label for="dariTanggal" class="form-label text-center w-100">Dari Tanggal</label>
              <input type="date" class="form-control" id="dariTanggal" value="2025-11-12">
            </div>

            <div class="col-md-3">
              <label for="sampaiTanggal" class="form-label text-center w-100">Sampai Tanggal</label>
              <input type="date" class="form-control" id="sampaiTanggal" value="2025-11-12">
            </div>
          </form>

        </div>

      </div>


      <!-- History -->
      <div class="card shadow-sm mb-4">

        <!-- HEADER -->
        <div class="card-header d-flex justify-content-between align-items-center py-3">
          <span>History Buku Tamu</span>

          <button class="btn btn-success btn-sm">
            <i class="fa fa-download"></i> Export Excel
          </button>
        </div>

        <!-- BODY -->
        <div class="card-body">

          <div class="table table-bordered">
            <table class="table table-hover align-middle text-center">
              <thead class="table-light">
                <tr>
                  <th>No</th>
                  <th>Pengunjung</th>
                  <th>Tanggal</th>
                  <th>Waktu</th>
                  <th>Instansi</th>
                  <th>Tujuan</th>
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



      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>