<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller{

  public function __construct() {
    parent::__construct();
    $this->load->library('Html2pdflib');
    $this->load->model('Mrk_model');

  }

  public function Report_MRK_01($value="")
  {
  	$data['get_detail']=$this->Mrk_model->get_projectdetailformrk01($value);
    $this->load->view('webprint/MRK01P',$data);
  }

  public function Report_MRK_02()
  {
    $this->load->view('webprint/MRK02P',$data);
  }

  public function Report_LSK()
  {
    $this->load->view('webprint/LSKP');
  }

  public function Report_MRK_03($value="")
  {
    $data['get_detail']=$this->Mrk_model->get_projectdetailformrk01($value);
    $this->load->view('webprint/MRK03P',$data);
  }

  public function Report_PSK_01()
  {
    $this->load->view('print/PSKA_Report');
  }

  public function Report_PSK_02()
  {
    $this->load->view('print/PSKB_Report');
  }

  public function Report_SS()
  {
    $this->load->view('print/SSC_Report');
  }

  public function Report_PSMK()
  {

  }

  public function Report_PJB()
  {

  }

  public function Report_Pemulangan_WJB()
  {

  }

  public function Report_PKK01()
  {

  }

  public function Report_PKK02()
  {

  }

  public function Report_Khas01()
  {

  }

  public function Report_Khas02()
  {

  }

  public function Report_Cover_PWJP()
  {

  }
}
