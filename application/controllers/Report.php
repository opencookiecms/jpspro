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
    $this->load->view('print/MRK01_Report',$data);
  }

  public function Report_MRK_02($value="")
  {
    $this->load->database();
    $data['get_detail']=$this->Mrk_model->get_projectdetailformrk02($value);
    $this->load->view('print/MRK02_Report',$data);
  }

  public function Report_LSK($value="")
  {
    $data['get_detail']=$this->Mrk_model->get_projectdetailforLSK($value);
    $this->load->view('print/LSK_Report',$data);
  }

  public function Report_MRK_03($value="")
  {
    $data['get_detail']=$this->Mrk_model->get_projectdetailforMRK03($value);
    $this->load->view('print/MRK03_Report',$data);
  }

  public function Report_PSK_01($value="")
  {
    $data['get_detail']=$this->Mrk_model->get_projectdetailforPSK($value);
    $this->load->view('print/PSKA_Report',$data);
  }

  public function Report_PSK_02($value="")
  {
    $data['get_detail']=$this->Mrk_model->get_projectdetailforPSK($value);
    $this->load->view('print/PSKB_Report',$data);
  }

  public function Report_SS()
  {
    $this->load->view('webprint/CLP');
  }

  public function Report_PSMK($value="")
  {
    $this->load->database();
    $data['get_detail']=$this->Mrk_model->get_projectdetailforPSMK($value);
    $this->load->view('print/PSMK_Report',$data);
  }

  public function Report_PJB($value="")
  {
      $this->load->database();
      $data['get_detail']=$this->Mrk_model->get_projectdetailforJB($value);
      $this->load->view('print/JB_Report',$data);
  }

  public function Report_Pemulangan_WJP($value="")
  {
      $this->load->database();
      $data['get_detail']=$this->Mrk_model->get_projectdetailforPPWJP($value);
      $this->load->view('print/WJP_Report',$data);
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

  public function WordPHP($value="")
  {
      $this->load->database();
      $data['get_detail']=$this->Mrk_model->get_projectdetailformrk01($value);
      $this->load->view('pages/wordtest',$data);

  }

  public function Laporan()
  {
    $this->load->view('template/header');
    $this->load->view('template/nav');
    $this->load->view('template/sidebar');
    $this->load->view('pages/laporan');
    $this->load->view('template/footer');
  }
}
