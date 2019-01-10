
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekod extends CI_Controller
{


  public function __construct() {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('Record_model');
      //$this->load->model('ProjekMdl');
    //  $this->load->helper('form');
    //  $this->load->library('form_validation');
  }

  public function index()
  {
    $this->load->view('template/header');
    $this->load->view('template/nav');
    $this->load->view('template/sidebar');
    $this->load->view('pages/record');
    $this->load->view('template/footer');
  }


  public function MRK01_Table()
  {

    $this->load->view('template/header');
    $this->load->view('template/nav');
    $this->load->view('template/sidebar');
    $data['get_projek']=$this->Record_model->getdetail();
    $this->load->view('pages/MRK01_dts', $data);
    $this->load->view('template/footer');

  }

  public function mrkdua_details()
  {

    $this->load->view('template/header');
    $this->load->view('template/nav');
    $this->load->view('template/sidebar');
    $data['get_projek']=$this->Mrk_model->get_allDateMRK();
    $this->load->view('pages/MRK02_dts', $data);
    $this->load->view('template/footer');

  }

  public function mrktiga_details()
  {

    $this->load->view('template/header');
    $this->load->view('template/nav');
    $this->load->view('template/sidebar');
    $data['get_projek']=$this->Mrk_model->get_allDateMRK();
    $this->load->view('pages/mrk03_dts', $data);
    $this->load->view('template/footer');

  }

  public function mrklaporansiap_details()
  {

    $this->load->view('template/header');
    $this->load->view('template/nav');
    $this->load->view('template/sidebar');
    $data['get_projek']=$this->Mrk_model->get_allDateMRK();
    $this->load->view('pages/lsk_dts', $data);
    $this->load->view('template/footer');

  }

  public function mrkperakuansiap_details()
  {

    $this->load->view('template/header');
    $this->load->view('template/nav');
    $this->load->view('template/sidebar');
    $data['get_projek']=$this->Mrk_model->get_allDateMRK();
    $this->load->view('pages/mrkperakuansiap_details', $data);
    $this->load->view('template/footer');

  }

  public function mrkperakuansiapbaikicacat_details()
  {

    $this->load->view('template/header');
    $this->load->view('template/nav');
    $this->load->view('template/sidebar');
    $data['get_projek']=$this->Mrk_model->get_allDateMRK();
    $this->load->view('pages/psbc_dts', $data);
    $this->load->view('template/footer');

  }

  public function mrkpelepasanbank_details()
  {

    $this->load->view('template/header');
    $this->load->view('template/nav');
    $this->load->view('template/sidebar');
    $data['get_projek']=$this->Mrk_model->get_allDateMRK();
    $this->load->view('pages/mrkpelepasanbank_details', $data);
    $this->load->view('template/footer');

  }

  public function mrkperakuanpemulangan_details()
  {

    $this->load->view('template/header');
    $this->load->view('template/nav');
    $this->load->view('template/sidebar');
    $data['get_projek']=$this->Mrk_model->get_allDateMRK();
    $this->load->view('pages/mrkperakuanpemulangan_details', $data);
    $this->load->view('template/footer');

  }



}

?>
