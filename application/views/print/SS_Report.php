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

if($cb1==1){
    $pdf->SetXY(133,75);
    $pdf->SetFont('ZapfDingbats','', 18);
    $pdf->Cell(4, 3, 3);
}else
{
    $pdf->SetXY(133,75);
    $pdf->SetFont('ZapfDingbats','', 18);
    $pdf->Cell(4, 3 ,'');
}

if($cb2==1){
    $pdf->SetXY(133,83);
    $pdf->SetFont('ZapfDingbats','', 18);
    $pdf->Cell(4, 3, 3);
}else
{
    $pdf->SetXY(133,83);
    $pdf->SetFont('ZapfDingbats','', 18);
    $pdf->Cell(4, 3 ,'');
}

if($cb3==1){
    $pdf->SetXY(133,92);
    $pdf->SetFont('ZapfDingbats','', 18);
    $pdf->Cell(4, 3, 3);
}else
{
    $pdf->SetXY(133,92);
    $pdf->SetFont('ZapfDingbats','', 18);
    $pdf->Cell(4, 3 ,'');
}

if($cb4==1){
    $pdf->SetXY(133,58);
    $pdf->SetFont('ZapfDingbats','', 18);
    $pdf->Cell(4, 3, 3);
}else
{
    $pdf->SetXY(133,58);
    $pdf->SetFont('ZapfDingbats','', 18);
    $pdf->Cell(4, 3 ,'');
}



 
$userdata = $this->session->userdata('name');
$filename = "Senarai_Semakan-".$userdata."(".$get_detail[0]->mrks_kodvot.").pdf";
$pdf->Output('',$filename);




