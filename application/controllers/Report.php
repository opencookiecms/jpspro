<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller{

  function Report_MRK_01()
  {

    $this->load->view('print/mrk01_report');

  }

}
