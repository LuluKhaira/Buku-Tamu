<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body style="background-color: #e7ecf6ff;">

  <section class="vh-100 d-flex justify-content-center align-items-center">
    <div class="card shadow-lg" style="border-radius: 1rem; max-width: 900px; width: 100%;">
      <div class="row g-0">
        <div class="col-md-5 d-none d-md-block">
          <img src="foto/Gedung.jpg" alt="login" class="img-fluid h-100"
            style="border-radius: 1rem 0 0 1rem; object-fit: cover;">
        </div>
        <div class="col-md-7 d-flex align-items-center">
          <div class="card-body p-5">

            <!-- LOGO -->
            <div class="text-center mb-4">
              <h3 class="fw-bold mt-3">Login</h3>
            </div>

            <!-- FORM -->
            <form onsubmit="return login(event)">
              <div class="mb-3 position-relative">
                <i class="fas fa-envelope position-absolute top-50 translate-middle-y ms-3 text-secondary"></i>
                <input type="email" id="email" class="form-control ps-5" placeholder="Masukkan Email"
                  oninvalid="this.setCustomValidity('Harus pakai @ ya!')" oninput="this.setCustomValidity('')" required>
              </div>

              <div class="mb-3 position-relative">
                <i class="fas fa-lock position-absolute top-50 translate-middle-y ms-3 text-secondary"></i>
                <input type="password" id="password" class="form-control ps-5" placeholder="Masukkan Password"
                  minlength="6" oninvalid="this.setCustomValidity('Password minimal 6 huruf/angka')"
                  oninput="this.setCustomValidity('')" required>
              </div>

              <div class="d-grid mb-3">
                <button type="submit" class="btn btn-dark btn-lg">Login</button>
              </div>
            </form>

            <!-- LINKS -->
            <div class="text-start">
              <a href="" onclick="openPopup()" class="small text-muted text-start text-decoration-none">Lupa
                Password?</a>
              </p>
            </div>
            <div class="text-center">
              <p class="mt-3 mb-0 " style="color:#393f81;">Belum punya akun?
                <a href="sign_up.php" class="text-decoration-none" style="color:#393f81;">Sign Up</a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- POPUP RESET PASSWORD -->
  <div id="forgotPopup"
    class="position-fixed top-0 start-0 w-100 h-100 d-none justify-content-center align-items-center"
    style="background: rgba(0,0,0,0.5); z-index:1050;">
    <div class="bg-white p-4 rounded shadow" style="max-width:400px; width:90%;">
      <h4 class="text-center mb-3">Reset Password</h4>
      <p class="text-center text-muted">Masukkan email dan password baru Anda.</p>

      <input type="email" id="resetEmail" class="form-control mb-2" placeholder="Masukkan Email" required>
      <input type="password" id="newPassword" class="form-control mb-2" placeholder="Password Baru" required>
      <input type="password" id="confirmPassword" class="form-control mb-3" placeholder="Ulangi Password" required>

      <div class="d-flex justify-content-between">
        <button class="btn btn-dark w-50 me-2" onclick="sendResetEmail()">Kirim</button>
        <button class="btn btn-outline-secondary w-50" onclick="closePopup()">Batal</button>
      </div>
    </div>
  </div>

  <script>
    function login(event) {
      event.preventDefault();
      const email = document.getElementById("email").value.trim();
      const password = document.getElementById("password").value.trim();
      const dummyEmail = "staff@gmail.com";
      const dummyPassword = "staff123";

      if (email === dummyEmail && password === dummyPassword) {
        alert("Login berhasil! Selamat datang, Admin!");
        window.location.replace("dashboard_staffTU/beranda.php");
      } else {
        alert("Email atau password salah. Coba lagi!");
      }
    }

    function openPopup() {
      document.getElementById("forgotPopup").classList.remove("d-none");
      document.getElementById("forgotPopup").classList.add("d-flex");
    }

    function closePopup() {
      document.getElementById("forgotPopup").classList.add("d-none");
      document.getElementById("forgotPopup").classList.remove("d-flex");
    }

    function sendResetEmail() {
      const email = document.getElementById("resetEmail").value;
      const newPass = document.getElementById("newPassword").value;
      const confirmPass = document.getElementById("confirmPassword").value;

      if (!email || !newPass || !confirmPass) return alert("Semua field harus diisi!");
      if (newPass !== confirmPass) return alert("Password tidak cocok!");

      alert("Password berhasil direset untuk: " + email);
      closePopup();
    }
  </script>

</body>

</html>

<!-- cobaa -->