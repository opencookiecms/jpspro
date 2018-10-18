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

  public function create_laporansiapkerja()
  {
    $this->load->helper('url');

    $mrk_nopkk = $this->input->post('nopkk');
    $mrk_namapemb = $this->input->post('namapem');
    $mrk_alamatpemb = $this->input->post('alamat');
    $mrk_tajukkerja = $this->input->post('butiran');
    $mrk_nokontrak = $this->input->post('nosebut');
    $mrk_noinden = $this->input->post('nopesanan');
    $mrk_hargapesanan = $this->input->post('hargapesanan');
    $mrk_hargasebenar = $this->input->post('hargasebenar');
    $mrk_tarikhmulakerja = $this->input->post('tarikhmula');
    $mrk_tarikhkerjatamat = $this->input->post('tarikhtamat');
    $mrk_lanjutmasa = $this->input->post('tariklanjut');
    $mrk_tarikhkerjasiap = $this->input->post('tarikhkerjasempurna');
    $mrk_peruntukan = $this->input->post('peruntukan');
    $mrk_laporanpegawai = $this->input->post('laporanpegawai');
    $mrk_pegawaipenyelia = $this->input->post('pegawaiselia');
    $mrk_jawatanpen = $this->input->post('jawatan');
    $mrk_tarikhperakui = $this->input->post('tarikhperakui');
    $mrk_ketuabahagian = $this->input->post('ketua');
    $mrk_jawatanketuab = $this->input->post('jawatan1');
    $mrk_juruteraj = $this->input->post('juruj');
    $mrk_jawatanjuruteraj = $this->input->post('jawatan2');
    $mrk_juruterad = $this->input->post('jurudaerah');
    $mrk_jawatanjuruterad = $this->input->post('jawatan3');
    $mrk_perkeso = $this->input->post('perkeso');
    $mrk_liability = $this->input->post('publiability');

    $data = array(
      'mrk_nopkk' => $mrk_nopkk,
      'mrk_namapemb' => $mrk_namapemb,
      'mrk_alamatpemb' => $mrk_alamatpemb,
      'mrk_tajukkerja' => $mrk_tajukkerja,
      'mrk_nokontrak' => $mrk_nokontrak,
      'mrk_noinden'=> $mrk_noinden,
      'mrk_hargapesanan' => $mrk_hargapesanan,
      'mrk_hargasebenar' => $mrk_hargasebenar,
      'mrk_tarikhmulakerja' => $mrk_tarikhmulakerja,
      'mrk_tarikhkerjatamat' => $mrk_tarikhkerjatamat,
      'mrk_lanjutmasa' => $mrk_lanjutmasa,
      'mrk_tarikhkerjasiap' => $mrk_tarikhkerjasiap,
      'mrk_peruntukan' => $mrk_peruntukan,
      'mrk_laporanpegawai' => $mrk_peruntukan,
      'mrk_laporanpegawai' => $mrk_laporanpegawai,
      'mrk_pegawaipenyelia' => $mrk_pegawaipenyelia,
      'mrk_jawatanpen' => $mrk_jawatanpen,
      'mrk_tarikhperakui' => $mrk_tarikhperakui,
      'mrk_ketuabahagian' => $mrk_ketuabahagian,
      'mrk_jawatanketuab' => $mrk_jawatanketuab,
      'mrk_juruteraj' => $mrk_juruteraj,
      'mrk_jawatanjuruteraj' => $mrk_jawatanjuruteraj,
      'mrk_juruterad' => $mrk_juruterad,
      'mrk_jawatanjuruterad' => $mrk_jawatanjuruterad,
      'mrk_perkeso' => $mrk_perkeso,
      'mrk_liability' => $mrk_liability
    );

    return $this->db->insert('mrk_laporansiap', $data);

  }

  public function create_mrktiga()
  {
    $mrk_nopkk = $this->input->post('nokontr');
    $mrk_namakon = $this->input->post('namakon');
    $mrk_nokontrak = $this->input->post('nokontrak');
    $mrk_noinden = $this->input->post('noinden');
    $mrk_tajukkerja = $this->input->post('tajukkerjamrk');
    $mrk_tarikhmulakon = $this->input->post('tarikhmulakon');
    $mrk_tarikhjangkasiap = $this->input->post('tarikhjangka');
    $mrk_lanjutmasa = $this->input->post('tariklanjut');
    $mrk_siapsebenar = $this->input->post('tarikhkerjasempurna');
    $mrk_kosprojek = $this->input->post('kosprojek');
    $mrk_kossebenar = $this->input->post('kossebenar');
    $mrk_laddari = $this->input->post('laddari');
    $mrk_ladsehingga = $this->input->post('ladsehingga');
    $mrk_ladsehari = $this->input->post('rmsehari');

    $data = array(
      'mrk_nopkk' => $mrk_nopkk,
      'mrk_namakon' => $mrk_namakon,
      'mrk_nokontrak' => $mrk_nokontrak,
      'mrk_noinden' => $mrk_noinden,
      'mrk_tajukkerja' => $mrk_tajukkerja,
      'mrk_tarikhmulakon' => $mrk_tarikhmulakon,
      'mrk_tarikhjangkasiap' => $mrk_tarikhjangkasiap,
      'mrk_lanjutmasa' => $mrk_lanjutmasa,
      'mrk_siapsebenar' => $mrk_siapsebenar,
      'mrk_kosprojek' => $mrk_kosprojek,
      'mrk_kossebenar' => $mrk_kossebenar,
      'mrk_laddari' => $mrk_laddari,
      'mrk_ladsehingga' => $mrk_ladsehingga,
      'mrk_ladsehari' => $mrk_ladsehari
    );

    return $this->db->insert('mrk_tiga', $data);
  }

  public function create_perakusiap()
  {
    $mrk_namapemb = $this->input->post('namapomb');
    $mrk_alamatpem = $this->input->post('alamat');
    $mrk_failrujuk = $this->input->post('failrujuk');
    $mrk_nosebutharga = $this->input->post('nosebut');
    $mrk_butirankerja = $this->input->post('butirkerja');
    $mrk_tarikhsiapsebenar = $this->input->post('tarikhsiapsebenar');
    $mrk_tarikhambikmilik = $this->input->post('tarikhambikmilik');
    $mrk_tarikhmulatanggungcacat = $this->input->post('mulacacat');
    $mrk_tarikhtamattanggungcacat = $this->input->post('cacattamat');

    $data = array(
      'mrk_namapemb' => $mrk_namapemb,
      'mrk_alamatpem' => $mrk_alamatpem,
      'mrk_failrujuk' => $mrk_failrujuk,
      'mrk_nosebutharga' => $mrk_nosebutharga,
      'mrk_butirankerja' => $mrk_butirankerja,
      'mrk_tarikhsiapsebenar' => $mrk_tarikhsiapsebenar,
      'mrk_tarikhambikmilik' => $mrk_tarikhambikmilik,
      'mrk_tarikhmulatanggungcacat' => $mrk_tarikhmulatanggungcacat,
      'mrk_tarikhtamattanggungcacat' => $mrk_tarikhtamattanggungcacat
    );

    return $this->db->insert('mrk_perakuansiap', $data);
  }

  public function create_siapbaiki()
  {
    $mrk_namapemb = $this->input->post('namapem');
    $mrk_alamatpem = $this->input->post('alamat');
    $mrk_failrujuk = $this->input->post('norujuk');
    $mrk_nokontrak = $this->input->post('nokontrak');
    $mrk_tajukkerja = $this->input->post('tajukkerja');
    $mrk_tarikhmulatanggung = $this->input->post('mulacacat');
    $mrk_tarikhsiapbaikicacat = $this->input->post('cacattamat');
    $mrk_gred = $this->input->post('gred');
    $mrk_kategori = $this->input->post('kategori');
    $mrk_khusus = $this->input->post('khusus');
    $mrk_nowangjaminansatu = $this->input->post('nokewangan');
    $mrk_hargasatu = $this->input->post('harga');
    $mrk_bakiwangjamin = $this->input->post('bakiwangjaminan');
    $mrk_nowangjaminandua = $this->input->post('nokewangan');
    $mrk_hargadua = $this->input->post('harga1');
    $mrk_wangjaminlaksana = $this->input->post('wangjaminan');
    $mrk_tambahbonlaksana = $this->input->post('kosbon');
    $mrk_bakibonlaksana = $this->input->post('bakibon');
    $mrk_pegawaipenguasa = $this->input->post('pegawai');
    $mrk_jawatanpp = $this->input->post('jawatan');

    $data = array(
      'mrk_namapemb' => $mrk_namapemb,
      'mrk_alamatpem' => $mrk_alamatpem,
      'mrk_failrujuk' => $mrk_failrujuk,
      'mrk_nokontrak' => $mrk_nokontrak,
      'mrk_tajukkerja' => $mrk_tajukkerja,
      'mrk_tarikhmulatanggung' => $mrk_tarikhmulatanggung,
      'mrk_tarikhsiapbaikicacat' => $mrk_tarikhsiapbaikicacat,
      'mrk_gred' => $mrk_gred,
      'mrk_kategori' => $mrk_kategori,
      'mrk_khusus' => $mrk_khusus,
      'mrk_nowangjaminandua' => $mrk_nowangjaminansatu,
      'mrk_hargasatu' => $mrk_hargasatu,
      'mrk_bakiwangjamin' => $mrk_bakiwangjamin,
      'mrk_nowangjaminandua' => $mrk_nowangjaminandua,
      'mrk_hargadua' => $mrk_hargadua,
      'mrk_wangjaminlaksana' => $mrk_wangjaminlaksana,
      'mrk_tambahbonlaksana' => $mrk_tambahbonlaksana,
      'mrk_bakibonlaksana' => $mrk_bakibonlaksana,
      'mrk_pegawaipenguasa' => $mrk_pegawai,
      'mrk_jawatanpp' => $mrk_jawatanpp
    );

    return $this->db->insert('mrk_perakuansiapbaikicacat', $data);
  }

  public function create_jaminanbank()
  {
    $mrk_rujukanbank = $this->input->post('rujukbank');
    $mrk_namabank = $this->input->post('namabank');
    $mrk_alamatbank = $this->input->post('alamatbank');
    $mrk_tarikhmulatanggung = $this->input->post('mulatanggung');
    $mrk_tarikhluputtanggung = $this->input->post('luputtanggung');
    $mrk_namajurutera = $this->input->post('namajuru');
    $mrk_jawatanjuru = $this->input->post('jawatan');
    $mrk_namapem = $this->input->post('namaborong');
    $mrk_alamatpem = $this->input->post('alamatborong');

    $data = array(
      'mrk_rujukanbank' => $mrk_rujukanbank,
      'mrk_namabank' => $mrk_namabank,
      'mrk_alamatbank' => $mrk_alamatbank,
      'mrk_tarikhmulatanggung' => $mrk_tarikhmulatanggung,
      'mrk_tarikhluputtanggung' => $mrk_tarikhluputtanggung,
      'mrk_namajurutera' => $mrk_namajurutera,
      'mrk_jawatanjuru' => $mrk_jawatanjuru,
      'mrk_namapem' => $mrk_namapem,
      'mrk_alamatpem' => $mrk_alamatpem
    );

    return $this->db->insert('mrk_jaminanbank', $data);
  }

  //public function getLastid()
  //{
  //  $lastId = $this->db->select('id')->order_by('id','desc')->limit(1)->get('mrk_satu')->row('id');
  //
  //  return $lastId; //return last id
  //}

  public function get_rekodview()
  {
    $query = $this->db->get('mrk_satu');
    return $query->result();
  }




  public function get_projectdetailformrk($nosbutharga)
  {
    $this->db->select('*');
    $this->db->from('dp_projek');
    $this->db->join('dp_projekinfo', 'dp_projekinfo.dp_id = dp_projek.id');
    $this->db->join('mrk_satu','mrk_satu.mrk_nokontrak = dp_projek.df_nosebutharga','left');
    $this->db->where('dp_projek.df_nosebutharga', $nosbutharga);
    $query = $this->db->get();

    return $query->result();
  }

  public function getLastKodVod()
  {
    $KodVod = $this->db->select('mrk_noinden')->order_by('mrk_noinden','desc')->limit(1)->get('mrk_satu')->row('mrk_noinden');

    return $KodVod; //return last id
  }


  /////////////////////////////////////////mrk update/////////////////////////////////////////////////////////////////////////////

  public function mrk01update($data ,$update)
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

        $this->db->where('mrk_nokontrak', $update);

        $this->db->update('mrk_satu', $data);
  }







  ///////////////////////////end of mrk update////////////////////////////////////////////////////////////////////////////////////


}
