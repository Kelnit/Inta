<!-- Style Handler -->
<div class="login-bg-container">
  <div class="bg-orb-top">
    <!-- Filler I -->
  </div>
  <div class="bg-orb-bottom">
    <!-- Filler II -->
  </div>
</div>

<!-- Container Card Content Center -->
<div class="container d-flex flex-column justify-content-center align-items-center min-vh-100">
  <!-- Panel Content -->
  <div class="card border-0 shadow-lg login-card">
    <div class="card-body p-5">
      <!-- Panel Title -->
      <div class="text-center mb-5">
        <div class="icon-box-fancy mb-4 mx-auto shadow">
          <i class="bi bi-person-heart text-white fs-1"></i>
        </div>
        <!-- Title -->
        <h2 class="fw-black text-dark mb-1">Selamat Datang</h2>
        <p class="text-secondary small">Monitoring Kesehatan Pasca Kemoterapi</p>
      </div>
      <!-- Form Controller -->
      <form action="<?php echo base_url('auth/login'); ?>" method="POST">
        <!-- Nomor Induk Kependudukan -->
        <div class="mb-4">
          <label class="form-label-fancy">Nomor Induk Kependudukan</label>
          <input type="text" name="usernik" class="form-control fancy-input" id="nikInput" placeholder="1386..." required>
        </div>
        <!-- Kata Sandi -->
        <div class="mb-4">
          <label class="form-label-fancy">Kata Sandi</label>
          <div class="position-relative">
            <input type="password" name="password" class="form-control fancy-input" id="passInput" placeholder="••••••••" required>
            <button type="button" class="btn-toggle-password" id="togglePasswordBtn">
              <i class="bi bi-eye" id="toggleIcon"></i>
            </button>
          </div>
        </div>
        <!-- Kirim -->
        <button type="submit" class="btn btn-primary w-100 py-3 mb-4 shadow-lg btn-fancy-submit">
          Sign In <i class="bi bi-arrow-right ms-2"></i>
        </button>
        <!-- Silahkan Daftar -->
        <div class="text-center">
          <p class="small text-muted mb-0">Belum Terdaftar Pada Sistem ?</p>
          <a href="<?php echo base_url('auth/register'); ?>" class="text-primary fw-bold text-decoration-none">Buat Akun Pasien</a>
        </div>
      </form>
    </div>
  </div>
  <!-- Panel -->
  <div class="mt-4 text-center">
    <span class="badge rounded-pill bg-white text-dark shadow-sm px-3 py-2 opacity-75 border">
      <i class="bi bi-shield-check text-success me-1"></i> Data Terenkripsi & Aman
    </span>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Input Kata Sandi Tipe
    initpass('togglePasswordBtn', 'passInput', 'toggleIcon');
  });
</script>