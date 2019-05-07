<?php
use setasign\Fpdi\Fpdi;

// initiate FPDI
$pdf = new Fpdi();
// add a page
$pdf->AddPage();
// set the source file
$pdf->setSourceFile("assets/docx/myticket.pdf");
// import page 1
$tplIdx = $pdf->importPage(1);
// use the imported page and place it at position 10,10 with a width of 100 mm
$pdf->useTemplate($tplIdx, 5, 5, 200);

// now write some text above the imported page
$pdf->SetFont('Arial','B',16);
$pdf->SetTextColor(255, 0, 0);
$pdf->SetXY(50, 50);
$pdf->Write(0, 'Powered by FPDF.',0,1,'C');
$pdf->Cell(10,10,'Powered by FPDF.',0,1,'C');



$pdf->SetXY(50, 70);
$pdf->Write(0, "&#169");

$pdf->Output();