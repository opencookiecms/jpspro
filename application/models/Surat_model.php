<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_model extends CI_Model{

  public function __construct()
  {
     parent::__construct();
     $this->load->database();

  }

  public function create_suratmrk()
  {
  	$this->load->helper('url');

  	$s_rujuktuan = $this->input->post('rujuktuan');
  	$s_tarikhtuan = $this->input->post('tarikhtuan');
  	$s_jenisborang = $this->input->post('mrk');
  	$s_noinden = $this->input->post('noinden');
  	$s_pegawaikuasa = $this->input->post('pegawaikuasa');
  	$s_jawatanpp = $this->input->post('jawatan');
    $s_mrkid = $this->input->post('hiddenid');
    $s_kodvot = $this->input->post('kodvot');

  	$data = array(
  		's_rujuktuan' => $s_rujuktuan,
      's_tarikhtuan' => $s_tarikhtuan,
      's_namarujukan'=>$this->input->post('namarujukan'),
      's_alamatrujukan'=>$this->input->post('alamatrujukan'),
  		's_jenisborang' => $s_jenisborang,
  		's_noinden' => $s_noinden,
  		's_pegawaikuasa' => $s_pegawaikuasa,
  		's_jawatanpp' => $s_jawatanpp,
      's_mrkid' => $s_mrkid,
      's_kodvot'=> $s_kodvot
  		);

  	return $this->db->insert('mrk_suratmrk', $data);
  }

  public function create_suratkebenaran()
  {
  	$this->load->helper('url');

  	$skhas_rujuktuan = $this->input->post('rujuktuan');
  	$skhas_pegawaikuasa = $this->input->post('pegawaikuasa');
  	$skhas_jawatanpp = $this->input->post('jawatan');
    $skhas_inden = $this->input->post('noinden');
    $skhas_kodvot = $this->input->post('kodvot');
    $skhas_mrkid = $this->input->post('hiddenid');

  	$data = array(
      'skhas_rujuktuan' => $skhas_rujuktuan,
      'skhas_namarujukan'=>$this->input->post('namarujukan'),
      'skhas_alamatrujukan'=>$this->input->post('alamatrujukan'),
  		'skhas_pegawaikuasa' => $skhas_pegawaikuasa,
  		'skhas_jawatanpp' => $skhas_jawatanpp,
      'skhas_inden' => $skhas_inden,
      'skhas_kodvot'=> $skhas_kodvot,
      'skhas_mrkid' => $skhas_mrkid
  		);

  	return $this->db->insert('mrk_suratkhas', $data);
  }

  public function create_suratwjp()
  {
  	$this->load->helper('url');

  	$swjp_kepada = $this->input->post('kepada');
  	$swjp_rujuktuan = $this->input->post('rujuktuan');
  	$swjp_alamat = $this->input->post('alamat');
  	$swjp_melalui = $this->input->post('melalui');
  	$swjp_wangjamin = $this->input->post('wangjaminan');
  	$swjp_alamatlalu = $this->input->post('alamat1');
  	$swjp_pegawaikuasa = $this->input->post('pegawaikuasa');
  	$swjp_jawatanpp = $this->input->post('jawatan');
    $swjp_inden = $this->input->post('noinden');
    $swjp_kodvot = $this->input->post('kodvot');
    $swjp_mrkid = $this->input->post('hiddenid');

  	$data = array(
  		'swjp_kepada' => $swjp_kepada,
  		'swjp_rujuktuan' => $swjp_rujuktuan,
  		'swjp_alamat' => $swjp_alamat,
  		'swjp_melalui' => $swjp_melalui,
  		'swjp_wangjamin' => $swjp_wangjamin,
  		'swjp_alamatlalu' => $swjp_alamatlalu,
  		'swjp_pegawaikuasa' => $swjp_pegawaikuasa,
  		'swjp_jawatanpp' => $swjp_jawatanpp,
      'swjp_inden' => $swjp_inden,
      'swjp_kodvot'=> $swjp_kodvot,
      'swjp_mrkid'=> $swjp_mrkid
  		);

  	return $this->db->insert('mrk_suratwjp', $data);
  }
////////////////////////////////////////////////Load database//////////////////////////////////////////////////////////////////////////////////
  public function get_projectalldetail($id)
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


    $this->db->where('dp_projek.projek_id', $id);
    $query = $this->db->get();

    return $query->result();
  }

  public function get_projectalldetailKhas($id)
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



    $this->db->where('dp_projek.projek_id', $id);
    $query = $this->db->get();

    return $query->result();
  }

  public function get_projectalldetailSuratWJP($id)
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



    $this->db->where('dp_projek.projek_id', $id);
    $query = $this->db->get();

    return $query->result();
  }

  //////////////////////////////////////////////////////////end of load database///////////////////////////////////////////////////////////////////
  ///////////////////////////////////Update section goes here/////////////////////////////////////////////////////////////////////////
  public function SuratMRKUpdate($data, $update)
  {

    $this->load->helper('url');

    $s_rujuktuan = $this->input->post('rujuktuan');
    $s_tarikhtuan = $this->input->post('tarikhtuan');
    $s_jenisborang = $this->input->post('mrk');
    $s_noinden = $this->input->post('noinden');
    $s_pegawaikuasa = $this->input->post('pegawaikuasa');
    $s_jawatanpp = $this->input->post('jawatan');
    $s_mrkid = $this->input->post('hiddenid');
    $s_kodvot = $this->input->post('kodvot');

    $data = array(
      's_rujuktuan' => $s_rujuktuan,
      's_tarikhtuan' => $s_tarikhtuan,
      's_namarujukan'=>$this->input->post('namarujukan'),
      's_alamatrujukan'=>$this->input->post('alamatrujukan'),
      's_jenisborang' => $s_jenisborang,
      's_noinden' => $s_noinden,
      's_pegawaikuasa' => $s_pegawaikuasa,
      's_jawatanpp' => $s_jawatanpp,
      's_mrkid' => $s_mrkid,
      's_kodvot'=> $s_kodvot
      );

      $this->db->where('s_mrkid', $update);

      $this->db->update('mrk_suratmrk', $data);

  }

  public function SuratKhasUpdate($data, $update)
  {
    $this->load->helper('url');

    $skhas_rujuktuan = $this->input->post('rujuktuan');
    $skhas_pegawaikuasa = $this->input->post('pegawaikuasa');
    $skhas_jawatanpp = $this->input->post('jawatan');
    $skhas_inden = $this->input->post('noinden');
    $skhas_kodvot = $this->input->post('kodvot');
    $skhas_mrkid = $this->input->post('hiddenid');

    $data = array(
      'skhas_rujuktuan' => $skhas_rujuktuan,
      'skhas_namarujukan'=>$this->input->post('namarujukan'),
      'skhas_alamatrujukan'=>$this->input->post('alamatrujukan'),
      'skhas_pegawaikuasa' => $skhas_pegawaikuasa,
      'skhas_jawatanpp' => $skhas_jawatanpp,
      'skhas_inden' => $skhas_inden,
      'skhas_kodvot'=> $skhas_kodvot,
      'skhas_mrkid' => $skhas_mrkid
      );

      $this->db->where('skhas_mrkid', $update);

      $this->db->update('mrk_suratkhas', $data);
  }

  public function SuratWJPUpdate($data, $update)
  {

    $this->load->helper('url');

    $swjp_kepada = $this->input->post('kepada');
    $swjp_rujuktuan = $this->input->post('rujuktuan');
    $swjp_alamat = $this->input->post('alamat');
    $swjp_melalui = $this->input->post('melalui');
    $swjp_wangjamin = $this->input->post('wangjaminan');
    $swjp_alamatlalu = $this->input->post('alamat1');
    $swjp_pegawaikuasa = $this->input->post('pegawaikuasa');
    $swjp_jawatanpp = $this->input->post('jawatan');
    $swjp_inden = $this->input->post('noinden');
    $swjp_kodvot = $this->input->post('kodvot');
    $swjp_mrkid = $this->input->post('hiddenid');

    $data = array(
      'swjp_kepada' => $swjp_kepada,
      'swjp_rujuktuan' => $swjp_rujuktuan,
      'swjp_alamat' => $swjp_alamat,
      'swjp_melalui' => $swjp_melalui,
      'swjp_wangjamin' => $swjp_wangjamin,
      'swjp_alamatlalu' => $swjp_alamatlalu,
      'swjp_pegawaikuasa' => $swjp_pegawaikuasa,
      'swjp_jawatanpp' => $swjp_jawatanpp,
      'swjp_inden' => $swjp_inden,
      'swjp_kodvot'=> $swjp_kodvot,
      'swjp_mrkid'=> $swjp_mrkid
      );


      $this->db->where('swjp_mrkid', $update);

      $this->db->update('mrk_suratwjp', $data);

  }

  ////////////////////////////////////////////////end of update function////////////////////////////////////////////////////////////////

  public function getLastKodVodSMRK()
  {
    $KodVod = $this->db->select('s_kodvot')->order_by('s_kodvot','desc')->limit(1)->get('mrk_suratmrk')->row('s_kodvot');

    return $KodVod; //return last id
  }

  public function getLastKodVodSKHAS()
  {
    $KodVod = $this->db->select('skhas_kodvot')->order_by('skhas_kodvot','desc')->limit(1)->get('mrk_suratkhas')->row('skhas_kodvot');

    return $KodVod; //return last id
  }

  public function getLastKodVodSWJP()
  {
    $KodVod = $this->db->select('swjp_kodvot')->order_by('swjp_kodvot','desc')->limit(1)->get('mrk_suratwjp')->row('swjp_kodvot');

    return $KodVod; //return last id
  }


  public function get_suratmrkview()
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

        $query = $this->db->get();

       return $query->result();
  }

  public function get_suratkhasview()
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
    $query = $this->db->get();
    return $query->result();
  }

  public function get_suratwjpview()
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
    $query = $this->db->get();
    return $query->result();
  }




}
