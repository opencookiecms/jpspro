<?php

$phpWord = new \PhpOffice\PhpWord\PhpWord();

\PhpOffice\PhpWord\Settings::setTempDir('assets/tmp/');
$userdata = $this->session->userdata('name');
$template = new \PhpOffice\PhpWord\TemplateProcessor("assets/docx/lsk.docx");

$template->setValue('gred',$get_detail[0]->mrk_gred);
$template->setValue('namakon',$get_detail[0]->mrk_namakon);
$template->setValue('alamatkon',$get_detail[0]->mrk_alamatkon);
$template->setValue('tajukkerja',$get_detail[0]->df_tajuk);
$template->setValue('noinden',$get_detail[0]->mrk_noinden);
$template->setValue('nosebutharga',$get_detail[0]->df_nosebutharga);
$template->setValue('nopolisi',$get_detail[0]->lsk_perkeso);
$template->setValue('nopi',$get_detail[0]->lsk_liability);
$template->setValue('kodperuntukkan',$get_detail[0]->lsk_peruntukan);
$template->setValue('hargapesanan',number_format($get_detail[0]->mrk_kosprojek,2));
$template->setValue('hargasebenar',number_format($get_detail[0]->lks_hargasebenar,2));
$template->setValue('tarikhmulakerja',$get_detail[0]->mrk_tarikhmulakon);
$template->setValue('tarikhtamatkerja',$get_detail[0]->mrk_tarikhjangkasiap);
$template->setValue('tarikhlanjutmasa',$get_detail[0]->lsk_lanjutmasa);
$template->setValue('tarikhsiap',$get_detail[0]->lsk_tarikhkerjasiap);
$template->setValue('tarikhp',$get_detail[0]->mrk_tarikh);
$template->setValue('namapegawai',$get_detail[0]->lsk_juruteraj);
$template->setValue('jawatan',$get_detail[0]->lsk_jawatanjuruteraj);
$template->setValue('namajurutera',$get_detail[0]->lsk_juruterad);
$template->setValue('jawatj',$get_detail[0]->lsk_jawatanjuruterad);

$template->saveAs("assets/document/LSK-".$userdata.".docx",0777);
?>
