<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Penilaian Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
  <?php include '../Nav_Side_Bar/navbar.php'; ?> <!-- Ini bagian pentingnya -->

<body class="bg-white d-flex justify-content-center align-items-center min-vh-100">

    <div class="container" style="max-width: 400px;">
        

        <form action="" method="POST" class="align-items-center justify-content-center text-center mt-5">
        <h3 class="text-center fw-bold mb-4 mt-5">TAMBAH PENGUNJUNG</h3>
            <div class="mb-3">
                <input type="text" name="no" class="form-control form-control-lg rounded-0 border-secondary"
                    placeholder="No">
            </div>

            <div class="mb-3">
                <input type="text" name="pengunjung" class="form-control form-control-lg rounded-0 border-secondary"
                    placeholder="Nama Pengunjung">
            </div>

            <div class="mb-3">  
                <input type="date" name="tanggal" class="form-control form-control-lg rounded-0 border-secondary">
            </div>

            <div class="mb-3">
                <input type="time" name="waktu" class="form-control form-control-lg rounded-0 border-secondary">
            </div>

            <div class="mb-3">
                <input type="text" name="instansi" class="form-control form-control-lg rounded-0 border-secondary"
                    placeholder="Instansi">
            </div>

            <div class="mb-4">
                <input type="text" name="tujuan" class="form-control form-control-lg rounded-0 border-secondary"
                    placeholder="Tujuan">
            </div>

            <div class="d-grid mb-2">
                <button type="submit" class="btn btn-dark btn-lg rounded-0 fw-semibold">SIMPAN</button>
            </div>

            <div class="d-grid">
                <button type="reset" class="btn btn-outline-dark btn-lg rounded-0 fw-semibold">BATAL</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>