<?php
use setasign\Fpdi\Fpdi;



// initiate FPDI
$pdf = new Fpdi();
// add a page
$pdf->AddPage();
// set the source file
$pdf->setSourceFile("assets/pdf/SS.pdf");
// import page 1
$tplIdx = $pdf->importPage(1);
// use the imported page and place it at position 10,10 with a width of 100 mm
$pdf->useTemplate($tplIdx, 0, 0, 210);


$cb1 = $get_detail[0]->cb1; 
$cb2 = $get_detail[0]->cb2; 
$cb3 = $get_detail[0]->cb3; 
$cb4 = $get_detail[0]->cb4; 
$cb5 = $get_detail[0]->cb5; 
$cb6 = $get_detail[0]->cb6; 
$cb7 = $get_detail[0]->cb7; 
$cb8 = $get_detail[0]->cb8; 
$cb9 = $get_detail[0]->cb9; 
$cb10 = $get_detail[0]->cb10; 
$cb11 = $get_detail[0]->cb11; 
$cb12 = $get_detail[0]->cb12; 
$cb13 = $get_detail[0]->cb13; 
$cb14 = $get_detail[0]->cb14; 
$cb15 = $get_detail[0]->cb15; 
$cb16 = $get_detail[0]->cb16; 
$cb17 = $get_detail[0]->cb17; 
$cb18 = $get_detail[0]->cb18; 

$disediakan = strtoupper($get_detail[0]->ss_disediakan);
$tarikh = $get_detail[0]->ss_date;

if($cb1==1){
    $pdf->SetXY(133,58);
    $pdf->SetFont('ZapfDingbats','', 18);
    $pdf->Cell(4, 3, 3);
}

if($cb2==1){
    $pdf->SetXY(133,67);
    $pdf->SetFont('ZapfDingbats','', 18);
    $pdf->Cell(4, 3, 3);
}

if($cb3==1){
    $pdf->SetXY(133,75);
    $pdf->SetFont('ZapfDingbats','', 18);
    $pdf->Cell(4, 3, 3);
}

if($cb4==1){
    $pdf->SetXY(133,83);
    $pdf->SetFont('ZapfDingbats','', 18);
    $pdf->Cell(4, 3, 3);
}


if($cb5==1){
    $pdf->SetXY(133,92);
    $pdf->SetFont('ZapfDingbats','', 18);
    $pdf->Cell(4, 3, 3);
}

if($cb6==1){
    $pdf->SetXY(133,101);
    $pdf->SetFont('ZapfDingbats','', 18);
    $pdf->Cell(4, 3, 3);
}

if($cb7==1){
    $pdf->SetXY(133,110);
    $pdf->SetFont('ZapfDingbats','', 18);
    $pdf->Cell(4, 3, 3);
}

if($cb8==1){
    $pdf->SetXY(133,119);
    $pdf->SetFont('ZapfDingbats','', 18);
    $pdf->Cell(4, 3, 3);
}

if($cb9==1){
    $pdf->SetXY(133,128);
    $pdf->SetFont('ZapfDingbats','', 18);
    $pdf->Cell(4, 3, 3);
}

if($cb10==1){
    $pdf->SetXY(133,142);
    $pdf->SetFont('ZapfDingbats','', 18);
    $pdf->Cell(4, 3, 3);
}

if($cb11==1){
    $pdf->SetXY(133,151);
    $pdf->SetFont('ZapfDingbats','', 18);
    $pdf->Cell(4, 3, 3);
}

if($cb12==1){
    $pdf->SetXY(133,160);
    $pdf->SetFont('ZapfDingbats','', 18);
    $pdf->Cell(4, 3, 3);
}

if($cb13==1){
    $pdf->SetXY(133,168);
    $pdf->SetFont('ZapfDingbats','', 18);
    $pdf->Cell(4, 3, 3);
}

if($cb14==1){
    $pdf->SetXY(133,178);
    $pdf->SetFont('ZapfDingbats','', 18);
    $pdf->Cell(4, 3, 3);
}

if($cb15==1){
    $pdf->SetXY(133,186);
    $pdf->SetFont('ZapfDingbats','', 18);
    $pdf->Cell(4, 3, 3);
}

if($cb16==1){
    $pdf->SetXY(133,195);
    $pdf->SetFont('ZapfDingbats','', 18);
    $pdf->Cell(4, 3, 3);
}

$pdf->SetFont('Times','', 12);

$pdf->SetXY(53,220);
$pdf->Write(0,$disediakan,0,1,'C');

$pdf->SetXY(156,220);
$pdf->Write(0,$tarikh,0,1,'C');













 
$userdata = $this->session->userdata('name');
$filename = "Senarai_Semakan-".$userdata."(".$get_detail[0]->mrks_kodvot.").pdf";
$pdf->Output('',$filename);




