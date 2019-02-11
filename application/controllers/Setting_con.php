<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_con extends CI_Controller{

  public function __construct()
	{
		parent::__construct();
		//Codeigniter : Write Less Do More
		$this->load->model('Setting_model');
		$this->load->helper('url');
		//$this->load->model('Projek_model');
	}

  public function index()
  {
    $data['get_usersetting']=$this->Setting_model->get_Datasetting();
    $this->load->view('template/header');
    $this->load->view('template/nav');
    $this->load->view('template/sidebar');
    $this->load->view('pages/Setting',$data);
    $this->load->view('template/footer');

  }

  public function SaveSetting()
  {
    //form validation function
		$this->load->database();
    $this->form_validation->set_rules('peoplename', 'No Inden/Pesanan Tempatan', 'required');
		//$data['get_detail']=$this->Mrk_model->get_projectdetailformrk01($value);
		if($this->form_validation->run() == FALSE)

		{
      $this->load->view('template/header');
      $this->load->view('template/nav');
      $this->load->view('template/sidebar');
      $this->load->view('pages/Setting');
      $this->load->view('template/footer');
		}
		else
		{
			$this->Setting_model->addUserSetting();//load from model and call last id
      redirect(base_url('Setting_con')); //redirect last id to another step
		}

  }

  public function SaveSettingPassandSlogan()
  {
    //form validation function
    $this->load->database();
    $this->form_validation->set_rules('peoplename', 'No Inden/Pesanan Tempatan', 'required');
    //$data['get_detail']=$this->Mrk_model->get_projectdetailformrk01($value);
    if($this->form_validation->run() == FALSE)

    {
      $this->load->view('template/header');
      $this->load->view('template/nav');
      $this->load->view('template/sidebar');
      $this->load->view('pages/Setting2');
      $this->load->view('template/footer');
    }
    else
    {
      $this->Setting_model->addUserSetting();//load from model and call last id
      redirect(base_url('Setting_con')); //redirect last id to another step

    }

  }

  public function logins()
  {
    $this->load->view('template/header');
    $this->load->view('pages/login');
    $this->load->view('template/footer');
  }

  public function verify()
  {
    $check = $this->Setting_model->get_verify();

    if($check)
    {
      redirect(base_url('mydashboard')); //redirect last id to another step
    }
    else
    {
      redirect('login');
    }
  }

  public function usersreg()
  {
    $this->load->database();

    $this->form_validation->set_rules('nama', 'Nama diperlukan', 'required');

    if($this->form_validation->run() === FALSE)
    {
      $this->load->view('template/header');
      $this->load->view('template/nav');
      $this->load->view('template/sidebar');
      $this->load->view('pages/register');
      $this->load->view('template/footer');
    }
    else
    {
      $this->Setting_model->get_register();
    }

  }

  public function info()
  {

  }

}
