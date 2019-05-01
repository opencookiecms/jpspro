<?php

$phpWord = new \PhpOffice\PhpWord\PhpWord();

\PhpOffice\PhpWord\Settings::setTempDir('assets/tmp/');
$userdata = $this->session->userdata('name');
$template = new \PhpOffice\PhpWord\TemplateProcessor("assets/docx/MRK01.docx");
$template->setValue('nopkk',$get_detail[0]->mrk_nopkk);
$template->setValue('namakon',$get_detail[0]->mrk_namakon);
$template->setValue('nosebutharga',$get_detail[0]->df_nosebutharga);
$template->setValue('noinden',$get_detail[0]->mrk_noinden);
$template->setValue('daerah',$get_detail[0]->mrk_daerah);
$template->setValue('negeri',$get_detail[0]->mrk_negeri);
$template->setValue('kosprojek',number_format($get_detail[0]->mrk_kosprojek,2));
$template->setValue('tarikhmulakon',$get_detail[0]->mrk_tarikhmulakon);
$template->setValue('tarikhsiap',$get_detail[0]->mrk_tarikhjangkasiap);
$template->setValue('namapegawai',$get_detail[0]->mrk_pegawai);
$template->setValue('jawatan',$get_detail[0]->mrk_jawatan);
$template->setValue('tarikhlaporan',$get_detail[0]->mrk_tarikh);

$filename = "MRK01-".$userdata."(".$get_detail[0]->mrks_kodvot.").docx";



$template->saveAs("assets/document/".$filename,0777);
redirect(base_url("assets/document/".$filename));



