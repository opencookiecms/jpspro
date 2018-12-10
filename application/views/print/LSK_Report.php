<?php

//remove slash kalau nak guna versi windows dan tutup untuk trader_mac

$docx = new DOCXTemplate(APPPATH.'libraries\PhpWords\document\lsk.docx'); //for windowss
//$docx = new DOCXTemplate(APPPATH.'libraries/PhpWords/document/MRK01.docx'); //for mac
$docx->set('gred',$get_detail[0]->mrk_gred);
$docx->set('namakon',$get_detail[0]->mrk_namakon);
$docx->set('alamatkon',$get_detail[0]->mrk_alamatkon);
$docx->set('tajukkerja',$get_detail[0]->df_tajuk);
$docx->set('noinden',$get_detail[0]->mrk_noinden);
$docx->set('nosebutharga',$get_detail[0]->df_nosebutharga);
$docx->set('nopolisi',$get_detail[0]->lsk_perkeso);
$docx->set('nopi',$get_detail[0]->lsk_liability);
$docx->set('kodperuntukkan',$get_detail[0]->lsk_peruntukan);
$docx->set('hargapesanan',number_format($get_detail[0]->mrk_kosprojek,2));
$docx->set('hargasebenar',number_format($get_detail[0]->lks_hargasebenar,2));
$docx->set('tarikhmulakerja',$get_detail[0]->mrk_tarikhmulakon);
$docx->set('tarikhtamatkerja',$get_detail[0]->mrk_tarikhjangkasiap);
$docx->set('tarikhlanjutmasa',$get_detail[0]->lsk_lanjutmasa);
$docx->set('tarikhsiap',$get_detail[0]->lsk_tarikhkerjasiap);
$docx->set('tarikhp',$get_detail[0]->mrk_tarikh);
$docx->set('namapegawai',$get_detail[0]->lsk_juruteraj);
$docx->set('jawatan',$get_detail[0]->lsk_jawatanjuruteraj);
$docx->set('namajurutera',$get_detail[0]->lsk_juruterad);
$docx->set('jawatj',$get_detail[0]->lsk_jawatanjuruterad);




$docx->saveAs('MRK01.docx');

header("Content-Type:application/msword");
header("Content-Disposition: attachment;filename=MRK01.docx");
readfile('MRK01.docx');

?>
