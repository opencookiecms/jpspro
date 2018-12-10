<?php

//remove slash kalau nak guna versi windows dan tutup untuk trader_mac

$docx = new DOCXTemplate(APPPATH.'libraries\PhpWords\document\MRK01.docx'); //for windowss

$docx->set('nopkk',$get_detail[0]->mrk_nopkk);
$docx->set('namakon',$get_detail[0]->mrk_namakon);
$docx->set('nosebutharga',$get_detail[0]->mrk_nokontrak);
$docx->set('noinden',$get_detail[0]->mrk_noinden);
$docx->set('daerah',$get_detail[0]->mrk_daerah);
$docx->set('negeri',$get_detail[0]->mrk_negeri);
$docx->set('kosprojek',number_format($get_detail[0]->mrk_kosprojek,2));
$docx->set('tarikhmulakon',$get_detail[0]->mrk_tarikhmulakon);
$docx->set('tarikhjgsiap',$get_detail[0]->mrk_tarikhjangkasiap);
$docx->set('namapegawai',$get_detail[0]->mrk_pegawai);
$docx->set('jawatan',$get_detail[0]->mrk_jawatan);
$docx->set('tarikhlaporan',$get_detail[0]->mrk_tarikh);



$docx->saveAs('MRK01.docx');

header("Content-Type:application/msword");
header("Content-Disposition: attachment;filename=MRK01.docx");
readfile('MRK01.docx');

?>
