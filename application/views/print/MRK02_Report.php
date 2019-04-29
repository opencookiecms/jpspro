<?php

$phpWord = new \PhpOffice\PhpWord\PhpWord();

\PhpOffice\PhpWord\Settings::setTempDir('assets/tmp/');
$userdata = $this->session->userdata('name');
$template = new \PhpOffice\PhpWord\TemplateProcessor("assets/docx/MRK02.docx");

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
      $template->setValue($key,$checkmark);
  }
  else {
      $template->setValue($key,$uncheckmark);
  }
}


$template->setValue('nopkk',$get_detail[0]->mrk_nopkk);
$template->setValue('namakon',$get_detail[0]->mrk_namakon);
$template->setValue('nosebutharga',$get_detail[0]->df_nosebutharga);
$template->setValue('noinden',$get_detail[0]->mrk_noinden);
$template->setValue('tajukkerja',$get_detail[0]->df_tajuk);
$template->setValue('kosprojek',number_format($get_detail[0]->mrk_kosprojek,2 ));
$template->setValue('tariklawat',$get_detail[0]->df_tarikhlawat);
$template->setValue('tarikhjangkasiap',$get_detail[0]->mrk_tarikhjangkasiap);
$template->setValue('percent',$get_detail[0]->mrk_majukerja);
$template->setValue('tarikhmaju',$get_detail[0]->mrk_majukerjasebenar);
$template->setValue('nomaju',$get_detail[0]->mrk_bayarmajusemasa);
$template->setValue('bayaran',number_format($get_detail[0]->mrk_jumlahbayarmaju,2));
$template->setValue('sebabkan',$get_detail[0]->mrk_sebaboleh);
$template->setValue('lainlain',$get_detail[0]->mrk_lainlain);
$template->setValue('datelanjut',$get_detail[0]->mrk_lanjutmasa);
$template->setValue('lanjutdari',$get_detail[0]->mrk_dari);
$template->setValue('lanjuthingga',$get_detail[0]->mrk_sehingga);
$template->setValue('ladsehari',$get_detail[0]->mrk_ladsehari);
$template->setValue('tarikhdari',$get_detail[0]->mrk_laddari);
$template->setValue('tarikhhigga',$get_detail[0]->mrk_ladsehingga);
$template->setValue('sebabkan2',$get_detail[0]->mrk_disebab);
$template->setValue('namapegawai',$get_detail[0]->mrk_pegawai);
$template->setValue('jawatanpegawai',$get_detail[0]->mrk_jawatan);
$template->setValue('tarikhperakuan',$get_detail[0]->mrk_perakukerjataksiap);



$template->saveAs("assets/document/MKR02-".$userdata.".docx",0777);



