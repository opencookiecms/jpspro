
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projek extends CI_Controller
{


  public function __construct() {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('Projek_model');

      //$this->load->model('ProjekMdl');
    //  $this->load->helper('form');
    //  $this->load->library('form_validation');
  }

  public function index()
  {
   $this->load->database();
    $this->load->view('template/header');
    $this->load->view('template/nav');
    $this->load->view('template/sidebar');
    $data['get_projek']=$this->Projek_model->get_projekview();
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

   $this->session->unset_userdata('success');
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
