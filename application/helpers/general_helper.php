<?php
// Helper Function
defined('BASEPATH') or exit('No direct script access allowed');

function permissible($permission, $able) {
  // Role & Controller
  $ci = &get_instance();
  $roleKey = $ci->session->userdata('roleKey');
  // Super User Default True
  if ($roleKey === 1) return true;
  return true;
}

function trialTest($data) {
  // Trial Error Controller Helper
  echo "<pre>";
  var_dump($data);
  echo "</pre>";
  exit();
}

function loggedin(){
  // Sign In ?
  $ci = &get_instance();
  // True or False
  return $ci->session->userdata('islogin') === true;
}

function alerta($type, $message){
  // Panel Helper
  $ci = &get_instance();
  // Flash Data Alert
  $ci->session->set_flashdata('alert-' . $type, $message);
}

function hashslinging(){
  // Hash Slicing Creator
  return md5(rand() . microtime() . time() . uniqid());
}

function userids(){
  // Panel Helper User Key
  $ci = &get_instance();
  // Hasil
  return $ci->session->userdata('kode');
}

function indodate($format = 'full') {
  $hari  = ['Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu'];
  $bulan = ['','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
  $hr  = $hari[(int)date('w')];
  $tgl = date('j');
  $bln = $bulan[(int)date('n')];
  $thn = date('Y');
  switch ($format) {
    case 'short': return "$tgl $bln $thn";
    case 'day':   return $hr;
    case 'month': return $bln;
    default: return "$hr, $tgl $bln $thn";
  }
}

?>