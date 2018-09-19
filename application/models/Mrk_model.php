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

  public function getLastid()
  {
    $lastId = $this->db->select('id')->order_by('id','desc')->limit(1)->get('mrk_satu')->row('id');

    return $lastId; //return last id
  }

}
