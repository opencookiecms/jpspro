<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller{


  public function __construct() {
    parent::__construct();

  }

  public function index()
  {
      //load the template header,sidebar,pages and footer
      //this is a Daftar page please refer to link http://localhost/jpspro/daftar
      //
      // kalau nak tengok template boleh pergi ke
      // view->pages (ada page dekat sini)
      //       template (Web template dekat sini)

      //good luck
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('pages/daftar');
    $this->load->view('template/footer');
  }

  public function stepsatu()
  {

    $data['title'] = 'Langkah Satu';



    //form validation function
    $this->form_validation->set_rules('nosebut','Sila Masukkan No Sebut Harga','required');
    $this->form_validation->set_rules('tarikhmohon','Tarikh Mohon','required');
    $this->form_validation->set_rules('jenissebut','Jenis Sebut','required');

    if($this->form_validation->run() === FALSE)

    {
      $this->load->view('template/header');
      $this->load->view('template/sidebar',$data);
      $this->load->view('pages/stepone');
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

    echo $idvalue;

    $this->form_validation->set_rules('vot','Kod Vot Diperlukan','required');


    if($this->form_validation->run() === FALSE)
    {


      $this->load->view('template/header');
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
      $this->load->view('template/sidebar',$data);
      $this->load->view('pages/stepthree');
      $this->load->view('template/footer');
    }
    else {
      $this->projek_model->create_stepthree();//load from model
      redirect(base_url('projek/'));
    }

  }

}
