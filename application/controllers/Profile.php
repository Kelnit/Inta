<?php
// Profile Controller
// Consider Insert Pasien Baru & Handle Update Profile Pasien
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends MainController {
  // Profile Controller Construct
  public function __construct(){
    // Parent Construct
    parent::__construct();
    // Model
    $this->load->model('profile_model', 'prfmodel');
  }

  public function index(){
    // Main Tampilan Profile
    if (!permissible('profile', 'is_view')) {
      blokir();
    }
    // Hasil
    $this->data['result'] = $this->prfmodel->getprofile(userids());
    // File
    $this->data['title'] = 'Panel Profile Pasien';
    $this->data['sub_page'] = 'profile/index';
    $this->data['main_menu'] = 'profile';
    $this->load->view('layout/layout', $this->data);
  }

  public function publish(){
    // Publish Data Profile
    if (!permissible('profile', 'is_add')) {
      blokir();
    }
    // Input Data Profile
    $inputs = $this->input->post();
    // Upload File Profile
    if (isset($_FILES['urlfiles']) && $_FILES['urlfiles']['error'] !== UPLOAD_ERR_NO_FILE) {
      if ($_FILES['urlfiles']['error'] === UPLOAD_ERR_OK) {
        $files = $_FILES['urlfiles']['name'];
        $uploads = "uploads/profile/" . $files;
        if (move_uploaded_file($_FILES['urlfiles']['tmp_name'], $uploads)) {
          $inputs['urlfiles'] = $files;
        }
      }
    }
    // Update Data Profile
    $inputs['kode'] = userids();
    // Update Data Profile
    $result = $this->prfmodel->publish($inputs);
    if ($result) {
      // Kalau Berhasil !
      $message = "Data Profile Berhasil Diperbarui !";
      $this->session->set_userdata('name', $inputs['fullname']);
      alerta('success', $message);
    } else {
      // Kalau Fail
      $message = "Data Profile Gagal Diperbarui !";
      alerta('error', $message);
    }
    // Kembali Ke Tampilan Profile
    return redirect(base_url('profile'));
  }

  // Kata Sandi in Profile Controller

  public function password(){
    // Tampilan Tukar Kata Sandi
    if (!permissible('profile', 'is_view')) {
      blokir();
    }
    // File
    $this->data['title'] = 'Panel Tukar Kata Sandi';
    $this->data['sub_page'] = 'profile/password';
    $this->data['main_menu'] = 'profile';
    $this->load->view('layout/layout', $this->data);
  }

  public function paslish(){
    // Publish Data Tukar Kata Sandi
    if (!permissible('profile', 'is_add')) {
      blokir();
    }
    // Input Data Profile
    $inputs = $this->input->post();
    // Input Variable
    $inputs['kode'] = userids();
    // Update Data Profile
    $result = $this->prfmodel->updatepassword($inputs);
    if ($result) {
      // Kalau Berhasil
      $message = "Kata Sandi Berhasil Diperbarui !";
      alerta('success', $message);
    } else {
      // Kalau Fail
      $message = "Kata Sandi Gagal Diperbarui !";
      alerta('error', $message);
    }
    return redirect(base_url('profile/password'));
  }
}
?>