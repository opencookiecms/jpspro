<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projek_model extends CI_Model{

  public function __construct()
  {
     $this->load->database();
  }

  public function createOrder()
  {
    $this->load->helper('url');

    $no_sebutharga = $this->input->post('nosebutharga');
    $no_jenissebutharga = $this->input->post('jenissebut');
    $no_pemilik  =$this->input->post('pemilik');
    $no_tarikh = $this->input->post('tarikhmohon');

    $data = array(
      'no_sebutharga' => $no_sebutharga,
      'no_tarikh' => $no_tarikh,
      'no_pemilik'=> $no_pemilik,
      'no_jenis'=> $no_jenissebutharga
    );

    return $this->db->insert('order_nsh', $data);
  }

  public function listOrder()
  {
    $this->db->select('*');
    $this->db->from('order_nsh');  
    $this->db->join('dp_projek','dp_projek.df_nosebutharga=order_nsh.no_sebutharga','left');
    $this->db->where('YEAR(order_nsh.no_tarikh)','2020');
    
    $query = $this->db->get();

    return $query->result();
  }

  public function listOrderbytempahan($tempahan)
  {
    $this->db->select('*');
    $this->db->from('order_nsh');
    $this->db->join('dp_projek','dp_projek.df_nosebutharga=order_nsh.no_sebutharga','left');
    $this->db->where('no_jenis',$tempahan);
    $this->db->where('YEAR(order_nsh.no_tarikh)','2020');
    $query = $this->db->get();

    return $query->result();
  }

  public function listOrderbytahun($m,$tahun)
  {
    $this->db->select('*');
    $this->db->from('order_nsh');
    $this->db->join('dp_projek','dp_projek.df_nosebutharga=order_nsh.no_sebutharga','left');
    $this->db->where('no_jenis',$m);
     $this->db->where('year(no_tarikh)',$tahun);
    $query = $this->db->get();

    return $query->result();
  }


  public function updateOrder($value)
  {
    $this->db->select('*');
    $this->db->from('order_nsh');
    $this->db->where('no_id',$value);
    $query = $this->db->get();

    return $query->result();
  }

  public function deleteOrder()
  {

  }

  //insert funtion for step one
  public function create_stepone()

  {

    $this->load->helper('url');

    $df_nosebutharga = $this->input->post("nosebut");
    $df_tarikmohon = $this->input->post("tarikhmohon");
    $df_jsebutharga = $this->input->post("jenissebut");
    $df_tajuk = $this->input->post("tajukprojek");
    $df_daerah = $this->input->post('daerah');

    $data = array(
      'df_nosebutharga' => $df_nosebutharga,
      'df_tarikmohon' => $df_tarikmohon,
      'df_jsebutharga' => $df_jsebutharga,
      'df_tajuk' => $df_tajuk,
      'df_daerah' => $df_daerah
      );


      //$lastId = $this->db->insert_id();//statement to return last id after insert data
      //$lastId = $this->db->select('id')->order_by('id','desc')->limit(1)->get('dp_projek')->row('id');

      return $this->db->insert('dp_projek', $data); //return last id
      //this return for inserting data from this table

  }

  //insert funtion for step two
  public function create_steptwo()
  {


    $this->load->helper('url');

    $df_gred = $this->input->post("gred");
    $df_kategori = $this->input->post("kategori");
    $df_khusus1 = $this->input->post("khusus1");
    $df_khusus2 = $this->input->post("khusus2");
    $df_khusus3 = $this->input->post("khusus3");
    $df_taraf = $this->input->post("taraf");
    $df_tempohsiap = $this->input->post("tempoh");
    $dp_bulanming = $this->input->post("bulanming");
    $df_hargadoc = $this->input->post("doc");
    $df_tarikhnotis = $this->input->post("notiskeluar"); 
    $df_dateend = $this->input->post("thisisdateend");
    $df_tarikhlawat = $this->input->post("lawattapak");
    $df_tarikhdocmula = $this->input->post("docmula");
    $df_tarikhdocakhir = $this->input->post("docakhir");
    $df_tarikhtutup = $this->input->post("sebuttutup");
    $df_juruterad = $this->input->post("juruterakanan");
    $df_jurutera = $this->input->post("jurutera");
    //$df_penolongkanan = $this->input->post("penolongkanan");
    $df_penolong = $this->input->post("penolong");
    $df_kodvot = $this->input->post("vot");
    $df_peruntukan = $this->input->post("peruntukan");
    $df_bakiperuntukan = $this->input->post("baki");
    $dp_id = $this->input->post("dp_idpost");

      $data = array(
        'df_gred' => $df_gred,
        'df_kategori' => $df_kategori,
        'df_khusus1' => $df_khusus1,
        'df_khusus2' => $df_khusus2,
        'df_khusus3' => $df_khusus3,
        'df_taraf' => $df_taraf,
        'df_tempohsiap' => $df_tempohsiap,
        'dp_bulanmig'=> $dp_bulanming,
        'df_hargadoc' => $df_hargadoc,
        'df_tarikhnotis' => $df_tarikhnotis,
        'df_datelawat'=> $this->input->post("tsum1"),
        'df_datemulajualdoc'=>$this->input->post("tsum2"),
        'df_dateakhirjualdoc'=>$this->input->post("tsum3"),
        'df_dateend'=> $df_dateend,
        'df_tarikhlawat' => $df_tarikhlawat,
        'df_tarikhdocmula' => $df_tarikhdocmula,
        'df_tarikhdocakhir' => $df_tarikhdocakhir,
        'df_tarikhtutup' => $df_tarikhtutup,
        'df_juruterad' => $df_juruterad,
        'df_jurutera' => $df_jurutera,
        //'df_penolongkanan' => $df_penolongkanan,
        'df_penolong' => $df_penolong,
        'df_kodvot ' => $df_kodvot,
        'df_peruntukan' => $df_peruntukan,
        'df_bakiperuntukan ' => $df_bakiperuntukan,
        'dp_id'=> $dp_id

      );

      return $this->db->insert('dp_projekinfo', $data);
      //this return for inserting data from this table

  }

  //insert funtion for step three
  public function create_stepthree()
  {


    $this->load->helper('url');

    $dp_lata = $this->input->post("lata");
    $dp_latb = $this->input->post("latb");
    $dp_latc = $this->input->post("latc");
    $dp_longa= $this->input->post("longa");
    $dp_longb = $this->input->post("longb");
    $dp_longc = $this->input->post("longc");
    $dp_sungai = $this->input->post("sungai");
    $dp_sistem = $this->input->post("sistem");
    $dp_subsistem= $this->input->post("subsistem");
    $dp_komponen = $this->input->post("komponen");
    $dp_dimensi = $this->input->post("dimensi");
    $dp_id = $this->input->post("dp_idpost");


      $data = array(
        'dp_lata' => $dp_lata,
        'dp_latb' => $dp_latb,
        'dp_latc' => $dp_latc,
        'dp_longa' => $dp_longa,
        'dp_longb' => $dp_longb,
        'dp_longc' => $dp_longc,
        'dp_sungai' => $dp_sungai,
        'dp_sistem' => $dp_sistem,
        'dp_subsistem' => $dp_subsistem,
        'dp_komponen' => $dp_komponen,
        'dp_dimensi' => $dp_dimensi,
        'dp_id'=> $dp_id
      );

        return $this->db->insert('dp_gps', $data);
        //this return for inserting data from this table
  }


  //////this is mrk Update function goes heree/////////////////////////////////////////////////




  ///////end of update function//////////////////////////////////////////////////////////////////

  public function get_projekview($jp, $y)
  {

    $this->db->select('*');
    $this->db->from('dp_projek');

    //Tambah join 2 table.,.,
    $this->db->join('dp_projekinfo', 'dp_projekinfo.dp_id = dp_projek.projek_id');
    $this->db->join('dp_gps', 'dp_gps.dp_id = dp_projek.projek_id');
    $this->db->where('dp_projek.df_jsebutharga',$jp);
    $this->db->where('YEAR(dp_projek.df_tarikmohon)', $y);
    $query = $this->db->get();
    return $query->result();
  }

  public function get_projekviewafter()
  {

    $this->db->select('*');
    $this->db->from('dp_projek');

    //Tambah join 2 table.,.,
    $this->db->join('dp_projekinfo', 'dp_projekinfo.dp_id = dp_projek.projek_id','left');
    $this->db->join('dp_gps', 'dp_gps.dp_id = dp_projek.projek_id','left');
    $this->db->where('df_dateend >=','CURRENT_DATE');
    $this->db->order_by('df_dateend','asc');
    $this->db->limit(5);
    $query = $this->db->get();
    return $query->result();
  }

  public function get_projekviewafterbydate()
  {
    $query = $this->db->query('SELECT * FROM `dp_projek` 
                      LEFT JOIN dp_projekinfo on dp_projekinfo.dp_id = dp_projek.projek_id
                      LEFT JOIN dp_gps on dp_gps.dp_id=dp_projek.projek_id
                      WHERE dp_projekinfo.df_dateend >= CURRENT_DATE
                      ORDER BY dp_projekinfo.df_dateend ASC
                      LIMIT 5');
    return $query->result();
  }

  public function get_projekviewbyu($user,$jp,$y)
  {

    $this->db->select('*');
    $this->db->from('dp_projek');

    //Tambah join 2 table.,.,
    $this->db->join('dp_projekinfo', 'dp_projekinfo.dp_id = dp_projek.projek_id');
    $this->db->join('dp_gps', 'dp_gps.dp_id = dp_projek.projek_id');
    $this->db->where('dp_projekinfo.df_penolong',$user);
    $this->db->where('dp_projek.df_jsebutharga',$jp);
    $this->db->where('YEAR(dp_projek.df_tarikmohon)', $y);
   
    $query = $this->db->get();
    return $query->result();
  }

  ///tapis by years
  public function get_projekviewbyut($user,$jp,$tahun)
  {

    $this->db->select('*');
    $this->db->from('dp_projek');

    //Tambah join 2 table.,.,
    $this->db->join('dp_projekinfo', 'dp_projekinfo.dp_id = dp_projek.projek_id');
    $this->db->join('dp_gps', 'dp_gps.dp_id = dp_projek.projek_id');
    $this->db->where('dp_projekinfo.df_penolong',$user);
    $this->db->where('dp_projek.df_jsebutharga',$jp);
    $this->db->where('year(dp_projek.df_tarikmohon)',$tahun);
   
    $query = $this->db->get();
    return $query->result();
  }

  public function get_projekviewt($jp,$tahun)
  {

    $this->db->select('*');
    $this->db->from('dp_projek');

    //Tambah join 2 table.,.,
    $this->db->join('dp_projekinfo', 'dp_projekinfo.dp_id = dp_projek.projek_id');
    $this->db->join('dp_gps', 'dp_gps.dp_id = dp_projek.projek_id');
    $this->db->where('dp_projek.df_jsebutharga',$jp);
    $this->db->where('year(dp_projek.df_tarikmohon)',$tahun);
    $query = $this->db->get();
    return $query->result();
  }

  //end of tapis by years



  public function get_projekdetail($kodvodnumber) //view data
  {

       $this->db->select('*');
       $this->db->from('dp_projek');

       //Tambah join 2 table.,.,
       $this->db->join('dp_projekinfo', 'dp_projekinfo.dp_id = dp_projek.projek_id');
       $this->db->join('dp_gps', 'dp_gps.dp_id = dp_projek.projek_id');
       $this->db->where('dp_projekinfo.df_kodvot', $kodvodnumber);
       $query = $this->db->get();

       return $query->result();
  }

  public function get_projekdetailss($x,$y)
  {
       $this->db->select('*');
       $this->db->from('dp_projek');

       //Tambah join 2 table.,.,
       $this->db->join('dp_projekinfo', 'dp_projekinfo.dp_id = dp_projek.projek_id');
       $this->db->join('dp_gps', 'dp_gps.dp_id = dp_projek.projek_id');
       $this->db->where('dp_projekinfo.df_kodvot', $y);
       $this->db->where('dp_projekinfo.df_penolong',$x);
       $query = $this->db->get();

       return $query->result();
  }

  public function get_projekdetailbyid($id) //view data
  {

       $this->db->select('*');
       $this->db->from('dp_projek');

       //Tambah join 2 table.,.,
       $this->db->join('dp_projekinfo', 'dp_projekinfo.dp_id = dp_projek.projek_id');
       $this->db->join('dp_gps', 'dp_gps.dp_id = dp_projek.projek_id');
       $this->db->where('dp_projek.projek_id', $id);
       $query = $this->db->get();

       return $query->result();
  }

  public function get_updateprojek($id)
  {
    $this->db->select('*');
    $this->db->from('dp_projek');
    $this->db->join('dp_projekinfo', 'dp_projekinfo.dp_id = dp_projek.projek_id');
    $this->db->join('dp_gps','dp_gps.dp_id = dp_projek.projek_id','left');
    $this->db->join('jps_sistem','jps_sistem.sis_id = dp_gps.dp_sistem','left' );
    $this->db->join('jps_subsistem','jps_subsistem.sub_id = dp_gps.dp_subsistem','left' );
    $this->db->join('jps_component','jps_component.com_id = dp_gps.dp_komponen','left');


    $this->db->where('dp_projek.projek_id', $id);
    $query = $this->db->get();

    return $query->result();
  }



  //get last id function here//////
  public function getLastid()
  {
    $lastId = $this->db->select('projek_id')->order_by('projek_id','desc')->limit(1)->get('dp_projek')->row('projek_id');

    return $lastId; //return last id
  }

  public function ProjectUpdate01($data, $update)
  {
    $this->load->helper('url');

    $df_projekid = $this->input->post('hiddenid');
    $df_nosebutharga = $this->input->post("nosebut");
    $df_tarikmohon = $this->input->post("tarikhmohon");
    $df_jsebutharga = $this->input->post("jenissebut");
    $df_tajuk = $this->input->post("tajukprojek");
    $df_daerah = $this->input->post('daerah');

    $data = array(
      'projek_id'=>$df_projekid,
      'df_nosebutharga' => $df_nosebutharga,
      'df_tarikmohon' => $df_tarikmohon,
      'df_jsebutharga' => $df_jsebutharga,
      'df_tajuk' => $df_tajuk,
      'df_daerah' => $df_daerah
      );


      $this->db->where('projek_id', $update);

      $this->db->update('dp_projek', $data);

  }

  public function ProjectUpdate02($data, $update)
  {
    $this->load->helper('url');

    $df_gred = $this->input->post("gred");
    $df_kategori = $this->input->post("kategori");
    $df_khusus1 = $this->input->post("khusus1");
    $df_khusus2 = $this->input->post("khusus2");
    $df_khusus3 = $this->input->post("khusus3");
    $df_taraf = $this->input->post("taraf");
    $df_tempohsiap = $this->input->post("tempoh");
    $dp_bulanming = $this->input->post("bulanming");
    $df_hargadoc = $this->input->post("doc");
    $df_tarikhnotis = $this->input->post("notiskeluar");
    $df_dateend = $this->input->post("thisisdateend");
    $df_tarikhlawat = $this->input->post("lawattapak");
    $df_tarikhdocmula = $this->input->post("docmula");
    $df_tarikhdocakhir = $this->input->post("docakhir");
    $df_tarikhtutup = $this->input->post("sebuttutup");
    $df_juruterad = $this->input->post("juruterakanan");
    $df_jurutera = $this->input->post("jurutera");
    $df_penolongkanan = $this->input->post("penolongkanan");
    $df_penolong = $this->input->post("penolong");
    $df_kodvot = $this->input->post("vot");
    $df_peruntukan = $this->input->post("peruntukan");
    $df_bakiperuntukan = $this->input->post("baki");
    $dp_id = $this->input->post("dp_idpost");

      $data = array(
        'df_gred' => $df_gred,
        'df_kategori' => $df_kategori,
        'df_khusus1' => $df_khusus1,
        'df_khusus2' => $df_khusus2,
        'df_khusus3' => $df_khusus3,
        'df_taraf' => $df_taraf,
        'df_tempohsiap' => $df_tempohsiap,
        'dp_bulanmig' => $dp_bulanming,
        'df_hargadoc' => $df_hargadoc,
        'df_tarikhnotis' => $df_tarikhnotis,
        'df_datelawat'=> $this->input->post("tsum1"),
        'df_datemulajualdoc'=>$this->input->post("tsum2"),
        'df_dateakhirjualdoc'=>$this->input->post("tsum3"),
        'df_dateend' => $df_dateend,
        'df_tarikhlawat' => $df_tarikhlawat,
        'df_tarikhdocmula' => $df_tarikhdocmula,
        'df_tarikhdocakhir' => $df_tarikhdocakhir,
        'df_tarikhtutup' => $df_tarikhtutup,
        'df_juruterad' => $df_juruterad,
        'df_jurutera' => $df_jurutera,
        'df_penolongkanan' => $df_penolongkanan,
        'df_penolong' => $df_penolong,
        'df_kodvot ' => $df_kodvot,
        'df_peruntukan' => $df_peruntukan,
        'df_bakiperuntukan ' => $df_bakiperuntukan,
        'dp_id'=> $dp_id

      );

      $this->db->where('dp_id', $update);
      $this->db->update('dp_projekinfo', $data);
      //this return for inserting data from this table
  }

  public function ProjectUpdate03($data, $update)
  {
    $this->load->helper('url');

    $dp_lata = $this->input->post("lata");
    $dp_latb = $this->input->post("latb");
    $dp_latc = $this->input->post("latc");
    $dp_longa= $this->input->post("longa");
    $dp_longb = $this->input->post("longb");
    $dp_longc = $this->input->post("longc");
    $dp_sungai = $this->input->post("sungai");
    $dp_sistem = $this->input->post("sistem");
    $dp_subsistem= $this->input->post("subsistem");
    $dp_komponen = $this->input->post("komponen");
    $dp_dimensi = $this->input->post("dimensi");
    $dp_id = $this->input->post("dp_idpost");


      $data = array(
        'dp_lata' => $dp_lata,
        'dp_latb' => $dp_latb,
        'dp_latc' => $dp_latc,
        'dp_longa' => $dp_longa,
        'dp_longb' => $dp_longb,
        'dp_longc' => $dp_longc,
        'dp_sungai' => $dp_sungai,
        'dp_sistem' => $dp_sistem,
        'dp_subsistem' => $dp_subsistem,
        'dp_komponen' => $dp_komponen,
        'dp_dimensi' => $dp_dimensi,
        'dp_id'=> $dp_id
      );

      $this->db->where('dp_id', $update);

      $this->db->update('dp_gps', $data);
        //this return for inserting data from this table
  }

  public function getupdate($data, $id)
  {
    $this->load->helper('url');
    $data = array(
      'no_sebutharga' => $this->input->post("nosebutharga"),
      'no_tarikh' => $this->input->post("tarikhmohon"),
      'no_pemilik'=> $this->input->post("pemilik"),
      'no_jenis' => $this->input->post("jenissebut"),
      'no_id' => $this->input->post('hiddenid')
    );

     $this->db->where('no_id', $id);

     $this->db->update('order_nsh', $data);
  }

  public function getdelete($id)
  {
      $this->load->helper('url');
    //$this->db->
     $this->db->where('no_id', $id);
     $this->db->delete('order_nsh');
  }

  public function get_projectprogress($id)
  {
    $this->db->select('*');
    $this->db->from('dp_projek');
    $this->db->join('dp_projekinfo', 'dp_projekinfo.dp_id = dp_projek.projek_id');
    $this->db->join('mrk_satu','mrk_satu.mrk_nokontrak = dp_projek.df_nosebutharga','left');
    $this->db->join('mrk_laporansiap','mrk_laporansiap.lskmrksatuid = mrk_satu.mrksatuid ','left' );
    $this->db->join('mrk_dua','mrk_dua.mrksatu_id = mrk_satu.mrksatuid ','left' );
    $this->db->join('mrk_tiga','mrk_tiga.mrksatutiga_id=mrk_satu.mrksatuid','left');
    $this->db->join('mrk_ss','mrk_ss.ss_mrkid=mrk_satu.mrksatuid','left');
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

  public function get_projectp()
  {
    $this->db->select('*');
    $this->db->from('dp_projek');
    $this->db->join('mrk_dua','mrk_dua.mrk_mainid = dp_projek.projek_id','left' );

    $this->db->where('mrk_mainid', 69);
    $query = $this->db->get();
  }

  public function getsungai()
  {
    $this->db->select('*');
    $this->db->from('jps_sungai');
    $query = $this->db->get();

    return $query->result();
  }

  public function issistem()
  {
    $this->db->select('*');
    $this->db->from('jps_sistem');
    $query = $this->db->get();

    return $query->result();
  }

  public function isubsistem($sis)
  {
    $this->db->where('sis_id',$sis);
    $query = $this->db->get('jps_subsistem');
    $output = '<option value="">Pilih Sub Sistem</option>';
    foreach($query->result() as $row)
    {
      $output .= '<option value="'.$row->sub_id.'">'.$row->subsistem.'</option>';
    }
    return $output;
  }

  public function iscomponent($sub)
  {
    $this->db->where('sub_id',$sub);
    $query = $this->db->get('jps_component');
    $output = '<option value="">Pilih Component</option>';
    foreach($query->result() as $row)
    {
      $output .= '<option value="'.$row->com_id.'">'.$row->component.'</option>';
    }
    return $output;
  }


  public function delete1($id)
  {
    $this->db->where('projek_id', $id);
    $this->db->delete('dp_projek');
  }

  public function delete2($id)
  {
    $this->db->where('dp_id', $id);
    $this->db->delete('dp_projekinfo');
  }

  public function delete3($id)
  {
    $this->db->where('dp_id', $id);
    $this->db->delete('dp_gps');
  }

  public function verifytempahan()
  {
      $this->db->select('*');
      $this->db->from('dp_projek');
      $this->db->join('order_nsh', 'dp_projek.df_nosebutharga = order_nsh.no_sebutharga');
      $query = $this->db->get();
      return $query->result();
  }


  public function getSemakDaftar()
  {
    
      $this->db->select('*, dp_gps.dp_id AS gps_dp_id, dp_projekinfo.dp_id AS dp_idinfo');
      $this->db->from('dp_projek');

      //Tambah join 2 table.,.,
      $this->db->join('dp_projekinfo', 'dp_projekinfo.dp_id = dp_projek.projek_id','LEFT');
      $this->db->join('dp_gps','dp_gps.dp_id = dp_projek.projek_id','LEFT');
      $this->db->where('year(df_tarikmohon)','2020');

      $query = $this->db->get();
      return $query->result();

  }

  


 







}
