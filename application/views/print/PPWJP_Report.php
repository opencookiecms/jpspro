<?php
use setasign\Fpdi\Fpdi;

$namakon = $get_detail[0]->mrk_namakon;
$tajuk = strtoupper($get_detail[0]->df_tajuk);
$sebutharga = strtoupper($get_detail[0]->df_nosebutharga);
$namajurutera = strtoupper($get_detail[0]->ppwjp_pegawai);
$jawatanjurutera = strtoupper($get_detail[0]->ppwjp_jawatan);
$kospwjp = number_format($get_detail[0]->ppwjp_kos,2);

// initiate FPDI
$pdf = new Fpdi();
// add a page
$pdf->AddPage();
// set the source file
$pdf->setSourceFile("assets/pdf/ppwjp.pdf");
// import page 1
$tplIdx = $pdf->importPage(1);
// use the imported page and place it at position 10,10 with a width of 100 mm
$pdf->useTemplate($tplIdx, 0, 0, 210);

// now write some text above the imported page

$pdf->SetFont('Times','',11);
$pdf->SetXY(46, 155);

$pdf->SetXY(57, 135);
$pdf->Write(0,"$namakon",0,1,'C');
$pdf->SetXY(57, 137);
$pdf->MultiCell(100,5,$tajuk,0,'J');


$pdf->SetXY(57, 162);
$pdf->Write(0,"$sebutharga",0,1,'C');


$pdf->SetXY(172, 201);
$pdf->Write(0,"$kospwjp",0,1,'C');



$pdf->SetXY(134, 223);
$pdf->Write(0,"$namajurutera",0,1,'C');
$pdf->SetXY(132, 225);
$pdf->MultiCell(60,5,$jawatanjurutera,0,'C');


$userdata = $this->session->userdata('name');
$filename = "PPWJP-".$userdata."(".$get_detail[0]->mrks_kodvot.").pdf";
$pdf->Output('',$filename);


