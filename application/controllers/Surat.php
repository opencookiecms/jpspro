
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

  public function view_data()
  {


  }


}

?>