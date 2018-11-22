
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
    $this->load->view('template/sidebar');
    $data['get_projek']=$this->Projek_model->get_projekview();
    $this->load->view('pages/projek', $data);
    $this->load->view('template/footer');
  }

  public function view_data($value="")
  {

   $this->load->database();
   $this->load->view('template/header');
   $this->load->view('template/sidebar');
   $data['get_detail']=$this->Projek_model->get_projekdetail($value);
   $this->load->view('pages/projek_view', $data);
   $this->load->view('template/footer');
  }

  public function Update_Projek01($value="")
  {
    $this->load->database();
    $data['get_detail']=$this->Projek_model->get_updateprojek($value);

    if($this->form_validation->run() == FALSE)
    {
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('pages/ProjekUpdate01', $data);
      $this->load->view('template/footer');
    }
    else {
      $this->Mrk_model->create_mrksatu();//load from model and call last id
			$KodVod=$this->Mrk_model->getLastKodVod();
			redirect(base_url('projek/view_data/'.$KodVod)); //redirect last id to another step
    }

  }

  public function Update_Projek02($value="")
  {
    $this->load->database();
    $data['get_detail']=$this->Projek_model->get_updateprojek($value);

    if($this->form_validation->run() == FALSE)
    {
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('pages/ProjekUpdate02', $data);
      $this->load->view('template/footer');
    }
    else {
      $this->Mrk_model->create_mrksatu();//load from model and call last id
      $KodVod=$this->Mrk_model->getLastKodVod();
      redirect(base_url('projek/view_data/'.$KodVod)); //redirect last id to another step
    }

  }


  public function Update_Projek03($value="")
  {
    $this->load->database();
    $data['get_detail']=$this->Projek_model->get_updateprojek($value);

    if($this->form_validation->run() == FALSE)
    {
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('pages/ProjekUpdate03', $data);
      $this->load->view('template/footer');
    }
    else {
      $this->Mrk_model->create_mrksatu();//load from model and call last id
			$KodVod=$this->Mrk_model->getLastKodVod();
			redirect(base_url('projek/view_data/'.$KodVod)); //redirect last id to another step
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
