<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert_stepone extends CI_Controller{

  public function stepsatu() {

    $this->load->view('stepsatu');

  }

  public function submit()
  {
    if (isset($_POST['submit'])) {
      $this->form_validation->set_rules('nosebut', 'No Sebutharga', 'required');
      $this->form_validation->set_rules('tarikhmohon', 'Tarikh Permohonan', 'required');
      $this->form_validation->set_rules('jenissebut', 'Jenis Sebutharga', 'required');
      $this->form_validation->set_rules('tajukprojek', 'Tajuk Projek', 'required');

      if ($this->form_validation->run() == TRUE) {
        echo 'form validated';

        $data = array(
          'nosebut' => $_POST('df_nosebutharga');
          'tarikhmohon' => $_POST('df_tarikmohon');
          'jenissebut' => $_POST('df_jsebutharga');
          'tajukprojek' => $_POST('df_tajuk');
        );
        $this->db->insert('dp_projek', $data);

        $this->session->set_flashdata("Success!");
        redirect("daftar/stepone");
      }
 
    }

    $this->load->view('submit');
  }

}
