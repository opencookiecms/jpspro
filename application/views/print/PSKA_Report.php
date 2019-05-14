<?php
use setasign\Fpdi\Fpdi;

$norujukan = $get_detail[0]->df_nosebutharga;

// initiate FPDI
$pdf = new Fpdi();
// add a page
$pdf->AddPage();
// set the source file
$pdf->setSourceFile("assets/pdf/PSK01.pdf");
// import page 1
$tplIdx = $pdf->importPage(1);
// use the imported page and place it at position 10,10 with a width of 100 mm
$pdf->useTemplate($tplIdx, 0, 0, 210);

// now write some text above the imported page
$pdf->SetFont('Times','',11);
$pdf->SetTextColor('black');

$pdf->SetXY(32, 50);
$pdf->Write(0,$norujukan,0,1,'C');

$userdata = $this->session->userdata('name');
$filename = "PSK01-".$userdata."(".$get_detail[0]->mrks_kodvot.").pdf";
$pdf->Output('',$filename);






