<div class="profile-page">

  <section class="profile-hero">
    <!-- Profile Pict Wrapper -->
    <div class="profile-photo-wrap">
      <img src="<?= base_url(!empty($result['urlfiles']) ? 'uploads/profile/' . $result['urlfiles'] : 'uploads/dummy/magikarp.jpeg'); ?>" class="profile-photo">
    </div>
    <!-- Panel Info -->
    <div class="profile-info">
      <p class="profile-kicker">Pasien</p>
      <!-- Nama Pasien -->
      <p class="lead profile-name"><?php echo $result['fullname'];?></p>
      <!-- Nomor Induk Kependudukan -->
      <div class="profile-list">
        <div class="profile-item pt-3">
          <span class="profile-icon"><i class="bi bi-person-vcard"></i></span>
          <p><?php echo $result['nik'];?></p>
        </div>
        <!-- Tanggal Lahir -->
        <div class="profile-item">
          <span class="profile-icon"><i class="bi bi-calendar-heart"></i></span>
          <p><?php echo $result['dob'];?></p>
        </div>
        <!-- Telefon -->
        <div class="profile-item">
          <span class="profile-icon"><i class="bi bi-telephone"></i></span>
          <p><?php echo $result['phone'];?></p>
        </div>
        <!-- Tempat Tinggal -->
        <div class="profile-item">
          <span class="profile-icon"><i class="bi bi-house-heart"></i></span>
          <p><?php echo $result['alamat'];?></p>
        </div>
      </div>
    </div>
  </section>
  <!-- Double Column Multi Baris -->
  <form method="post" action="<?= base_url('profile/publish'); ?>" enctype="multipart/form-data" id="profileForm">
    <section class="profile-section">
      <!-- Panel Title -->
      <div class="section-title" style="justify-content: space-between;">
        <div style="display: flex; align-items: center; gap: 12px;">
          <i class="bi bi-person-lines-fill section-icon"></i>
          <p class="lead">Informasi Dasar</p>
        </div>
        <!-- Pencil -->
        <button type="button" class="btn-edit-icon" id="btnToggleEdit" onclick="toggleEdit()">
          <i class="bi bi-pencil"></i>
        </button>
      </div>

      <div class="row g-3">
        <div class="col-12 col-md-6">

          <div class="form-floating-soft">
            <label>Nama Lengkap</label>
            <input type="text" name="fullname" class="form-control custom-input editable" value="<?php echo $result['fullname'];?>" readonly>
          </div>

          <div class="form-floating-soft">
            <label>Tanggal Lahir</label>
            <input type="date" name="dob" class="form-control custom-input editable" value="<?php echo $result['dob'];?>" readonly>
          </div>

          <div class="form-floating-soft">
            <label>Tempat Tinggal</label>
            <input type="text" name="alamat" class="form-control custom-input editable" value="<?php echo $result['alamat'];?>" readonly>
          </div>
        </div>

        <div class="col-12 col-md-6">
          <div class="form-floating-soft">
            <label>Jenis Kelamin</label>
            <select name="gender" class="form-control custom-input editable" disabled>
              <option value="Pria" <?php echo ($result['gender'] == 'Pria') ? 'selected' : ''; ?>>Pria</option>
              <option value="Wanita" <?php echo ($result['gender'] == 'Wanita') ? 'selected' : ''; ?>>Wanita</option>
            </select>
          </div>

          <div class="form-floating-soft">
            <label>Electronic Mail</label>
            <input type="text" name="email" class="form-control custom-input editable" value="<?php echo $result['email'];?>" readonly>
          </div>

          <div class="form-floating-soft">
            <label>Telephone</label>
            <input type="text" name="phone" class="form-control custom-input editable" value="<?php echo $result['phone'];?>" readonly>
          </div>
        </div>
      </div>

      <div class="form-floating-soft" id="wrapFoto" style="display: none;">
        <label>Foto Profil</label>
        <input type="file" name="urlfiles" class="form-control custom-input">
      </div>

      <div class="profile-actions" id="profileActions" style="display: none;">
        <button type="reset" class="btn btn-soft" onclick="toggleEdit()">
          Batal
        </button>
        <button type="submit" class="btn btn-care">
          Perbarui
        </button>
      </div>

    </section>
  </form>

</div>

<script>
function toggleEdit() {
  const inputs = document.querySelectorAll('.editable');
  const actions = document.getElementById('profileActions');
  const btn = document.getElementById('btnToggleEdit');
  const wrapFoto = document.getElementById('wrapFoto');
  const isEditing = btn.dataset.editing === 'true';

  if (isEditing) {
    inputs.forEach(i => {i.setAttribute('readonly', true); i.setAttribute('disabled', true);});
    actions.style.display = 'none';
    wrapFoto.style.display = 'none';
    btn.innerHTML = '<i class="bi bi-pencil me-1"></i>';
    btn.dataset.editing = 'false';
  } else {
    inputs.forEach(i => {i.removeAttribute('readonly'); i.removeAttribute('disabled');});
    actions.style.display = 'flex';
    wrapFoto.style.display = 'block';
    btn.innerHTML = '<i class="bi bi-eye me-1"></i>';
    btn.dataset.editing = 'true';
  }
}
</script>