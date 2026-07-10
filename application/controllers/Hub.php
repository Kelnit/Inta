<?php
// Hub Controller : Halaman Main, Dashboard, & Panel
defined('BASEPATH') or exit('No direct script access allowed');

class Hub extends MainController {
  // Hub Controller Construct
  public function __construct(){
    // Parent Construct
    parent::__construct();
  }

  public function index(){
    // Main Controller u Tampilan Main
    if (!permissible('hub', 'is_view')) {
      blokir();
    }
    // File
    $this->data['title'] = 'Panel Main';
    $this->data['sub_page'] = 'hub/index';
    $this->data['main_menu'] = 'hub';
    $this->load->view('layout/layout', $this->data);
  }
}