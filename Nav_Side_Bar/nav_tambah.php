<div class="d-flex justify-content-between align-items-center mb-2">

   <!-- NAV TAB -->
   <nav class="nav nav-tabs">

      <a href="tambah_only.php"
         class="nav-link text-uppercase <?php echo (isset($active) && $active == 'satuan') ? 'active bg-success text-white' : 'text-secondary'; ?>"
         style="letter-spacing: 3px; font-size: 13px; font-weight: 500;">
         Pengunjung Satuan
      </a>

      <a href="tambah_tim.php"
         class="nav-link text-uppercase <?php echo (isset($active) && $active == 'kelompok') ? 'active bg-success text-white' : 'text-secondary'; ?>"
         style="letter-spacing: 3px; font-size: 13px; font-weight: 500;">
         Pengunjung Kelompok
      </a>

   </nav>

   <!-- LOGOUT -->
   <div class="logout ms-3">
      <a href="../index.php" class="nav-link" style="color:#6c757d; font-size:13px; letter-spacing:2px;">
         <i class="bi bi-box-arrow-right"></i> Logout
      </a>
   </div>

</div>