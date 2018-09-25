
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat extends CI_Controller
{


  public function __construct() {
    parent::__construct();
    
  }

  public function index()
  {
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('pages/surat');
    $this->load->view('template/footer');
  }

  public function suratmrk()
  {
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('pages/suratmrk');
    $this->load->view('template/footer');
  }

  public function suratkebenaran()
  {
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('pages/suratkebenaran');
    $this->load->view('template/footer');
  }

  public function suratwjp()
  {
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('pages/suratwjp');
    $this->load->view('template/footer');
  }


}

?>
