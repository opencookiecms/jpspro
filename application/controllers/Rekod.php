
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekod extends CI_Controller
{


  public function __construct() {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('Mrk_model');
      //$this->load->model('ProjekMdl');
    //  $this->load->helper('form');
    //  $this->load->library('form_validation');
  }

  public function index()
  {

    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $data['get_rekod']=$this->Mrk_model->get_rekodview();
    $this->load->view('pages/rekodkerja', $data);
    $this->load->view('template/footer');
  }


}

?>
