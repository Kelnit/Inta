<!-- Panel Label -->
<?php $segment = $this->uri->segment(1); ?>
<!-- Panel Pilihan -->
<nav class="navbar-floating fixed-bottom mb-4 mx-auto shadow-lg border">
  <div class="d-flex text-center align-items-center justify-content-between py-1 overflow-auto flex-nowrap">
    <!-- Main Page -->
    <a href="<?php echo base_url('hub'); ?>" class="nav-link nav-item-float flex-fill <?php echo ($segment == 'hub') ? 'text-primary active' : 'text-secondary'; ?>">
      <i class="bi bi-house-door-fill fs-5"></i>
      <div class="nav-text">Main</div>
    </a>
    <!-- Question -->
    <a href="<?php echo base_url('inti'); ?>" class="nav-link nav-item-float flex-fill <?php echo ($segment == 'inti') ? 'text-primary active' : 'text-secondary'; ?>" style="display: none">
      <i class="bi bi-patch-question-fill fs-5"></i>
      <div class="nav-text">Q&A</div>
    </a>
    <!-- Blog -->
    <a href="<?php echo base_url('blog'); ?>" class="nav-link nav-item-float flex-fill <?php echo ($segment == 'blog') ? 'text-primary active' : 'text-secondary'; ?>" style="display: none">
      <i class="bi bi-book-half fs-5"></i>
      <div class="nav-text">Blog</div>
    </a>
    <!-- WhatsApp -->
    <a href="#" target="_blank" class="nav-link nav-item-float flex-fill text-secondary" style="display: none">
      <i class="bi bi-whatsapp fs-5"></i>
      <div class="nav-text">WhatsApp</div>
    </a>
    <!-- Profile -->
    <a href="<?php echo base_url('profile'); ?>" class="nav-link nav-item-float flex-fill <?php echo ($segment == 'profile') ? 'text-primary active' : 'text-secondary'; ?>">
      <i class="bi bi-person-circle fs-5"></i>
      <div class="nav-text">Profile</div>
    </a>
    <!-- App / Pengaturan -->
    <a href="<?php echo base_url('app'); ?>" class="nav-link nav-item-float flex-fill <?php echo ($segment == 'app') ? 'text-primary active' : 'text-secondary'; ?>" style="display: none">
      <i class="bi bi-gear-fill fs-5"></i>
      <div class="nav-text">App</div>
    </a>
    <!-- Pasien -->
    <a href="<?php echo base_url('pasien'); ?>" class="nav-link nav-item-float flex-fill <?php echo ($segment == 'pasien') ? 'text-primary active' : 'text-secondary'; ?>" style="display: none">
      <i class="bi bi-person-lines-fill fs-5"></i>
      <div class="nav-text">Pasien</div>
    </a>
  </div>
</nav>