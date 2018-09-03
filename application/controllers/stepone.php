<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stepone extends CI_Controller{


  public function show($id) {
    $this->load->model('stepone_model');
    $dp_projek = $this->stepone_model->saveStepone($id);
    $data['df_nosebutharga'] = $dp_projek['nosebut'];
    $data['df_tarikmohon'] = $dp_projek['tarikhmohon'];
    $data['df_jsebutharga'] = $dp_projek['jenissebut'];
    $data['df_tajuk'] = $dp_projek['tajukprojek'];

    $this->load->view('stepsatu', $data);
  }

  public function __construct() {

    parent::__construct();
    $this->load->model('Stepone_model');
    $this->Stepone_model->function();
    $this->load->helper(array('form', 'url'));
  }

}
