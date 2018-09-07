<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Insert_stepone extends CI_Controller{

  function __construct() {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('stepone_model');
    $this->load->helper('form');
    $this->load->library('form_validation');
  }

  function index() {
    $data['title'] = 'Langkah Satu';
    $this->load->view('daftar/stepone', $data);
  }

  public function submit()
  {

    $df_nosebutharga = $this->input->post("nosebut");
    $df_tarikmohon = $this->input->post("tarikhmohon");
    $df_jsebutharga = $this->input->post("jenissebut");
    $df_tajuk = $this->input->post("tajukprojek");

    $data = array(
      'df_nosebutharga' => $df_nosebutharga,
      'df_tarikmohon' => $df_tarikmohon,
      'df_jsebutharga' => $df_jsebutharga,
      'df_tajuk' => $df_tajuk
      );

    $this->stepone_model->create($data);

    redirect(base_url('daftar/stepdua/'));          

  }

  public function view_data()
  {

    $data['h']=$this->Stepone_model->getData();
    print_r("<pre>");  
    print_r($data['h']);
    die;
    $this->load->view('projek', $data);
  }
  
}


?>