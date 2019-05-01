<?php

$phpWord = new \PhpOffice\PhpWord\PhpWord();

\PhpOffice\PhpWord\Settings::setTempDir('assets/tmp/');
$userdata = $this->session->userdata('name');
$template = new \PhpOffice\PhpWord\TemplateProcessor("assets/docx/KHAS01.docx");


$template->setValue('rujukantuan',$get_detail[0]->df_nosebutharga);
$template->setValue('rujukankami',$get_detail[0]->skhas_rujuktuan);
$template->setValue('gred',$get_detail[0]->mrk_gred);
$template->setValue('cat',$get_detail[0]->mrk_kategori);
$template->setValue('kursus',$get_detail[0]->mrk_khusus);
$template->setValue('NAMAKON',$get_detail[0]->mrk_namakon);
$template->setValue('nosebutharga',$get_detail[0]->df_nosebutharga);
$template->setValue('TAJUKPROJEK',$get_detail[0]->df_tajuk);
$template->setValue('NAMAJURUTERA',$get_detail[0]->skhas_pegawaikuasa);
$template->setValue('JAWATANJURUTERA',$get_detail[0]->skhas_jawatanpp);

$filename = "SuratKHAS01".$userdata."(".$get_detail[0]->mrks_kodvot.").docx";
$template->saveAs("assets/document/".$filename,0777);
redirect(base_url("assets/document/".$filename));