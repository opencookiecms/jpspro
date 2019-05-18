<?php
use setasign\Fpdi\Fpdi;

$nosebutharga = $get_detail[0]->df_nosebutharga;
$namakontraktor = strtoupper($get_detail[0]->mrk_namakon);

$norujukan = $get_detail[0]->s_rujuktuan;
$harga = number_format($get_detail[0]->swjp_wangjamin,2);
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
$pdf->setSourceFile("assets/pdf/spwjp.pdf");
// import page 1
$tplIdx = $pdf->importPage(1);
// use the imported page and place it at position 10,10 with a width of 100 mm
$pdf->useTemplate($tplIdx, 0, 0, 210);

$pdf->SetFont('Times','',12);


$pdf->SetXY(50, 73);
$pdf->Write(0,$nosebutharga,0,1,'C');



$pdf->SetFont('Times','',11);
$pdf->SetXY(48, 152);
$pdf->Write(0,"$namakontraktor",0,1,'C');

$pdf->SetXY(140, 152);
$pdf->Write(0,$nosebutharga,0,1,'C');

$pdf->SetXY(116, 145);
$pdf->MultiCell(110,5,$harga,0,'J');



$pdf->SetFont('Times','B',11);

$pdf->SetXY(24, 246);
$pdf->Write(0,"$pegawai",0,1,'C');
$pdf->SetXY(24, 250);
$pdf->Write(0,"$jawatan",0,1,'C');

$strcogan = strlen($cogan);
$strslogan = strlen($slogan);


$pdf->SetXY(20, 215);
$pdf->SetFont('ZapfDingbats','', 11);
$pdf->Cell(4, 3 ,"}");


$pdf->SetFont('Times','B',12);
$pdf->SetXY(23, 216);
$pdf->Write(0,$slogan,0,1,'C');

$pdf->SetXY(91, 214);
$pdf->SetFont('ZapfDingbats','', 11);
$pdf->Cell(4, 3 ,'~');


//slogan 25 + 20 = 45 = 57
//cogan 49 + 20 = 69 = 100

//logic defaul position is 20
//actual exxample cogan = 169 - 20 = 149
//actual example slogan 91 - 20 = 80



$pdf->SetXY(20, 221);
$pdf->SetFont('ZapfDingbats','', 11);
$pdf->Cell(4, 3 ,'}');



$pdf->SetFont('Times','B',12);
$pdf->SetXY(24, 222);
$pdf->Write(0,$cogan,0,1,'C');

$pdf->SetXY(169, 220);
$pdf->SetFont('ZapfDingbats','', 11);
$pdf->Cell(4, 3 ,'~');







$userdata = $this->session->userdata('name');
$filename = "SPWJP-".$userdata."(".$get_detail[0]->mrks_kodvot.").pdf";
$pdf->Output('',$filename);

