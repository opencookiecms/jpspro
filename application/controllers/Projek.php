
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projek extends CI_Controller
{


  public function __construct() {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('Projek_model');
      //$this->load->model('ProjekMdl');
    //  $this->load->helper('form');
    //  $this->load->library('form_validation');
  }

  public function index()
  {
   $this->load->database();
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $data['get_projek']=$this->Projek_model->get_projekview();
    $this->load->view('pages/projek', $data);
    $this->load->view('template/footer');
  }

  public function view_data($value="")
  {

   $this->load->database();
   $this->load->view('template/header');
   $this->load->view('template/sidebar');
   $data['get_detail']=$this->Projek_model->get_projekdetail($value);
   $this->load->view('pages/projek_view', $data);
   $this->load->view('template/footer');
 }


 public function daftar_view()
 {
  $this->load->view('pages/daftar_view');
 }



}

?>
