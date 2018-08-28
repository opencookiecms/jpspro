<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projek extends CI_Controller{


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
      $this->load->view('pages/projek');
      $this->load->view('template/footer');
  }

  

  

}
