<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_model extends CI_Model{

  public function __construct()
  {
     parent::__construct();
     $this->load->database();

  }



  public function setslogan()
  {
    $this->load->helper('url');

    $slogan = $this->input->post("slogan");

    $data = array(
      'set_slogan' => $slogan
    );

    return $this->db->insert('mrk_setting',$data);
  }

  public function delslogan($id)
  {
    $this->load->helper('url');
    //$this->db->
    $this->db->where('set_id', $id);
    $this->db->delete('mrk_setting');
  }

  public function deletePegawai($id)
  {
    $this->load->helper('url');
    //$this->db->
    $this->db->where('p_id', $id);
   $this->db->delete('mrk_keypeople');

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

  public function get_dataslogan()
  {
    $this->db->select('*');
    $this->db->from('mrk_setting');
    $this->db->order_by('set_id');
    $query = $this->db->get();
    return $query->result();
  }

  public function get_Datasetting()
  {
    $this->db->select('*');
    $this->db->from('mrk_keypeople');
    $this->db->order_by('p_id');
    $query = $this->db->get();
    return $query->result();
  }

  public function get_userdatasetting()
  {
    $this->db->select('*');
    $this->db->from('jps_users');
    $this->db->order_by('user_id');
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
    $roles = $this->input->post('roles');

    $data = array(
      'jps_name' => $nama,
      'jps_email'=> $email,
      'jps_password'=> md5($password),
      'jps_position'=> $jawatan,
      'jps_userroles'=>$roles
    );

    return $this->db->insert('jps_users',$data);
  }

  public function get_verify($emaiv,$passv)
  {
    $this->db->select('*');
    $this->db->from('jps_users');
    $this->db->where('jps_email', $emaiv);
    $this->db->where('jps_password', $passv);
    $this->db->limit(1);

    $get_data = $this->db->get();

    if($get_data->num_rows()==1)
    {
      return $get_data->result();
    }
    else
    {
      return false;
    }
  }

  public function getprofiledetails($ss)
  {
    $this->db->select('*');
    $this->db->from('jps_users');
    $this->db->where('jps_email', $ss);
    $query = $this->db->get();

    return $query->result();
  }

}
