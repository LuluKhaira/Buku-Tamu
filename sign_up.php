<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body style="background-color: #e7ecf6ff;">

<section class="vh-100 d-flex justify-content-center align-items-center">
  <div class="card shadow-lg" style="border-radius: 1rem; max-width: 900px; width: 100%;">
    <div class="row g-0">
      <div class="col-md-5 d-none d-md-block">
        <img src="foto/Gedung.jpg" alt="signup" class="img-fluid h-100"
             style="border-radius: 1rem 0 0 1rem; object-fit: cover;">
      </div>

      <div class="col-md-7 d-flex align-items-center">
        <div class="card-body p-5">

          <!-- LOGO + TITLE -->
          <div class="d-flex align-items-center justify-content-center mb-4">
            <h3 class="fw-bold m-0">Sign Up</h3>
          </div>

          <!-- FORM -->
          <form onsubmit="return signup(event)">

            <!-- Email -->
            <div class="mb-3 position-relative">
              <i class="fas fa-envelope position-absolute top-50 translate-middle-y ms-3 text-secondary"></i>
              <input type="email" class="form-control ps-5" placeholder="Masukkan Email"
                     oninvalid="this.setCustomValidity('Harus pakai @ ya!')"
                     oninput="this.setCustomValidity('')" required>
            </div>

            <!-- Username -->
            <div class="mb-3 position-relative">
              <i class="fas fa-user position-absolute top-50 translate-middle-y ms-3 text-secondary"></i>
              <input type="text" name="username" class="form-control ps-5" placeholder="Masukkan Nama Pengguna"
                     pattern="[a-zA-Z0-9_]{6,}"
                     oninvalid="this.setCustomValidity('Username minimal 6 karakter, tanpa spasi!')"
                     oninput="this.setCustomValidity('')" required>
            </div>

            <!-- Password -->
            <div class="mb-3 position-relative">
              <i class="fas fa-lock position-absolute top-50 translate-middle-y ms-3 text-secondary"></i>
              <input type="password" class="form-control ps-5" placeholder="Masukkan Password" minlength="6"
                     oninvalid="this.setCustomValidity('Password minimal 6 huruf/angka ya!')"
                     oninput="this.setCustomValidity('')" required>
            </div>

            <!-- Tombol -->
            <div class="d-grid mb-3">
              <button type="submit" class="btn btn-dark btn-lg ">Sign Up</button>
            </div>

          </form>

          <!-- LINK LOGIN -->
          <div class="text-center">
            <p class="mt-3 mb-0" style="color:#393f81;">Sudah punya akun?
              <a href="login.php" class="text-decoration-none" style="color:#393f81;">Login</a>
            </p>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<script>
  function signup(event) {
    event.preventDefault();
    alert("Akun Berhasil Ditambahkan!");
    window.location.replace("login.php");
    return false;
  }
</script>

</body>
</html>
