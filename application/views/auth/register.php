<!-- ? -->
<div class="login-bg-container">
  <div class="bg-orb-top-right">
    <!-- ? -->
  </div>
</div>

<!-- Panel Container Daftar -->
<div class="container d-flex flex-column justify-content-center align-items-center py-5">
  <div class="card border-0 shadow-lg login-card" style="max-width: 600px;">
    <div class="card-body p-4 p-md-5">
      <!-- Panel Title -->
      <div class="text-center mb-5">
        <div class="icon-box-fancy mb-4 mx-auto shadow bg-success-gradient">
          <i class="bi bi-person-plus-fill text-white fs-1"></i>
        </div>
        <h2 class="fw-black text-dark mb-1">Buat Akun Baru</h2>
        <p class="text-secondary small">Mulai Pantau Pemulihan Anda Secara Digital</p>
      </div>
      <!-- Panel Input Post Data -->
      <form action="<?php echo base_url('auth/publish'); ?>" method="POST" id="registerForm">
        <div class="row g-4">
          <!-- Nomor Induk Kependudukan -->
          <div class="col-md-12">
            <label class="form-label-fancy">Nomor Induk Kependudukan</label>
            <input type="text" name="nik" class="form-control fancy-input" id="regNik" placeholder="1234..." required>
          </div>
          <!-- Full Nama -->
          <div class="col-md-12">
            <label class="form-label-fancy">Nama Lengkap</label>
            <input type="text" name="fullname" class="form-control fancy-input" id="regName" placeholder="Full Name" required>
          </div>
          <!-- Alamat -->
          <div class="col-md-6">
            <label class="form-label-fancy">Tempat Tinggal</label>
            <input type="text" name="alamat" id="alamat" class="form-control fancy-input" placeholder="Jalan Kemenangan.." required>
          </div>
          <!-- Alamat -->
          <div class="col-md-6">
            <label class="form-label-fancy">Daftar Sebagai</label>
            <select name="roleKey" id="roleKey" name="roleKey" class="form-control fancy-input">
              <option value="3">Pasien</option>
            </select>
          </div>
          <!-- Electronic Mail -->
          <div class="col-md-6">
            <label class="form-label-fancy">Email</label>
            <input type="email" name="email" class="form-control fancy-input" id="regEmail" placeholder="nama@email.com" required>
          </div>
          <!-- WhatsApp -->
          <div class="col-md-6">
            <label class="form-label-fancy">Telefon</label>
            <input type="text" name="phone" class="form-control fancy-input" id="regPhone" placeholder="0812..." required>
          </div>
          <!-- Jenis Kelamiin -->
          <div class="col-md-6">
            <label class="form-label-fancy">Jenis Kelamin</label>
            <select name="gender" id="gender" class="form-control fancy-input">
              <option value="Pria">Pria</option>
              <option value="Wanita">Wanita</option>
            </select>
          </div>
          <!-- Tanggal Lahir -->
          <div class="col-md-6">
            <label class="form-label-fancy">Tanggal Lahir</label>
            <input type="date" name="dob" id="dob" class="form-control fancy-input" required>
          </div>
          <!-- Kata Sandi -->
          <div class="col-md-6">
            <label class="form-label-fancy">Kata Sandi</label>
            <div class="position-relative">
              <input type="password" name="password" class="form-control fancy-input" id="regPassword" placeholder="••••••••" required>
              <button type="button" class="btn-toggle-password" id="btnToggleReg">
                <i class="bi bi-eye" id="iconReg"></i>
              </button>
            </div>
          </div>
          <!-- Konfirmasi Kata Sandi -->
          <div class="col-md-6">
            <label class="form-label-fancy">Ulangi Sandi</label>
            <div class="position-relative">
              <input type="password" class="form-control fancy-input" id="confirmPassword" placeholder="••••••••" required>
              <button type="button" class="btn-toggle-password" id="btnToggleConfirm">
                <i class="bi bi-eye" id="iconConfirm"></i>
              </button>
            </div>
            <div id="passwordError" class="mt-1"></div> 
          </div>
          <!-- Panel Kirim -->
          <div class="col-md-12 mt-4">
            <button type="submit" class="btn btn-primary w-100 py-3 shadow-lg btn-fancy-submit">
              Daftar Sekarang 
              <i class="bi bi-check-circle ms-2"></i>
            </button>
          </div>
          <!-- Sign In -->
          <div class="col-md-12 text-center mt-n2">
            <p class="small text-muted mb-0">Sudah Memiliki Akun ?</p>
            <a href="<?php echo base_url('/'); ?>" class="text-success fw-bold text-decoration-none">Masuk di Sini</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Initiate Toggle for Both Fields
  initpass('btnToggleReg', 'regPassword', 'iconReg');
  initpass('btnToggleConfirm', 'confirmPassword', 'iconConfirm');
  // Initiate Live Review
  initvalidate('regPassword', 'confirmPassword', 'passwordError');
  // Final Form Guard
  const form = document.getElementById('registerForm');
  form.addEventListener('submit', function(e) {
    const pass = document.getElementById('regPassword').value;
    const confirm = document.getElementById('confirmPassword').value;
    if (pass !== confirm) {
      e.preventDefault();
      alert('Pastikan Kata Sandi Sudah Cocok Sebelum Mendaftar !')
    }
  });
});
</script>