<?php

class OutController extends CI_Controller {
  // Init Controller : Auth Controller
  public function __construct() {
    // Base Controller Init
    parent::__construct();
  }
}

class MainController extends CI_Controller {
  // Init Controller : Internal Controller
  public function __construct() {
    // Base Controller Init
    parent::__construct();
    // If User isn't Log In
    if (!loggedin()) {
      // Set Url to Redirect After Login
      $this->session->set_userdata('redirect_url', current_url());
      // Redirect to Login Page
      redirect(base_url());
    }
  }
}

?>