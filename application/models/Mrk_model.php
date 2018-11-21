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
    $mrk_kodvots = $this->input->post("kodvods");

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
      'mrk_tarikh' => $mrk_tarikh,
      'mrks_kodvot'=>$mrk_kodvots
    );

    return $this->db->insert('mrk_satu', $data);


  }

  public function create_mrkdua()
  {
    $this->load->helper('url');

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
    $mrk_tarikhlaporan = $this->input->post('tarikhlaporan');
    $mrk_satuid = $this->input->post('mrksatuid');
    $mrk_noinden = $this->input->post('noinden');
    $mrk_kodvots = $this->input->post('kodvods');


    $data = array(

      'mrk_majukerja' => $mrk_majukerja,
      'mrk_majukerjasebenar' => $mrk_majukerjasebenar,
      'mrk_bayarmajusemasa' => $mrk_bayarmajusemasa,
      'mrk_jumlahbayarmaju' => $mrk_jumlahbayarmaju,
      'mrk_masalah' => $mrk_masalah,
      'mrk_sebaboleh' => $mrk_sebaboleh ,
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
      'mrk_tarikhlaporan' => $mrk_tarikhlaporan,
      'mrksatu_id' => $mrk_satuid,
      'mrk2_noinden' => $mrk_noinden,
      'mrk2_kodvots'=>$mrk_kodvots
    );

    return $this->db->insert('mrk_dua', $data);
  }





  public function create_laporansiapkerja()
  {
    $this->load->helper('url');
    $mrk_noinden = $this->input->post('noinden');
    $mrk_kodvots = $this->input->post('kodvods');
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
    $mrk_hiddenid = $this->input->post('hiddenid');

    $data = array(

      'lks_kodvots' =>$mrk_kodvots,
      'lsk_noinden' =>$mrk_noinden,


      'lks_hargasebenar' => $mrk_hargasebenar,
      'lsk_lanjutmasa' => $mrk_lanjutmasa,
      'lsk_tarikhkerjasiap' => $mrk_tarikhkerjasiap,
      'lsk_peruntukan' => $mrk_peruntukan,
      'lsk_laporanpegawai' => $mrk_peruntukan,
      'lsk_laporanpegawai' => $mrk_laporanpegawai,
      'lsk_pegawaipenyelia' => $mrk_pegawaipenyelia,
      'lsk_jawatanpen' => $mrk_jawatanpen,
      'lsk_tarikhperakui' => $mrk_tarikhperakui,
      'lsk_ketuabahagian' => $mrk_ketuabahagian,
      'lsk_jawatanketuab' => $mrk_jawatanketuab,
      'lsk_juruteraj' => $mrk_juruteraj,
      'lsk_jawatanjuruteraj' => $mrk_jawatanjuruteraj,
      'lsk_juruterad' => $mrk_juruterad,
      'lsk_jawatanjuruterad' => $mrk_jawatanjuruterad,
      'lsk_perkeso' => $mrk_perkeso,
      'lsk_liability' => $mrk_liability,
      'lskmrksatuid' =>$mrk_hiddenid
    );

    return $this->db->insert('mrk_laporansiap', $data);

  }

  public function create_mrktiga()
  {
    $this->load->helper('url');

    //$mrk_nopkk = $this->input->post('nopkk');
    $mrk_namapemb = $this->input->post('namapem');
    $mrk_alamatpemb = $this->input->post('alamat');
    $mrk_butirkerja = $this->input->post('butiran');


    $data = array(
      'mrk_nopkk' => $mrk_nopkk,
      'mrk_namakon' => $mrk_namakon,
      'mrk_nokontrak' => $mrk_nokontrak

    );

    return $this->db->insert('mrk_tiga', $data);
  }

  public function create_perakusiap()
  {

    $mrk_tarikhsiapsebenar = $this->input->post('tarikhsiapsebenar');
    $mrk_tarikhambikmilik = $this->input->post('tarikhambikmilik');
    $mrk_tarikhmulatanggungcacat = $this->input->post('mulacacat');
    $mrk_tarikhtamattanggungcacat = $this->input->post('cacattamat');
    $mrk_pskmrkid = $this->input->post('hiddenid');
    $mrk_pskinden = $this->input->post('indenno');
    $psk_kodvots = $this->input->post('kodvods');

    $data = array(

      'mrk_tarikhsiapsebenar' => $mrk_tarikhsiapsebenar,
      'mrk_tarikhambikmilik' => $mrk_tarikhambikmilik,
      'mrk_tarikhmulatanggungcacat' => $mrk_tarikhmulatanggungcacat,
      'mrk_tarikhtamattanggungcacat' => $mrk_tarikhtamattanggungcacat,
      'pskmrksatuid'=>$mrk_pskmrkid,
      'mrk_pskinden'=>$mrk_pskinden,
      'psk_kodvots' =>$psk_kodvots
    );

    return $this->db->insert('mrk_perakuansiap', $data);
  }


  public function create_ss()
  {
    $ss_chk1 = $this->input->post('chk1');
    $ss_chk2 = $this->input->post('chk2');
    $ss_chk3 = $this->input->post('chk3');
    $ss_chk4 = $this->input->post('chk4');
    $ss_chk5 = $this->input->post('chk5');
    $ss_chk6 = $this->input->post('chk6');
    $ss_chk7 = $this->input->post('chk7');
    $ss_chk8 = $this->input->post('chk8');
    $ss_chk9 = $this->input->post('chk9');
    $ss_chk10 = $this->input->post('chk10');
    $ss_chk11 = $this->input->post('chk11');
    $ss_chk12 = $this->input->post('chk12');
    $ss_chk13 = $this->input->post('chk13');
    $ss_chk14 = $this->input->post('chk14');
    $ss_chk15 = $this->input->post('chk15');
    $ss_chk16 = $this->input->post('chk16');
    $ss_chk17 = $this->input->post('chk17');
    $ss_chk18 = $this->input->post('chk18');

    $data = array(

      'cb1' => $ss_chk1,
      'cb2' => $ss_chk2,
      'cb3' => $ss_chk3,
      'cb4' => $ss_chk4,
      'cb5' => $ss_chk5,
      'cb6' => $ss_chk6,
      'cb7' => $ss_chk7,
      'cb8' => $ss_chk8,
      'cb9' => $ss_chk9,
      'cb10' => $ss_chk10,
      'cb11' => $ss_chk11,
      'cb12' => $ss_chk12,
      'cb13' => $ss_chk13,
      'cb14' => $ss_chk14,
      'cb15' => $ss_chk15,
      'cb16' => $ss_chk16,
      'cb17' => $ss_chk17,
      'cb18' => $ss_chk18


    );

    return $this->db->insert('mrk_ss', $data);
  }

  public function create_siapbaiki()
  {

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


  public function get_rekodview()
  {
    $query = $this->db->get('mrk_satu');
    return $query->result();
  }

  function deleteuser($id)
  {
    $this->load->database();
    $this->db->where('id', $id);
    $this->db->delete();

    return true;
  }



/////////////////////load mrk ///////////////////////////////////////////////////////////////////////////////////////////////////////
          //
  public function get_projectdetailformrk01($id)
  {
    $this->db->select('*');
    $this->db->from('dp_projek');
    $this->db->join('dp_projekinfo', 'dp_projekinfo.dp_id = dp_projek.id');
    $this->db->join('mrk_satu','mrk_satu.mrk_nokontrak = dp_projek.df_nosebutharga','left');


    $this->db->where('dp_projek.id', $id);
    $query = $this->db->get();

    return $query->result();
  }

  public function get_projectdetailformrk02($id)
  {
    $this->db->select('*');
    $this->db->from('dp_projek');
    $this->db->join('dp_projekinfo', 'dp_projekinfo.dp_id = dp_projek.id');
    $this->db->join('mrk_satu','mrk_satu.mrk_nokontrak = dp_projek.df_nosebutharga','left');
    $this->db->join('mrk_dua','mrk_dua.mrksatu_id = mrk_satu.mrksatuid ','left' );


    $this->db->where('dp_projek.id', $id);
    $query = $this->db->get();

    return $query->result();
  }

  public function get_projectdetailforLSK($id)
  {
    $this->db->select('*');
    $this->db->from('dp_projek');
    $this->db->join('dp_projekinfo', 'dp_projekinfo.dp_id = dp_projek.id');
    $this->db->join('mrk_satu','mrk_satu.mrk_nokontrak = dp_projek.df_nosebutharga','left');
    $this->db->join('mrk_laporansiap','mrk_laporansiap.lskmrksatuid = mrk_satu.mrksatuid ','left' );


    $this->db->where('dp_projek.id', $id);
    $query = $this->db->get();

    return $query->result();
  }

  public function get_projectdetailforMRK03($id)
  {
    $this->db->select('*');
    $this->db->from('dp_projek');
    $this->db->join('dp_projekinfo', 'dp_projekinfo.dp_id = dp_projek.id');
    $this->db->join('mrk_satu','mrk_satu.mrk_nokontrak = dp_projek.df_nosebutharga','left');
    $this->db->join('mrk_laporansiap','mrk_laporansiap.lskmrksatuid = mrk_satu.mrksatuid ','left' );
    $this->db->join('mrk_dua','mrk_dua.mrksatu_id = mrk_satu.mrksatuid ','left' );


    $this->db->where('dp_projek.id', $id);
    $query = $this->db->get();

    return $query->result();
  }

  public function get_projectdetailforPSK($id)
  {
    $this->db->select('*');
    $this->db->from('dp_projek');
    $this->db->join('dp_projekinfo', 'dp_projekinfo.dp_id = dp_projek.id');
    $this->db->join('mrk_satu','mrk_satu.mrk_nokontrak = dp_projek.df_nosebutharga','left');
    $this->db->join('mrk_laporansiap','mrk_laporansiap.lskmrksatuid = mrk_satu.mrksatuid ','left' );
    $this->db->join('mrk_dua','mrk_dua.mrksatu_id = mrk_satu.mrksatuid ','left' );
    $this->db->join('mrk_perakuansiap','mrk_perakuansiap.pskmrksatuid = mrk_satu.mrksatuid ','left' );


    $this->db->where('dp_projek.id', $id);
    $query = $this->db->get();

    return $query->result();
  }

  public function get_projectdetailforPSMK($id)
  {
    $this->db->select('*');
    $this->db->from('dp_projek');
    $this->db->join('dp_projekinfo', 'dp_projekinfo.dp_id = dp_projek.id');
    $this->db->join('mrk_satu','mrk_satu.mrk_nokontrak = dp_projek.df_nosebutharga','left');
    $this->db->join('mrk_laporansiap','mrk_laporansiap.lskmrksatuid = mrk_satu.mrksatuid ','left' );
    $this->db->join('mrk_dua','mrk_dua.mrksatu_id = mrk_satu.mrksatuid ','left' );
    $this->db->join('mrk_perakuansiap','mrk_perakuansiap.pskmrksatuid = mrk_satu.mrksatuid ','left' );


    $this->db->where('dp_projek.id', $id);
    $query = $this->db->get();

    return $query->result();
  }


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  public function getLastKodVod()
  {
    $KodVod = $this->db->select('mrks_kodvot')->order_by('mrks_kodvot','desc')->limit(1)->get('mrk_satu')->row('mrks_kodvot');

    return $KodVod; //return last id
  }

  public function getLastKodVodMRK2()
  {
    $KodVod = $this->db->select('mrk2_kodvots')->order_by('mrk2_kodvots','desc')->limit(1)->get('mrk_dua')->row('mrk2_kodvots');

    return $KodVod; //return last id
  }

  public function getLastKodVodLSK()
  {
    $KodVod = $this->db->select('lks_kodvots')->order_by('lks_kodvots','desc')->limit(1)->get('mrk_laporansiap')->row('lks_kodvots');

    return $KodVod; //return last id
  }

  public function getLastKodVodPSK()
  {
    $KodVod = $this->db->select('psk_kodvots')->order_by('psk_kodvots','desc')->limit(1)->get('mrk_perakuansiap')->row('psk_kodvots');

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

  public function mrk02update($data ,$update)
  {

    $this->load->helper('url');
    $mrk_noinden = $this->input->post('noinden');
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
    $mrk_tarikhlaporan = $this->input->post('tarikhlaporan');
    $mrk_satuid = $this->input->post('mrksatuid');



    $data = array(
     'mrk2_noinden' => $mrk_noinden,
      'mrk_majukerja' => $mrk_majukerja,
      'mrk_majukerjasebenar' => $mrk_majukerjasebenar,
      'mrk_bayarmajusemasa' => $mrk_bayarmajusemasa,
      'mrk_jumlahbayarmaju' => $mrk_jumlahbayarmaju,
      'mrk_masalah' => $mrk_masalah,
      'mrk_sebaboleh' => $mrk_sebaboleh,
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
      'mrk_tarikhlaporan' => $mrk_tarikhlaporan,
      'mrksatu_id' => $mrk_satuid
    );

    $this->db->where('mrksatu_id', $update);

    $this->db->update('mrk_dua', $data);

  }

  public function LSKUpdate($data ,$update)
  {
    $this->load->helper('url');

    //$mrk_nopkk = $this->input->post('nopkk');
    //$mrk_namapemb = $this->input->post('namapem');
    //$mrk_alamatpemb = $this->input->post('alamat');
    //$mrk_butirkerja = $this->input->post('butiran');
    //$mrk_nosbtharga = $this->input->post('nosebut');
    //$mrk_nopesanan = $this->input->post('nopesanan');
    //$mrk_noinden = $this->input->post('noinden');
    //$mrk_hargapesanan = $this->input->post('hargapesanan');
    $mrk_hargasebenar = $this->input->post('hargasebenar');
    //$mrk_tarikhmulakerja = $this->input->post('tarikhmula');
  //  $mrk_tarikhkerjatamat = $this->input->post('tarikhtamat');
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
    $mrk_hiddenid = $this->input->post('hiddenid');

    $data = array(
      //'mrk_nopkk' => $mrk_nopkk,
      //'lsk_namapemb' => $mrk_namapemb,
      //'lsk_alamatpemb' => $mrk_alamatpemb,
      //'lsk_butirkerja' => $mrk_butirkerja,
      //'lsk_nosebutharga' => $mrk_nosbtharga,
      //'lsk_noinden' =>   $mrk_noinden,
      //'lsk_nopesanan'=>   $mrk_nopesanan,
      //'lsk_hargapesanan' => $mrk_hargapesanan,
      'lks_hargasebenar' => $mrk_hargasebenar,
      //'lsk_tarikhmulakerja' => $mrk_tarikhmulakerja,
      //'lsk_tarikhkerjatamat' => $mrk_tarikhkerjatamat,
      'lsk_lanjutmasa' => $mrk_lanjutmasa,
      'lsk_tarikhkerjasiap' => $mrk_tarikhkerjasiap,
      'lsk_peruntukan' => $mrk_peruntukan,
      'lsk_laporanpegawai' => $mrk_peruntukan,
      'lsk_laporanpegawai' => $mrk_laporanpegawai,
      'lsk_pegawaipenyelia' => $mrk_pegawaipenyelia,
      'lsk_jawatanpen' => $mrk_jawatanpen,
      'lsk_tarikhperakui' => $mrk_tarikhperakui,
      'lsk_ketuabahagian' => $mrk_ketuabahagian,
      'lsk_jawatanketuab' => $mrk_jawatanketuab,
      'lsk_juruteraj' => $mrk_juruteraj,
      'lsk_jawatanjuruteraj' => $mrk_jawatanjuruteraj,
      'lsk_juruterad' => $mrk_juruterad,
      'lsk_jawatanjuruterad' => $mrk_jawatanjuruterad,
      'lsk_perkeso' => $mrk_perkeso,
      'lsk_liability' =>$mrk_liability,
      'lskmrksatuid' =>$mrk_hiddenid

    );

      $this->db->where('lskmrksatuid', $update);

      $this->db->update('mrk_laporansiap', $data);

  }

  public function PSK_Update($data, $update)
  {
    
  }



  ///////////////////////////end of mrk update////////////////////////////////////////////////////////////////////////////////////


}
