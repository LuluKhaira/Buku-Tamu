<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sidebar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background-color: #f5f6fa;
      font-family: 'Poppins', sans-serif;
    }

    .sidebar {
      width: 280px; /* Lebar diperbesar */
      height: 100vh;
      background-color: #fff;
      padding: 25px;
      box-shadow: 2px 0 10px rgba(0, 0, 0, 0.05);
    }

    .brand-section {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 35px;
    }

    .brand-section img {
      width: 45px;
      height: 45px;
      object-fit: cover;
      border-radius: 50%;
    }

    .brand-text .brand {
      font-size: 1.25rem;
      font-weight: 600;
      color: #444;
      margin: 0;
    }

    .brand-text .role {
      font-size: 0.9rem;
      color: #888;
      margin: 0;
    }

    .sidebar .nav-link {
      color: #555;
      font-weight: 500;
      display: flex;
      align-items: center;
      gap: 12px;
      padding: 12px;
      border-radius: 8px;
      transition: all 0.2s ease;
    }

    .sidebar .nav-link:hover,
    .sidebar .nav-link.active {
      background-color: #f0f3ff;
      color: #4c57ff;
    }

    .sidebar .logout {
      position: absolute;
      bottom: 30px;
      width: 230px;
    }
  </style>
</head>
<body>
  <div class="sidebar d-flex flex-column position-relative">
    <div>
      <!-- Bagian Logo + Judul -->
      <div class="brand-section">
        <img src="logo.png" alt="Logo"> <!-- Ganti dengan path logo kamu -->
        <div class="brand-text">
          <p class="brand">Codinglab</p>
          <p class="role">Web developer</p>
        </div>
      </div>

      <!-- Menu -->
      <a href="#" class="nav-link active"><i class="bi bi-house-door"></i>Dashboard</a>
      <a href="#" class="nav-link"><i class="bi bi-bar-chart"></i>Revenue</a>
      <a href="#" class="nav-link"><i class="bi bi-bell"></i>Notifications</a>
      <a href="#" class="nav-link"><i class="bi bi-clock-history"></i>Analytics</a>
      <a href="#" class="nav-link"><i class="bi bi-heart"></i>Likes</a>
      <a href="#" class="nav-link"><i class="bi bi-wallet2"></i>Wallets</a>
    </div>

    <!-- Logout -->
    <div class="logout">
      <a href="#" class="nav-link"><i class="bi bi-box-arrow-right"></i>Logout</a>
    </div>
  </div>
</body>
</html>
