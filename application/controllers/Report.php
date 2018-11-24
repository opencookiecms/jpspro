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
    $this->load->view('webprint/PSK01P');
  }

  public function Report_PSK_02()
  {
    $this->load->view('webprint/PSK02P');
  }

  public function Report_SS()
  {
    $this->load->view('webprint/CLP');
  }

  public function Report_PSMK()
  {
      $this->load->view('webprint/PSMKP');
  }

  public function Report_PJB()
  {
      $this->load->view('webprint/JBP');
  }

  public function Report_Pemulangan_WJB()
  {
    $this->load->view('webprint/WJPP');
  }

  public function Report_PKK01()
  {
    $this->load->view('webprint/SPKK01');
  }

  public function Report_PKK02()
  {
    $this->load->view('webprint/SPKK02');
  }

  public function Report_Khas01()
  {
    $this->load->view('webprint/SKHAS01');
  }

  public function Report_Khas02()
  {
    $this->load->view('webprint/SKHAS02');
  }

  public function Report_Cover_PWJP()
  {
    $this->load->view('webprint/SWJP');
  }
}
