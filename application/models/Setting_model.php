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

    $user = $this->input->post("peoplename");

    $data = array(
      'p_names' => $user
    );

    return $this->db->insert('mrk_keypeople',$data);
  }

  public function addjawatasetting()
  {
     $this->load->helper('url');

    $data = array(
      'jw_jawatan' => $this->input->post("jawatan")
    );

    return $this->db->insert('mrk_jawatan',$data);
  }



  public function setslogan($id)
  {
    $this->load->helper('url');

    $slogan = $this->input->post("slogan");
    $cogan = $this->input->post("cogan");

    $data = array(
      'set_slogan' => $slogan,
      'cogankata' => $cogan,
      'set_id'=> $id
    );


    $this->db->where('set_id', $id);

    $this->db->update('mrk_setting', $data);
  }

  public function delslogan($id)
  {
    $this->load->helper('url');
    //$this->db->
    $this->db->where('set_id', $id);
    $this->db->delete('mrk_setting');
  }

  public function getcount($user,$r)
  {
   
    if($r = 'user')
    {
         $this->db->select("projek_id, COUNT(*) AS TOTAL, COUNT(IF(df_jsebutharga='Lantikan Terus',1,null)) AS lt, COUNT(IF(df_jsebutharga='Undi',1,null)) AS undi, COUNT(IF(df_jsebutharga='Sebutharga',1,null)) AS sb");
         $this->db->from('dp_projek');
         $this->db->join('dp_projekinfo', 'dp_projekinfo.dp_id = dp_projek.projek_id','right');
         $this->db->where('dp_projekinfo.df_penolong',$user);
    }
    else
    {
         $this->db->select("projek_id, COUNT(*) AS TOTAL, COUNT(IF(df_jsebutharga='Lantikan Terus',1,null)) AS lt, COUNT(IF(df_jsebutharga='Undi',1,null)) AS undi, COUNT(IF(df_jsebutharga='Sebutharga',1,null)) AS sb");
         $this->db->from('dp_projek');
    }
  
    $query = $this->db->get();
    return $query->result();

  }

  public function getjawatan()
  {
    $this->db->select("*");
    $this->db->from('mrk_jawatan');
    $query = $this->db->get();
    return $query->result();

  }


  public function deluser($id)
  {
    $this->load->helper('url');
    //$this->db->
    $this->db->where('user_id', $id);
    $this->db->delete('jps_users');
  }

  public function deletePegawai($id)
  {
    $this->load->helper('url');
    //$this->db->
    $this->db->where('p_id', $id);
   $this->db->delete('mrk_keypeople');

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

  public function get_jsetting()
  {
    $this->db->select('*');
    $this->db->from('mrk_jawatan');
    $this->db->order_by('jw_id');
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

  public function get_userdatasettingbyid($value)
  {

    $this->db->select('*');
    $this->db->from('jps_users');
    $this->db->where('user_id',$value);
    $this->db->order_by('user_id');
    $query = $this->db->get();
    return $query->result();
  }


  public function profileupdate($data, $value)
  {

     $this->db->where('user_id', $value);
     $this->db->update('jps_users', $data);
  }

  public function update_password($value)
  {
    $this->load->helper('url');

    $password = $this->input->post('pass');
    $id = $value;

    $data = array(

      'jps_password'=> md5($password),
      'user_id'=>$id

    );


     $this->db->where('user_id', $value);
     $this->db->update('jps_users', $data);
  }

  public function get_register()
  {
    $this->load->helper('url');

    $nama = $this->input->post('nama');
    $jawatan = $this->input->post('jawatan');
    $email = $this->input->post('email');
    $password = $this->input->post('pass');
    $roles = $this->input->post('roles');
	$userpic = "default.png";

    $data = array(
      'jps_name' => $nama,
      'jps_email'=> $email,
	  'user_pic' =>$userpic,
      'jps_password'=> md5($password),
      'jps_position'=> $jawatan,
      'jps_userroles'=>$roles
    );

    return $this->db->insert('jps_users',$data);
  }


  public function get_registerupdate($id)
  {
    $this->load->helper('url');

    $nama = $this->input->post('nama');
    $email = $this->input->post('email');
    $jawatan = $this->input->post('jawatan');
    $password = $this->input->post('pass');
    $roles = $this->input->post('roles');
    $id = $id;

    $data = array(
      'jps_name' => $nama,
      'jps_email'=> $email,
      'jps_password'=> md5($password),
      'jps_position'=> $jawatan,
      'jps_userroles'=>$roles,
      'user_id' => $id
    );

        $this->db->where('user_id', $id);

       $this->db->update('jps_users', $data);
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

  public function getsungai()
  {
    $this->db->select('*');
    $this->db->from('jps_sungai');
    $query = $this->db->get();

    return $query->result();
  }

  public function getsungaibyid($value)
  {
    $this->db->select('*');
    $this->db->from('jps_sungai');
    $this->db->where('sg_id', $value);
    $query = $this->db->get();

    return $query->result();
  }

  public function delsungai()
  {
    $this->db->select('*');
    $this->db->from('jps_sungai');
    $query = $this->db->get();

    return $query->result();
  }

  public function updatesungai($id)
  {

     $data = array(
      'sg_name'=> $this->input->post("sungainama"),
      'sg_cabang'=> $this->input->post("sungaicabang"),
      'sg_panjang'=> $this->input->post("sungaipanjang"),
      'sg_daerah'=>  $this->input->post("sungaidaerah"),
      'sg_noshet'=>  $this->input->post("sungainoshet"),
      'sg_norujukan'=>  $this->input->post("sungairujukan"),
      'sg_id' => $this->input->post("hiddenid")
    );


        $this->db->where('sg_id', $id);

       $this->db->update('jps_sungai', $data);

  }

  public function get_registersungai()
  {
    $data = array(
      'sg_name'=> $this->input->post("sungainama"),
      'sg_cabang'=> $this->input->post("sungaicabang"),
      'sg_panjang'=> $this->input->post("sungaipanjang"),
      'sg_daerah'=>  $this->input->post("sungaidaerah"),
      'sg_noshet'=>  $this->input->post("sungainoshet"),
      'sg_norujukan'=>  $this->input->post("sungairujukan")
    );

     return $this->db->insert('jps_sungai',$data);
  }

  public function get_kkode()
  {
    $this->db->select('*');
    $this->db->from('mrk_khusus');
    $this->db->order_by('ks_id');
    $query = $this->db->get();
    return $query->result();
  }

  public function addkhususset()
  {
    $this->load->helper('url');

    $data = array(
      'ks_kscode' => $this->input->post("kkode"),
      'ks_ksname' => $this->input->post("kname")
    );

    return $this->db->insert('mrk_khusus',$data);
  }


  public function delkursus($id)
  {
    $this->load->helper('url');
    //$this->db->
    $this->db->where('ks_id', $id);
    $this->db->delete('mrk_kursus');
  }

}
