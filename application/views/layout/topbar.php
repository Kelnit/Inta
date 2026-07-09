<!-- Panel Kepala -->
<nav class="navbar navbar-expand-lg navbar-sky">
  <div class="container d-flex justify-content-end">
    <!-- Profile Wrapper -->
    <div class="dropdown ms-auto">
      <a href="#" class="d-flex align-items-center text-decoration-none" data-bs-toggle="dropdown">
        <img src="https://i.pravatar.cc/100" alt="profile" class="avatar">
      </a>
      <!-- Pilihan -->
      <ul class="dropdown-menu dropdown-menu-end">
        <!-- Full Name -->
        <li class="px-3 py-2">
          <p class="mb-0"><?= $this->session->userdata('name'); ?></p>
        </li>
        <li><hr class="dropdown-divider"></li>
        <!-- Tukar Kata Sandi -->
        <li>
          <a class="dropdown-item" href="<?php echo base_url('profile/password'); ?>">
            Tukar Kata Sandi
          </a>
        </li>
        <li><hr class="dropdown-divider"></li>
        <!-- Keluar -->
        <li>
          <a class="dropdown-item text-danger" href="<?php echo base_url('auth/logout'); ?>" onclick="farewell(event)">
            Keluar
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>