
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekod extends CI_Controller
{


  public function __construct() {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('Record_model');
  }

  public function maklumat_mrk_01()
  {
      $data['url'] = "mrk/MRK_01/";
      if($this->session->userdata('roles')=='user')
      {
          $username = $this->session->userdata('name');
          $data['get_projek'] = $this->Record_model->getmrksatu($username);
      }
      else
      {
        $data['get_projek'] = $this->Record_model->getmrksatu();
      }
      $this->load->view('template/header');
      $this->load->view('template/nav');
      $this->load->view('template/sidebar');
      $this->load->view('pages/rekod_dokument',$data);
      $this->load->view('template/footer');  
  }

  public function maklumat_mrk_02()
  {
      $data['url'] = "mrk/MRK_02/";
      if($this->session->userdata('roles')=='user')
      {
        $username = $this->session->userdata('name');
        $data['get_projek'] = $this->Record_model->getmrkdua($username);
      }
      else
      {
         $data['get_projek'] = $this->Record_model->getmrkdua();
      }
     
      $this->load->view('template/header');
      $this->load->view('template/nav');
      $this->load->view('template/sidebar');
      $this->load->view('pages/rekod_dokument',$data);
      $this->load->view('template/footer');  
  }

  public function maklumat_laporan_siap_kerja()
  {
      $data['url'] = "mrk/LSK/";
      if($this->session->userdata('roles')=='user')
      {
        $username = $this->session->userdata('name');
        $data['get_projek'] = $this->Record_model->getlsk($username);
      }
      else
      {
        $data['get_projek'] = $this->Record_model->getlsk();
      }
     
      $this->load->view('template/header');
      $this->load->view('template/nav');
      $this->load->view('template/sidebar');
      $this->load->view('pages/rekod_dokument',$data);
      $this->load->view('template/footer');  
  }


  public function maklumat_mrk_03()
  {
      $data['url'] = "mrk/MRK_03/";
      if($this->session->userdata('roles')=='user')
      {
        $username = $this->session->userdata('name');
        $data['get_projek'] = $this->Record_model->getmrktiga($username);
      }
      else
      {
        $data['get_projek'] = $this->Record_model->getmrktiga();
      }
      $this->load->view('template/header');
      $this->load->view('template/nav');
      $this->load->view('template/sidebar');
      $this->load->view('pages/rekod_dokument',$data);
      $this->load->view('template/footer');  
  }

  public function maklumat_perakuan_siap_kerja()
  {
      $data['url'] = "mrk/PSK/";
    
      if($this->session->userdata('roles')=='user')
      {
        $username = $this->session->userdata('name');
        $data['get_projek'] = $this->Record_model->getpsk($username);
      }
      else
      {
        $data['get_projek'] = $this->Record_model->getpsk();
      }
      $this->load->view('template/header');
      $this->load->view('template/nav');
      $this->load->view('template/sidebar');
      $this->load->view('pages/rekod_dokument',$data);
      $this->load->view('template/footer');  
  }

  public function maklumat_senarai_semakan()
  {
      $data['url'] = "mrk/Senarai_Semak/";
 
      if($this->session->userdata('roles')=='user')
      {
        $username = $this->session->userdata('name');
        $data['get_projek'] = $this->Record_model->getss($username);
      }
      else
      {
        $data['get_projek'] = $this->Record_model->getss();
      }

      $this->load->view('template/header');
      $this->load->view('template/nav');
      $this->load->view('template/sidebar');
      $this->load->view('pages/rekod_dokument',$data);
      $this->load->view('template/footer'); 
  }

  public function maklumat_perakuan_siap_membaiki_kecatatan()
  {
      $data['url'] = "mrk/MRK_PSMK/";
      if($this->session->userdata('roles')=='user')
      {
        $username = $this->session->userdata('name');
        $data['get_projek'] = $this->Record_model->getpsmk($username);
      }
      else
      {
        $data['get_projek'] = $this->Record_model->getpsmk();
      }
      $this->load->view('template/header');
      $this->load->view('template/nav');
      $this->load->view('template/sidebar');
      $this->load->view('pages/rekod_dokument',$data);
      $this->load->view('template/footer'); 
  }

  public function maklumat_pelepasan_jaminan_bank()
  {
      $data['url'] = "mrk/Jaminan_Bank/";
      
      if($this->session->userdata('roles')=='user')
      {
        $username = $this->session->userdata('name');
        $data['get_projek'] = $this->Record_model->getjb($username);
      }
      else
      {
        $data['get_projek'] = $this->Record_model->getjb();
      }
      $this->load->view('template/header');
      $this->load->view('template/nav');
      $this->load->view('template/sidebar');
      $this->load->view('pages/rekod_dokument',$data);
      $this->load->view('template/footer');
  }

  public function maklumat_perakuan_pemulangan_wang_jaminan_perlaksanaan()
  {
      $data['url'] = "mrk/PP_WJP/";
      
      if($this->session->userdata('roles')=='user')
      {
        $username = $this->session->userdata('name');
        $data['get_projek'] = $this->Record_model->getppwjp($username);
      }
      else
      {
        $data['get_projek'] = $this->Record_model->getppwjp();
      }
      $this->load->view('template/header');
      $this->load->view('template/nav');
      $this->load->view('template/sidebar');
      $this->load->view('pages/rekod_dokument',$data);
      $this->load->view('template/footer');
  }

  public function surat_maklumat_rekod_kerja()
  {
      $data['url'] = "surat/Surat_MRK/";
     
      if($this->session->userdata('roles')=='user')
      {
        $username = $this->session->userdata('name');
        $data['get_projek'] = $this->Record_model->getsuratmrk($username);
      }
      else
      {
        $data['get_projek'] = $this->Record_model->getsuratmrk();
      }
      $this->load->view('template/header');
      $this->load->view('template/nav');
      $this->load->view('template/sidebar');
      $this->load->view('pages/rekod_dokument',$data);
      $this->load->view('template/footer');
  }

  public function surat_khas()
  {
      $data['url'] = "surat/Surat_Khas/";
      
      if($this->session->userdata('roles')=='user')
      {
        $username = $this->session->userdata('name');
        $data['get_projek'] = $this->Record_model->getsuratkhas($username);
      }
      else
      {
        $data['get_projek'] = $this->Record_model->getsuratkhas();
      }
      $this->load->view('template/header');
      $this->load->view('template/nav');
      $this->load->view('template/sidebar');
      $this->load->view('pages/rekod_dokument',$data);
      $this->load->view('template/footer');
  }

  public function surat_pelepasan_wjp()
  {
      $data['url'] = "surat/setspjwp/";
      
      if($this->session->userdata('roles')=='user')
      {
        $username = $this->session->userdata('name');
        $data['get_projek'] = $this->Record_model->getsuratwjp($username);
      }
      else
      {
        $data['get_projek'] = $this->Record_model->getsuratwjp();
      }
      $this->load->view('template/header');
      $this->load->view('template/nav');
      $this->load->view('template/sidebar');
      $this->load->view('pages/rekod_dokument',$data);
      $this->load->view('template/footer');
  }




}


