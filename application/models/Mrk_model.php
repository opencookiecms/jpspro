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
      'mrksatu_id' => 0,
      'mrks_kodvot'=>$mrk_kodvots,
      'main_id'=>$this->input->post('main_id')
    );

    return $this->db->insert('mrk_satu', $data);
  }

  public function create_kosprojek()
  {
    $data = array(
      'kos_belanja'=>0, 
      'kos_tanggung'=>$this->input->post("kosprojek"),
      'kos_nosebut'=>$this->input->post("nokon"),
      'kos_kodvot'=>$this->input->post("kodvodss"),
      'kos_user'=>$this->input->post("kosuser")
    );
    return $this->db->insert('kos_projek', $data);
  }

  public function update_kosprojek01($data, $update)
  {
    $data = array(
      'kos_belanja'=>0, 
      'kos_tanggung'=>$this->input->post("kosprojek"),
      'kos_nosebut'=>$this->input->post("nokon"),
      'kos_kodvot'=>$this->input->post("kodvodss")
    
    );
    
    $this->db->where('kos_nosebut', $update);

    $this->db->update('kos_projek', $data);
  }

  public function update_kosprojek02($data, $update)
  {
    $data = array(
      'kos_belanja'=>$this->input->post("hargasebenar"), 
      'kos_tanggung'=>0,
      'kos_nosebut'=>$this->input->post("nosebut")
    );
    
    $this->db->where('kos_nosebut', $update);

    $this->db->update('kos_projek', $data);
  }

  public function create_mrkdua()
  {
    $this->load->helper('url');

    $mrk_majukerja = $this->input->post('ikutjadual');
    $mrk_majukerjasebenar = $this->input->post('kerjasebenar');
    $mrk_bayarmajusemasa = $this->input->post('bayarmaju');
    $mrk_jumlahbayarmaju = $this->input->post('jumlahbayarmaju');
    $mrk_masalah = $this->input->post('kerjasebenarsatu');
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
    $mrk_modal = $this->input->post('chk1');
    $mrk_bahan = $this->input->post('chk2');
    $mrk_pekerja = $this->input->post('chk3');
    $mrk_tapak = $this->input->post('chk4');
    $mrk_cuaca = $this->input->post('chk5');
    $mrk_satuid = $this->input->post('mrksatuid');
    $mrk_noinden = $this->input->post('noinden');
    $mrk_kodvots = $this->input->post('kodvods');
    $mrk_mainid = $this->input->post('hiddenid');


    $data = array(

      'mrk_majukerja' => $mrk_majukerja,
      'mrk_majukerjasebenar' => $mrk_majukerjasebenar,
      'mrk_bayarmajusemasa' => $mrk_bayarmajusemasa,
      'mrk_jumlahbayarmaju' => $mrk_jumlahbayarmaju,
      'mrk_psebenar' => $mrk_masalah,
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
      'mrk_modal' => $mrk_modal,
      'mrk_bahan' =>$mrk_bahan,
      'mrk_pekerja' => $mrk_pekerja,
      'mrk_tapak' =>$mrk_tapak,
      'mrk_cuaca'=>$mrk_cuaca,
      'mrksatu_id' => $mrk_satuid,
      'mrk2_noinden' => $mrk_noinden,
      'mrk2_kodvots'=>$mrk_kodvots,
      'main_id'=>$this->input->post('main_id')
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
      'jenis_insuran' => $this->input->post('jenisi'),
      'insurans_no' => $this->input->post('noi'),
      'jenis_insuran2' => $this->input->post('jenisi2'),
      'insurans_no2' => $this->input->post('noi2'),
      'lskmrksatuid' =>$mrk_hiddenid,
      'main_id'=>$this->input->post('main_id')
    );

    return $this->db->insert('mrk_laporansiap', $data);

  }

  public function create_mrktiga()
  {
    $this->load->helper('url');

    //$mrk_nopkk = $this->input->post('nopkk');
    $mrksatutiga_id = $this->input->post('hiddenid');
    $mrk_tigainden = $this->input->post('noinden');
    $mrktiga_kodvots = $this->input->post('kodvot');
    $tiga_bina = $this->input->post('bina');
    $tiga_tadbir = $this->input->post('tadbir');
    $tiga_kemajuan = $this->input->post('ran');
    $tiga_kerangka = $this->input->post('ka');
    $tiga_kerja = $this->input->post('ker');
    $tiga_kemasan = $this->input->post('mas');
    $tiga_luar = $this->input->post('luar');
    $tiga_kontraktor = $this->input->post('kon');
    $tiga_pegawai = $this->input->post('pegawai');
    $tiga_jawatan = $this->input->post('jawatan');
    $tiga_tarikah = $this->input->post('tarikh');
    $tiga_catat1 =  $this->input->post('catat1');
    $tiga_catat2 =  $this->input->post('catat2');
    $tiga_catat3 =  $this->input->post('catat3');
    $tiga_catat4 =  $this->input->post('catat4');
    $tiga_catat5 =  $this->input->post('catat5');
    $tiga_catat6 = $this->input->post('catat6');
    $tiga_catat7 =  $this->input->post('catat7');
    $tiga_catat8 =  $this->input->post('catat8');
    $ulasan = $this->input->post('ulasanpegawai');



    $data = array(
      'mrksatutiga_id' => $mrksatutiga_id,
      'mrk_tigainden' => $mrk_tigainden,
      'mrktiga_kodvots' => $mrktiga_kodvots,
      'tiga_bina' => $tiga_bina,
      'tiga_tadbir' =>  $tiga_tadbir,
      'tiga_kemajuan' =>$tiga_kemajuan,
      'tiga_kerangka' =>$tiga_kerangka,
      'tiga_kerja' =>$tiga_kerja,
      'tiga_kemasan' =>$tiga_kemasan,
      'tiga_luar' => $tiga_luar,
      'tiga_kontraktor' =>$tiga_kontraktor,
      'tiga_pegawai' =>$tiga_pegawai,
      'tiga_jawatan' =>  $tiga_jawatan,
      'tiga_tarikah' =>  $tiga_tarikah,
      'tiga_catat1'=>  $tiga_catat1,
      'tiga_catat2'=>  $tiga_catat2,
      'tiga_catat3'=>  $tiga_catat3,
      'tiga_catat4'=>  $tiga_catat4,
      'tiga_catat5'=>  $tiga_catat5,
      'tiga_catat6'=>  $tiga_catat6,
      'tiga_catat7'=>  $tiga_catat7,
      'tiga_catat8'=>  $tiga_catat8,
      'mrk_ulasan'=> $ulasan,
      'main_id'=>$this->input->post('main_id')


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
      'psk_kodvots' =>$psk_kodvots,
      'main_id'=>$this->input->post('main_id')
    );

    return $this->db->insert('mrk_perakuansiap', $data);
  }


  public function create_ss()
  {
    //1 value
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
    $ss_inden = $this->input->post('noinden');
    $ss_mrkid = $this->input->post('hiddenid');
    $ss_kodvot = $this->input->post('kodvot');
    $ss_disediakan = $this->input->post('sedia');
    $ss_date = $this->input->post('tarikhsedia');

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
      'cb18' => $ss_chk18,
      'ss_inden' => $ss_inden,
      'ss_mrkid'=>   $ss_mrkid,
      'ss_kodvot' => $ss_kodvot,
      'ss_disediakan' => $ss_disediakan,
      'ss_date' =>  $ss_date,
      'main_id'=>$this->input->post('main_id')


    );

    return $this->db->insert('mrk_ss', $data);
  }

  public function create_siapbaiki()
  {

    $mrk_nowangjaminansatu = $this->input->post('nokewangansatu');
    $mrk_hargasatu = $this->input->post('harga');
    $mrk_bakiwangjamin = $this->input->post('bakiwangjaminan');
    $mrk_nowangjaminandua = $this->input->post('nokewangan');
    $mrk_hargadua = $this->input->post('harga1');
    $mrk_wangjaminlaksana = $this->input->post('wangjaminan');
    $mrk_tambahbonlaksana = $this->input->post('kosbon');
    $mrk_bakibonlaksana = $this->input->post('bakibon');
    $mrk_pegawai = $this->input->post('pegawai');
    $mrk_jawatanpp = $this->input->post('jawatan');
    $mrk_mrkkodvot = $this->input->post('kodvods');
    $mrk_satuid = $this->input->post('mrkid');
    $mrk_noinden = $this->input->post('indenno');

    $data = array(

      'mrk_nowangjaminansatu' => $mrk_nowangjaminansatu,
      'mrk_hargasatu' => $mrk_hargasatu,
      'mrk_bakiwangjamin' => $mrk_bakiwangjamin,
      'mrk_nowangjaminandua' => $mrk_nowangjaminandua,
      'mrk_hargadua' => $mrk_hargadua,
      'mrk_wangjaminlaksana' => $mrk_wangjaminlaksana,
      'mrk_tambahbonlaksana' => $mrk_tambahbonlaksana,
      'mrk_bakibonlaksana' => $mrk_bakibonlaksana,
      'mrk_pegawaipenguasa' => $mrk_pegawai,
      'mrk_jawatanpp' => $mrk_jawatanpp,
      'mrkid_id' => $mrk_satuid,
      'psmk_kodvots' => $mrk_mrkkodvot,
      'psmk_inden' => $mrk_noinden,
      'main_id'=>$this->input->post('main_id')
    );

    return $this->db->insert('mrk_perakuansiapbaikicacat', $data);
  }

  public function create_jaminanbank()
  {
    $mrk_rujukanbank = $this->input->post('rujukbank');
    $mrk_namabank = $this->input->post('namabank');
    $mrk_alamatbank = $this->input->post('alamatbank');
    $alamatsurat = $this->input->post('alamatborongsurat');
    $js_mrkid = $this->input->post('hiddenid');
    $js_kodvot = $this->input->post('kodvot');
    $js_inden = $this->input->post('noinden');


    $data = array(
      'mrk_rujukanbank' => $mrk_rujukanbank,
      'mrk_namabank' => $mrk_namabank,
      'mrk_alamatbank' => $mrk_alamatbank,
      'jb_alamatsurat' =>$alamatsurat,
      'js_mrkid' => $js_mrkid,
      'js_kodvot' => $js_kodvot,
      'js_inden' => $js_inden,
      'main_id'=>$this->input->post('main_id')



    );

    return $this->db->insert('mrk_jaminanbank', $data);
  }

  public function create_ppwjp()
  {
    $ppwjp_rt = $this->input->post('rujuktuan');
    $ppwjp_rk = $this->input->post('rujukkami');
    $ppwjp_namarujukan = $this->input->post('namarujukan');
    $ppwjp_alamatrujukan = $this->input->post('alamatrujukan');
    $ppwjp_kepada = $this->input->post('kepada');
    $ppwjp_alamat = $this->input->post('alamat');
    $ppwjp_kos = $this->input->post('koswjp');
    $ppwjp_pegawai = $this->input->post('pegawaikuasa');
    $ppwjp_jawatan = $this->input->post('jawatan');
    $ppwjp_mrkid = $this->input->post('hiddenid');
    $ppwjp_inden = $this->input->post('indenno');
    $ppwjp_kodvot = $this->input->post('kodvot');

    $data = array(
      'ppwjp_rt' => $ppwjp_rt,
      'ppwjp_rk' => $ppwjp_rk,
      'ppwjp_namarujukan'=> $ppwjp_namarujukan,
      'ppwjp_alamatrujukan' => $ppwjp_alamatrujukan,
      'ppwjp_kepada' => $ppwjp_kepada,
      'ppwjp_alamat' => $ppwjp_alamat,
      'ppwjp_kos' => $ppwjp_kos,
      'ppwjp_pegawai' => $ppwjp_pegawai,
      'ppwjp_jawatan' => $ppwjp_jawatan,
      'ppwjp_mrkid' => $ppwjp_mrkid,
      'ppwjp_inden' => $ppwjp_inden,
      'ppwjp_kodvot' => $ppwjp_kodvot,
      'main_id'=>$this->input->post('main_id')
    );

    return $this->db->insert('mrk_ppwjp', $data);
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

  public function get_allDateMRK()
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

  public function get_projectdetailformrk01($id)
  {
    $this->db->select('*');
    $this->db->from('dp_projek');
    $this->db->join('dp_projekinfo', 'dp_projekinfo.dp_id = dp_projek.projek_id');
    $this->db->join('mrk_satu','mrk_satu.mrk_nokontrak = dp_projek.df_nosebutharga','left');


    $this->db->where('dp_projek.projek_id', $id);
    $query = $this->db->get();

    return $query->result();
  }

  public function get_projectdetailformrk02($id)
  {
    $this->db->select('*');
    $this->db->from('dp_projek');
    $this->db->join('dp_projekinfo', 'dp_projekinfo.dp_id = dp_projek.projek_id');
    $this->db->join('mrk_satu','mrk_satu.mrk_nokontrak = dp_projek.df_nosebutharga','left');
    $this->db->join('mrk_dua','mrk_dua.mrksatu_id = mrk_satu.mrksatuid ','left' );


    $this->db->where('dp_projek.projek_id', $id);
    $query = $this->db->get();

    return $query->result();
  }

  public function get_projectdetailforLSK($id)
  {
    $this->db->select('*');
    $this->db->from('dp_projek');
    $this->db->join('dp_projekinfo', 'dp_projekinfo.dp_id = dp_projek.projek_id');
    $this->db->join('mrk_satu','mrk_satu.mrk_nokontrak = dp_projek.df_nosebutharga','left');
    $this->db->join('mrk_laporansiap','mrk_laporansiap.lskmrksatuid = mrk_satu.mrksatuid ','left' );


    $this->db->where('dp_projek.projek_id', $id);
    $query = $this->db->get();

    return $query->result();
  }

  public function get_projectdetailforMRK03($id)
  {
    $this->db->select('*');
    $this->db->from('dp_projek');
    $this->db->join('dp_projekinfo', 'dp_projekinfo.dp_id = dp_projek.projek_id');
    $this->db->join('mrk_satu','mrk_satu.mrk_nokontrak = dp_projek.df_nosebutharga','left');
    $this->db->join('mrk_laporansiap','mrk_laporansiap.lskmrksatuid = mrk_satu.mrksatuid ','left' );
    $this->db->join('mrk_dua','mrk_dua.mrksatu_id = mrk_satu.mrksatuid ','left' );
    $this->db->join('mrk_tiga','mrk_tiga.mrksatutiga_id = mrk_satu.mrksatuid ','left' );


    $this->db->where('dp_projek.projek_id', $id);
    $query = $this->db->get();

    return $query->result();
  }

  public function get_projectdetailforPSK($id)
  {
    $this->db->select('*');
    $this->db->from('dp_projek');
    $this->db->join('dp_projekinfo', 'dp_projekinfo.dp_id = dp_projek.projek_id');
    $this->db->join('mrk_satu','mrk_satu.mrk_nokontrak = dp_projek.df_nosebutharga','left');
    $this->db->join('mrk_laporansiap','mrk_laporansiap.lskmrksatuid = mrk_satu.mrksatuid ','left' );
    $this->db->join('mrk_dua','mrk_dua.mrksatu_id = mrk_satu.mrksatuid ','left' );
    $this->db->join('mrk_perakuansiap','mrk_perakuansiap.pskmrksatuid = mrk_satu.mrksatuid ','left' );
    $this->db->join('mrk_tiga','mrk_tiga.mrksatutiga_id = mrk_satu.mrksatuid ','left' );


    $this->db->where('dp_projek.projek_id', $id);
    $query = $this->db->get();

    return $query->result();
  }

  public function get_projectdetailforPSMK($id)
  {
    $this->db->select('*');
    $this->db->from('dp_projek');
    $this->db->join('dp_projekinfo', 'dp_projekinfo.dp_id = dp_projek.projek_id');
    $this->db->join('mrk_satu','mrk_satu.mrk_nokontrak = dp_projek.df_nosebutharga','left');
    $this->db->join('mrk_laporansiap','mrk_laporansiap.lskmrksatuid = mrk_satu.mrksatuid ','left' );
    $this->db->join('mrk_dua','mrk_dua.mrksatu_id = mrk_satu.mrksatuid ','left' );
    $this->db->join('mrk_perakuansiap','mrk_perakuansiap.pskmrksatuid = mrk_satu.mrksatuid ','left' );
    $this->db->join('mrk_perakuansiapbaikicacat','mrk_perakuansiapbaikicacat.mrkid_id =mrk_satu.mrksatuid ','left');


    $this->db->where('dp_projek.projek_id', $id);
    $query = $this->db->get();

    return $query->result();
  }

  public function get_projectdetailforJB($id)
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
    $this->db->join('mrk_tiga','mrk_tiga.mrksatutiga_id = mrk_satu.mrksatuid ','left' );



    $this->db->where('dp_projek.projek_id', $id);
    $query = $this->db->get();

    return $query->result();
  }

  public function get_projectdetailforPPWJP($id)
  {
    $this->db->select('*');
    $this->db->from('dp_projek');
    $this->db->join('dp_projekinfo', 'dp_projekinfo.dp_id = dp_projek.projek_id');
    $this->db->join('mrk_satu','mrk_satu.mrk_nokontrak = dp_projek.df_nosebutharga','left');
    $this->db->join('mrk_laporansiap','mrk_laporansiap.lskmrksatuid = mrk_satu.mrksatuid ','left' );
    $this->db->join('mrk_dua','mrk_dua.mrksatu_id = mrk_satu.mrksatuid ','left' );
    $this->db->join('mrk_tiga','mrk_tiga.mrksatutiga_id = mrk_satu.mrksatuid ','left' );
    $this->db->join('mrk_perakuansiap','mrk_perakuansiap.pskmrksatuid = mrk_satu.mrksatuid ','left' );
    $this->db->join('mrk_perakuansiapbaikicacat','mrk_perakuansiapbaikicacat.mrkid_id =mrk_satu.mrksatuid ','left');
    $this->db->join('mrk_jaminanbank','mrk_jaminanbank.js_mrkid=mrk_satu.mrksatuid','left');
    $this->db->join('mrk_ppwjp','mrk_ppwjp.ppwjp_mrkid=mrk_satu.mrksatuid','left');


    $this->db->where('dp_projek.projek_id', $id);
    $query = $this->db->get();

    return $query->result();
  }

  public function get_projectdetailforSS($id)
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
    $this->db->join('mrk_ss','mrk_ss.ss_mrkid=mrk_satu.mrksatuid','left');


    $this->db->where('dp_projek.projek_id', $id);
    $query = $this->db->get();

    return $query->result();
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
    $mrk_masalah = $this->input->post('kerjasebenarsatu');
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
    $mrk_modal = $this->input->post('chk1');
    $mrk_bahan = $this->input->post('chk2');
    $mrk_pekerja = $this->input->post('chk3');
    $mrk_tapak = $this->input->post('chk4');
    $mrk_cuaca = $this->input->post('chk5');



    $data = array(
      'mrk2_noinden' => $mrk_noinden,
      'mrk_majukerja' => $mrk_majukerja,
      'mrk_majukerjasebenar' => $mrk_majukerjasebenar,
      'mrk_bayarmajusemasa' => $mrk_bayarmajusemasa,
      'mrk_jumlahbayarmaju' => $mrk_jumlahbayarmaju,
      'mrk_psebenar' => $mrk_masalah,
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
      'mrk_modal' => $mrk_modal,
      'mrk_bahan' =>$mrk_bahan,
      'mrk_pekerja' => $mrk_pekerja,
      'mrk_tapak' =>$mrk_tapak,
      'mrk_cuaca'=>$mrk_cuaca,
	    'mrk_mainid' => $this->input->post('hiddenid'),
      'mrksatu_id' => $mrk_satuid
	  
    );

    $this->db->where('mrksatu_id', $update);

    $this->db->update('mrk_dua', $data);

  }

  public function LSKUpdate($data ,$update)
  {
    $this->load->helper('url');

    $mrk_hargasebenar = $this->input->post('hargasebenar');
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
 
    $mrk_hiddenid = $this->input->post('hiddenid');

    $data = array(

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
      'jenis_insuran' => $this->input->post('jenisi'),
      'insurans_no' => $this->input->post('noi'),
      'jenis_insuran2' => $this->input->post('jenisi2'),
      'insurans_no2' => $this->input->post('noi2'),
    
      'lskmrksatuid' =>$mrk_hiddenid

    );

    $this->db->where('lskmrksatuid', $update);

    $this->db->update('mrk_laporansiap', $data);

  }

  public function PSKUpdate($data, $update)
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

    $this->db->where('pskmrksatuid', $update);

    $this->db->update('mrk_perakuansiap', $data);

  }

  public function PSMKUpdate($data, $update)
  {
    $this->load->helper('url');
    $mrk_nowangjaminansatu = $this->input->post('nokewangansatu');
    $mrk_hargasatu = $this->input->post('harga');
    $mrk_bakiwangjamin = $this->input->post('bakiwangjaminan');
    $mrk_nowangjaminandua = $this->input->post('nokewangan');
    $mrk_hargadua = $this->input->post('harga1');
    $mrk_wangjaminlaksana = $this->input->post('wangjaminan');
    $mrk_tambahbonlaksana = $this->input->post('kosbon');
    $mrk_bakibonlaksana = $this->input->post('bakibon');
    $mrk_pegawai = $this->input->post('pegawai');
    $mrk_jawatanpp = $this->input->post('jawatan');
    $mrk_mrkkodvot = $this->input->post('kodvods');
    $mrk_satuid = $this->input->post('mrkid');
    $mrk_noinden = $this->input->post('indenno');

    $data = array(

      'mrk_nowangjaminansatu' => $mrk_nowangjaminansatu,
      'mrk_hargasatu' => $mrk_hargasatu,
      'mrk_bakiwangjamin' => $mrk_bakiwangjamin,
      'mrk_nowangjaminandua' => $mrk_nowangjaminandua,
      'mrk_hargadua' => $mrk_hargadua,
      'mrk_wangjaminlaksana' => $mrk_wangjaminlaksana,
      'mrk_tambahbonlaksana' => $mrk_tambahbonlaksana,
      'mrk_bakibonlaksana' => $mrk_bakibonlaksana,
      'mrk_pegawaipenguasa' => $mrk_pegawai,
      'mrk_jawatanpp' => $mrk_jawatanpp,
      'mrkid_id' => $mrk_satuid,
      'psmk_kodvots' => $mrk_mrkkodvot,
      'psmk_inden' => $mrk_noinden
    );

    $this->db->where('mrkid_id', $update);

    $this->db->update('mrk_perakuansiapbaikicacat', $data);
  }

  public function JBupdate($data, $update)
  {
    $this->load->helper('url');
    $mrk_rujukanbank = $this->input->post('rujukbank');
    $mrk_namabank = $this->input->post('namabank');
    $mrk_alamatbank = $this->input->post('alamatbank');
    $alamatborong = $this->input->post('alamatborongsurat');
    $js_mrkid = $this->input->post('hiddenid');
    $js_kodvot = $this->input->post('kodvot');
    $js_inden = $this->input->post('noinden');


    $data = array(
      'mrk_rujukanbank' => $mrk_rujukanbank,
      'mrk_namabank' => $mrk_namabank,
      'mrk_alamatbank' => $mrk_alamatbank,
      'jb_alamatsurat' => $alamatborong,
      'js_mrkid' => $js_mrkid,
      'js_kodvot' => $js_kodvot,
      'js_inden' => $js_inden



    );

    $this->db->where('js_mrkid', $update);

    $this->db->update('mrk_jaminanbank', $data);
  }

  public function PPWJPupdate($data, $update)
  {
    $ppwjp_rt = $this->input->post('rujuktuan');
    $ppwjp_rk = $this->input->post('rujukkami');
    $ppwjp_namarujukan = $this->input->post('namarujukan');
    $ppwjp_alamatrujukan = $this->input->post('alamatrujukan');
    $ppwjp_kepada = $this->input->post('kepada');
    $ppwjp_alamat = $this->input->post('alamat');
    $ppwjp_kos = $this->input->post('koswjp');
    $ppwjp_pegawai = $this->input->post('pegawaikuasa');
    $ppwjp_jawatan = $this->input->post('jawatan');
    $ppwjp_mrkid = $this->input->post('hiddenid');
    $ppwjp_inden = $this->input->post('indenno');
    $ppwjp_kodvot = $this->input->post('kodvot');

    $data = array(
      'ppwjp_rt' => $ppwjp_rt,
      'ppwjp_rk' => $ppwjp_rk,
      'ppwjp_namarujukan'=> $ppwjp_namarujukan,
      'ppwjp_alamatrujukan' => $ppwjp_alamatrujukan,
      'ppwjp_kepada' => $ppwjp_kepada,
      'ppwjp_alamat' => $ppwjp_alamat,
      'ppwjp_kos' => $ppwjp_kos,
      'ppwjp_pegawai' => $ppwjp_pegawai,
      'ppwjp_jawatan' => $ppwjp_jawatan,
      'ppwjp_mrkid' => $ppwjp_mrkid,
      'ppwjp_inden' => $ppwjp_inden,
      'ppwjp_kodvot' => $ppwjp_kodvot
    );

    $this->db->where('ppwjp_mrkid', $update);
    $this->db->update('mrk_ppwjp',$data);
  }

  public function SSupdate($data, $update)
  {
    //1 value
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
    $ss_inden = $this->input->post('noinden');
    $ss_mrkid = $this->input->post('hiddenid');
    $ss_kodvot = $this->input->post('kodvot');
    $ss_disediakan = $this->input->post('sedia');
    $ss_date = $this->input->post('tarikhsedia');

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
      'cb18' => $ss_chk18,
      'ss_inden' => $ss_inden,
      'ss_mrkid'=>   $ss_mrkid,
      'ss_kodvot' => $ss_kodvot,
      'ss_disediakan' => $ss_disediakan,
      'ss_date' =>  $ss_date


    );


        $this->db->where('ss_mrkid', $update);
        $this->db->update('mrk_ss',$data);
  }

  public function MRK3Update($data, $update)
  {
    $this->load->helper('url');

    //$mrk_nopkk = $this->input->post('nopkk');
    $mrksatutiga_id = $this->input->post('hiddenid');
    $mrk_tigainden = $this->input->post('noinden');
    $mrktiga_kodvots = $this->input->post('kodvot');
    $tiga_bina = $this->input->post('bina');
    $tiga_tadbir = $this->input->post('tadbir');
    $tiga_kemajuan = $this->input->post('ran');
    $tiga_kerangka = $this->input->post('ka');
    $tiga_kerja = $this->input->post('ker');
    $tiga_kemasan = $this->input->post('mas');
    $tiga_luar = $this->input->post('luar');
    $tiga_kontraktor = $this->input->post('kon');
    $tiga_pegawai = $this->input->post('pegawai');
    $tiga_jawatan = $this->input->post('jawatan');
    $tiga_tarikah = $this->input->post('tarikh');
    $tiga_catat1 =  $this->input->post('catat1');
    $tiga_catat2 =  $this->input->post('catat2');
    $tiga_catat3 =  $this->input->post('catat3');
    $tiga_catat4 =  $this->input->post('catat4');
    $tiga_catat5 =  $this->input->post('catat5');
    $tiga_catat6 = $this->input->post('catat6');
    $tiga_catat7 =  $this->input->post('catat7');
    $tiga_catat8 =  $this->input->post('catat8');
    $ulasan = $this->input->post('ulasanpegawai');



    $data = array(
      'mrksatutiga_id' => $mrksatutiga_id,
      'mrk_tigainden' => $mrk_tigainden,
      'mrktiga_kodvots' => $mrktiga_kodvots,
      'tiga_bina' => $tiga_bina,
      'tiga_tadbir' =>  $tiga_tadbir,
      'tiga_kemajuan' =>$tiga_kemajuan,
      'tiga_kerangka' =>$tiga_kerangka,
      'tiga_kerja' =>$tiga_kerja,
      'tiga_kemasan' =>$tiga_kemasan,
      'tiga_luar' => $tiga_luar,
      'tiga_kontraktor' =>$tiga_kontraktor,
      'tiga_pegawai' =>$tiga_pegawai,
      'tiga_jawatan' =>  $tiga_jawatan,
      'tiga_tarikah' =>  $tiga_tarikah,
      'tiga_catat1'=>  $tiga_catat1,
      'tiga_catat2'=>  $tiga_catat2,
      'tiga_catat3'=>  $tiga_catat3,
      'tiga_catat4'=>  $tiga_catat4,
      'tiga_catat5'=>  $tiga_catat5,
      'tiga_catat6'=>  $tiga_catat6,
      'tiga_catat7'=>  $tiga_catat7,
      'tiga_catat8'=>  $tiga_catat8,
      'mrk_ulasan'=> $ulasan


    );

    $this->db->where('mrksatutiga_id', $update);
    $this->db->update('mrk_tiga',$data);
  }

  public function getDataKon($keyword)
  {
    //$this->db->select('konName');
    $this->db->order_by('kontraktorId', 'DESC');
    //$this->db->where('konName');
    $this->db->like('konName',$keyword);
    return $this->db->get('kontraktor')->row_array();
  }

  public function getDataSearchkon($namakons)
  {
    $this->db->like('konName', $namakons, 'BOTH');
    $this->db->order_by('kontraktorId','ASC');
    $this->db->limit(10);
    return $this->db->get('kontraktor')->result();
  }

  public function getAllDataKon()
  {
    $this->db->select("*,CONCAT(  
        IF (ISNULL(KonAlamat), '', KonAlamat), ' ',   
        IF (ISNULL(konAlamatExtS), '', konAlamatExtS), ' ',   
        IF (ISNULL(konAlamatExtD), '', konAlamatExtD), ' ',   
        IF (ISNULL(konPoskod), '', konPoskod), ' ',
        IF (ISNULL(konBandar), '', konBandar), ' ',   
        IF (ISNULL(konNegeri), '', konNegeri)  
    ) AS AddressCombine");
    $this->db->from('kontraktor');
    $query = $this->db->get();
    return $query->result();
  }

  public function mrkpupdate($id)
  {
   
    $data = array(
      'mrk_psebenar' => $this->input->post('peratusan')
    );

    $this->db->where('mrk_mainid', $id);
    $this->db->update('mrk_dua', $data);
  }

  public function bindmrkdua()
  {
    
  }



  ///////////////////////////end of mrk update////////////////////////////////////////////////////////////////////////////////////


}
