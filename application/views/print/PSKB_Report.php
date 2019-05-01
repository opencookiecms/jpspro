<?php

$phpWord = new \PhpOffice\PhpWord\PhpWord();

\PhpOffice\PhpWord\Settings::setTempDir('assets/tmp/');
$userdata = $this->session->userdata('name');
$template = new \PhpOffice\PhpWord\TemplateProcessor("assets/docx/PSK02.docx");


$template->setValue('nosebutharga',$get_detail[0]->df_nosebutharga);
$template->setValue('namakon',$get_detail[0]->mrk_namakon);
$template->setValue('alamatkon',$get_detail[0]->mrk_alamatkon);
$template->setValue('gred',$get_detail[0]->mrk_gred);

$template->setValue('tajukkerja',$get_detail[0]->mrk_negeri);
$template->setValue('kosprojek',number_format($get_detail[0]->mrk_kosprojek,2));
$template->setValue('tarikha',$get_detail[0]->lsk_tarikhkerjasiap);
$template->setValue('tarikhb',$get_detail[0]->mrk_tarikhjangkasiap);
$template->setValue('tarikhc',$get_detail[0]->mrk_tarikhmulatanggungcacat);
$template->setValue('tarikhd',$get_detail[0]->mrk_tarikhtamattanggungcacat);

$filename = "PSK-B".$userdata."(".$get_detail[0]->mrks_kodvot.").docx";
$template->saveAs("assets/document/".$filename,0777);
redirect(base_url("assets/document/".$filename));




