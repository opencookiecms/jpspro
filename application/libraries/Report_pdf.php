<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once dirname(__file__).'/tcpdf/tcpdf.php';
class Report_pdf extends TCPDF
{

  protected $pd;
  public function __construct()
  {
    $this->pd =& get_instance();
  }
}
