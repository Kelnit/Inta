<?php
// Profile Model to Profile Controller
// Profile Model Handle Personal Data Profile User & Kata Sandi Singular User
defined('BASEPATH') or exit('No direct script access allowed');

class Profile_model extends CI_Model {
  // Profile Model Melakukan Handling Data In & Data Out Profile User
  public function __construct(){
    // Construct Parent
    parent::__construct();
  }

  public function getProfileByID($key) {
    // Model u Melakukan Pengambilan Data Profile User
    $roleKey = $this->session->userdata('roleKey');
    $table = in_array($roleKey, [1, 2]) ? 'staff' : 'patients';
    $filter = array('kode' => $key);
    $this->db->where($filter);
    return $this->db->get($table)->row_array();
  }

  public function publishProfile($data) {
    // Model u Melakukan Update Data Profile
    $roleKey = $this->session->userdata('roleKey');
    $table = in_array($roleKey, [1, 2]) ? 'staff' : 'patients';
    $filter = array('kode' => $data['kode']); unset($data['kode']);
    $this->db->where($filter);
    return $this->db->update($table, $data);
  }

  public function publishKataSandi($data) {
    // Model u Melakukan Update Kata Sandi
    $filter = array('userKey' => $data['kode']);
    $this->db->where($filter);
    $update = array('password' => password_hash($data['password'], PASSWORD_DEFAULT));
    return $this->db->update('login_credential', $update);
  }
}