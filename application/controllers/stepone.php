<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StepOne extends CI_Controller{


  public function __construct() {

    parent::__construct();
    $this->load->model('stepone_model');
    $this->load->helper(array('form', 'url'));
  }  

  public function index()
  {
    $this->load->view('stepone');
  }

  public function stepone()
  {
    $save = array(
              'id' => $this->input->post('id'),
              'nosebut' => $this->input->post('df_nosebutharga'),
              'tajukprojek' => $this->input->post('df_tajuk'),
              'tarikhmohon' => $this->input->post('df_tarikmohon'),
              'jenissebut' => $this->input->post('df_jsebutharga')
              );

    $this->stepone_model->saveStepone($save);
    redirect('stepone/index');
  }

}
