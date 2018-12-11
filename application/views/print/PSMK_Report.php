<?php

//remove slash kalau nak guna versi windows dan tutup untuk trader_mac

$docx = new DOCXTemplate(APPPATH.'libraries\PhpWords\document\psbc.docx'); //for windowss
//$docx = new DOCXTemplate(APPPATH.'libraries/PhpWords/document/psbc.docx'); //for mac

$docx->set('rujukantuans',$get_detail[0]->df_nosebutharga);
$docx->set('namakon',$get_detail[0]->mrk_namakon);
$docx->set('alamatkon',$get_detail[0]->mrk_alamatkon);
$docx->set('gred',$get_detail[0]->mrk_gred);
$docx->set('nosebutharga',$get_detail[0]->df_nosebutharga);
$docx->set('tajukkerja',$get_detail[0]->df_nosebutharga);
$docx->set('tarikha',$get_detail[0]->df_nosebutharga);
$docx->set('kosprojek',$get_detail[0]->df_nosebutharga);
$docx->set('jurutera',$get_detail[0]->mrk_pegawaipenguasa);
$docx->set('jawatanjurutera',$get_detail[0]->mrk_jawatanpp);




$docx->saveAs('psbc.docx');

header("Content-Type:application/msword");
header("Content-Disposition: attachment;filename=psbc.docx");
readfile('psbc.docx');

?>

