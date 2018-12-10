<?php

//remove slash kalau nak guna versi windows dan tutup untuk trader_mac

$docx = new DOCXTemplate(APPPATH.'libraries\PhpWords\document\PSK01.docx'); //for windowss
//$docx = new DOCXTemplate(APPPATH.'libraries/PhpWords/document/MRK01.docx'); //for mac

$docx->set('nosebutharga',$get_detail[0]->df_nosebutharga);
$docx->set('namakon',$get_detail[0]->mrk_namakon);
$docx->set('alamatkon',$get_detail[0]->mrk_alamatkon);
$docx->set('gred',$get_detail[0]->mrk_gred);

$docx->set('tajukkerja',$get_detail[0]->mrk_negeri);
$docx->set('kosprojek',number_format($get_detail[0]->mrk_kosprojek,2));
$docx->set('tarikh',$get_detail[0]->lsk_tarikhkerjasiap);
$docx->set('tarikhs',$get_detail[0]->mrk_tarikhjangkasiap);




$docx->saveAs('PSK01.docx');

header("Content-Type:application/msword");
header("Content-Disposition: attachment;filename=PSK01.docx");
readfile('PSK01.docx');

?>
