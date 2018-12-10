<?php

//remove slash kalau nak guna versi windows dan tutup untuk trader_mac
//

$docx = new DOCXTemplate(APPPATH.'libraries\PhpWords\document\MRK02.docx'); //for windows
//$docx = new DOCXTemplate(APPPATH.'libraries/PhpWords/document/MRK02.docx'); //for mac
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

//
$docx->set('nopkk',$get_detail[0]->mrk_nopkk);
$docx->set('namakon',$get_detail[0]->mrk_namakon);
$docx->set('nosebutharga',$get_detail[0]->df_nosebutharga);
$docx->set('noinden',$get_detail[0]->mrk_noinden);
$docx->set('tajukkerja',$get_detail[0]->df_tajuk);
$docx->set('kosprojek',number_format($get_detail[0]->mrk_kosprojek,2 ));
$docx->set('tariklawat',$get_detail[0]->df_tarikhlawat);
$docx->set('tarikhjangkasiap',$get_detail[0]->mrk_tarikhjangkasiap);
$docx->set('percent',$get_detail[0]->mrk_majukerja);
$docx->set('tarikhmaju',$get_detail[0]->mrk_majukerjasebenar);
$docx->set('nomaju',$get_detail[0]->mrk_bayarmajusemasa);
$docx->set('bayaran',number_format($get_detail[0]->mrk_jumlahbayarmaju,2));
$docx->set('sebabkan',$get_detail[0]->mrk_sebaboleh);
$docx->set('lainlain',$get_detail[0]->mrk_lainlain);
$docx->set('datelanjut',$get_detail[0]->mrk_lanjutmasa);
$docx->set('lanjutdari',$get_detail[0]->mrk_dari);
$docx->set('lanjuthingga',$get_detail[0]->mrk_sehingga);
$docx->set('ladsehari',$get_detail[0]->mrk_ladsehari);
$docx->set('tarikhdari',$get_detail[0]->mrk_laddari);
$docx->set('tarikhhigga',$get_detail[0]->mrk_ladsehingga);
$docx->set('sebabkan2',$get_detail[0]->mrk_disebab);
$docx->set('namapegawai',$get_detail[0]->mrk_pegawai);
$docx->set('jawatanpegawai',$get_detail[0]->mrk_jawatan);
$docx->set('tarikhperakuan',$get_detail[0]->mrk_perakukerjataksiap);

$docx->saveAs('MRK02.docx');
//
header("Content-Type:application/msword");
header("Content-Disposition: attachment;filename=MRK02.docx");
readfile('MRK02.docx');


?>
