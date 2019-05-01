<?php

$phpWord = new \PhpOffice\PhpWord\PhpWord();

\PhpOffice\PhpWord\Settings::setTempDir('assets/tmp/');
$userdata = $this->session->userdata('name');
$template = new \PhpOffice\PhpWord\TemplateProcessor("assets/docx/PSK01.docx");

$template->setValue('nosebutharga',$get_detail[0]->df_nosebutharga);
$template->setValue('namakon',$get_detail[0]->mrk_namakon);
$template->setValue('alamatkon',$get_detail[0]->mrk_alamatkon);
$template->setValue('gred',$get_detail[0]->mrk_gred);

$template->setValue('TAJUKKERJA',$get_detail[0]->mrk_negeri);
$template->setValue('kosprojek',number_format($get_detail[0]->mrk_kosprojek,2));
$template->setValue('tarikh',$get_detail[0]->lsk_tarikhkerjasiap);
$template->setValue('tarikh2',$get_detail[0]->mrk_tarikhjangkasiap);

$filename = "PSK-A".$userdata."(".$get_detail[0]->mrks_kodvot.").docx";
$template->saveAs("assets/document/".$filename,0777);
redirect(base_url("assets/document/".$filename));




