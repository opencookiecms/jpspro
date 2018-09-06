<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller{


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

  public function stepsatu(){
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('pages/stepone');
    $this->load->view('template/footer');
  }

  public function stepdua(){
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('pages/steptwo');
    $this->load->view('template/footer');
  }

  public function steptiga(){
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('pages/stepthree');
    $this->load->view('template/footer');
  }

  public function bayaransebut(){
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('pages/bayar_sebut');
    $this->load->view('template/footer');
  }

  public function rekodkerja(){
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('pages/rekod');
    $this->load->view('template/footer');
  }

  public function rekodkerjadua(){
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('pages/rekod2');
    $this->load->view('template/footer');
  }

  public function laporansiapkerja(){
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('pages/laporansiap');
    $this->load->view('template/footer');
  }

  public function rekodkerjatiga(){
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('pages/rekod3');
    $this->load->view('template/footer');
  }

  public function perakuansiapkerja(){
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('pages/perakuansiap');
    $this->load->view('template/footer');
  }           

}
