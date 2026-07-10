<div class="password-page">
  <div class="row justify-content-center">
    <div class="col-12 col-md-8 col-lg-6">
      <section class="password-card">
        <div class="section-title password-title">
          <i class="bi bi-shield-lock section-icon"></i>
          <div>
            <p class="lead">Panel Perubahan Password</p>
          </div>
        </div>
        <form method="post" action="<?= base_url('profile/paslish'); ?>">
          <div class="form-floating-soft">
            <label>Nomor Induk Kependudukan</label>
            <input type="text" class="form-control custom-input" value="<?= $this->session->userdata('usernik'); ?>" readonly>
          </div>
          <div class="form-floating-soft">
            <label>Password Baru</label>
            <div class="input-group">
              <input type="password" class="form-control custom-input" id="password" name="password">
              <span class="input-group-text password-toggle" id="togglePassword">
                <i class="bi bi-eye" id="iconPassword"></i>
              </span>
            </div>
          </div>
          <div class="form-floating-soft">
            <label>Konfirmasi Ulang Password</label>
            <div class="input-group">
              <input type="password" class="form-control custom-input" id="confirmPassword">
              <span class="input-group-text password-toggle" id="toggleConfirmPassword">
                <i class="bi bi-eye" id="iconConfirmPassword"></i>
              </span>
            </div>
            <small id="passwordError" class="form-error"></small>
          </div>
          <div class="profile-actions">
            <button type="submit" class="btn btn-care">
              Simpan Kata Sandi Baru
            </button>
          </div>
        </form>
      </section>
    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
  initpass('togglePassword', 'password', 'iconPassword');
  initpass('toggleConfirmPassword', 'confirmPassword', 'iconConfirmPassword');
  initvalidate('password', 'confirmPassword', 'passwordError');
});
</script>