<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller{

  public function __construct() {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('Projek_model');
    $this->load->model('Setting_model');

  }

  public function index()
  {

    $ss = $this->session->userdata("nama");
    $profile['get_sessionprofile'] = $this->Setting_model->getprofiledetails($ss);

    $data['get_list']=$this->Projek_model->listOrder();
    $this->load->view('template/header');
    $this->load->view('template/nav',$profile);
    $this->load->view('template/sidebar');
    $this->load->view('pages/daftar',$data);
    $this->load->view('template/footer');
  }

  public function stepsatu()
  {
    $data['get_nosebutharga'] = $this->Projek_model->listOrder();
    $data['title'] = 'Langkah Satu';
    //form validation function
    $this->form_validation->set_rules('nosebut','Sila Masukkan No Sebut Harga','required');
    $this->form_validation->set_rules('tarikhmohon','Tarikh Mohon','required');
    $this->form_validation->set_rules('jenissebut','Jenis Sebut','required');
    $this->form_validation->set_rules('nosebut','This values is not valid','is_unique[dp_projek.df_nosebutharga]');

    if($this->form_validation->run() === FALSE)

    {
      $this->load->view('template/header');
      $this->load->view('template/nav');
      $this->load->view('template/sidebar');
      $this->load->view('pages/stepone',$data);
      $this->load->view('template/footer');
    }

    else
    {
      $this->projek_model->create_stepone();//load from model and call last id
      $lastId=$this->projek_model->getLastid();
      redirect(base_url('daftar/stepdua/'.$lastId)); //redirect last id to another step
    }


  }

  public function stepdua($idvalue='')
  {
    $data['title'] = 'Langkah Dua';
    $data['idval'] = $idvalue;
    $data['get_user']=$this->Setting_model->get_userdatasetting();
    $data['get_keypeople']=$this->Setting_model->get_Datasetting();

    echo $idvalue;

    $this->form_validation->set_rules('vot','Kod Vot Diperlukan','required');


    if($this->form_validation->run() === FALSE)
    {


      $this->load->view('template/header');
      $this->load->view('template/nav');
      $this->load->view('template/sidebar');
      $this->load->view('pages/steptwo',$data);
      $this->load->view('template/footer');
    }
    else
    {

      $this->projek_model->create_steptwo();//load from model
      $lastId=$this->projek_model->getLastid();
      redirect(base_url('daftar/steptiga/'.$lastId ));
    }


  }

  public function steptiga($idvalue='')
  {

    $data['title'] = 'Langkah Tiga';
    $data['idval'] = $idvalue;

    $this->form_validation->set_rules('lata','Latitud Diperlukan','required');


    if($this->form_validation->run() === FALSE)
    {
      $this->load->view('template/header');
      $this->load->view('template/nav');
      $this->load->view('template/sidebar');
      $this->load->view('pages/stepthree',$data);
      $this->load->view('template/footer');
    }
    else {
      $this->projek_model->create_stepthree();//load from model
      redirect(base_url('projek/'));
    }

  }

  public function orderSebutharga()
  {
    $data['title'] = "Tempahan No. Sebutharga";
    $data['get_user']=$this->Setting_model->get_userdatasetting();

    $this->form_validation->set_rules('nosebutharga','No Sebutharga / No Tempahan Diperlukan','required');

    if($this->form_validation->run()===FALSE)
    {
      $this->load->view('template/header');
      $this->load->view('template/nav');
      $this->load->view('template/sidebar');
      $this->load->view('pages/order',$data);
      $this->load->view('template/footer');
    }
    else{
      $this->projek_model->createOrder();
      redirect(base_url('projek/'));
    }

  }

  public function orderlistSebutharga()
  {

  }

  public function orderDelete()
  {

  }

}
