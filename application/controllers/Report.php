<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller{

  public function __construct() {
    parent::__construct();
    $this->load->library('Html2pdflib');

  }

  function Report_MRK_01()
  {

    $this->load->view('print/MRK01_Report');

  }

}
