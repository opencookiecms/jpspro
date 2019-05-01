<?php

$phpWord = new \PhpOffice\PhpWord\PhpWord();

\PhpOffice\PhpWord\Settings::setTempDir('assets/tmp/');
$userdata = $this->session->userdata('name');
$template = new \PhpOffice\PhpWord\TemplateProcessor("assets/docx/MRK03.docx");


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
      $template->setValue($x,$checkmark);
    }
    else {
    $template->setValue($x,$uncheckmark);
    }
}

$pointtadbir = array("pt"=>"90% - Keatas","pb"=>"75% - 89%","ps"=>"50% - 74%","pm"=>"50% kebawah");
foreach ($pointtadbir as $keytadbir => $p_value) {
  if($tadbir == $p_value)
  {
    $template->setValue($keytadbir, $checkmark);
  }
  else {
    $template->setValue($keytadbir,$uncheckmark);
  }
}

$pointkemajuan = array("kt"=>"90% - Keatas","kb"=>"75% - 89%","ks"=>"50% - 74%","km"=>"50% kebawah");
foreach ($pointkemajuan as $keymaju => $k_value) {
  if($kemajuan == $k_value)
  {
    $template->setValue($keymaju, $checkmark);
  }
  else
  {
    $template->setValue($keymaju, $uncheckmark);
  }
}

$pointrangka = array("mt"=>"90% - Keatas","mb"=>"75% - 89%","ms"=>"50% - 74%","mm"=>"50% kebawah");
foreach ($pointrangka as $keyrangka => $r_value) {
  if($kerangka == $r_value)
  {
    $template->setValue($keyrangka, $checkmark);
  }
  else {
    $template->setValue($keyrangka,$uncheckmark);
  }
}

$pointkerja = array("qt"=>"90% - Keatas","qb"=>"75% - 89%","qs"=>"50% - 74%","qm"=>"50% kebawah");
foreach ($pointkerja as $keykerja => $pk_value) {
  if($kerja == $pk_value)
  {
    $template->setValue($keykerja, $checkmark);
  }
  else {
    $template->setValue($keykerja,$uncheckmark);
  }
}




$pointkemasan = array("ft"=>"90% - Keatas","fb"=>"75% - 89%","fs"=>"50% - 74%","fm"=>"50% kebawah");
foreach ($pointkemasan as $keykemasan => $mas_value) {
  if($kemasan == $mas_value)
  {
    $template->setValue($keykemasan, $checkmark);
  }
  else {
   $template->setValue($keykemasan,$uncheckmark);
  }
}

$pointwork = array("wt"=>"90% - Keatas","wb"=>"75% - 89%","ws"=>"50% - 74%","wm"=>"50% kebawah");
foreach ($pointwork as $keywork => $work_value) {
  if($luar == $work_value)
  {
    $template->setValue($keywork, $checkmark);
  }
  else {
    $template->setValue($keywork,$uncheckmark);
  }
}

$pointkon = array("st"=>"90% - Keatas","sb"=>"75% - 89%","ss"=>"50% - 74%","sm"=>"50% kebawah");
foreach ($pointkon as $keykon => $kon_value) {
  if($kontraktor == $kon_value)
  {
    $template->setValue($keykon, $checkmark);
  }
  else {
    $template->setValue($keykon,$uncheckmark);
  }
}

$template->setValue('pkkno',$get_detail[0]->mrk_nopkk);
$template->setValue('namakot',$get_detail[0]->mrk_namakon);
$template->setValue('nosebutharga',$get_detail[0]->df_nosebutharga);
$template->setValue('noinden',$get_detail[0]->mrk_noinden);
$template->setValue('tajukkerja',$get_detail[0]->df_tajuk);
$template->setValue('kosprojek',number_format($get_detail[0]->mrk_kosprojek,2));
$template->setValue('kossebenar',number_format($get_detail[0]->lks_hargasebenar,2));
$template->setValue('tarikhmula',$get_detail[0]->mrk_tarikhmulakon);
$template->setValue('tarikhsiap',$get_detail[0]->lsk_tarikhkerjasiap);
$template->setValue('tarikhlanjutmasa',$get_detail[0]->mrk_dari);
$template->setValue('tarikhsebenar',$get_detail[0]->lsk_tarikhkerjasiap);
$template->setValue('ladsehari',$get_detail[0]->mrk_ladsehari);
$template->setValue('tarikhmulas',$get_detail[0]->mrk_laddari);
$template->setValue('tarikahsehigga',$get_detail[0]->mrk_ladsehingga);
$template->setValue('namapegawai',$get_detail[0]->tiga_pegawai);
$template->setValue('jawatanpegawai',$get_detail[0]->tiga_jawatan);



$filename = "MRK03-".$userdata."(".$get_detail[0]->mrks_kodvot.").docx";
$template->saveAs("assets/document/".$filename,0777);
redirect(base_url("assets/document/".$filename));



