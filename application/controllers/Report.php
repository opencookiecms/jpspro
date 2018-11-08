<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller{

  public function __construct() {
    parent::__construct();
    $this->load->library('Html2pdflib');

  }

  function Report_MRK_01($value="")
  {
    $data['get_test'] = $value;
    $this->load->view('print/MRK01_Report',$data);

  }

}
