<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Penilaian Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light d-flex">

  <!-- Sidebar -->
  <?php include '../Nav_Side_Bar/sidebar.php'; ?>

  <!-- Konten Utama -->
  <div class="flex-grow-1 p-4" style="margin-left:10px;"> 
    <!-- margin-left:280px biar gak ketimpa sidebar -->
    
    <div class="container-fluid">
      <h2 class="mb-4">Penilaian Mahasiswa</h2>

      <div class="card shadow-sm">
        <div class="card-body">
          <form>
            <div class="row mb-3">
              <div class="col-md-6">
                <label class="form-label">Nama Mahasiswa</label>
                <input type="text" class="form-control" placeholder="Masukkan nama">
              </div>
              <div class="col-md-6">
                <label class="form-label">NIM</label>
                <input type="text" class="form-control" placeholder="Masukkan NIM">
              </div>
            </div>

            <div class="mb-3">
              <label class="form-label">Nilai</label>
              <input type="number" class="form-control" placeholder="Masukkan nilai">
            </div>

            <div class="mb-3">
              <label class="form-label">Komentar</label>
              <textarea class="form-control" rows="3" placeholder="Tulis komentar"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
