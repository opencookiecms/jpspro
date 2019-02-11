<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_model extends CI_Model{

  public function __construct()
  {
     parent::__construct();
     $this->load->database();

  }



  public function addUserSetting()
  {
    $this->load->helper('url');

    $keypeople = $this->input->post("peoplename");

    $data = array(
      'p_names' => $keypeople
    );

    return $this->db->insert('mrk_keypeople',$data);
  }

  public function sloganSetting($data, $update)
  {
    $this->load->helper('url');

    $df_projekid = $this->input->post('slogan');


    $data = array(
      'set_slogan' => $df_daerah
      );


      $this->db->where('set_id', $update);

      $this->db->update('mrk_slogan', $data);
  }

  public function get_Datasetting()
  {
    $this->db->select('*');
    $this->db->from('mrk_keypeople');
    $this->db->order_by('p_id');
    $query = $this->db->get();
    return $query->result();
  }

  public function get_register()
  {
    $this->load->helper('url');

    $nama = $this->input->post('nama');
    $jawatan = $this->input->post('jawatan');
    $email = $this->input->post('email');
    $password = $this->input->post('pass');

    $data = array(
      'jps_name' => $nama,
      'jps_email'=> $email,
      'jps_password'=> md5($password),
      'jps_position'=> $jawatan
    );

    return $this->db->insert('jps_users',$data);
  }

}
