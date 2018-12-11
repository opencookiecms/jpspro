<?php

//remove slash kalau nak guna versi windows dan tutup untuk trader_mac

//$docx = new DOCXTemplate(APPPATH.'libraries\PhpWords\document\PSK02.docx'); //for windowss
$docx = new DOCXTemplate(APPPATH.'libraries/PhpWords/document/PSK02.docx'); //for mac

$docx->set('nosebutharga',$get_detail[0]->df_nosebutharga);
$docx->set('namakon',$get_detail[0]->mrk_namakon);
$docx->set('alamatkon',$get_detail[0]->mrk_alamatkon);
$docx->set('gred',$get_detail[0]->mrk_gred);

$docx->set('tajukkerja',$get_detail[0]->mrk_negeri);
$docx->set('kosprojek',number_format($get_detail[0]->mrk_kosprojek,2));
$docx->set('tarikha',$get_detail[0]->lsk_tarikhkerjasiap);
$docx->set('tarikhb',$get_detail[0]->mrk_tarikhjangkasiap);
$docx->set('tarikhc',$get_detail[0]->mrk_tarikhmulatanggungcacat);
$docx->set('tarikhd',$get_detail[0]->mrk_tarikhtamattanggungcacat);





$docx->saveAs('PSK02.docx');

header("Content-Type:application/msword");
header("Content-Disposition: attachment;filename=PSK02.docx");
readfile('PSK02.docx');

?>
