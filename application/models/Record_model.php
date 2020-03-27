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
    $this->db->order_by('dp_projekinfo.df_kodvot');
    $this->db->where('year(dp_projek.df_tarikmohon)','2020');


    $query = $this->db->get();

    return $query->result();

  }


  public function getdetailbyyear($y,$u='')
  {
    $this->load->helper('url');

    if($u)
    {
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
        $this->db->where('year(dp_projek.df_tarikmohon)',$y);
        $this->db->where('dp_projekinfo.df_penolong',$u);
        $this->db->order_by('dp_projekinfo.df_kodvot');
    }
    else
    {
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
        $this->db->where('year(dp_projek.df_tarikmohon)',$y);
        $this->db->order_by('dp_projekinfo.df_kodvot');
    }
   
  
    $query = $this->db->get();

    return $query->result();

  }

  public function gettotalbelanja()
  {
    $this->db->select('SUM(kos_belanja) AS totalbelanha');
    $this->db->from('kos_projek');
    $this->db->like('kos_nosebut','2020');


    $query = $this->db->get();

    return $query->result();
  }

  //filter by years

  public function gettotalbelanjabyyear($y)
  {
    $this->db->select('SUM(kos_belanja) AS totalbelanha');
    $this->db->from('kos_projek');
    $this->db->like('kos_nosebut',$y);

    $query = $this->db->get();

    return $query->result();
  }

  public function gettotalwaran()
  {
    $this->db->select('SUM(df_bakiperuntukan) AS totalwaran');
    $this->db->from('dp_projekinfo');
    $this->db->join('dp_projek', 'dp_projekinfo.dp_id = dp_projek.projek_id');
    $this->db->where('year(dp_projek.df_tarikmohon)','2020');

    $query = $this->db->get();

    return $query->result();
  }

  //filter by years
  public function gettotalwaranbyyear($y)
  {
    $this->db->select('SUM(df_bakiperuntukan) AS totalwaran');
    $this->db->from('dp_projekinfo');
    $this->db->join('dp_projek', 'dp_projekinfo.dp_id = dp_projek.projek_id');
    $this->db->where('year(dp_projek.df_tarikmohon)',$y);

    $query = $this->db->get();

    return $query->result();
  }


  public function gettotalkosprojek()
  {
    $this->db->select('SUM(kos_tanggung) AS totalkos');
    $this->db->from('kos_projek');
    $this->db->like('kos_nosebut','2020');

    $query = $this->db->get();

    return $query->result();
  }

  //filter by years

  public function gettotalkosprojekbyyear($y)
  {
    $this->db->select('SUM(kos_tanggung) AS totalkos');
    $this->db->from('kos_projek');
    $this->db->like('kos_nosebut',$y);

    $query = $this->db->get();

    return $query->result();
  }

  public function gettotalkosprojekkodvot($id)
  {
    $this->db->select('SUM(kos_tanggung) AS totalkos');
    $this->db->from('kos_projek');
    $this->db->where('kos_kodvot',$id);

    $query = $this->db->get();

    return $query->result();
  }

  public function gettotalbelanjakodvot($id)
  {
    $this->db->select('SUM(kos_belanja) AS totalbelanha');
    $this->db->from('kos_projek');
    $this->db->where('kos_kodvot',$id); 
    $query = $this->db->get();

    return $query->result();
  }

  public function gettotalwarankodvot($id)
  {
    $this->db->select('SUM(df_bakiperuntukan) AS totalwaran');
    $this->db->from('dp_projekinfo');
    $this->db->where('df_kodvot',$id);
    //$this->db->where('df_penolong',$x);

    $query = $this->db->get();

    return $query->result();
  }

  public function getdetailkodvot($id)
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
    $this->db->where('dp_projekinfo.df_kodvot',$id); 
    //$this->db->where('dp_projekinfo.df_penolong',$x);

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
      $this->db->join('dp_projek','dp_projek.projek_id = mrk_satu.main_id','left'); 
      $this->db->join('dp_projekinfo', 'dp_projekinfo.dp_id = dp_projek.projek_id','left');
      $this->db->where('dp_projekinfo.df_penolong',$ifuser);
    }
    else
    {
      $this->db->select('*');
      $this->db->from('mrk_satu');
      $this->db->join('dp_projek','dp_projek.projek_id = mrk_satu.main_id','left'); 
      $this->db->join('dp_projekinfo', 'dp_projekinfo.dp_id = dp_projek.projek_id','left');
    }
      $query = $this->db->get();
      return $query->result();
  }

  public function getmrkdua($ifuser="")
  {
    $this->load->helper('url');
    
    if($ifuser)
    {
        $this->db->select('*');
        $this->db->from('mrk_dua');
        $this->db->join('mrk_satu','mrk_satu.main_id = mrk_dua.main_id','left');
        $this->db->join('dp_projek','dp_projek.projek_id= mrk_satu.main_id','left');
        $this->db->join('dp_projekinfo','dp_projek.projek_id = dp_projekinfo.dp_id','left');
        $this->db->where('dp_projekinfo.df_penolong',$ifuser);
  
    }
    else
    {
        $this->db->select('*');
        $this->db->from('mrk_dua');
        $this->db->join('mrk_satu','mrk_satu.main_id = mrk_dua.main_id','left');
        $this->db->join('dp_projek','dp_projek.projek_id= mrk_satu.main_id','left');
        $this->db->join('dp_projekinfo','dp_projek.projek_id = dp_projekinfo.dp_id','left');
    }

 

    $query = $this->db->get();
    return $query->result();
  }

  public function getlsk($ifuser='')
  {
    $this->load->helper('url');
    
   if($ifuser)
    {
        $this->db->select('*');
        $this->db->from('mrk_laporansiap');
        $this->db->join('mrk_satu','mrk_satu.main_id = mrk_laporansiap.main_id','left');
        $this->db->join('dp_projek','dp_projek.projek_id= mrk_satu.main_id','left');
        $this->db->join('dp_projekinfo','dp_projek.projek_id = dp_projekinfo.dp_id','left');
        $this->db->where('dp_projekinfo.df_penolong',$ifuser);
  
    }
    else
    {
        $this->db->select('*');
        $this->db->from('mrk_laporansiap');
        $this->db->join('mrk_satu','mrk_satu.main_id = mrk_laporansiap.main_id','left');
        $this->db->join('dp_projek','dp_projek.projek_id= mrk_satu.main_id','left');
        $this->db->join('dp_projekinfo','dp_projek.projek_id = dp_projekinfo.dp_id','left');
    }

    $query = $this->db->get();
    return $query->result();
  }

  public function getmrktiga($ifuser='')
  {
    $this->load->helper('url');
    
    if($ifuser)
    {
        $this->db->select('*');
        $this->db->from('mrk_tiga');
        $this->db->join('mrk_satu','mrk_satu.main_id = mrk_tiga.main_id','left');
        $this->db->join('dp_projek','dp_projek.projek_id= mrk_satu.main_id','left');
        $this->db->join('dp_projekinfo','dp_projek.projek_id = dp_projekinfo.dp_id','left');
        $this->db->where('dp_projekinfo.df_penolong',$ifuser);
  
    }
    else
    {
        $this->db->select('*');
        $this->db->from('mrk_tiga');
        $this->db->join('mrk_satu','mrk_satu.main_id = mrk_tiga.main_id','left');
        $this->db->join('dp_projek','dp_projek.projek_id= mrk_satu.main_id','left');
        $this->db->join('dp_projekinfo','dp_projek.projek_id = dp_projekinfo.dp_id','left');
    }

    $query = $this->db->get();
    return $query->result();
  }

  public function getpsk($ifuser='')
  {
    $this->load->helper('url');
    
    if($ifuser)
    {
        $this->db->select('*');
        $this->db->from('mrk_perakuansiap');
        $this->db->join('mrk_satu','mrk_satu.main_id = mrk_perakuansiap.main_id','left');
        $this->db->join('dp_projek','dp_projek.projek_id= mrk_satu.main_id','left');
        $this->db->join('dp_projekinfo','dp_projek.projek_id = dp_projekinfo.dp_id','left');
        $this->db->where('dp_projekinfo.df_penolong',$ifuser);
  
    }
    else
    {
        $this->db->select('*');
        $this->db->from('mrk_perakuansiap');
        $this->db->join('mrk_satu','mrk_satu.main_id = mrk_perakuansiap.main_id','left');
        $this->db->join('dp_projek','dp_projek.projek_id= mrk_satu.main_id','left');
        $this->db->join('dp_projekinfo','dp_projek.projek_id = dp_projekinfo.dp_id','left');
    }

    $query = $this->db->get();
    return $query->result();
  }

  public function getss($ifuser)
  {
    $this->load->helper('url');
    
    if($ifuser)
    {
        $this->db->select('*');
        $this->db->from('mrk_ss');
        $this->db->join('mrk_satu','mrk_satu.main_id = mrk_ss.main_id','left');
        $this->db->join('dp_projek','dp_projek.projek_id= mrk_satu.main_id','left');
        $this->db->join('dp_projekinfo','dp_projek.projek_id = dp_projekinfo.dp_id','left');
        $this->db->where('dp_projekinfo.df_penolong',$ifuser);
  
    }
    else
    {
        $this->db->select('*');
        $this->db->from('mrk_ss');
        $this->db->join('mrk_satu','mrk_satu.main_id = mrk_ss.main_id','left');
        $this->db->join('dp_projek','dp_projek.projek_id= mrk_satu.main_id','left');
        $this->db->join('dp_projekinfo','dp_projek.projek_id = dp_projekinfo.dp_id','left');
    }

    $query = $this->db->get();
    return $query->result();
  }

  public function getpsmk($ifuser='')
  {
    $this->load->helper('url');
    
    if($ifuser)
    {
        $this->db->select('*');
        $this->db->from('mrk_perakuansiapbaikicacat');
        $this->db->join('mrk_satu','mrk_satu.main_id = mrk_perakuansiapbaikicacat.main_id','left');
        $this->db->join('dp_projek','dp_projek.projek_id= mrk_satu.main_id','left');
        $this->db->join('dp_projekinfo','dp_projek.projek_id = dp_projekinfo.dp_id','left');
        $this->db->where('dp_projekinfo.df_penolong',$ifuser);
  
    }
    else
    {
        $this->db->select('*');
        $this->db->from('mrk_perakuansiapbaikicacat');
        $this->db->join('mrk_satu','mrk_satu.main_id = mrk_perakuansiapbaikicacat.main_id','left');
        $this->db->join('dp_projek','dp_projek.projek_id= mrk_satu.main_id','left');
        $this->db->join('dp_projekinfo','dp_projek.projek_id = dp_projekinfo.dp_id','left');
    }

    $query = $this->db->get();
    return $query->result();
  }

  public function getjb($ifuser='')
  {
    $this->load->helper('url');
    
    if($ifuser)
    {
        $this->db->select('*');
        $this->db->from('mrk_jaminanbank');
        $this->db->join('mrk_satu','mrk_satu.main_id = mrk_jaminanbank.main_id','left');
        $this->db->join('dp_projek','dp_projek.projek_id= mrk_satu.main_id','left');
        $this->db->join('dp_projekinfo','dp_projek.projek_id = dp_projekinfo.dp_id','left');
        $this->db->where('dp_projekinfo.df_penolong',$ifuser);
  
    }
    else
    {
        $this->db->select('*');
        $this->db->from('mrk_jaminanbank');
        $this->db->join('mrk_satu','mrk_satu.main_id = mrk_jaminanbank.main_id','left');
        $this->db->join('dp_projek','dp_projek.projek_id= mrk_satu.main_id','left');
        $this->db->join('dp_projekinfo','dp_projek.projek_id = dp_projekinfo.dp_id','left');
    }

    $query = $this->db->get();
    return $query->result();
  }

  public function getppwjp($ifuser='')
  {
    
    $this->load->helper('url');
    if($ifuser)
    {
        $this->db->select('*');
        $this->db->from('mrk_ppwjp');
        $this->db->join('mrk_satu','mrk_satu.main_id = mrk_ppwjp.main_id','left');
        $this->db->join('dp_projek','dp_projek.projek_id= mrk_satu.main_id','left');
        $this->db->join('dp_projekinfo','dp_projek.projek_id = dp_projekinfo.dp_id','left');
        $this->db->where('dp_projekinfo.df_penolong',$ifuser);
  
    }
    else
    {
        $this->db->select('*');
        $this->db->from('mrk_ppwjp');
        $this->db->join('mrk_satu','mrk_satu.main_id = mrk_ppwjp.main_id','left');
        $this->db->join('dp_projek','dp_projek.projek_id= mrk_satu.main_id','left');
        $this->db->join('dp_projekinfo','dp_projek.projek_id = dp_projekinfo.dp_id','left');
    }

    $query = $this->db->get();
    return $query->result();
  }

  public function getsuratmrk($ifuser='')
  {
    $this->load->helper('url');
    
    if($ifuser)
    {
        $this->db->select('*');
        $this->db->from('mrk_suratmrk');
        $this->db->join('mrk_satu','mrk_satu.main_id = mrk_suratmrk.main_id','left');
        $this->db->join('dp_projek','dp_projek.projek_id= mrk_satu.main_id','left');
        $this->db->join('dp_projekinfo','dp_projek.projek_id = dp_projekinfo.dp_id','left');
        $this->db->where('dp_projekinfo.df_penolong',$ifuser);
  
    }
    else
    {
        $this->db->select('*');
        $this->db->from('mrk_suratmrk');
        $this->db->join('mrk_satu','mrk_satu.main_id = mrk_suratmrk.main_id','left');
        $this->db->join('dp_projek','dp_projek.projek_id= mrk_satu.main_id','left');
        $this->db->join('dp_projekinfo','dp_projek.projek_id = dp_projekinfo.dp_id','left');
    }
    $query = $this->db->get();
    return $query->result();
  }

  public function getsuratkhas($ifuser='')
  { 
    
   $this->load->helper('url');
    
    if($ifuser)
    {
        $this->db->select('*');
        $this->db->from('mrk_suratkhas');
        $this->db->join('mrk_satu','mrk_satu.main_id = mrk_suratkhas.main_id','left');
        $this->db->join('dp_projek','dp_projek.projek_id= mrk_satu.main_id','left');
        $this->db->join('dp_projekinfo','dp_projek.projek_id = dp_projekinfo.dp_id','left');
        $this->db->where('dp_projekinfo.df_penolong',$ifuser);
  
    }
    else
    {
        $this->db->select('*');
        $this->db->from('mrk_suratkhas');
        $this->db->join('mrk_satu','mrk_satu.main_id = mrk_suratkhas.main_id','left');
        $this->db->join('dp_projek','dp_projek.projek_id= mrk_satu.main_id','left');
        $this->db->join('dp_projekinfo','dp_projek.projek_id = dp_projekinfo.dp_id','left');
    }
    $query = $this->db->get();
    return $query->result();
  }

  public function getsuratwjp($ifuser='')
  {
     $this->load->helper('url');
    
    if($ifuser)
    {
        $this->db->select('*');
        $this->db->from('mrk_suratwjp');
        $this->db->join('mrk_satu','mrk_satu.main_id = mrk_suratwjp.main_id','left');
        $this->db->join('dp_projek','dp_projek.projek_id= mrk_satu.main_id','left');
        $this->db->join('dp_projekinfo','dp_projek.projek_id = dp_projekinfo.dp_id','left');
        $this->db->where('dp_projekinfo.df_penolong',$ifuser);
  
    }
    else
    {
        $this->db->select('*');
        $this->db->from('mrk_suratwjp');
        $this->db->join('mrk_satu','mrk_satu.main_id = mrk_suratwjp.main_id','left');
        $this->db->join('dp_projek','dp_projek.projek_id= mrk_satu.main_id','left');
        $this->db->join('dp_projekinfo','dp_projek.projek_id = dp_projekinfo.dp_id','left');
    }

    $query = $this->db->get();
    return $query->result();
  }
  

  //report user

  public function gettotalkosprojekkodvotu($x)
  {
    $this->db->select('SUM(kos_tanggung) AS totalkos');
    $this->db->from('kos_projek');
    $this->db->where('kos_user',$x);
    $query = $this->db->get();

    return $query->result();
  }

  public function gettotalbelanjakodvotu($x)
  {
    $this->db->select('SUM(kos_belanja) AS totalbelanha');
    $this->db->from('kos_projek');
    $this->db->where('kos_user',$x);
    $query = $this->db->get();

    return $query->result();
  }

  public function gettotalwarankodvotu($x)
  {
    $this->db->select('SUM(df_bakiperuntukan) AS totalwaran');
    $this->db->from('dp_projekinfo');
    $this->db->where('df_penolong',$x);

    $query = $this->db->get();

    return $query->result();
  }

   public function getdetailkodvotu($x)
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
    $this->db->where('dp_projekinfo.df_penolong',$x);

   $query = $this->db->get();

    return $query->result();
  }

  public function count_row_row($id)
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
    $this->db->where('dp_projekinfo.df_kodvot',$id); 
    //$this->db->where('dp_projekinfo.df_penolong',$x);

    $ids = $this->db->get()->num_rows();
    return $ids;
  }

  public function count_row_rows()
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
    //$this->db->where('dp_projekinfo.df_kodvot',$id); 
    //$this->db->where('dp_projekinfo.df_penolong',$x);

    $ids = $this->db->get()->num_rows();
    return $ids;
  }


}
