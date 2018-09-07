<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Insert_stepthree extends CI_Controller{

      function __construct() {
          parent::__construct();
          $this->load->helper('url');
          $this->load->model('stepthree_model');
          $this->load->helper('form');
          $this->load->library('form_validation');
        }

      function index() {
        $data['title'] = 'Langkah Tiga';
        $this->load->view('daftar/stepthree', $data);
      }

      public function submit()
      {

          $dp_lata = $this->input->post("lata");
          $dp_latb = $this->input->post("latb");
          $dp_latc = $this->input->post("latc");
          $dp_longa= $this->input->post("longa");
          $dp_longb = $this->input->post("longb");
          $dp_longc = $this->input->post("longc");
          $dp_sungai = $this->input->post("sungai");
          $dp_sistem = $this->input->post("sistem");
          $dp_subsistem= $this->input->post("subsistem");
          $dp_komponen = $this->input->post("komponen");
          $dp_dimensi = $this->input->post("dimensi");


            $data = array(
              'dp_lata' => $dp_lata,
              'dp_latb' => $dp_latb,
              'dp_latc' => $dp_latc,
              'dp_longa' => $dp_longa,
              'dp_longb' => $dp_longb,
              'dp_longc' => $dp_longc,
              'dp_sungai' => $dp_sungai,
              'dp_sistem' => $dp_sistem,
              'dp_subsistem' => $dp_subsistem,
              'dp_komponen' => $dp_komponen,
              'dp_dimensi' => $dp_dimensi
            );

            $this->stepthree_model->create($data);

            redirect(base_url('projek/'));          

      }
  
  }


  ?>