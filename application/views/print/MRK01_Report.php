<?php
use setasign\Fpdi\Fpdi;

$nopkk = $get_detail[0]->mrk_nopkk;
$nosebutharga = $get_detail[0]->df_nosebutharga;
$kontraktor = $get_detail[0]->mrk_namakon;
$inden = $get_detail[0]->mrk_noinden;
$tajuk = strtoupper($get_detail[0]->df_tajuk);
$daerah = $get_detail[0]->mrk_daerah;
$negeri = $get_detail[0]->mrk_negeri;
$kosprojek = number_format($get_detail[0]->mrk_kosprojek,2);
$tarikhmula = $get_detail[0]->mrk_tarikhmulakon;
$tarikhjangka = $get_detail[0]->mrk_tarikhjangkasiap;
$pegawai = strtoupper($get_detail[0]->mrk_pegawai);
$jawatan = strtoupper($get_detail[0]->mrk_jawatan);
$tarikhlaporan = $get_detail[0]->mrk_tarikh;
// initiate FPDI
$pdf = new Fpdi();
// add a page
$pdf->AddPage();
// set the source file
$pdf->setSourceFile("assets/pdf/MRK-01.pdf");
// import page 1
$tplIdx = $pdf->importPage(1);
// use the imported page and place it at position 10,10 with a width of 100 mm
$pdf->useTemplate($tplIdx, 5, 5, 200);

// now write some text above the imported page
$pdf->SetFont('Arial','',12);
$pdf->SetTextColor(0,0,0);
$pdf->SetXY(75, 51);
$pdf->Write(0,$nopkk,0,1,'C');
$pdf->SetXY(75, 59);
$pdf->Write(0,$kontraktor,0,1,'C');
$pdf->SetXY(75, 67);
$pdf->Write(0,$nosebutharga,0,1,'C');
$pdf->SetXY(96, 75);
$pdf->Write(0,$inden,0,1,'C');
$pdf->SetXY(54, 80);
$pdf->MultiCell(130,7,$tajuk,0,'J');
$pdf->SetXY(82, 110);
$pdf->Write(0,$daerah,0,1,'C');
$pdf->SetXY(145, 110);
$pdf->Write(0,$negeri,0,1,'C');
$pdf->SetXY(63, 120);
$pdf->Write(0,$kosprojek,0,1,'C');
$pdf->SetXY(80, 128);
$pdf->Write(0,$tarikhmula,0,1,'C');
$pdf->SetXY(90, 136);
$pdf->Write(0,$tarikhjangka,0,1,'C');
$pdf->SetXY(60, 152);
$pdf->Write(0,$pegawai,0,1,'C');
$pdf->SetXY(148, 152);
$pdf->Write(0,$jawatan,0,1,'C');
$pdf->SetXY(158, 159);
$pdf->Write(0,$tarikhlaporan,0,1,'C');

$userdata = $this->session->userdata('name');
$filename = "MRK02-".$userdata."(".$get_detail[0]->mrks_kodvot.").pdf";
$pdf->Output('',$filename);


