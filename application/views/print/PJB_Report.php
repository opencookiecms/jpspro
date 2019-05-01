<?php

$phpWord = new \PhpOffice\PhpWord\PhpWord();

\PhpOffice\PhpWord\Settings::setTempDir('assets/tmp/');
$userdata = $this->session->userdata('name');
$template = new \PhpOffice\PhpWord\TemplateProcessor("assets/docx/jb.docx");

$template->setValue('NAMABANK',$get_detail[0]->mrk_namabank);
$template->setValue('ALAMATBANKPB',$get_detail[0]->mrk_alamatbank);
$template->setValue('rujukantuan',$get_detail[0]->mrk_rujukanbank);
$template->setValue('noinsurans',$get_detail[0]->mrk_nopkk);
$template->setValue('namakon',$get_detail[0]->mrk_namakon);
$template->setValue('alamatkon',$get_detail[0]->mrk_alamatkon);
$template->setValue('tarikhmula',$get_detail[0]->mrk_tarikhmulakon);
$template->setValue('tarikhakhir',$get_detail[0]->mrk_nopkk);
$template->setValue('slogan',$get_detail[0]->mrk_nopkk);
$template->setValue('jurutera',$get_detail[0]->mrk_pegawai);
$template->setValue('jawatanjuru',$get_detail[0]->mrk_jawatan);

$filename = "PJB".$userdata."(".$get_detail[0]->mrks_kodvot.").docx";
$template->saveAs("assets/document/".$filename,0777);
redirect(base_url("assets/document/".$filename));