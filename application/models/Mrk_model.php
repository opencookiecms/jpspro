<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mrk_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();

    //Codeigniter : Write Less Do More
  }

  public function create_mrksatu()
  {
  	
    $this->load->helper('url');

  	$mrk_nopkk = $this->input->post("nopkk");
  	$mrk_gred = $this->input->post("gred");
  	$mrk_namakon = $this->input->post("namakon");
  	$mrk_alamatkon = $this->input->post("alamat");
  	$mrk_nokontrak = $this->input->post("nokon");
  	$mrk_noinden = $this->input->post("noinden");
  	$mrk_tajukkerja = $this->input->post("tajukkerjamrk");
  	$mrk_kategori = $this->input->post("kategori");
  	$mrk_daerah = $this->input->post("daerah");
  	$mrk_negeri = $this->input->post("negeri");
  	$mrk_khusus = $this->input->post("khusus");
  	$mrk_tarikhmulakon = $this->input->post("tarikhmulakon");
  	$mrk_tarikhjangkasiap = $this->input->post("tarikhjangka");
  	$mrk_pegawai = $this->input->post("pegawai");
  	$mrk_jawatan = $this->input->post("jawatan");
  	$mrk_kosprojek = $this->input->post("kosprojek");
  	$mrk_tarikh = $this->input->post("tarikh");

  	$data = array(
  		'mrk_nopkk' => $mrk_nopkk,
  		'mrk_gred' => $mrk_gred,
  		'mrk_namakon' => $mrk_namakon,
  		'mrk_alamatkon' => $mrk_alamatkon,
  		'mrk_nokontrak' => $mrk_nokontrak,
  		'mrk_noinden' => $mrk_noinden,
  		'mrk_tajukkerja' => $mrk_tajukkerja,
  		'mrk_kategori' => $mrk_kategori,
  		'mrk_daerah' => $mrk_daerah,
  		'mrk_negeri' => $mrk_negeri,
  		'mrk_khusus' => $mrk_khusus,
  		'mrk_tarikhmulakon' => $mrk_tarikhmulakon,
  		'mrk_tarikhjangkasiap' => $mrk_tarikhjangkasiap,
  		'mrk_pegawai' => $mrk_pegawai,
  		'mrk_jawatan' => $mrk_jawatan,
  		'mrk_kosprojek' => $mrk_kosprojek,
  		'mrk_tarikh' => $mrk_tarikh
  		);

  	return $this->db->insert('mrk_satu', $data);


  }

  public function create_mrkdua()
  {
    $this->load->helper('url');

    $mrk_nopkk = $this->input->post("nopkk");
    $mrk_namakon = $this->input->post('namakon');
    $mrk_noinden = $this->input->post('noinden');
    $mrk_kosprojek = $this->input->post('kosprojek');
    $mrk_nokontrak = $this->input->post('nokon');
    $mrk_tarikhmulakon = $this->input->post('tarikhmulakon');
    $mrk_tarikhjangkasiap = $this->input->post('tarikhjangka');
    $mrk_tajukkerja = $this->input->post('tajukkerjamrk');
    $mrk_majukerja = $this->input->post('ikutjadual');
    $mrk_majukerjasebenar = $this->input->post('kerjasebenar');
    $mrk_bayarmajusemasa = $this->input->post('bayarmaju');
    $mrk_jumlahbayarmaju = $this->input->post('jumlahbayarmaju');
    $mrk_masalah = $this->input->post('modal');
    $mrk_sebaboleh = $this->input->post('sebab');
    $mrk_lainlain = $this->input->post('lainlain');
    $mrk_lanjutmasa = $this->input->post('masa');
    $mrk_dari = $this->input->post('dari');
    $mrk_sehingga = $this->input->post('sehingga');
    $mrk_disebab = $this->input->post('disebab');
    $mrk_ladsehari = $this->input->post('rm');
    $mrk_laddari = $this->input->post('dari2');
    $mrk_ladsehingga = $this->input->post('sehingga1');
    $mrk_perakukerjataksiap = $this->input->post('tarikhperaku');
    $mrk_projekmansuh = $this->input->post('projekmansuh');
    $mrk_pegawai = $this->input->post('pegawai');
    $mrk_jawatan = $this->input->post('jawatan');
    $mrk_tarikhlaporan = $this->input->post('tarikhlaporan');
  

    $data = array(
      'mrk_nopkk' => $mrk_nopkk,
      'mrk_namakon' => $mrk_namakon,
      'mrk_noinden' => $mrk_noinden,
      'mrk_kosprojek' => $mrk_kosprojek,
      'mrk_nokontrak' => $mrk_nokontrak,
      'mrk_tarikhmulakon' => $mrk_tarikhmulakon,
      'mrk_tarikhjangkasiap' => $mrk_tarikhjangkasiap,
      'mrk_tajukkerja' => $mrk_tajukkerja,
      'mrk_majukerja' => $mrk_majukerja,
      'mrk_majukerjasebenar' => $mrk_majukerjasebenar,
      'mrk_bayarmajusemasa' => $mrk_bayarmajusemasa,
      'mrk_jumlahbayarmaju' => $mrk_jumlahbayarmaju,
      'mrk_masalah' => $mrk_masalah,
      'mrk_sebaboleh' => $mrk_sebabboleh,
      'mrk_lainlain' => $mrk_lainlain,
      'mrk_lanjutmasa' => $mrk_lanjutmasa,
      'mrk_dari' => $mrk_dari,
      'mrk_sehingga' => $mrk_sehingga,
      'mrk_disebab' => $mrk_disebab,
      'mrk_ladsehari' => $mrk_ladsehari,
      'mrk_laddari' => $mrk_laddari,
      'mrk_ladsehingga' => $mrk_ladsehingga,
      'mrk_perakukerjataksiap' => $mrk_perakukerjataksiap,
      'mrk_projekmansuh' => $mrk_projekmansuh,
      'mrk_pegawai' => $mrk_pegawai,
      'mrk_jawatan' => $mrk_jawatan,
      'mrk_tarikhlaporan' => $mrk_tarikhlaporan
      );

    return $this->db->insert('mrk_dua', $data);
  }

  public function getLastid()
  {
    $lastId = $this->db->select('id')->order_by('id','desc')->limit(1)->get('mrk_satu')->row('id');

    return $lastId; //return last id
  }

}
