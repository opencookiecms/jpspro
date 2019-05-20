<?php
use setasign\Fpdi\Fpdi;

$norujukan = $get_detail[0]->df_nosebutharga;
$namakon = $get_detail[0]->mrk_namakon;
$alamatkon = strtoupper($get_detail[0]->mrk_alamatkon);
$gred = $get_detail[0]->mrk_gred;
$tajuk = strtoupper($get_detail[0]->df_tajuk);
$kossebenar = number_format($get_detail[0]->lks_hargasebenar,2);
$tarikhsiap = $get_detail[0]->mrk_tarikhsiapsebenar;
$tarikhambil = $get_detail[0]->mrk_tarikhambikmilik;
$tarikhcacat = $get_detail[0]->mrk_tarikhmulatanggungcacat;
$tarikhtamatcacat = $get_detail[0]->mrk_tarikhtamattanggungcacat;


// initiate FPDI
$pdf = new Fpdi();
// add a page
$pdf->AddPage();
// set the source file
$pdf->setSourceFile("assets/pdf/PKS02.pdf");
// import page 1
$tplIdx = $pdf->importPage(1);
// use the imported page and place it at position 10,10 with a width of 100 mm
$pdf->useTemplate($tplIdx, 0, 0, 210);

// now write some text above the imported page
$pdf->SetFont('Times','',11);


$pdf->SetXY(32, 52);
$pdf->Write(0,$norujukan,0,1,'C');

$pdf->SetFont('Times','B',11);

$pdf->SetXY(32, 85);
$pdf->Write(0,$namakon,0,1,'C');

$pdf->SetFont('Times','',11);

$pdf->SetXY(32, 87);
$pdf->MultiCell(70,5,$alamatkon,0,'J');

$pdf->SetFont('Times','B',12);
$pdf->SetXY(66, 118);
$pdf->Write(0,"Gred ".$gred,0,1,'C');

$pdf->SetFont('Times','',12);
$pdf->SetXY(52, 127);
$pdf->Write(0,$norujukan,0,1,'C');

$pdf->SetFont('Times','',11);
$pdf->SetXY(47, 135);
$pdf->MultiCell(120,5,$tajuk.".",0,'J');

$pdf->SetFont('Times','',11);
$pdf->SetXY(27, 166);
$pdf->Write(0,$kossebenar,0,1,'C');

$pdf->SetXY(122, 166);
$pdf->Write(0,$tarikhsiap,0,1,'C');

$pdf->SetXY(27, 173);
$pdf->Write(0,$tarikhambil,0,1,'C');


$userdata = $this->session->userdata('name');
$filename = "PSK02-".$userdata."(".$get_detail[0]->mrks_kodvot.").pdf";
$pdf->Output('',$filename);




