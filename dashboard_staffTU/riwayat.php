<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>History</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

</head>

<body class="d-flex" style="background:#F5EFE7;">

  <?php include '../Nav_Side_Bar/sidebar.php'; ?>

  <div class="flex-grow-1">
    <?php include '../Nav_Side_Bar/navbar.php'; ?>

    <div class="container mt-4">

      <div class="card shadow-sm mb-4">

        <div class="card-header py-3 fw-semibold d-flex justify-content-between align-items-center flex-wrap"
          style="background:#EFE3D6; color:#8B5E34;">

          <span class="fw-bold mb-2 mb-md-0">Laporan Buku Tamu</span>

          <div class="d-flex align-items-center gap-3">

            <form class="d-none d-sm-inline-block">
              <div class="input-group input-group-sm">
                <span class="input-group-text border-0" style="background:#D4A373; color:white;">
                  <i class="fas fa-search"></i>
                </span>
                <input type="text" class="form-control border-0" style="width: 200px; background:#F7E9C8;"
                  placeholder="Cari...">
              </div>
            </form>

            <button class="btn btn-success btn-sm">
              <i class="fa fa-download"></i> Export Excel
            </button>

          </div>

        </div>

        <div class="card-body">

          <form class="row g-3 mb-4 align-items-end justify-content-center">

            <div class="col-md-3 col-lg-2 text-center">
              <label for="dariTanggal" class="form-label mb-0 small" style="color:#8B5E34;">Dari Tanggal</label>
              <input type="date" class="form-control form-control-sm" style="border: 1.9px solid #8B5E34;"
                id="dariTanggal" value="2025-11-12">
            </div>

            <div class="col-md-3 col-lg-2 text-center">
              <label for="sampaiTanggal" class="form-label mb-0 small" style="color:#8B5E34;">Sampai Tanggal</label>
              <input type="date" class="form-control form-control-sm" style="border: 1.9px solid #8B5E34;"
                id="sampaiTanggal" value="2025-11-12">
            </div>

            <div class="col-auto">
              <button type="submit" class="btn btn-sm text-white mt-2"
                style="background:#D4A373; border-color:#D4A373;">
                <i class="bi bi-funnel"></i> Filter
              </button>
            </div>

          </form>

          <div class="table-responsive">
            <table class="table table-hover align-middle text-center table-bordered">
              <thead style="background:#EFE3D6; color:#8B5E34;">
                <tr>
                  <th>No</th>
                  <th>Pengunjung</th>
                  <th>No HP</th>
                  <th>Tanggal</th>
                  <th>Waktu</th>
                  <th>Instansi</th>
                  <th>Tujuan</th>
                  <th>Jumlah</th>
                  <th>Jenis</th> <!-- LANGSUNG SEBELUM Aksi -->
                  <th>Aksi</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>01</td>
                  <td>Yanto</td>
                  <td>0812xxxx8888</td>
                  <td>15/9/2025</td>
                  <td>09.00</td>
                  <td>Politeknik Negeri Batam</td>
                  <td>Observasi</td>
                  <td>1</td>
                  <td><span class="badge bg-success">Satuan</span></td>
                  <td>
                    <button class="btn btn-link p-0 me-2 text-success"><i class="bi bi-pencil"></i></button>
                    <button class="btn btn-link p-0 text-danger"><i class="bi bi-trash"></i></button>
                  </td>
                </tr>

                <tr>
                  <td>02</td>
                  <td>Khaira</td>
                  <td>0857xxxx9999</td>
                  <td>15/9/2025</td>
                  <td>09.30</td>
                  <td>PT. Pertamina</td>
                  <td>Kunjungan</td>
                  <td>10</td>
                  <td><span class="badge bg-warning text-dark">Rombongan</span></td>
                  <td>
                    <button class="btn btn-link p-0 me-2 text-success"><i class="bi bi-pencil"></i></button>
                    <button class="btn btn-link p-0 text-danger"><i class="bi bi-trash"></i></button>
                  </td>
                </tr>

                <tr>
                  <td>03</td>
                  <td>Zahwa</td>
                  <td>0813xxxx7777</td>
                  <td>15/9/2025</td>
                  <td>10.30</td>
                  <td>PT. SIX</td>
                  <td>Kunjungan</td>
                  <td>10</td>
                  <td><span class="badge bg-warning text-dark">Rombongan</span></td>
                  <td>
                    <button class="btn btn-link p-0 me-2 text-success"><i class="bi bi-pencil"></i></button>
                    <button class="btn btn-link p-0 text-danger"><i class="bi bi-trash"></i></button>
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