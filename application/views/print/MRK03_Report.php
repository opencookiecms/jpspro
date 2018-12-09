<?php
//$docx = new DOCXTemplate(APPPATH.'libraries\PhpWords\MRK03.docx'); //for windowss
$docx = new DOCXTemplate(APPPATH.'libraries/PhpWords/MRK03.docx');// for mac
$bina = $get_detail[0]->tiga_bina;
$tadbir = $get_detail[0]->tiga_tadbir;
$kemajuan = $get_detail[0]->tiga_kemajuan;
$kerangka = $get_detail[0]->tiga_kerangka;
$kerja = $get_detail[0]->tiga_kerja;
$kemasan = $get_detail[0]->tiga_kemasan;
$luar = $get_detail[0]->tiga_luar;
$kontraktor = $get_detail[0]->tiga_kontraktor;

$checkmark = "\u{2713}";
$uncheckmark= "";

$pointbina =array("bt"=>"90% - Keatas","bb"=>"75% - 89%","bs"=>"50% - 74%","bm"=>"50% kebawah");
foreach($pointbina as $x => $x_value) {
    if ($bina == $x_value)
    {
      $docx->set($x,$checkmark);
    }
    else {
    $docx->set($x,$uncheckmark);
    }
}

$pointtadbir = array("pt"=>"90% - Keatas","pb"=>"75% - 89%","ps"=>"50% - 74%","pm"=>"50% kebawah");
foreach ($pointtadbir as $keytadbir => $p_value) {
  if($tadbir == $p_value)
  {
    $docx->set($keytadbir, $checkmark);
  }
  else {
    $docx->set($keytadbir,$uncheckmark);
  }
}

$pointkemajuan = array("kt"=>"90% - Keatas","kb"=>"75% - 89%","ks"=>"50% - 74%","km"=>"50% kebawah");
foreach ($pointkemajuan as $keymaju => $k_value) {
  if($kemajuan == $k_value)
  {
    $docx->set($keymaju, $checkmark);
  }
  else
  {
    $docx->set($keymaju, $uncheckmark);
  }
}


$docx->saveAs('MRK03.docx');

header("Content-Type:application/msword");
header("Content-Disposition: attachment;filename=MRK03.docx");
readfile('MRK03.docx');

?>
