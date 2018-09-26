
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
    $this->load->view('pages/surat');
    $this->load->view('template/footer');
  }

  public function suratmrk()
  {
    $this->form_validation->set_rules('rujuktuan', 'Rujukan Tuan', 'required');
    $this->form_validation->set_rules('rujukkami', 'Rujukan Kami', 'required');

    if($this->form_validation->run() == FALSE)
    {
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('pages/suratmrk');
      $this->load->view('template/footer');
    }
    else
    {
      $this->Surat_model->create_suratmrk();
      redirect(base_url('surat/suratkebenaran'));
    }

    
  }

  public function suratkebenaran()
  {
    $this->form_validation->set_rules('rujuktuan', 'Rujukan Tuan', 'required');
    $this->form_validation->set_rules('rujukkami' , 'Rujukan Kami', 'required');
    $this->form_validation->set_rules('nosebutharga', 'No Sebutharga', 'required');

    if($this->form_validation->run() == FALSE)
    {
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('pages/suratkebenaran');
      $this->load->view('template/footer');
    }
    else
    {
      $this->Surat_model->create_suratkebenaran();
      redirect(base_url('surat/suratwjp'));
    }

    
  }

  public function suratwjp()
  {
    $this->form_validation->set_rules('rujuktuan', 'Rujukan Tuan', 'required');
    $this->form_validation->set_rules('rujukkami', 'Rujukan Kami', 'required');

    if($this->form_validation->run() == FALSE)
    {
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('pages/suratwjp');
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
