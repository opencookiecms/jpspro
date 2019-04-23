<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_con extends CI_Controller{

  public function __construct()
	{
		parent::__construct();
		//Codeigniter : Write Less Do More
		$this->load->model('Setting_model');
		$this->load->helper('url');
    $this->load->library('session');
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



  public function simpanpegawai()
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

  public function deletepegawai($value="")
  {
    $this->load->database();

    $this->Setting_model->deletePegawai($value);
    redirect(base_url('Setting_con'));
  }


  public function deleteslogan($value="")
  {
    $this->load->database();

    $this->Setting_model->delslogan($value);
    redirect(base_url('Setting_con/SaveSettingPassandSlogan'));
  }
  
  

  public function SaveSettingPassandSlogan()
  {
    //form validation function
    $this->load->database();
    $this->form_validation->set_rules('slogan', 'Sila masukkan sekurang-kurangnya satu slogan', 'required');
    //$data['get_detail']=$this->Mrk_model->get_projectdetailformrk01($value);
    $data['get_slogan']=$this->Setting_model->get_dataslogan();
    if($this->form_validation->run() == FALSE)

    {
      $this->load->view('template/header');
      $this->load->view('template/nav');
      $this->load->view('template/sidebar');
      $this->load->view('pages/Setting2',$data);
      $this->load->view('template/footer');
    }
    else
    {
      $this->Setting_model->setslogan();//load from model and call last id
      redirect(base_url('Setting_con/SaveSettingPassandSlogan')); //redirect last id to another step

    }

  }

  public function logins()
  {

    if($this->session->userdata('email')==null)
    {
      $this->load->view('template/header');
      $this->load->view('pages/login');
      $this->load->view('template/footer');
    } 
    else{
       redirect('mydashboard');
    }
  


  }

  public function logout()
  {
      $this->session->unset_userdata('email');
      $this->session->unset_userdata('name');
      $this->session->unset_userdata('roles');
      $this->session->unset_userdata('jawatan');
      $this->session->sess_destroy();
      redirect('login');
  }

  public function verify()
  {
    $emaiv = $this->input->post('email');
    $passv = md5($this->input->post('pass'));

    $veri = $this->Setting_model->get_verify($emaiv,$passv);
    if($veri)
    {
      foreach ($veri as $row)
      {
        $this->session->set_userdata('email',$row->jps_email);
        $this->session->set_userdata('name', $row->jps_name);
        $this->session->set_userdata('roles',$row->jps_userroles);
        $this->session->set_userdata('jawatan',$row->jps_position);

        redirect('mydashboard');
      }
    }
    else {
      redirect('login');
    }

  }

  public function usersreg()
  {
    $this->load->database();
    $this->form_validation->set_rules('email', 'Email','required|is_unique[jps_users.jps_email]');
    $this->form_validation->set_rules('nama', 'Nama diperlukan', 'required');

    if($this->form_validation->run() === FALSE)
    {

        $data['get_user']=$this->Setting_model->get_userdatasetting();
        $this->load->view('template/header');
        $this->load->view('template/nav');
        $this->load->view('template/sidebar');
        $this->load->view('pages/register',$data);
        $this->load->view('template/footer');
     
   
    }
    else
    {
      $this->Setting_model->get_register();
      redirect('mydashboard');
    }

  }

  public function isSistem()
  {
    $data = array(
      'Land Transportation',
      'Hydrological Station',
      'Inland Water',
      'Relief Portrayal',
      'River Structure',
      'Storage Pound',
      'Stormwater Diversion',
      'Topographic',
      'Water Supply'
    );
  }

  public function isSubsistem($sistem = "")
  {
    
  }

  public function isComponent($component = "")
  {

  }
}
