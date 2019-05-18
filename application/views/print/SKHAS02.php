<?php
use setasign\Fpdi\Fpdi;

$nosebutharga = $get_detail[0]->df_nosebutharga;
$namakontraktor = strtoupper($get_detail[0]->mrk_namakon);
$kategori = $get_detail[0]->mrk_kategori;
$gred =  $get_detail[0]->mrk_gred;
$khusus = $get_detail[0]->mrk_khusus;
$norujukan = $get_detail[0]->s_rujuktuan;
$tajuk = strtoupper($get_detail[0]->df_tajuk);
$rujukantuan = strtoupper($get_detail[0]->skhas_rujuktuan);

$tarikh = date("d-m-Y",strtotime($get_detail[0]->mrk_tarikhtamattanggungcacat));

$pegawai = strtoupper($get_detail[0]->skhas_pegawaikuasa);
$jawatan = strtoupper($get_detail[0]->skhas_jawatanpp);
$slogan = strtoupper($get_slogan[0]->set_slogan);
$cogan = strtoupper($get_slogan[0]->cogankata);
// initiate FPDI
$pdf = new Fpdi();
// add a page❝ ❞
$pdf->AddPage();
// set the source file❞
$pdf->setSourceFile("assets/pdf/skhas02.pdf");
// import page 1
$tplIdx = $pdf->importPage(1);
// use the imported page and place it at position 10,10 with a width of 100 mm
$pdf->useTemplate($tplIdx, 0, 0, 210);

$pdf->SetFont('Times','',12);

$pdf->SetXY(50, 76);
$pdf->Write(0,$rujukantuan,0,1,'C');
$pdf->SetXY(50, 81);
$pdf->Write(0,$nosebutharga,0,1,'C');

// now write some text above the imported page
$pdf->SetFont('Times','B',12);

$pdf->SetXY(54, 145);
$pdf->Write(0,"$gred",0,1,'C');

$pdf->SetXY(100, 145);
$pdf->Write(0,"$kategori",0,1,'C');

$pdf->SetXY(156, 145);
$pdf->Write(0,"$khusus",0,1,'C');


$pdf->SetFont('Times','',11);
$pdf->SetXY(63, 167);
$pdf->Write(0,"$namakontraktor",0,1,'C');

$pdf->SetXY(63, 174);
$pdf->Write(0,$nosebutharga,0,1,'C');

$pdf->SetXY(63, 179);
$pdf->MultiCell(110,5,$tajuk,0,'J');



$pdf->SetFont('Times','B',11);

$pdf->SetXY(22, 261);
$pdf->Write(0,"$pegawai",0,1,'C');
$pdf->SetXY(22, 265);
$pdf->Write(0,"$jawatan",0,1,'C');



$pdf->SetXY(20, 230);
$pdf->SetFont('ZapfDingbats','', 11);
$pdf->Cell(4, 3 ,"}");


$pdf->SetFont('Times','B',12);
$pdf->SetXY(23, 232);
$pdf->Write(0,$slogan,0,1,'C');

$pdf->SetXY(91, 230);
$pdf->SetFont('ZapfDingbats','', 11);
$pdf->Cell(4, 3 ,'~');



$pdf->SetXY(20, 238);
$pdf->SetFont('ZapfDingbats','', 11);
$pdf->Cell(4, 3 ,'}');



$pdf->SetFont('Times','B',12);
$pdf->SetXY(24, 240);
$pdf->Write(0,$cogan,0,1,'C');

$pdf->SetXY(169, 238);
$pdf->SetFont('ZapfDingbats','', 11);
$pdf->Cell(4, 3 ,'~');







$userdata = $this->session->userdata('name');
$filename = "PKK01-".$userdata."(".$get_detail[0]->mrks_kodvot.").pdf";
$pdf->Output('',$filename);

