<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- Slide Down Alert CSS -->
  <style>
    .slide-alert {
      position: fixed;
      top: -100px;
      left: 50%;
      transform: translateX(-50%);
      z-index: 2000;
      min-width: 300px;
      transition: top 0.5s ease;
    }

    .slide-alert.show {
      top: 20px;
    }
  </style>
</head>

<body style="background-color: #e7ecf6ff;">

<?php
if (isset($_GET['error'])) {
    $error_message = '';
    if ($_GET['error'] == 'wrongpass') {
        $error_message = 'Password salah!';
    } elseif ($_GET['error'] == 'notfound') {
        $error_message = 'Username tidak ditemukan!';
    }

    if (!empty($error_message)) {
        echo '
        <div id="topAlert" class="alert alert-danger slide-alert" role="alert">
            '. $error_message .'
        </div>

        <script>
            setTimeout(() => {
                document.getElementById("topAlert").classList.add("show");
            }, 100);

            // Hilang otomatis
            setTimeout(() => {
                document.getElementById("topAlert").classList.remove("show");
            }, 3000);
        </script>
        ';
    }
}
?>

  <section class="vh-100 d-flex justify-content-center align-items-center">
    <div class="card shadow-lg" style="border-radius: 1rem; max-width: 900px; width: 100%;">
      <div class="row g-0">

        <div class="col-md-5 d-none d-md-block">
          <img src="foto/Gedung.jpg" alt="login" class="img-fluid h-100"
            style="border-radius: 1rem 0 0 1rem; object-fit: cover;">
        </div>

        <div class="col-md-7 d-flex align-items-center">
          <div class="card-body p-5">
            <div class="text-center mb-4">
              <h3 class="fw-bold mt-3">Login</h3>
            </div>

            <form action="config/db_login_proses.php" method="POST">
              <div class="mb-3 position-relative">
                <i class="fas fa-envelope position-absolute top-50 translate-middle-y ms-3 text-secondary"></i>
                <input type="text" name="username" class="form-control ps-5" placeholder="Masukkan Username" required>
              </div>

              <div class="mb-3 position-relative">
                <i class="fas fa-lock position-absolute top-50 translate-middle-y ms-3 text-secondary"></i>
                <input type="password" name="password" class="form-control ps-5" placeholder="Masukkan Password" required>
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

  <!-- Popup Lupa Password -->
  <div id="forgotPopup"
    class="position-fixed top-0 start-0 w-100 h-100 d-none justify-content-center align-items-center"
    style="background: rgba(0,0,0,0.5); z-index:1050;">
    <div class="bg-white p-4 rounded shadow" style="max-width:400px; width:90%;">
      <h4 class="text-center mb-3">Ubah Sandi</h4>
      <p class="text-center text-muted">Masukkan username dan password baru Anda.</p>

      <input type="text" id="risetusername" class="form-control mb-2" placeholder="Masukkan Username" required>
      <input type="password" id="newPassword" class="form-control mb-2" placeholder="Password Baru" required>
      <input type="password" id="confirmPassword" class="form-control mb-3" placeholder="Ulangi Password" required>

      <div class="d-flex justify-content-between">
        <button class="btn btn-dark w-50 me-2" onclick="sendResetEmail()">Kirim</button>
        <button class="btn btn-outline-secondary w-50" onclick="closePopup()">Batal</button>
      </div>
    </div>
  </div>

  <script>
    function sendResetEmail() {
      const username = document.getElementById("risetusername").value;
      const newPass = document.getElementById("newPassword").value;
      const confirmPass = document.getElementById("confirmPassword").value;

      if (!username || !newPass || !confirmPass)
        return alert("Semua field harus diisi!");

      if (newPass !== confirmPass)
        return alert("Password tidak cocok!");

      const formData = new FormData();
      formData.append("username", username);
      formData.append("password", newPass);

      fetch("config/riset_password.php", {
          method: "POST",
          body: formData
        })
        .then(res => res.text())
        .then(response => {
          if (response === "success") {
            alert("Password berhasil direset!");
            closePopup();
          } else {
            alert("Username tidak ditemukan!");
          }
        })
        .catch(() => alert("Terjadi kesalahan"));
    }

    function openPopup() {
      const popup = document.getElementById("forgotPopup");
      popup.classList.remove("d-none");
      popup.classList.add("d-flex");
    }

    function closePopup() {
      const popup = document.getElementById("forgotPopup");
      popup.classList.add("d-none");
      popup.classList.remove("d-flex");
    }
  </script>

</body>
</html>
