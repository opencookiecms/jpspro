<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller{

  public function __construct() {
    parent::__construct();
    //$lastId = $this->projek_model->create_stepone();//load from model and call last id
      //$this->load->model('ProjekMdl');
    //  $this->load->helper('form');
    //  $this->load->library('form_validation');
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
      $lastId = $this->projek_model->create_stepone();//load from model and call last id
      redirect(base_url('daftar/stepdua/'.$lastId)); //redirect last id to another step
    }


  }

  public function stepdua($idvalue = '')
  {
    $data['title'] = 'Langkah Dua';
    $data['idvalues'] = $idvalue;



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
      redirect(base_url('daftar/steptiga/' ));
    }


  }

  public function steptiga()
  {

    $data['title'] = 'Langkah Tiga';

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

 //Zaty Please read this...
  //I thing we should seperate this controller for this item in below..what do you thing ????

  // public function bayaransebut(){
  //   $this->load->view('template/header');
  //   $this->load->view('template/sidebar');
  //   $this->load->view('pages/bayar_sebut');
  //   $this->load->view('template/footer');
  // }
  //
  // public function rekodkerja(){
  //   $this->load->view('template/header');
  //   $this->load->view('template/sidebar');
  //   $this->load->view('pages/rekod');
  //   $this->load->view('template/footer');
  // }
  //
  // public function rekodkerjadua(){
  //   $this->load->view('template/header');
  //   $this->load->view('template/sidebar');
  //   $this->load->view('pages/rekod2');
  //   $this->load->view('template/footer');
  // }
  //
  // public function laporansiapkerja(){
  //   $this->load->view('template/header');
  //   $this->load->view('template/sidebar');
  //   $this->load->view('pages/laporansiap');
  //   $this->load->view('template/footer');
  // }
  //
  // public function rekodkerjatiga(){
  //   $this->load->view('template/header');
  //   $this->load->view('template/sidebar');
  //   $this->load->view('pages/rekod3');
  //   $this->load->view('template/footer');
  // }
  //
  // public function perakuansiapkerja(){
  //   $this->load->view('template/header');
  //   $this->load->view('template/sidebar');
  //   $this->load->view('pages/perakuansiap');
  //   $this->load->view('template/footer');
  // }

}
