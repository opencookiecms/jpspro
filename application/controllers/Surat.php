
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat extends CI_Controller
{


  public function __construct() {
    parent::__construct();

    $this->load->model('Surat_model');

  }

  public function index()
  {
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('pages/Letter');
    $this->load->view('template/footer');
  }

  public function Surat_MRK()
  {
    $this->form_validation->set_rules('rujuktuan', 'Rujukan Tuan', 'required');
    $this->form_validation->set_rules('rujukkami', 'Rujukan Kami', 'required');

    if($this->form_validation->run() == FALSE)
    {
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('pages/SMRK');
      $this->load->view('template/footer');
    }
    else
    {
      $this->Surat_model->create_suratmrk();
      redirect(base_url('surat/suratkebenaran'));
    }


  }

  public function Surat_Khas()
  {
    $this->form_validation->set_rules('rujuktuan', 'Rujukan Tuan', 'required');
    $this->form_validation->set_rules('rujukkami' , 'Rujukan Kami', 'required');
    $this->form_validation->set_rules('nosebutharga', 'No Sebutharga', 'required');

    if($this->form_validation->run() == FALSE)
    {
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('pages/SKHAS');
      $this->load->view('template/footer');
    }
    else
    {
      $this->Surat_model->create_suratkebenaran();
      redirect(base_url('surat/suratwjp'));
    }


  }

  public function Surat_WJP()
  {
    $this->form_validation->set_rules('rujuktuan', 'Rujukan Tuan', 'required');
    $this->form_validation->set_rules('rujukkami', 'Rujukan Kami', 'required');

    if($this->form_validation->run() == FALSE)
    {
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('pages/SWJP');
      $this->load->view('template/footer');
    }
    else
    {
      $this->Surat_model->create_suratwjp();
      redirect(base_url('surat'));
    }


  }


}

?>
