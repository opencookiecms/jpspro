<?php
$docx = new DOCXTemplate(APPPATH.'libraries\PhpWords\MRK03.docx');
$bina = $get_detail[0]->tiga_bina;
$tadbir = $get_detail[0]->tiga_tadbir;
$kemajuan = $get_detail[0]->tiga_kemajuan;
$kerangka = $get_detail[0]->tiga_kerangka;
$kerja = $get_detail[0]->tiga_kerja;
$kemasan = $get_detail[0]->tiga_kemasan;
$luar = $get_detail[0]->tiga_luar;
$kontraktor = $get_detail[0]->tiga_kontraktor;

$checkmark = "\u{2713}";
$uncheckmar= "";

$pointbina =array("bt"=>"90% - Keatas","bb"=>"75% - 89%","bs"=>"50% - 74%","bm"=>"50% kebawah");
foreach($pointbina as $x => $x_value) {
    if ($bina == $x_value)
    {
      $docx->set($x,$checkmark);
    }
    else {
    $docx->set($x,$uncheckmar);
    }
}





$docx->saveAs('MRK03.docx');

header("Content-Type:application/msword");
header("Content-Disposition: attachment;filename=MRK03.docx");
readfile('MRK03.docx');

?>
