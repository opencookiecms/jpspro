<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stepone extends CI_Controller{

  public function index()
  {
    
    $this->load->view('stepone.php', $data);
  }

  public function createStepone()
  {
    $this->load->model('Stepone_model');
    $nosebut = $this->input->post('No Sebutharga');
    $tarikhmohon = $this->input->post('Tarikh Permohonan');
    $jenissebut = $this->input->post('Jenis Sebutharga');
    $tajukprojek = $this->input->post('Tajuk Projek');

    $data = array(
      'No Sebutharga' => $nosebut,
      'Tarikh Permohonan' => $tarikhmohon,
      'Jenis Sebutharga' => $jenissebut,
      'Tajuk Projek' => $tajukprojek,
    );
      
    $this->Stepone_model->process($data);
  }

}
