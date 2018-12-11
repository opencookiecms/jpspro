<?php

//remove slash kalau nak guna versi windows dan tutup untuk trader_mac

$docx = new DOCXTemplate(APPPATH.'libraries\PhpWords\document\psbc.docx'); //for windowss
//$docx = new DOCXTemplate(APPPATH.'libraries/PhpWords/document/MRK01.docx'); //for mac

$docx->set('rujukantuans',$get_detail[0]->df_nosebutharga);



$docx->saveAs('psbc.docx');

header("Content-Type:application/msword");
header("Content-Disposition: attachment;filename=psbc.docx");
readfile('psbc.docx');

?>

