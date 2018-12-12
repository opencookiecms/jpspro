<?php

//remove slash kalau nak guna versi windows dan tutup untuk trader_mac

$docx = new DOCXTemplate(APPPATH.'libraries\PhpWords\document\jb.docx'); //for windowss
//$docx = new DOCXTemplate(APPPATH.'libraries/PhpWords/document/jb.docx'); //for mac

$docx->set('namabanks',$get_detail[0]->mrk_namabank);
$docx->set('alamatbank',$get_detail[0]->mrk_alamatbank);
$docx->set('norujukan',$get_detail[0]->mrk_rujukanbank);
$docx->set('noinsurans',$get_detail[0]->mrk_nopkk);
$docx->set('namakon',$get_detail[0]->mrk_namakon);
$docx->set('alamatkon',$get_detail[0]->mrk_alamatkon);
$docx->set('tarikhs',$get_detail[0]->mrk_tarikhmulakon);
$docx->set('luput',$get_detail[0]->mrk_nopkk);
$docx->set('slogan',$get_detail[0]->mrk_nopkk);
$docx->set('jurutera',$get_detail[0]->mrk_pegawai);
$docx->set('jawatanjuru',$get_detail[0]->mrk_jawatan);



$docx->saveAs('jb.docx');

header("Content-Type:application/msword");
header("Content-Disposition: attachment;filename=jb.docx");
readfile('jb.docx');

?>
