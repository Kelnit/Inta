<?php
// Authentication Controller : Sign In, Sign Up, Sign Out, & Publish Data User
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends OutController {
  // Auth Controller Construct
  public function __construct(){
    // Parent Construct
    parent::__construct();
    // Model
    $this->load->model('auth_model', 'authmodel');
  }

  public function login(){
    // Main File u Melakukan Sign In
    // Kalau User Sign In : Main File
    if (loggedin()) return redirect(base_url('hub'));
    // Input Sign In
    if ($this->input->post()){
      // Array Input
      $nik = trim($this->input->post('usernik'));
      $pwd = trim($this->input->post('password'));
      if ($nik && $pwd){
        $result = $this->authmodel->login($nik, $pwd);
        // Kalau User Sign In : Berhasil
        if ($result && $result['isactive'] == 1) {
          $sessiondata = array(
            'id' => $result['id'],
            'kode' => $result['kode'],
            'usernik' => $result['nik'],
            'name' => $result['fullname'],
            'roleKey' => $result['roleKey'],
            'islogin' => true
          );
          $this->session->set_userdata($sessiondata);
          $message = "Selamat Datang !";
          alerta('success', $message);
          redirect(base_url('hub'));
        // Kalau User Sign In Gagal | User Tidak Aktif
        } else {
          $message = "Login Gagal, Pastikan NIK dan Password Benar !";
          alerta('error', $message);
          return redirect(base_url());
        }
      // Kalau Input Kosong
      } else {
        $message = "Login Gagal, Pastikan Semua Kolom Terisi !";
        alerta('error', $message);
        return redirect(base_url(''));
      }
    }
    // File
    $this->data['title'] = "Login Aplikasi Pasca Kemoterapi";
    $this->data['sub_page'] = 'auth/login';
    $this->load->view('layout/layout', $this->data);
  }

  public function register(){
    // Main Controller u Tampilan Daftar
    // File
    $this->data['title'] = 'Panel Daftar Pasien';
    $this->data['sub_page'] = 'auth/register';
    $this->data['main_menu'] = 'auth';
    $this->load->view('layout/layout', $this->data);
  }

  public function publish(){
    // Main Controller u Melakukan Publish Data User
    $inputs = $this->input->post();
    // Validasi Input
    if ($this->authmodel->register($inputs)) {
      alerta('success', 'Pendaftaran Berhasil !');
      return redirect(base_url(''));
    }
    // Pendaftaran Tidak Berhasil !
    alerta('danger', 'Pendaftaran Tidak Berhasil !');
    // Kembali
    return redirect('auth/register');
  }

  public function logout(){
    // User Off !
    if ($this->session->userdata()) {
      // Sign Off
      $this->authmodel->logout();
      // Disable User !
      $this->session->sess_destroy();
    }
    // Kembali
    return redirect(base_url());
  }
}