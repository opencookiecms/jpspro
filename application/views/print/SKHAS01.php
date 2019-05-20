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

$tarikh = $get_detail[0]->mrk_tarikhtamattanggungcacat;

$pegawai = strtoupper($get_detail[0]->skhas_pegawaikuasa);
$jawatan = strtoupper($get_detail[0]->skhas_jawatanpp);
$slogan = strtoupper($get_slogan[0]->set_slogan);
$cogan = strtoupper($get_slogan[0]->cogankata);
// initiate FPDI
$pdf = new Fpdi();
// add a page❝ ❞
$pdf->AddPage();
// set the source file❞
$pdf->setSourceFile("assets/pdf/skhas01.pdf");
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

$pdf->SetXY(54, 136);
$pdf->Write(0,"$gred",0,1,'C');

$pdf->SetXY(90, 136);
$pdf->Write(0,"$kategori",0,1,'C');

$pdf->SetXY(135, 136);
$pdf->Write(0,"$khusus",0,1,'C');


$pdf->SetFont('Times','',11);
$pdf->SetXY(63, 158);
$pdf->Write(0,"$namakontraktor",0,1,'C');

$pdf->SetXY(63, 165);
$pdf->Write(0,$nosebutharga,0,1,'C');

$pdf->SetXY(63, 169);
$pdf->MultiCell(110,5,$tajuk,0,'J');



$pdf->SetFont('Times','B',11);

$pdf->SetXY(22, 246);
$pdf->Write(0,"$pegawai",0,1,'C');
$pdf->SetXY(22, 250);
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
$filename = "PKK01-".$userdata."(".$get_detail[0]->mrks_kodvot.").pdf";
$pdf->Output('',$filename);

