<?php

$phpWord = new \PhpOffice\PhpWord\PhpWord();

\PhpOffice\PhpWord\Settings::setTempDir('assets/tmp/');
$userdata = $this->session->userdata('name');
$template = new \PhpOffice\PhpWord\TemplateProcessor("assets/docx/PKK02docx.docx");

$template->setValue('nosebutharga',$get_detail[0]->df_nosebutharga);
$template->setValue('rujukantuan',$get_detail[0]->s_rujuktuan);
$template->setValue('JMRK',$get_detail[0]->s_jenisborang);
$template->setValue('NAMAKON',$get_detail[0]->df_tajuk);
$template->setValue('nopkk',$get_detail[0]->mrk_tarikhmulatanggungcacat);
$template->setValue('NAMAJURUTERA',$get_detail[0]->s_pegawaikuasa);
$template->setValue('JAWATAN',$get_detail[0]->s_jawatanpp);


$filename = "Surat MRK02".$userdata."(".$get_detail[0]->mrks_kodvot.").docx";
$template->saveAs("assets/document/".$filename,0777);
redirect(base_url("assets/document/".$filename));
