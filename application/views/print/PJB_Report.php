<?php

//remove slash kalau nak guna versi windows dan tutup untuk trader_mac

$docx = new DOCXTemplate(APPPATH.'libraries\PhpWords\document\MRK01.docx'); //for windowss
//$docx = new DOCXTemplate(APPPATH.'libraries/PhpWords/document/MRK01.docx'); //for mac

$docx->set('namabank',$get_detail[0]->mrk_nopkk);
$docx->set('alamatbank',$get_detail[0]->mrk_nopkk);
$docx->set('norujukan',$get_detail[0]->mrk_nopkk);
$docx->set('noinsurans',$get_detail[0]->mrk_nopkk);
$docx->set('namakon',$get_detail[0]->mrk_nopkk);
$docx->set('alamatkon',$get_detail[0]->mrk_nopkk);
$docx->set('tarikhs',$get_detail[0]->mrk_nopkk);
$docx->set('luput',$get_detail[0]->mrk_nopkk);
$docx->set('namabank',$get_detail[0]->mrk_nopkk);



$docx->saveAs('MRK01.docx');

header("Content-Type:application/msword");
header("Content-Disposition: attachment;filename=MRK01.docx");
readfile('MRK01.docx');

?>
