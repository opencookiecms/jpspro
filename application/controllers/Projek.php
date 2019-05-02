
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projek extends CI_Controller
{


  public function __construct() {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('Projek_model');
    $this->load->model('Setting_model');
  }

  public function unsetmsgsession()
  {
    $data = array(
             'mrk01',
             'mrk02',
             'lsk',
             'mrk03',
             'psk',
             'ss',
             'psmk',
             'pjb',
             'ppwjp',
             'smrk',
             'skk',
             'swjp'

           );
    $this->session->unset_userdata($data);
  }

  public function index()
  {
   $this->load->database();
    $this->load->view('template/header');
    $this->load->view('template/nav');
    $this->load->view('template/sidebar');
    $data['get_projek']=$this->Projek_model->get_projekviewafter();
    $this->load->view('pages/projek', $data);
    $this->load->view('template/footer');
  }


  public function sebutharga()
  {
   $this->load->database();
    $this->load->view('template/header');
    $this->load->view('template/nav');
    $this->load->view('template/sidebar');
    $jenisprojek = "Sebutharga";
    if($this->session->userdata('roles')=='user')
    {
    
      $username = $this->session->userdata('name');
      $data['get_projek']=$this->Projek_model->get_projekviewbyu($username,$jenisprojek);
    }
    else
    {
      $data['get_projek']=$this->Projek_model->get_projekview($jenisprojek);
    }

    $this->load->view('pages/projek', $data);
    $this->load->view('template/footer');
  }

  public function undi()
  {
   $this->load->database();
    $this->load->view('template/header');
    $this->load->view('template/nav');
    $this->load->view('template/sidebar');
    $jenisprojek = "Undi";
    if($this->session->userdata('roles')=='user')
    {
    
      $username = $this->session->userdata('name');
      $data['get_projek']=$this->Projek_model->get_projekviewbyu($username,$jenisprojek);
    }
    else
    {
      $data['get_projek']=$this->Projek_model->get_projekview($jenisprojek);
    }

    $this->load->view('pages/projek', $data);
    $this->load->view('template/footer');
  }

  public function lantikan_terus()
  {
   $this->load->database();
    $this->load->view('template/header');
    $this->load->view('template/nav');
    $this->load->view('template/sidebar');
    $jenisprojek = "Lantikan Terus";
    if($this->session->userdata('roles')=='user')
    {
    
      $username = $this->session->userdata('name');
      $data['get_projek']=$this->Projek_model->get_projekviewbyu($username,$jenisprojek);
    }
    else
    {
      $data['get_projek']=$this->Projek_model->get_projekview($jenisprojek);
    }

    $this->load->view('pages/projek', $data);
    $this->load->view('template/footer');
  }










  public function main_projek_view($value="")
  {
    $this->load->database();
    $this->load->view('template/header');
    $this->load->view('template/nav');
    $this->load->view('template/sidebar');

    $data['get_detail']=$this->Projek_model->get_projekdetail($value);
    $this->load->view('pages/projek_view_main',$data);
    $this->load->view('template/footer');
  }

  public function view_data($value="")
  {

   $this->load->database();
   $this->load->view('template/header');
   $this->load->view('template/nav');
   $this->load->view('template/sidebar');
   $data['get_progress']=$this->Projek_model->get_projectprogress($value);
   $data['get_detail']=$this->Projek_model->get_projekdetailbyid($value);
   $this->load->view('pages/projek_view', $data);
   $this->load->view('template/footer');

   //remove session for success msg
   $this->unsetmsgsession();
  }

  public function Update_Projek01($value="")
  {
      $this->load->database();
      $data['get_detail']=$this->Projek_model->get_updateprojek($value);
      $data['title'] = 'Kemaskini Maklumat Sebutharga';

     $id = $this->input->post('hiddenid');
     echo $id;
      if ($id==null)
      {
        $this->load->view('template/header');
        $this->load->view('template/nav');
        $this->load->view('template/sidebar');
        $this->load->view('pages/ProjekUpdate01', $data);
        $this->load->view('template/footer');
      }
      else {
        $this->Projek_model->ProjectUpdate01($data ,$this->input->post('hiddenid'));
        redirect(base_url('projek/Update_Projek01/'.$id)); //redirect last id to another step
      }

    }




  public function Update_Projek02($value="")
  {
   
    $data['title'] = 'Kemaskini Maklumat Sebutharga';
    $this->load->database();
    $data['get_detail']=$this->Projek_model->get_updateprojek($value);
     $data['get_keypeople']=$this->Setting_model->get_Datasetting();
       $data['get_user']=$this->Setting_model->get_userdatasetting();
    $id = $this->input->post('hiddenid');
    echo $id;


    if($id == null)
    {
      $this->load->view('template/header');
      $this->load->view('template/nav');
      $this->load->view('template/sidebar');
      $this->load->view('pages/ProjekUpdate02', $data);
      $this->load->view('template/footer');
    }
    else {
      $this->Projek_model->ProjectUpdate02($data ,$this->input->post('hiddenid'));
      redirect(base_url('projek/Update_Projek02/'.$id)); //redirect last id to another step
    }

  }


  public function Update_Projek03($value="")
  {
    $this->load->database();
    $data['get_sungai'] = $this->Projek_model->getsungai();
    $data['get_sistem'] = $this->Projek_model->issistem();
    $data['get_detail']=$this->Projek_model->get_updateprojek($value);
    $id = $this->input->post('dp_idpost');
    echo $id;
      $data['title'] = 'Kemaskini Maklumat Sebutharga';

    if($id == null)
    {
      $this->load->view('template/header');
      $this->load->view('template/nav');
      $this->load->view('template/sidebar');
      $this->load->view('pages/ProjekUpdate03', $data);
      $this->load->view('template/footer');
    }
    else {
      $this->Projek_model->ProjectUpdate03($data ,$this->input->post('dp_idpost'));
      redirect(base_url('projek/Update_Projek03/'.$id)); //redirect last id to another step
    }

  }



 public function daftar_view()
 {
  $this->load->view('pages/daftar_view');
 }

 public function delete($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('dp_projek');

    redirect(base_url('projek'));

  }



}

?>
