<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller{

  public function __construct() {
    parent::__construct();
    $this->load->library('Phpwordlibs');
    $this->load->library('Pdfconvert');
    $this->load->model('Mrk_model');
    $this->load->model('Surat_model');
    $this->load->model('Setting_model');
    $this->load->model('Record_model');

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

  public function Report_SS($value)
  {
    $this->load->database();
    $data['get_detail']=$this->Mrk_model->get_projectdetailforSS($value);
    $this->load->view('print/SS_Report',$data);
  }

  public function Report_PSMK($value="")
  {
    $this->load->database();
    $data['get_detail']=$this->Mrk_model->get_projectdetailforPSMK($value);
    $this->load->view('print/PSMC_Report',$data);
  }

  public function Report_PJB($value="")
  {
      $this->load->database();
      $data['get_slogan']=$this->Setting_model->get_dataslogan();
      $data['get_detail']=$this->Mrk_model->get_projectdetailforJB($value);
      $this->load->view('print/PJB_Report',$data);
  }

  public function Report_Pemulangan_WJP($value="")
  {
      $this->load->database();
      $data['get_detail']=$this->Mrk_model->get_projectdetailforPPWJP($value);
      $this->load->view('print/PPWJP_Report',$data);
  }

  public function Report_PKK01($value="")
  {
    $this->load->database();
     $data['get_slogan']=$this->Setting_model->get_dataslogan();
    $data['get_detail']=$this->Surat_model->get_projectalldetail($value);
    $this->load->view('print/PKK01_Report',$data);
  }

  public function Report_PKK02($value="")
  {
    $this->load->database();
     $data['get_slogan']=$this->Setting_model->get_dataslogan();
    $data['get_detail']=$this->Surat_model->get_projectalldetail($value);
    $this->load->view('print/PKK02_Report',$data);
  }

  public function Report_Khas01($value="")
  {
    $this->load->database();
     $data['get_slogan']=$this->Setting_model->get_dataslogan();
    $data['get_detail']=$this->Surat_model->get_projectalldetailKhas($value);
    $this->load->view('print/SKHAS01',$data);
  }

  public function Report_Khas02($value="")
  {
    $this->load->database();
     $data['get_slogan']=$this->Setting_model->get_dataslogan();
    $data['get_detail']=$this->Surat_model->get_projectalldetailKhas($value);
    $this->load->view('print/SKHAS02',$data);
  }

  public function Report_Cover_PWJP01($value="")
  {
    $this->load->database();
   $data['get_slogan']=$this->Setting_model->get_dataslogan();
    $data['get_detail']=$this->Surat_model->get_projectalldetailSuratWJP($value);
    $this->load->view('print/SPWJP01',$data);
  }

  public function Report_Cover_PWJP02($value="")
  {
    $this->load->database();
   $data['get_slogan']=$this->Setting_model->get_dataslogan();
    $data['get_detail']=$this->Surat_model->get_projectalldetailSuratWJP($value);
    $this->load->view('print/SPWJP02',$data);
  }


  public function WordPHP($value="")
  {
      $this->load->database();
      $data['get_detail']=$this->Mrk_model->get_projectdetailformrk01($value);
      $this->load->view('pages/wordtest',$data);

  }

  public function Laporan()
  {
    //$this->load->view('template/header');
    //$this->load->view('template/nav');
    //$this->load->view('template/sidebar');
    $data['getkos']=$this->Record_model->gettotalkosprojek();
    $data['getbelanja']=$this->Record_model->gettotalbelanja();
    $data['getwaran']=$this->Record_model->gettotalwaran();
    $data['laporan_sb']=$this->Record_model->getdetail();
    $this->load->view('pages/laporan',$data);
   // $this->load->view('template/footer');
  }


  public function Laporan_Tahunan()
  {

    $years = $this->input->post('year');
    $data['y'] = $years;
    //$this->load->view('template/header');
    //$this->load->view('template/nav');
    //$this->load->view('template/sidebar');
    $data['getkos']=$this->Record_model->gettotalkosprojekbyyear($years);
    $data['getbelanja']=$this->Record_model->gettotalbelanjabyyear($years);
    $data['getwaran']=$this->Record_model->gettotalwaranbyyear($years);
    $data['laporan_sb']=$this->Record_model->getdetailbyyear($years);
    $this->load->view('pages/laporan_tahunan',$data);
   // $this->load->view('template/footer');
  }

  public function Laporan_Tahunan_c()
  {
    $data['title'] = "Laporan Mengikut Tahun";
    $this->form_validation->set_rules('nosebutharga','No Sebutharga / No Tempahan Diperlukan','required');

    if($this->form_validation->run()===FALSE)
    {
      $this->load->view('template/header');
      $this->load->view('template/nav');
      $this->load->view('template/sidebar');
      $this->load->view('pages/laporan_tahunan_c',$data);
      $this->load->view('template/footer');
    }
    else{
      $this->projek_model->createOrder();
      redirect(base_url('projek/'));
    }
  }

  public function laporan_kodvot($kodvot)
  {
    $u = $this->session->userdata('name');

    $data['getkos']=$this->Record_model->gettotalkosprojekkodvot($kodvot);
    $data['getbelanja']=$this->Record_model->gettotalbelanjakodvot($kodvot);
    $data['getwaran']=$this->Record_model->gettotalwarankodvot($kodvot);
    $data['laporan_sb']=$this->Record_model->getdetailkodvot($kodvot,$u);
    $this->load->view('pages/laporan',$data);
  }

  public function addtext()
  {
    $this->load->view('print/apdf');
  }

  public function dokument_report()
  {
    $this->load->view('report/reportico/index');
  }



}
