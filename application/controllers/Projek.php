<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projek extends CI_Controller{


  function __construct() {
      parent::__construct();
      $this->load->helper('url');
      $this->load->model('Stepone_model');
      $this->load->helper('form');
      $this->load->library('form_validation');
    }

  public function index()
  {
   
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('pages/projek');
      $this->load->view('template/footer');
  }

  public function view_data()
  {

    $data['h']=$this->Stepone_model->getData();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('pages/projek', $data);
    $this->load->view('template/footer'); 
  }

}

?>
