<?php

//remove slash kalau nak guna versi windows dan tutup untuk trader_mac

$docx = new DOCXTemplate(APPPATH.'libraries\PhpWords\document\PWJP.docx'); //for windowss
//$docx = new DOCXTemplate(APPPATH.'libraries/PhpWords/document/jb.docx'); //for mac

$docx->set('norujukan',$get_detail[0]->ppwjp_rt);
$docx->set('kepada',$get_detail[0]->ppwjp_kepada);
$docx->set('alamat',$get_detail[0]->ppwjp_alamat);
$docx->set('pengarah',$get_detail[0]->ppwjp_kepada);
$docx->set('alamatpengarah',$get_detail[0]->ppwjp_alamat);
$docx->set('wang',$get_detail[0]->ppwjp_kos);
$docx->set('namakon',$get_detail[0]->mrk_namakon);
$docx->set('norujukan',$get_detail[0]->mrk_rujukanbank);
$docx->set('slogan',$get_detail[0]->mrk_nopkk);
$docx->set('namajurutera',$get_detail[0]->ppwjp_pegawai);
$docx->set('jawatanjurutera',$get_detail[0]->ppwjp_jawatan);



$docx->saveAs('PWJP.docx');

header("Content-Type:application/msword");
header("Content-Disposition: attachment;filename=PWJP.docx");
readfile('PWJP.docx');

?>
