<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller{

  public function __construct() {
    parent::__construct();
    $this->load->library('Phpwordlibs');
    $this->load->model('Mrk_model');
    $this->load->model('Surat_model');

  }

  public function Report_MRK_01($value="")
  {
  	$data['get_detail']=$this->Mrk_model->get_projectdetailformrk01($value);
    $this->load->view('webprint/MRK01P',$data);
  }

  public function Report_MRK_02($value="")
  {
    $this->load->database();
    $data['get_detail']=$this->Mrk_model->get_projectdetailformrk02($value);
    $this->load->view('webprint/MRK02P',$data);
  }

  public function Report_LSK($value="")
  {
    $data['get_detail']=$this->Mrk_model->get_projectdetailforLSK($value);
    $this->load->view('webprint/LSKP',$data);
  }

  public function Report_MRK_03($value="")
  {
    $data['get_detail']=$this->Mrk_model->get_projectdetailformrk01($value);
    $this->load->view('webprint/MRK03P',$data);
  }

  public function Report_PSK_01($value="")
  {
    $data['get_detail']=$this->Mrk_model->get_projectdetailforPSK($value);
    $this->load->view('webprint/PSK01P',$data);
  }

  public function Report_PSK_02($value="")
  {
    $data['get_detail']=$this->Mrk_model->get_projectdetailforPSK($value);
    $this->load->view('webprint/PSK02P',$data);
  }

  public function Report_SS()
  {
    $this->load->view('webprint/CLP');
  }

  public function Report_PSMK($value="")
  {
    $this->load->database();
    $data['get_detail']=$this->Mrk_model->get_projectdetailforPSMK($value);
    $this->load->view('webprint/PSMKP',$data);
  }

  public function Report_PJB($value="")
  {
      $this->load->database();
      $data['get_detail']=$this->Mrk_model->get_projectdetailforJB($value);
      $this->load->view('webprint/JBP',$data);
  }

  public function Report_Pemulangan_WJP()
  {
    $this->load->view('webprint/WJPP');
  }

  public function Report_PKK01($value="")
  {
    $this->load->database();
    $data['get_detail']=$this->Surat_model->get_projectalldetail($value);
    $this->load->view('webprint/SPKK01',$data);
  }

  public function Report_PKK02($value="")
  {
    $this->load->database();
    $data['get_detail']=$this->Surat_model->get_projectalldetail($value);
    $this->load->view('webprint/SPKK02',$data);
  }

  public function Report_Khas01($value="")
  {
    $this->load->database();
    $data['get_detail']=$this->Surat_model->get_projectalldetailKhas($value);
    $this->load->view('webprint/SKHAS01',$data);
  }

  public function Report_Khas02($value="")
  {
    $this->load->database();
    $data['get_detail']=$this->Surat_model->get_projectalldetailKhas($value);
    $this->load->view('webprint/SKHAS02',$data);
  }

  public function Report_Cover_PWJP($value="")
  {
    $this->load->database();
    $data['get_detail']=$this->Surat_model->get_projectalldetailSuratWJP($value);
    $this->load->view('webprint/SWJP',$data);
  }

  public function WordPHP()
  {
      $this->load->view('pages/wordtest');

  }
}
