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
    
     $data['get_slogan']=$this->Setting_model->get_dataslogan();
  
      $this->load->view('template/header');
      $this->load->view('template/nav');
      $this->load->view('template/sidebar');
      $this->load->view('pages/Setting2',$data);
      $this->load->view('template/footer');
  
  }

  public function updatecogan()
  {
    $id = $this->input->post("hiddenid");
    $this->Setting_model->setslogan($id);//load from model and call last id
    redirect(base_url('Setting_con/SaveSettingPassandSlogan')); //redirect last id to another step

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
      $this->session->unset_userdata('userid');
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
        $this->session->set_userdata('userid',$row->user_id);
        $this->session->set_userdata('email',$row->jps_email);
        $this->session->set_userdata('name', $row->jps_name);
        $this->session->set_userdata('userpic',$row->user_pic);
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
    $this->form_validation->set_rules('pass', 'Password', 'required');
    $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[pass]');

    if($this->form_validation->run() === FALSE)
    {

        $data['get_user']=$this->Setting_model->get_userdatasetting();
        $data['get_jawatan'] = $this->Setting_model->getjawatan();
        $this->load->view('template/header');
        $this->load->view('template/nav');
        $this->load->view('template/sidebar');
        $this->load->view('pages/register',$data);
        $this->load->view('template/footer');
     
   
    }
    else
    {
      $this->Setting_model->get_register();
      redirect('Setting_con/senarai_nama_pengguna');
    }

  }


  public function userupdate($value)
  {
    $this->load->database();
    $check = $this->input->post("check");

    if($check==1)
    {
      
    }
    else{
       $this->form_validation->set_rules('email', 'Email','required|is_unique[jps_users.jps_email]');
    }

    $this->form_validation->set_rules('nama', 'Nama diperlukan', 'required');

    if($this->form_validation->run() === FALSE)
    {

        $data['get_user']=$this->Setting_model->get_userdatasettingbyid($value);
        $this->load->view('template/header');
        $this->load->view('template/nav');
        $this->load->view('template/sidebar');
        $this->load->view('pages/registerupdate',$data);
        $this->load->view('template/footer');
     
   
    }
    else
    {
      $this->Setting_model->get_registerupdate($value);
      redirect('Setting_con/senarai_nama_pengguna');
    }
  }

  public function senarai_nama_pengguna()
  {
      $data['get_user']=$this->Setting_model->get_userdatasetting();
      $this->load->view('template/header');
      $this->load->view('template/nav');
      $this->load->view('template/sidebar');
      $this->load->view('pages/userslist',$data);
      $this->load->view('template/footer');
  }

  public function deluser($value="")
  {
    $this->load->database();

    $this->Setting_model->deluser($value);
    redirect(base_url('setting_con/senarai_nama_pengguna'));
  }

  public function myprofile($value)
  {
   
        $data['get_user']=$this->Setting_model->get_userdatasettingbyid($value);
        $this->load->view('template/header');
        $this->load->view('template/nav');
        $this->load->view('template/sidebar');
        $this->load->view('pages/myprofile',$data);
        $this->load->view('template/footer');
  }


  public function updateprofile()
  {
      $config['upload_path'] ='./assets/images/profile/';
      $config['allowed_types'] = 'gif|jpg|jpeg|png';
      $config['max_size'] = '10000';
      $config['max_width'] = '30000';
      $config['max_height'] = '30000';
      $this->load->library('upload', $config);

      if(!$this->upload->do_upload('file'))
      {
         $data = array(
          'jps_name'=>$this->input->post('nama'),
          'jps_position'=>$this->input->post('jawatan'),
          'jps_email'=>$this->input->post('email'),
       
          'user_id'=>$this->session->userdata('userid')
         );

           $this->Setting_model->profileupdate($data,$this->session->userdata('userid'));
           redirect(base_url('setting_con/myprofile/'.$this->session->userdata('userid')));
      }
      else{

          $data = array(
          'jps_name'=>$this->input->post('nama'),
          'jps_position'=>$this->input->post('jawatan'),
          'jps_email'=>$this->input->post('email'),
       
          'user_id'=>$this->session->userdata('userid')
        );

        $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
        $data['user_pic'] = $upload_data['file_name'];


      

        $this->Setting_model->profileupdate($data,$this->session->userdata('userid'));
        redirect(base_url('setting_con/myprofile/'.$this->session->userdata('userid')));
      }

  }

  public function tukar_kata_laluan($value="")
  {
   
        $data['get_user']=$this->Setting_model->get_userdatasettingbyid($value);
        $this->load->view('template/header');
        $this->load->view('template/nav');
        $this->load->view('template/sidebar');
        $this->load->view('pages/password',$data);
        $this->load->view('template/footer');
  }

  public function tukar()
  {
      $this->Setting_model->update_password($this->session->userdata('userid'));
      $this->logout();
  }


  public function sungaireg()
  {
    $this->load->database();
    $this->form_validation->set_rules('sungainama', 'Sungai','required|is_unique[jps_users.jps_email]');
    if($this->form_validation->run() === FALSE)
    {

        $data['get_sungai']=$this->Setting_model->get_userdatasetting();
        $this->load->view('template/header');
        $this->load->view('template/nav');
        $this->load->view('template/sidebar');
        $this->load->view('pages/registersungai',$data);
        $this->load->view('template/footer');
     
   
    }
    else
    {
      $this->Setting_model->get_registersungai();
      redirect('Setting_con/sungaireg');
    }
  }


  public function senarai_sungai()
  {
      $data['get_sungai']=$this->Setting_model->getsungai();
      $this->load->view('template/header');
      $this->load->view('template/nav');
      $this->load->view('template/sidebar');
      $this->load->view('pages/sungailist',$data);
      $this->load->view('template/footer');
  }

  public function delsungai($id)
  {
    $this->load->helper('url');
    //$this->db->
    $this->db->where('sg_id', $id);
    $this->db->delete('jps_sungai');

    redirect('Setting_con/senarai_sungai');
  }

  public function sungaiupdate($value)
  {
    $this->load->database();
    $check = $this->input->post("hiddenid");

    if($check)
    {
     $this->Setting_model->updatesungai($check);
     redirect('Setting_con/senarai_sungai');
    }
    else
    {
        $data['get_sungai']=$this->Setting_model->getsungaibyid($value);
        $this->load->view('template/header');
        $this->load->view('template/nav');
        $this->load->view('template/sidebar');
        $this->load->view('pages/sungaiupdate',$data);
        $this->load->view('template/footer');
    }
  }

  public function getjawatan()
  {
        //form validation function
		$this->load->database();
    $this->form_validation->set_rules('jawatan', 'Jawatan diperkukan', 'required');
    //$data['get_detail']=$this->Mrk_model->get_projectdetailformrk01($value);
    $data['get_jawatansetting']=$this->Setting_model->get_jsetting();
		if($this->form_validation->run() == FALSE)

		{
      $this->load->view('template/header');
      $this->load->view('template/nav');
      $this->load->view('template/sidebar');
      $this->load->view('pages/sjawatan',$data);
      $this->load->view('template/footer');
		}
		else
		{
			$this->Setting_model->addjawatasetting();//load from model and call last id
      redirect(base_url('Setting_con/getjawatan')); //redirect last id to another step
		}
  }

  public function deljawatan($id)
  {
    $this->load->helper('url');
    //$this->db->
    $this->db->where('jw_id', $id);
    $this->db->delete('mrk_jawatan');

    redirect('Setting_con/getjawatan');
  }

  public function khususkod()
  {
           //form validation function
		$this->load->database();
    $this->form_validation->set_rules('kkode', 'Khusus kod diperlukan', 'required');
    //$data['get_detail']=$this->Mrk_model->get_projectdetailformrk01($value);
    $data['get_kkod']=$this->Setting_model->get_kkode();
		if($this->form_validation->run() == FALSE)

		{
      $this->load->view('template/header');
      $this->load->view('template/nav');
      $this->load->view('template/sidebar');
      $this->load->view('pages/khusus',$data);
      $this->load->view('template/footer');
		}
		else
		{
			$this->Setting_model->addkhususset();//load from model and call last id
      redirect(base_url('Setting_con/khususkod')); //redirect last id to another step
		}
  }


  public function pengkhususan()
  {

    $this->load->database();
    $this->form_validation->set_rules('kod', 'Kod Pengkususan','required');
    if($this->form_validation->run() === FALSE)
    {

        $data['get_khusus']=$this->Setting_model->get_pengkhususan();
        $this->load->view('template/header');
        $this->load->view('template/nav');
        $this->load->view('template/sidebar');
        $this->load->view('pages/pengkhususan',$data);
        $this->load->view('template/footer');
     
   
    }
    else
    {
      $this->Setting_model->get_insertkhusus();
      redirect('Setting_con/pengkhususan');
    }

  }

  public function delkusus($value="")
  {
    $this->load->database();

    $this->Setting_model->delkursus($value);
    redirect(base_url('Setting_con/khususkod'));
  }

  public function kk()
  {
    
  }

}
