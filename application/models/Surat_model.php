<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_model extends CI_Model{

  public function __construct()
  {
     parent::__construct();

  }

  public function create_suratmrk()
  {
  	$this->load->helper('url');

  	$mrk_rujuktuan = $this->input->post('rujuktuan');
  	$mrk_tarikhtuan = $this->input->post('tarikhtuan');
  	$mrk_rujukkami = $this->input->post('rujukkami');
  	$mrk_jenisborang = $this->input->post('mrk');
  	$mrk_namakon = $this->input->post('namakon');
  	$mrk_nokon = $this->input->post('nokon');
  	$mrk_noinden = $this->input->post('noinden');
  	$mrk_pegawaikuasa = $this->input->post('pegawaikuasa');
  	$mrk_nosebutharga = $this->input->post('nosebutharga');
  	$mrk_jawatanpp = $this->input->post('jawatan');

  	$data = array(
  		'mrk_rujuktuan' => $mrk_rujuktuan,
  		'mrk_tarikhtuan' => $mrk_tarikhtuan,
  		'mrk_rujukkami' => $mrk_rujukkami,
  		'mrk_jenisborang' => $mrk_jenisborang,
  		'mrk_namakon' => $mrk_namakon,
  		'mrk_nokon' => $mrk_nokon,
  		'mrk_noinden' => $mrk_noinden,
  		'mrk_pegawaikuasa' => $mrk_pegawaikuasa,
  		'mrk_nosebutharga' => $mrk_nosebutharga,
  		'mrk_jawatanpp' => $mrk_jawatanpp
  		);

  	return $this->db->insert('mrk_suratmrk', $data);
  }

  public function create_suratkebenaran()
  {
  	$this->load->helper('url');

  	$mrk_rujuktuan = $this->input->post('rujuktuan');
  	$mrk_rujukkami = $this->input->post('rujukkami');
  	$mrk_namakon = $this->input->post('namakon');
  	$mrk_nosebutharga = $this->input->post('nosebutharga');
  	$mrk_tajukkerja = $this->input->post('tajukprojek');
  	$mrk_gred = $this->input->post('gred');
  	$mrk_kategori = $this->input->post('kategori');
  	$mrk_khusus = $this->input->post('khusus');
  	$mrk_pegawaikuasa = $this->input->post('pegawaikuasa');
  	$mrk_jawatanpp = $this->input->post('jawatan');

  	$data = array(
  		'mrk_rujuktuan' => $mrk_rujuktuan,
  		'mrk_rujukkami' => $mrk_rujukkami,
  		'mrk_namakon' => $mrk_namakon,
  		'mrk_nosebutharga' => $mrk_nosebutharga,
  		'mrk_tajukkerja' => $mrk_tajukkerja,
  		'mrk_gred' => $mrk_gred,
  		'mrk_kategori' => $mrk_kategori,
  		'mrk_khusus' => $mrk_khusus,
  		'mrk_pegawaikuasa' => $mrk_pegawaikuasa,
  		'mrk_jawatanpp' => $mrk_jawatanpp
  		);

  	return $this->db->insert('mrk_suratkhas', $data);
  }

  public function create_suratwjp()
  {
  	$this->load->helper('url');

  	$mrk_kepada = $this->input->post('kepada');
  	$mrk_rujuktuan = $this->input->post('rujuktuan');
  	$mrk_alamat = $this->input->post('alamat');
  	$mrk_rujukkami = $this->input->post('rujukkami');
  	$mrk_namakon = $this->input->post('namakon');
  	$mrk_nokon = $this->input->post('nokon');
  	$mrk_melalui = $this->input->post('melalui');
  	$mrk_wangjamin = $this->input->post('wangjamin');
  	$mrk_alamatlalu = $this->input->post('alamat1');
  	$mrk_pegawaikuasa = $this->input->post('pegawaikuasa');
  	$mrk_jawatanpp = $this->input->post('jawatan');

  	$data = array(
  		'mrk_kepada' => $mrk_kepada,
  		'mrk_rujuktuan' => $mrk_rujuktuan,
  		'mrk_alamat' => $mrk_alamat,
  		'mrk_rujukkami' => $mrk_rujukkami,
  		'mrk_namakon' => $mrk_namakon,
  		'mrk_nokon' => $mrk_nokon,
  		'mrk_melalui' => $mrk_melalui,
  		'mrk_wangjamin' => $mrk_wangjamin,
  		'mrk_alamatlalu' => $mrk_alamatlalu,
  		'mrk_pegawaikuasa' => $mrk_pegawaikuasa,
  		'mrk_jawatanpp' => $mrk_jawatanpp
  		);

  	return $this->db->insert('mrk_suratwjp', $data);
  }




}
