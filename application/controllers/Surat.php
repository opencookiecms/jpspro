
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat extends CI_Controller
{


  public function __construct() {
    parent::__construct();

    $this->load->model('Surat_model');

  }

  public function Letter_Board($value="")
  {
    $this->load->database();
    $data['get_detail']=$this->Surat_model->get_projectalldetail($value);
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('pages/Letter',$data);
    $this->load->view('template/footer');
  }

  public function Surat_MRK($value="")
  {
    $this->load->database();
    $data['get_detail']=$this->Surat_model->get_projectalldetail($value);
    $this->form_validation->set_rules('rujuktuan', 'Rujukan Tuan', 'required');
    $this->form_validation->set_rules('rujukkami', 'Rujukan Kami', 'required');

    if($this->form_validation->run() == FALSE)
    {
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('pages/SMRK',$data);
      $this->load->view('template/footer');
    }
    else
    {
      $this->Surat_model->create_suratmrk();
    	$KodVod=$this->Surat_model->getLastKodVodSMRK();
  		redirect(base_url('projek/view_data/'.$KodVod)); //redirect last id to another step
    }


  }

  public function Surat_Khas($value="")
  {
    $this->load->database();
    $data['get_detail']=$this->Surat_model->get_projectalldetailKhas($value);
    $this->form_validation->set_rules('rujuktuan', 'Rujukan Tuan', 'required');
    $this->form_validation->set_rules('rujukkami' , 'Rujukan Kami', 'required');
    $this->form_validation->set_rules('nosebutharga', 'No Sebutharga', 'required');

    if($this->form_validation->run() == FALSE)
    {
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('pages/SKHAS',$data);
      $this->load->view('template/footer');
    }
    else
    {
      $this->Surat_model->create_suratkebenaran();
      $KodVod=$this->Surat_model->getLastKodVodSKHAS();
      redirect(base_url('projek/view_data/'.$KodVod)); //redirect last id to another step
    }


  }

  public function Surat_WJP($value="")
  {
    $this->load->database();
    $data['get_detail']=$this->Surat_model->get_projectalldetailSuratWJP($value);
    $this->form_validation->set_rules('rujuktuan', 'Rujukan Tuan', 'required');
    $this->form_validation->set_rules('rujukkami', 'Rujukan Kami', 'required');

    if($this->form_validation->run() == FALSE)
    {
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('pages/SWJP',$data);
      $this->load->view('template/footer');
    }
    else
    {
      $this->Surat_model->create_suratwjp();
      $KodVod=$this->Surat_model->getLastKodVodSWJP();
      redirect(base_url('projek/view_data/'.$KodVod)); //redirect last id to another step
    }


  }
///////////////////////////////////update controller///////////////////////////////////////////////////////////////////////////////////////
  public function Surat_MRK_Update()
  {
    $this->load->database();

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
      $this->Surat_model->SuratMRKUpdate($data ,$this->input->post('hiddenid'));
      $KodVod=$this->Surat_model->getLastKodVodSMRK();
      redirect(base_url('projek/view_data/'.$KodVod)); //redirect last id to another step
    }

  }

  public function Surat_Khas_Update()
  {
    $this->load->database();
    $this->form_validation->set_rules('rujuktuan', 'Rujukan Tuan', 'required');
    $this->form_validation->set_rules('rujukkami' , 'Rujukan Kami', 'required');
    $this->form_validation->set_rules('nosebutharga', 'No Sebutharga', 'required');


  public function Letter_DTS()
  {
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('pages/letter_dts');
    $this->load->view('template/footer');
  }

  public function SuratMRK_DTS()
  {
    $this->load->database();

    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $data['get_suratmrk']=$this->Surat_model->get_suratmrkview();
    $this->load->view('pages/suratmrk_dts');
    $this->load->view('template/footer');
  }


    if($this->form_validation->run() == FALSE)
    {
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('pages/SKHAS');
      $this->load->view('template/footer');
    }
    else
    {
      $this->Surat_model->SuratKhasUpdate($data ,$this->input->post('hiddenid'));
      $KodVod=$this->Surat_model->getLastKodVodSKHAS();
      redirect(base_url('projek/view_data/'.$KodVod)); //redirect last id to another step
    }

  }

  public function Surat_WJP_Update()
  {
    $this->load->database();

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
      $this->Surat_model->SuratWJPUpdate($data ,$this->input->post('hiddenid'));
      $KodVod=$this->Surat_model->getLastKodVodSWJP();
      redirect(base_url('projek/view_data/'.$KodVod)); //redirect last id to another step
    }

  }


///////////////////////////////////////////////end update controller//////////////////////////////////////////////////////////////////////////////////////
}

?>
