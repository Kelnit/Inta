<?php
// Profile Model to Profile Controller
defined('BASEPATH') or exit('No direct script access allowed');

class Profile_model extends CI_Model {
  // Profile Model Melakukan Handling Data In & Data Out Profile User
  public function __construct(){
    // Construct Parent
    parent::__construct();
  }

  public function getprofile($key) {
    // Model u Melakukan Pengambilan Data Profile User
    $roleKey = $this->session->userdata('roleKey');
    $table = in_array($roleKey, [1, 2]) ? 'staff' : 'patients';
    $filter = array('kode' => $key);
    $this->db->where($filter);
    return $this->db->get($table)->row_array();
  }

  public function publish($data) {
    // Model u Melakukan Update Data Profile
    $roleKey = $this->session->userdata('roleKey');
    $table = in_array($roleKey, [1, 2]) ? 'staff' : 'patients';
    $filter = array('kode' => $data['kode']); unset($data['kode']);
    $this->db->where($filter);
    return $this->db->update($table, $data);
  }

  public function updatepassword($data) {
    // Model u Melakukan Update Kata Sandi
    $filter = array('userKey' => $data['kode']);
    $this->db->where($filter);
    $update = array('password' => password_hash($data['password'], PASSWORD_DEFAULT));
    return $this->db->update('login_credential', $update);
  }
}