<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_con extends CI_Controller{


  public function index()
  {

    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('pages/Setting');
    $this->load->view('template/footer');

  }

}
