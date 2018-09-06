<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Insert_steptwo extends CI_Controller{

      function __construct() {
          parent::__construct();
          $this->load->helper('url');
          $this->load->model('steptwo_model');
          $this->load->helper('form');
          $this->load->library('form_validation');
        }

      function index() {
        $data['title'] = 'Langkah Dua';
        $this->load->view('daftar/steptwo', $data);
      }

      public function submit()
      {

          $df_gred = $this->input->post("gred");
          $df_kategori = $this->input->post("kategori");
          $df_khusus = $this->input->post("khusus");
          $df_taraf = $this->input->post("taraf");
          $df_tempohsiap = $this->input->post("tempoh");
          $df_hargadoc = $this->input->post("doc");
          $df_tarikhnotis = $this->input->post("notiskeluar");
          $df_tarikhlawat = $this->input->post("lawattapak");
          $df_tarikhdocmula = $this->input->post("docmula");
          $df_tarikhdocakhir = $this->input->post("docakhir");
          $df_tarikhtutup = $this->input->post("sebuttutup");
          $df_juruterad = $this->input->post("juruterakanan");
          $df_jurutera = $this->input->post("jurutera");
          $df_penolongkanan = $this->input->post("penolongkanan");
          $df_penolong = $this->input->post("penolong");
          $df_kodvot = $this->input->post("vot");
          $df_peruntukan = $this->input->post("peruntukan");
          $df_bakiperuntukan = $this->input->post("baki");

            $data = array(
              'df_gred' => $df_gred,
              'df_kategori' => $df_kategori,
              'df_khusus' => $df_khusus,
              'df_taraf' => $df_taraf,
              'df_tempohsiap' => $df_tempohsiap,
              'df_hargadoc' => $df_hargadoc,
              'df_tarikhnotis' => $df_tarikhnotis,
              'df_tarikhlawat' => $df_tarikhlawat,
              'df_tarikhdocmula' => $df_tarikhdocmula,
              'df_tarikhdocakhir' => $df_tarikhdocakhir,
              'df_tarikhtutup' => $df_tarikhtutup,
              'df_juruterad' => $df_juruterad,
              'df_jurutera' => $df_jurutera,
              'df_penolongkanan' => $df_penolongkanan,
              'df_penolong' => $df_penolong,
              'df_kodvot ' => $df_kodvot,
              'df_peruntukan' => $df_peruntukan,
              'df_bakiperuntukan ' => $df_bakiperuntukan 
            );

            $this->steptwo_model->create($data);

            redirect(base_url('daftar/steptiga/'));          

      }
  
  }


  ?>