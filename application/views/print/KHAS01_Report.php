<?php

//remove slash kalau nak guna versi windows dan tutup untuk trader_mac

$docx = new DOCXTemplate(APPPATH.'libraries\PhpWords\document\KHAS01.docx'); //for windowss
//$docx = new DOCXTemplate(APPPATH.'libraries/PhpWords/document/jb.docx'); //for mac

$docx->set('rujukantuan',$get_detail[0]->skhas_rujuktuan);
$docx->set('rujukankami',$get_detail[0]->ppwjp_kepada);
$docx->set('gred',$get_detail[0]->ppwjp_alamat);
$docx->set('cat',$get_detail[0]->ppwjp_kepada);
$docx->set('kursus',$get_detail[0]->ppwjp_alamat);
$docx->set('namakon',$get_detail[0]->ppwjp_kos);
$docx->set('nosebutharga',$get_detail[0]->mrk_namakon);
$docx->set('tajukprojek',$get_detail[0]->mrk_rujukanbank);
$docx->set('slogan',$get_detail[0]->mrk_nopkk);
$docx->set('namajurutera',$get_detail[0]->skhas_pegawaikuasa);
$docx->set('jawatanjurutera',$get_detail[0]->skhas_jawatanpp);



$docx->saveAs('KHAS01.docx');

header("Content-Type:application/msword");
header("Content-Disposition: attachment;filename=KHAS01.docx");
readfile('KHAS01.docx');

?>
