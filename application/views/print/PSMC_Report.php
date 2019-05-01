<?php

$phpWord = new \PhpOffice\PhpWord\PhpWord();

\PhpOffice\PhpWord\Settings::setTempDir('assets/tmp/');
$userdata = $this->session->userdata('name');
$template = new \PhpOffice\PhpWord\TemplateProcessor("assets/docx/psbc.docx");

$template->setValue('nosebutharga',$get_detail[0]->df_nosebutharga);
$template->setValue('namakon',$get_detail[0]->mrk_namakon);
$template->setValue('TAJUKPROJEK',$get_detail[0]->df_tajuk);
$template->setValue('tarikha',$get_detail[0]->mrk_tarikhmulatanggungcacat);
$template->setValue('noinsuran',$get_detail[0]->mrk_perakuansiapbaikicacat);
$template->setValue('h1',$get_detail[0]->mrk_hargasatu);
$template->setValue('no2',$get_detail[0]->mrk_nowangjaminandua);
$template->setValue('h2',number_format($get_detail[0]->mrk_hargadua,2));
$template->setValue('bonla',number_format($get_detail[0]->mrk_tambahbonlaksana,2));
$template->setValue('bon',number_format($get_detail[0]->mrk_bakibonlaksana,2));

$filename = "PSMK".$userdata."(".$get_detail[0]->mrks_kodvot.").docx";
$template->saveAs("assets/document/".$filename,0777);
redirect(base_url("assets/document/".$filename));
