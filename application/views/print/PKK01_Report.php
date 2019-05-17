<?php
use setasign\Fpdi\Fpdi;

$nosebutharga = $get_detail[0]->df_nosebutharga;
$namakontraktor = strtoupper($get_detail[0]->mrk_namakon);
$inden = $get_detail[0]->mrk_noinden;
$jenismrk =  $get_detail[0]->s_jenisborang;
$nopkk = $get_detail[0]->mrk_nopkk;
$norujukan = $get_detail[0]->s_rujuktuan;

$pegawai = strtoupper($get_detail[0]->s_pegawaikuasa);
$jawatan = strtoupper($get_detail[0]->s_jawatanpp);

$slogan = strtoupper($get_slogan[0]->set_slogan);
$cogan = strtoupper($get_slogan[0]->cogankata);

// initiate FPDI
$pdf = new Fpdi();
// add a page
$pdf->AddPage();
// set the source file
$pdf->setSourceFile("assets/pdf/spkk1.pdf");
// import page 1
$tplIdx = $pdf->importPage(1);
// use the imported page and place it at position 10,10 with a width of 100 mm
$pdf->useTemplate($tplIdx, 0, 0, 210);

// now write some text above the imported page
$pdf->SetFont('Times','',11);

$pdf->SetXY(90, 149);
$pdf->Write(0,"$jenismrk",0,1,'C');

$pdf->SetXY(64, 154);
$pdf->Write(0,"$namakontraktor",0,1,'C');

$pdf->SetXY(95, 159);
$pdf->Write(0,"$nopkk"."  /  ".$norujukan,0,1,'C');

$pdf->SetFont('Times','B',11);

$pdf->SetXY(94, 175);
$pdf->Write(0,"$jenismrk",0,1,'C');

$pdf->SetXY(28, 227);
$pdf->Write(0,"$pegawai",0,1,'C');
$pdf->SetXY(28, 232);
$pdf->Write(0,"$jawatan",0,1,'C');


$pdf->SetFont('Times','B',12);
$pdf->SetXY(30, 198);
$pdf->Write(0,$slogan,0,1,'C');

$pdf->SetXY(108, 196);
$pdf->SetFont('ZapfDingbats','', 11);
$pdf->Cell(4, 3 ,'~');

$pdf->SetXY(26, 196);
$pdf->SetFont('ZapfDingbats','', 11);
$pdf->Cell(4, 3 ,'}');


$pdf->SetFont('Times','B',12);
$pdf->SetXY(30, 205);
$pdf->Write(0,$cogan,0,1,'C');

$pdf->SetXY(115, 203);
$pdf->SetFont('ZapfDingbats','', 11);
$pdf->Cell(4, 3 ,'~');

$pdf->SetXY(26, 204);
$pdf->SetFont('ZapfDingbats','', 11);
$pdf->Cell(4, 3 ,'}');


$userdata = $this->session->userdata('name');
$filename = "PKK01-".$userdata."(".$get_detail[0]->mrks_kodvot.").pdf";
$pdf->Output('',$filename);


