<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Pengunjung</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    body {
      background: #f5f5f5;
    }
    
    .info-panel {
      background: #2d5f5d;
      color: white;
      border-radius: 15px;
      padding: 45px 35px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    }
    
    .form-panel {
      background: white;
      border-radius: 15px;
      padding: 45px 50px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }
    
    .btn-send {
      background: #f4b942;
      border: none;
      color: #000;
      font-weight: 600;
      padding: 10px 35px;
      border-radius: 25px;
    }
    
    .btn-send:hover {
      background: #e5a932;
    }
    
    .social-icon {
      background: #f4b942;
      width: 45px;
      height: 45px;
      border-radius: 50%;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      color: #2d5f5d;
      text-decoration: none;
    }
    
    .form-control {
      border: 1px solid #ddd;
      padding: 10px 15px;
    }
    
    .form-control:focus {
      border-color: #2d5f5d;
      box-shadow: none;
    }
  </style>
</head>

<body>
  <div class="container py-5">
    <div class="row g-4">
      
      <!-- Left - Form Section -->
      <div class="col-lg-7">
        <div class="form-panel">
          <div class="mb-4">
            <p class="text-uppercase text-secondary mb-2" style="letter-spacing: 3px; font-size: 13px; font-weight: 500;">CONTACT US</p>
            <h2 class="fw-bold mb-0">
              Get Your <span style="color: #f4b942; font-style: italic;">Free Quote Today!</span>
            </h2>
          </div>

          <form action="" method="POST">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label class="form-label small fw-semibold">Your Name *</label>
                <input type="text" name="pengunjung" class="form-control" placeholder="Ex. John Doe" required>
              </div>
              
              <div class="col-md-6 mb-3">
                <label class="form-label small fw-semibold">Email *</label>
                <input type="email" name="email" class="form-control" placeholder="example@gmail.com" required>
              </div>
            </div>

            <div class="mb-3">
              <label class="form-label small fw-semibold">Subject *</label>
              <input type="text" name="instansi" class="form-control" placeholder="Enter Subject" required>
            </div>

            <div class="mb-4">
              <label class="form-label small fw-semibold">Your Message *</label>
              <textarea name="tujuan" class="form-control" rows="5" placeholder="Enter here.." required></textarea>
            </div>

            <div class="d-flex align-items-center gap-2">
              <input type="checkbox" id="agree" class="form-check-input" style="width: 18px; height: 18px; cursor: pointer;">
              <label for="agree" class="form-check-label small mb-0" style="cursor: pointer;">
                <button type="submit" class="btn btn-send ms-2">Send Message</button>
              </label>
            </div>
          </form>
        </div>
      </div>

      <!-- Right - Info Section -->
      <div class="col-lg-5">
        <div class="info-panel">
          <div class="mb-4 pb-3">
            <h5 class="fw-bold mb-3">Address</h5>
            <p class="mb-1 opacity-75">1617 Washington Ave.</p>
            <p class="opacity-75">Manchester, Kentucky 39495</p>
          </div>

          <div class="mb-4 pb-3">
            <h5 class="fw-bold mb-3">Contact</h5>
            <p class="mb-2 opacity-75">Phone : +0123-456-789</p>
            <p class="opacity-75">Email : example@gmail.com</p>
          </div>

          <div class="mb-4 pb-3">
            <h5 class="fw-bold mb-3">Open Time</h5>
            <p class="mb-2 opacity-75">Monday - Friday  : 10:00 - 20:00</p>
            <p class="opacity-75">Saturday - Sunday : 11:00 - 16:00</p>
          </div>

          <div>
            <h5 class="fw-bold mb-3">Stay Connected</h5>
            <div class="d-flex gap-3 flex-wrap">
              <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
              <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
              <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
              <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  
  <script>
  // Opsional: Tambahkan hidden fields untuk data yang dibutuhkan
  document.querySelector('form').addEventListener('submit', function(e) {
    // Tambahkan field no, tanggal, waktu jika diperlukan untuk database
    const noInput = document.createElement('input');
    noInput.type = 'hidden';
    noInput.name = 'no';
    noInput.value = Date.now(); // Auto generate
    
    const tanggalInput = document.createElement('input');
    tanggalInput.type = 'hidden';
    tanggalInput.name = 'tanggal';
    tanggalInput.value = new Date().toISOString().split('T')[0];
    
    const waktuInput = document.createElement('input');
    waktuInput.type = 'hidden';
    waktuInput.name = 'waktu';
    waktuInput.value = new Date().toTimeString().split(' ')[0];
    
    this.appendChild(noInput);
    this.appendChild(tanggalInput);
    this.appendChild(waktuInput);
  });
  </script>
</body>

</html>