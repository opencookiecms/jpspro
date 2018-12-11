<?php

//remove slash kalau nak guna versi windows dan tutup untuk trader_mac

//$docx = new DOCXTemplate(APPPATH.'libraries\PhpWords\document\MRK03.docx'); //for windowss
$docx = new DOCXTemplate(APPPATH.'libraries/PhpWords/document/MRK03.docx'); //for windowss

//$docx = new DOCXTemplate(site_url("assets/document/MRK03.docx"));// for mac
$bina = $get_detail[0]->tiga_bina;
$tadbir = $get_detail[0]->tiga_tadbir;
$kemajuan = $get_detail[0]->tiga_kemajuan;
$kerangka = $get_detail[0]->tiga_kerangka;
$kerja = $get_detail[0]->tiga_kerja;
$kemasan = $get_detail[0]->tiga_kemasan;
$luar = $get_detail[0]->tiga_luar;
$kontraktor = $get_detail[0]->tiga_kontraktor;

$checkmark = "\u{2713}";
$uncheckmark= "";

$pointbina =array("bt"=>"90% - Keatas","bb"=>"75% - 89%","bs"=>"50% - 74%","bm"=>"50% kebawah");
foreach($pointbina as $x => $x_value) {
    if ($bina == $x_value)
    {
      $docx->set($x,$checkmark);
    }
    else {
    $docx->set($x,$uncheckmark);
    }
}

$pointtadbir = array("pt"=>"90% - Keatas","pb"=>"75% - 89%","ps"=>"50% - 74%","pm"=>"50% kebawah");
foreach ($pointtadbir as $keytadbir => $p_value) {
  if($tadbir == $p_value)
  {
    $docx->set($keytadbir, $checkmark);
  }
  else {
    $docx->set($keytadbir,$uncheckmark);
  }
}

$pointkemajuan = array("kt"=>"90% - Keatas","kb"=>"75% - 89%","ks"=>"50% - 74%","km"=>"50% kebawah");
foreach ($pointkemajuan as $keymaju => $k_value) {
  if($kemajuan == $k_value)
  {
    $docx->set($keymaju, $checkmark);
  }
  else
  {
    $docx->set($keymaju, $uncheckmark);
  }
}

$pointrangka = array("mt"=>"90% - Keatas","mb"=>"75% - 89%","ms"=>"50% - 74%","mm"=>"50% kebawah");
foreach ($pointrangka as $keyrangka => $r_value) {
  if($kerangka == $r_value)
  {
    $docx->set($keyrangka, $checkmark);
  }
  else {
    $docx->set($keyrangka,$uncheckmark);
  }
}

$pointkerja = array("qt"=>"90% - Keatas","qb"=>"75% - 89%","qs"=>"50% - 74%","qm"=>"50% kebawah");
foreach ($pointkerja as $keykerja => $pk_value) {
  if($kerja == $pk_value)
  {
    $docx->set($keykerja, $checkmark);
  }
  else {
    $docx->set($keykerja,$uncheckmark);
  }
}




$pointkemasan = array("ft"=>"90% - Keatas","fb"=>"75% - 89%","fs"=>"50% - 74%","fm"=>"50% kebawah");
foreach ($pointkemasan as $keykemasan => $mas_value) {
  if($kemasan == $mas_value)
  {
    $docx->set($keykemasan, $checkmark);
  }
  else {
    $docx->set($keykemasan,$uncheckmark);
  }
}

$pointwork = array("wt"=>"90% - Keatas","wb"=>"75% - 89%","ws"=>"50% - 74%","wm"=>"50% kebawah");
foreach ($pointwork as $keywork => $work_value) {
  if($luar == $work_value)
  {
    $docx->set($keywork, $checkmark);
  }
  else {
    $docx->set($keywork,$uncheckmark);
  }
}

$pointkon = array("st"=>"90% - Keatas","sb"=>"75% - 89%","ss"=>"50% - 74%","sm"=>"50% kebawah");
foreach ($pointkon as $keykon => $kon_value) {
  if($kontraktor == $kon_value)
  {
    $docx->set($keykon, $checkmark);
  }
  else {
    $docx->set($keykon,$uncheckmark);
  }
}

$docx->set('pkkno',$get_detail[0]->mrk_nopkk);
$docx->set('namakot',$get_detail[0]->mrk_namakon);
$docx->set('nosebutharga',$get_detail[0]->df_nosebutharga);
$docx->set('noinden',$get_detail[0]->mrk_noinden);
$docx->set('tajukkerja',$get_detail[0]->df_tajuk);
$docx->set('kosprojek',number_format($get_detail[0]->mrk_kosprojek,2));
$docx->set('kossebenar',number_format($get_detail[0]->lks_hargasebenar,2));
$docx->set('tarikhmula',$get_detail[0]->mrk_tarikhmulakon);
$docx->set('tarikhsiap',$get_detail[0]->lsk_tarikhkerjasiap);
$docx->set('tarikhlanjutmasa',$get_detail[0]->mrk_dari);
$docx->set('tarikhsebenar',$get_detail[0]->lsk_tarikhkerjasiap);
$docx->set('ladsehari',$get_detail[0]->mrk_ladsehari);
$docx->set('tarikhmulas',$get_detail[0]->mrk_laddari);
$docx->set('tarikahsehigga',$get_detail[0]->mrk_ladsehingga);
$docx->set('namapegawai',$get_detail[0]->tiga_pegawai);
$docx->set('jawatanpegawai',$get_detail[0]->tiga_jawatan);




$docx->saveAs('MRK03.docx');

header("Content-Type:application/msword");
header("Content-Disposition: attachment;filename=MRK03.docx");
readfile('MRK03.docx');

?>
