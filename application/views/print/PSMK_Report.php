<?php

//remove slash kalau nak guna versi windows dan tutup untuk trader_mac


$docx = new DOCXTemplate(APPPATH.'libraries\PhpWords\document\psbc.docx'); //for windowss
//$docx = new DOCXTemplate(APPPATH.'libraries/PhpWords/document/psbc.docx'); //for mac

$docx->set('tajukkerja',$get_detail[0]->df_nosebutharga);
$docx->set('tarikha',$get_detail[0]->df_nosebutharga);
$docx->set('kosprojek',$get_detail[0]->df_nosebutharga);
$docx->set('jurutera',$get_detail[0]->mrk_pegawaipenguasa);
$docx->set('jawatanjurutera',$get_detail[0]->mrk_jawatanpp);

$docx->set('tajukkerja',$get_detail[0]->df_tajuk);
$docx->set('tarikha',$get_detail[0]->mrk_tarikhjangkasiap);
$docx->set('kosprojek',number_format($get_detail[0]->mrk_kosprojek,2));




$docx->saveAs('psbc.docx');

header("Content-Type:application/msword");
header("Content-Disposition: attachment;filename=psbc.docx");
readfile('psbc.docx');

?>
