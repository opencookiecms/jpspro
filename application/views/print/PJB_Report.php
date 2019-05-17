<?php
use setasign\Fpdi\Fpdi;

$namabank = $get_detail[0]->mrk_namabank;
$alamatbank = strtoupper($get_detail[0]->mrk_alamatbank);
$rujukanbank = $get_detail[0]->mrk_rujukanbank;
$namakon = $get_detail[0]->mrk_namakon;
$alamat = $get_detail[0]->jb_alamatsurat;
$tarikhcacat = date("d-m-Y",strtotime($get_detail[0]->mrk_tarikhmulatanggungcacat));
$tarikhtamatcacat = date("d-m-Y",strtotime($get_detail[0]->mrk_tarikhtamattanggungcacat));
$namajurutera = strtoupper($get_detail[0]->mrk_pegawaipenguasa);
$jawatanjurutera = strtoupper($get_detail[0]->mrk_jawatanpp);

$slogan = strtoupper($get_slogan[0]->set_slogan);
$cogan = strtoupper($get_slogan[0]->cogankata);

// initiate FPDI
$pdf = new Fpdi();
// add a page
$pdf->AddPage();
// set the source file
$pdf->setSourceFile("assets/pdf/jb.pdf");
// import page 1
$tplIdx = $pdf->importPage(1);
// use the imported page and place it at position 10,10 with a width of 100 mm
$pdf->useTemplate($tplIdx, 0, 0, 210);

// now write some text above the imported page
$pdf->SetFont('Times','B',12);
$pdf->SetXY(23, 110);
$pdf->Write(0,"$namabank",0,1,'C');
$pdf->SetFont('Times','',12);
$pdf->SetXY(23, 112);
$pdf->MultiCell(60,5,$alamatbank,0,'J');
$pdf->SetFont('Times','B',10);
$pdf->SetXY(46, 155);
$pdf->Write(0,"$rujukanbank",0,1,'C');
$pdf->SetFont('Times','',11);
$pdf->SetXY(150, 165);
$pdf->Write(0,"$rujukanbank",0,1,'C');
$pdf->SetXY(115, 171);
$pdf->Write(0,"$namakon",0,1,'C');
$pdf->SetXY(40, 178);
$pdf->Write(0,"$alamat",0,1,'C');
$pdf->SetXY(142, 178);
$pdf->Write(0,"$tarikhcacat",0,1,'C');
$pdf->SetXY(109, 184);
$pdf->Write(0,"$tarikhtamatcacat",0,1,'C');

$pdf->SetXY(23, 248);
$pdf->Write(0,"$namajurutera",0,1,'C');
$pdf->SetXY(23, 252);
$pdf->Write(0,"$jawatanjurutera",0,1,'C');


$pdf->SetFont('Times','B',12);
$pdf->SetXY(24, 216);
$pdf->Write(0,$slogan,0,1,'C');

$pdf->SetXY(102, 214);
$pdf->SetFont('ZapfDingbats','', 11);
$pdf->Cell(4, 3 ,'~');

$pdf->SetXY(20, 214);
$pdf->SetFont('ZapfDingbats','', 11);
$pdf->Cell(4, 3 ,'}');


$pdf->SetFont('Times','B',12);
$pdf->SetXY(24, 222);
$pdf->Write(0,$cogan,0,1,'C');

$pdf->SetXY(109, 221);
$pdf->SetFont('ZapfDingbats','', 11);
$pdf->Cell(4, 3 ,'~');

$pdf->SetXY(20, 221);
$pdf->SetFont('ZapfDingbats','', 11);
$pdf->Cell(4, 3 ,'}');









$userdata = $this->session->userdata('name');
$filename = "Jaminan_Bank-".$userdata."(".$get_detail[0]->mrks_kodvot.").pdf";
$pdf->Output('',$filename);


