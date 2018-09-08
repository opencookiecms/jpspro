<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProjekMdl extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function Createstepone($data)
  {
    $this->load->helper('url');
    //$this->db->insert('dp_projek',$data);
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

  public function Createsteptwo($data)
  {
    	$this->db->insert('dp_projekinfo', $data);
      return TRUE;
  }

  public function Createstepthree($data)
  {
    $this->db->insert('dp_gps', $data);
    return TRUE;
  }

}
