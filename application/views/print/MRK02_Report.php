<?php

//remove slash kalau nak guna versi windows dan tutup untuk trader_mac
//
$docx = new DOCXTemplate(APPPATH.'libraries\PhpWords\document\MRK02.docx'); //for windowss
//
$c1 = $get_detail[0]->mrk_modal;
$c2 = $get_detail[0]->mrk_bahan;
$c3 = $get_detail[0]->mrk_pekerja;
$c4 = $get_detail[0]->mrk_tapak;
$c5 = $get_detail[0]->mrk_cuaca;
$checkmark = "\u{2713}";
$uncheckmark= "";
$checkpoint =array("m"=>"$c1","b"=>"$c2","p"=>"$c3","t"=>"$c4","c"=>"$c5");
foreach ($checkpoint as $key => $value) {


  if($value ==1)
  {
      $docx->set($key,$checkmark);
  }
  else {
    $docx->set($key,$uncheckmark);
  }
}
$docx->set('nopkk',$get_detail[0]->mrk_nopkk);
$docx->set('namakon',$get_detail[0]->mrk_namakon);
$docx->set('nosebutharga',$get_detail[0]->mrk_nokontrak);
$docx->set('noinden',$get_detail[0]->mrk_noinden);
$docx->set('daerah',$get_detail[0]->mrk_daerah);
$docx->set('negeri',$get_detail[0]->mrk_negeri);
$docx->set('kosprojek',number_format($get_detail[0]->mrk_kosprojek,2));
$docx->set('tarikhmulakon',$get_detail[0]->mrk_tarikhmulakon);
$docx->set('tarikhjgsiap',$get_detail[0]->mrk_tarikhjangkasiap);
$docx->set('namapegawai',$get_detail[0]->mrk_pegawai);
$docx->set('jawatan',$get_detail[0]->mrk_jawatan);
$docx->set('tarikhlaporan',$get_detail[0]->mrk_tarikh);
//
//
//
$docx->saveAs('MRK02.docx');
//
header("Content-Type:application/msword");
header("Content-Disposition: attachment;filename=MRK02.docx");
readfile('MRK02.docx');


?>
