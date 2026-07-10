<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $meta['title'] ?? 'Aplikasi Pasca Kemoterapi'; ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
  <!-- Main -->
  <link rel="stylesheet" href="<?= base_url('assets/css/layout.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/menu.css'); ?>">
  <!-- Auth & Hub & Inti -->
  <link rel="stylesheet" href="<?= base_url('assets/css/auth.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/hub.css'); ?>">
  <!-- Profile & Kata Sandi -->
  <link rel="stylesheet" href="<?= base_url('assets/css/profile.css'); ?>">
</head>
<body>
  <!-- Variable Kondisional -->
  <?php $isAuth = in_array($this->uri->segment(1), ['', 'auth']); ?>
  <!-- Panel Profile -->
  <?php if (!$isAuth) : ?>
    <?php $this->load->view('layout/topbar'); ?>
  <?php endif; ?>
  <!-- Konten -->
  <main class="container py-3 app-content">
    <?php $this->load->view('layout/alerts'); ?>
    <?php $this->load->view($sub_page); ?>
    <?php $this->load->view('modal/logout'); ?>
  </main>
  <!-- Pilihan -->
  <?php if (!$isAuth) : ?>
    <?php $this->load->view('layout/menu'); ?>
  <?php endif; ?>
  <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
  <script src="<?= base_url('assets/js/custom.js'); ?>"></script>
</body>
</html>