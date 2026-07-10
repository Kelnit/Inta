<!-- Panel Selamat Datang -->
<div class="hub-page">
  <section class="hub-greeting">
    <p class="hub-kicker">Selamat Datang Kembali</p>
    <h1 class="hub-name"><?= $this->session->userdata('name'); ?></h1>
    <!-- Custom Tanggal -->
    <p class="hub-date"><?= indodate(); ?></p>
  </section>
</div>