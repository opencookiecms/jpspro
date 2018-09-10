<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projek_model extends CI_Model{

  public function __construct()
  {
     $this->load->database();
    //Codeigniter : Write Less Do More
  }

  //insert funtion for step one
  public function create_stepone()

  {

    $this->load->helper('url');

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

      return $this->db->insert('dp_projek', $data);


  }

  //insert funtion for step two
  public function create_steptwo()
  {


    $this->load->helper('url');

    $df_gred = $this->input->post("gred");
    $df_katergori = $this->input->post("kategori");
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
        'df_katergori' => $df_katergori,
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

      return $this->db->insert('dp_projekinfo', $data);

  }

  //insert funtion for step three
  public function create_stepthree()
  {


    $this->load->helper('url');

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

        return $this->db->insert('dp_gps', $data);
  }

  public function get_projekview()
  {
    //this section for view the data
    //create a table
  }





}
