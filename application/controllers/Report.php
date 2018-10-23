<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('Report_pdf');
  }

  function index()
  {

    $this->load->view('print/mrk01_report');

  }

}
