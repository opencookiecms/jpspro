<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once dirname(__file__).'/vendor/autoload.php';


class Phpwordlibs
{

  protected $ci;

  public function __construct()
  {
    $this->ci =& get_instance();
  }


}
