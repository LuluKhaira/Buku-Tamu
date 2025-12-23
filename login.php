<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<style>
  body {
    font-family: 'Poppins', sans-serif !important;
  }

  /* Responsive untuk mobile */
  @media (max-width: 767.98px) {
    .card {
      margin: 10px;
      border-radius: 1rem !important;
    }
    
    .card-body {
      padding: 2rem !important;
    }
  }

  /* Icon alignment yang lebih baik */
  .form-control {
    height: 45px;
  }

  .position-relative i {
    line-height: 45px;
    height: 45px;
    display: flex;
    align-items: center;
  }
</style>


<body style="background-color: #e7ecf6ff; font-family: 'Poppins', sans-serif;">

  <section class="vh-100 d-flex justify-content-center align-items-center">
    <div class="card shadow-lg" style="border-radius: 1rem; max-width: 900px; width: 100%;">
      <div class="row g-0">
        <div class="col-md-5 d-none d-md-block">
          <img src="foto/Gedung.jpg" alt="login" class="img-fluid h-100"
            style="border-radius: 1rem 0 0 1rem; object-fit: cover;">
        </div>
        <div class="col-md-7 d-flex align-items-center justify-content-center">
          <div class="card-body p-4 p-md-5 text-center text-md-start" style="width: 100%; max-width: 380px;">
            <div class="text-center mb-4">
              <h3 class="fw-bold mt-3">Login</h3>
            </div>

            <?php if (isset($_GET['error'])): ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php
                if ($_GET['error'] === "wrongpass") {
                  echo "Password salah! Silakan cek kembali.";
                } elseif ($_GET['error'] === "notfound") {
                  echo "Username tidak ditemukan!";
                } else {
                  echo "Terjadi kesalahan.";
                }
                ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              </div>
            <?php endif; ?>

            <?php if (isset($_GET['success'])): ?>
              <div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert">
                <div class="spinner-border spinner-border-sm me-2" role="status"></div>
                <span>Login berhasil! Mengarahkan ke halaman...</span>
                <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert"></button>
              </div>

              <script>
                setTimeout(() => {
                  window.location.href = "dashboard_staffTU/beranda.php";
                }, 1200);
              </script>
            <?php endif; ?>

            <form action="config/db_login_proses.php" method="POST">
              <div class="mb-3 position-relative">
                <i class="fas fa-envelope position-absolute top-50 translate-middle-y ms-3 text-secondary"></i>
                <input type="text" name="username" class="form-control ps-5" placeholder="Masukkan Username" required>
              </div>

              <div class="mb-3 position-relative">
                <i class="fas fa-lock position-absolute top-50 translate-middle-y ms-3 text-secondary"></i>
                <input type="password" name="password" class="form-control ps-5" placeholder="Masukkan Password"
                  required>
              </div>

              <div class="d-grid mb-3">
                <button type="submit" name="login" class="btn btn-dark btn-lg">Login</button>
              </div>
            </form>

            <div class="text-start">
              <a href="#" onclick="openPopup()" class="small text-muted text-decoration-none">Lupa Password?</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div id="forgotPopup"
    class="position-fixed top-0 start-0 w-100 h-100 d-none justify-content-center align-items-center"
    style="background: rgba(0,0,0,0.5); z-index:1050;">
    <div class="bg-white p-4 rounded shadow" style="max-width:400px; width:90%;">
      <h4 class="text-center mb-3">Ubah Sandi</h4>
      <p class="text-center text-muted" style="font-size: 14px;">Masukkan username dan password baru Anda.</p>

      <input type="text" id="risetusername" class="form-control mb-2" placeholder="Masukkan Username" required>
      <input type="password" id="newPassword" class="form-control mb-2" placeholder="Password Baru" required>
      <input type="password" id="confirmPassword" class="form-control mb-3" placeholder="Ulangi Password" required>

      <div class="d-flex justify-content-between gap-2">
        <button class="btn btn-outline-secondary w-50" onclick="closePopup()">Batal</button>
        <button class="btn btn-dark w-50 me-2" onclick="sendResetEmail()">Kirim</button>
      </div>
    </div>
  </div>

  <script src="login.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>