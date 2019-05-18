
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat extends CI_Controller
{
  public function __construct() {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('Surat_model');
    $this->load->model('Setting_model');
  }

  public function Letter_Board($value="")
  {
    $this->load->database();
    $data['get_detail']=$this->Surat_model->get_projectalldetail($value);
    $this->load->view('template/header');
    $this->load->view('template/nav');
    $this->load->view('template/sidebar');
    $this->load->view('pages/Letter',$data);
    $this->load->view('template/footer');
  }

  public function Surat_MRK($value="")
  {
    $lass = $this->input->post('hiddenids');
    $this->load->database();
    $data['get_detail']=$this->Surat_model->get_projectalldetail($value);
    $data['get_keypeople']=$this->Setting_model->get_Datasetting();
    $this->form_validation->set_rules('rujuktuan', 'Rujukan Tuan', 'required');
    $this->form_validation->set_rules('rujukkami', 'Rujukan Kami', 'required');

    if($this->form_validation->run() == FALSE)
    {
      $this->load->view('template/header');
      $this->load->view('template/nav');
      $this->load->view('template/sidebar');
      $this->load->view('pages/SMRK',$data);
      $this->load->view('template/footer');
    }
    else
    {
      $this->Surat_model->create_suratmrk();
      $this->session->set_userdata('smrk','Data Surat Maklumat Rekod Kerja berjaya disimpan');
      redirect(base_url('surat/Surat_MRK/'.$lass)); //redirect last i
    }


  }

  public function Surat_Khas($value="")
  {
    $lass = $this->input->post('hiddenids');
    $this->load->database();
    $data['get_detail']=$this->Surat_model->get_projectalldetailKhas($value);
     $data['get_user']=$this->Setting_model->get_userdatasetting();
    $this->form_validation->set_rules('rujuktuan', 'Rujukan Tuan', 'required');
    $this->form_validation->set_rules('rujukkami' , 'Rujukan Kami', 'required');
    $this->form_validation->set_rules('nosebutharga', 'No Sebutharga', 'required');

    if($this->form_validation->run() == FALSE)
    {
      $this->load->view('template/header');
      $this->load->view('template/nav');
      $this->load->view('template/sidebar');
      $this->load->view('pages/SKHAS',$data);
      $this->load->view('template/footer');
    }
    else
    {
      $this->Surat_model->create_suratkebenaran();
      $this->session->set_userdata('skk','Data Surat Kebenaran Khas berjaya disimpan');
      redirect(base_url('surat/Surat_Khas/'.$lass)); //redirect last i
    }

  }

  public function setspjwp($value="")
  {

    $id = $this->input->post("hiddenids");

     $data['get_detail']=$this->Surat_model->get_projectalldetailSuratWJP($value);
     $data['get_user']=$this->Setting_model->get_userdatasetting();
    $this->form_validation->set_rules('kepada', 'Fail Rujukan', 'required');

    if($this->form_validation->run()==FALSE)
    {
      $this->load->view('template/header');
      $this->load->view('template/nav');
      $this->load->view('template/sidebar');
      $this->load->view('pages/SWJP',$data);
      $this->load->view('template/footer');
    }
    else
    {
      $this->Surat_model->create_suratwjp();
      $this->session->set_userdata('swjp','Data Surat Pelepasan Wang Jaminan Perlaksanaan berjaya disimpan');
      redirect(base_url('surat/setspjwp/'.$id)); //redirect last i
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
      $this->load->view('template/nav');
      $this->load->view('template/sidebar');
      $this->load->view('pages/SMRK');
      $this->load->view('template/footer');
    }
    else
    {
      $this->Surat_model->SuratMRKUpdate($data ,$this->input->post('hiddenid'));
      $id = $this->input->post('hiddenids');
			$this->session->set_userdata('smrk','Data Surat Maklumat Rekod Kerja berjaya dikemaskini');
			redirect(base_url('surat/Surat_MRK/'.$id)); //redirect last id to another step
    }

  }

  public function Surat_Khas_Update()
  {
    $this->load->database();
    $this->form_validation->set_rules('rujuktuan', 'Rujukan Tuan', 'required');
    $this->form_validation->set_rules('rujukkami' , 'Rujukan Kami', 'required');
    $this->form_validation->set_rules('nosebutharga', 'No Sebutharga', 'required');


    if($this->form_validation->run() == FALSE)
    {
      $this->load->view('template/header');
      $this->load->view('template/nav');
      $this->load->view('template/sidebar');
      $this->load->view('pages/SKHAS');
      $this->load->view('template/footer');
    }
    else
    {
      $this->Surat_model->SuratKhasUpdate($data ,$this->input->post('hiddenid'));
      $id = $this->input->post('hiddenids');
			$this->session->set_userdata('skk','Data Surat Khas dikemaskini');
			redirect(base_url('surat/Surat_Khas/'.$id)); //redirect last id to another step
    }

  }

  public function Surat_WJP_Update($value="")
  {
  
      $this->Surat_model->SuratWJPUpdate($data ,$this->input->post('hiddenid'));
     
			$this->session->set_userdata('swjp','Data Surat Wang Jaminan Perlaksanaan dikemaskini');
			redirect(base_url('surat/setspjwp/'.$value)); //redirect last id to another step
    

  }

  ///////////////////////////////////////////////end update controller//////////////////////////////////////////////////////////////////////////////////////

  public function Letter_DTS()
  {
    $this->load->view('template/header');
    $this->load->view('template/nav');
    $this->load->view('template/sidebar');
    $this->load->view('pages/letter_dts');
    $this->load->view('template/footer');
  }

  public function SuratMRK_DTS()
  {
    $this->load->database();

    $this->load->view('template/header');
    $this->load->view('template/nav');
    $this->load->view('template/sidebar');
    $data['get_mrksurat']=$this->Surat_model->get_suratmrkview();
    $this->load->view('pages/suratmrk_dts', $data);
    $this->load->view('template/footer');
  }

  public function SuratKhas_DTS()
  {
    $this->load->database();

    $this->load->view('template/header');
    $this->load->view('template/nav');
    $this->load->view('template/sidebar');
    $data['get_suratkhas']=$this->Surat_model->get_suratkhasview();
    $this->load->view('pages/suratkhas_dts', $data);
    $this->load->view('template/footer');
  }

  public function SuratWJP_DTS()
  {
    $this->load->database();

    $this->load->view('template/header');
    $this->load->view('template/nav');
    $this->load->view('template/sidebar');
    $data['get_suratwjp']=$this->Surat_model->get_suratwjpview();
    $this->load->view('pages/suratwjp_dts', $data);
    $this->load->view('template/footer');
  }
}

?>