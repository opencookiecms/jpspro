<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Record_model extends CI_Model{

  public function __construct()
  {
    $this->load->database();
  }


  public function getdetail()
  {
    $this->load->helper('url');

    $this->db->select('*');
    $this->db->from('dp_projek');
    $this->db->join('dp_projekinfo', 'dp_projekinfo.dp_id = dp_projek.projek_id');
    $this->db->join('mrk_satu','mrk_satu.mrk_nokontrak = dp_projek.df_nosebutharga','left');
    $this->db->join('mrk_laporansiap','mrk_laporansiap.lskmrksatuid = mrk_satu.mrksatuid ','left' );
    $this->db->join('mrk_dua','mrk_dua.mrksatu_id = mrk_satu.mrksatuid ','left' );
    $this->db->join('mrk_perakuansiap','mrk_perakuansiap.pskmrksatuid = mrk_satu.mrksatuid ','left' );
    $this->db->join('mrk_perakuansiapbaikicacat','mrk_perakuansiapbaikicacat.mrkid_id =mrk_satu.mrksatuid ','left');
    $this->db->join('mrk_jaminanbank','mrk_jaminanbank.js_mrkid=mrk_satu.mrksatuid','left');
    $this->db->join('mrk_ppwjp','mrk_ppwjp.ppwjp_mrkid=mrk_satu.mrksatuid','left');
    $this->db->join('mrk_suratmrk', 'mrk_suratmrk.s_mrkid=mrk_satu.mrksatuid','left');
    $this->db->join('mrk_suratkhas', 'mrk_suratkhas.skhas_mrkid=mrk_satu.mrksatuid','left');
    $this->db->join('mrk_suratwjp', 'mrk_suratwjp.swjp_mrkid=mrk_satu.mrksatuid','left');
    $this->db->join('kos_projek', 'kos_projek.kos_nosebut=mrk_satu.mrk_nokontrak','left');


    $query = $this->db->get();

    return $query->result();

  }

  public function gettotalbelanja()
  {
    $this->db->select('SUM(kos_belanja) AS totalbelanha');
    $this->db->from('kos_projek');

    $query = $this->db->get();

    return $query->result();
  }

  public function gettotalwaran()
  {
    $this->db->select('SUM(df_bakiperuntukan) AS totalwaran');
    $this->db->from('dp_projekinfo');

    $query = $this->db->get();

    return $query->result();
  }


  public function gettotalkosprojek()
  {
    $this->db->select('SUM(kos_tanggung) AS totalkos');
    $this->db->from('kos_projek');

    $query = $this->db->get();

    return $query->result();
  }






  
  public function getmrksatu($ifuser="")
  {
    $this->load->helper('url');

    if($ifuser)
    {
      $this->db->select('*');
      $this->db->from('mrk_satu');
      $this->db->join('dp_projekinfo', 'dp_projekinfo.df_kodvot = mrk_satu.mrks_kodvot','left');
      $this->db->join('dp_projek','dp_projek.projek_id = dp_projekinfo.dp_id','left'); 
      $this->db->where('dp_projekinfo.df_penolong',$ifuser);
    }
    else
    {
      $this->db->select('*');
      $this->db->from('mrk_satu');
      $this->db->join('dp_projekinfo', 'dp_projekinfo.df_kodvot = mrk_satu.mrks_kodvot','left');
      $this->db->join('dp_projek','dp_projek.projek_id = dp_projekinfo.dp_id','left');
    }
      $query = $this->db->get();
      return $query->result();
  }

  public function getmrkdua()
  {
    $this->load->helper('url');
    
    $this->db->select('*');
    $this->db->from('mrk_dua');
    $this->db->join('dp_projekinfo','dp_projekinfo.df_kodvot = mrk_dua.mrk2_kodvots','left');
    $this->db->join('dp_projek','dp_projek.projek_id = dp_projekinfo.dp_id','left');

    $query = $this->db->get();
    return $query->result();
  }

  public function getlsk()
  {
    $this->load->helper('url');
    
    $this->db->select('*');
    $this->db->from('mrk_laporansiap');
    $this->db->join('dp_projekinfo','dp_projekinfo.df_kodvot = mrk_laporansiap.lks_kodvots','left');
    $this->db->join('dp_projek','dp_projek.projek_id = dp_projekinfo.dp_id','left');

    $query = $this->db->get();
    return $query->result();
  }

  public function getmrktiga()
  {
    $this->load->helper('url');
    
    $this->db->select('*');
    $this->db->from('mrk_tiga');
    $this->db->join('dp_projekinfo','dp_projekinfo.df_kodvot = mrk_tiga.mrktiga_kodvots','left');
    $this->db->join('dp_projek','dp_projek.projek_id = dp_projekinfo.dp_id','left');

    $query = $this->db->get();
    return $query->result();
  }

  public function getpsk()
  {
    $this->load->helper('url');
    
    $this->db->select('*');
    $this->db->from('mrk_perakuansiap');
    $this->db->join('dp_projekinfo','dp_projekinfo.df_kodvot = mrk_perakuansiap.psk_kodvots','left');
    $this->db->join('dp_projek','dp_projek.projek_id = dp_projekinfo.dp_id','left');

    $query = $this->db->get();
    return $query->result();
  }

  public function getss()
  {
    $this->load->helper('url');
    
    $this->db->select('*');
    $this->db->from('mrk_ss');
    $this->db->join('dp_projekinfo','dp_projekinfo.df_kodvot = mrk_ss.ss_kodvot','left');
    $this->db->join('dp_projek','dp_projek.projek_id = dp_projekinfo.dp_id','left');

    $query = $this->db->get();
    return $query->result();
  }

  public function getpsmk()
  {
    $this->load->helper('url');
    
    $this->db->select('*');
    $this->db->from('mrk_perakuansiapbaikicacat');
    $this->db->join('dp_projekinfo','dp_projekinfo.df_kodvot = mrk_perakuansiapbaikicacat.psmk_kodvots','left');
    $this->db->join('dp_projek','dp_projek.projek_id = dp_projekinfo.dp_id','left');

    $query = $this->db->get();
    return $query->result();
  }

  public function getjb()
  {
    $this->load->helper('url');
    
    $this->db->select('*');
    $this->db->from('mrk_jaminanbank');
    $this->db->join('dp_projekinfo','dp_projekinfo.df_kodvot = mrk_jaminanbank.js_kodvot','left');
    $this->db->join('dp_projek','dp_projek.projek_id = dp_projekinfo.dp_id','left');

    $query = $this->db->get();
    return $query->result();
  }

  public function getppwjp()
  {
     $this->load->helper('url');
    
    $this->db->select('*');
    $this->db->from('mrk_ppwjp');
    $this->db->join('dp_projekinfo','dp_projekinfo.df_kodvot = mrk_ppwjp.ppwjp_kodvot','left');
    $this->db->join('dp_projek','dp_projek.projek_id = dp_projekinfo.dp_id','left');

    $query = $this->db->get();
    return $query->result();
  }

  public function getsuratmrk()
  {
    $this->load->helper('url');
    
    $this->db->select('*');
    $this->db->from('mrk_suratmrk');
    $this->db->join('dp_projekinfo','dp_projekinfo.df_kodvot = mrk_suratmrk.s_kodvot','left');
    $this->db->join('dp_projek','dp_projek.projek_id = dp_projekinfo.dp_id','left');

    $query = $this->db->get();
    return $query->result();
  }

  public function getsuratkhas()
  { 
    $this->load->helper('url');
    
    $this->db->select('*');
    $this->db->from('mrk_suratkhas');
    $this->db->join('dp_projekinfo','dp_projekinfo.df_kodvot = mrk_suratkhas.skhas_kodvot','left');
    $this->db->join('dp_projek','dp_projek.projek_id = dp_projekinfo.dp_id','left');

    $query = $this->db->get();
    return $query->result();
  }

  public function getsuratwjp()
  {
     $this->load->helper('url');
    
    $this->db->select('*');
    $this->db->from('mrk_suratwjp');
    $this->db->join('dp_projekinfo','dp_projekinfo.df_kodvot = mrk_suratwjp.swjp_kodvot','left');
    $this->db->join('dp_projek','dp_projek.projek_id = dp_projekinfo.dp_id','left');

    $query = $this->db->get();
    return $query->result();
  }



}
