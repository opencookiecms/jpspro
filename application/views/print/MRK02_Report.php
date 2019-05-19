

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
$tarikhjangka = date("d-m-Y",strtotime($get_detail[0]->mrk_tarikhjangkasiap));
$tarikhmula = date("d-m-Y",strtotime($get_detail[0]->mrk_tarikhmulakon));
$kemajuan = $get_detail[0]->mrk_majukerja;
$tarikhsehigga = date("d-m-Y",strtotime($get_detail[0]->mrk_majukerjasebenar));
$nokemajuan = $get_detail[0]->mrk_bayarmajusemasa;
$bayarankemajuan = number_format($get_detail[0]->mrk_jumlahbayarmaju,2);
$disebabkanoleh = $get_detail[0]->mrk_sebaboleh;
$lainlain = $get_detail[0]->mrk_lainlain;
$lanjutmasa = $get_detail[0]->mrk_lanjutmasa;
$lanjutmasadari = date("d-m-Y",strtotime($get_detail[0]->mrk_dari));
$lanjuthingga = date("d-m-Y",strtotime($get_detail[0]->mrk_sehingga));
$disebabkan = $get_detail[0]->mrk_disebab;
$ladhari = number_format($get_detail[0]->mrk_ladsehari,2);
$laddari = date("d-m-Y",strtotime($get_detail[0]->mrk_laddari));
$ladsehingga = date("d-m-Y",strtotime($get_detail[0]->mrk_ladsehingga));
$tarikhkerjaxsiap = date("d-m-Y",strtotime($get_detail[0]->mrk_perakukerjataksiap));
$projekmansuh = date("d-m-Y",strtotime($get_detail[0]->mrk_projekmansuh));
$tarikhlaporan = date("d-m-Y",strtotime($get_detail[0]->mrk_tarikhlaporan));
$jawatan = strtoupper($get_detail[0]->mrk_jawatan);
$pegawai = strtoupper($get_detail[0]->mrk_pegawai);

$c1 = $get_detail[0]->mrk_modal;
$c2 = $get_detail[0]->mrk_bahan;
$c3 = $get_detail[0]->mrk_pekerja;
$c4 = $get_detail[0]->mrk_tapak;
$c5 = $get_detail[0]->mrk_cuaca;



// initiate FPDI
$pdf = new Fpdi();
// add a page
$pdf->AddPage();
// set the source file
$pdf->setSourceFile("assets/pdf/MRK-02.pdf");
// import page 1
$tplIdx = $pdf->importPage(1);
// use the imported page and place it at position 10,10 with a width of 100 mm
$pdf->useTemplate($tplIdx, 5, 5, 200);

// now write some text above the imported page
$pdf->SetFont('Times','',11);
$pdf->SetTextColor('black');
$pdf->SetXY(73, 36);
$pdf->Write(0,$nopkk,0,1,'C');
$pdf->SetXY(73, 42);
$pdf->Write(0,$kontraktor,0,1,'C');
$pdf->SetXY(73, 48);
$pdf->Write(0,$nosebutharga,0,1,'C');
$pdf->SetXY(77, 55);
$pdf->Write(0,$inden,0,1,'C');
$pdf->SetXY(48, 58);
$pdf->MultiCell(130,5,$tajuk,0,'J');
$pdf->SetXY(63, 85);
$pdf->Write(0,$kosprojek,0,1,'C');
$pdf->SetXY(132, 85);
$pdf->Write(0,$tarikhmula,0,1,'C');
$pdf->SetXY(118, 91);
$pdf->Write(0,$tarikhjangka,0,1,'C');
$pdf->SetXY(92, 105);
$pdf->Write(0,$kemajuan."%",0,1,'C');
$pdf->SetXY(110, 111);
$pdf->Write(0,$tarikhsehigga,0,1,'C');
$pdf->SetXY(90, 117);
$pdf->Write(0,$nokemajuan,0,1,'C');
$pdf->SetXY(157, 117);
$pdf->Write(0,$bayarankemajuan,0,1,'C');
$pdf->SetXY(114, 154);
$pdf->MultiCell(80,4,$disebabkanoleh,0,'J');
$pdf->SetXY(68, 167);
$pdf->MultiCell(120,5,$lainlain,0,'J');
$pdf->SetXY(65, 182);
$pdf->Write(0,$lanjutmasa,0,1,'C');
$pdf->SetXY(90, 182);
$pdf->Write(0,$lanjutmasadari,0,1,'C');
$pdf->SetXY(140, 182);
$pdf->Write(0,$lanjuthingga,0,1,'C');
$pdf->SetXY(53, 187);
$pdf->MultiCell(120,4,$disebabkan,0,'J');
$pdf->SetXY(67, 202);
$pdf->Write(0,$ladhari,0,1,'C');
$pdf->SetXY(112, 202);
$pdf->Write(0,$laddari,0,1,'C');
$pdf->SetXY(154, 202);
$pdf->Write(0,$ladsehingga,0,1,'C');
$pdf->SetXY(112, 208);
$pdf->Write(0,$tarikhkerjaxsiap,0,1,'C');
$pdf->SetXY(90, 214);
$pdf->Write(0,$projekmansuh,0,1,'C');
$pdf->SetXY(114, 245);
$pdf->Write(0,$tarikhkerjaxsiap,0,1,'C');
$pdf->SetXY(41, 239);
$pdf->Write(0,$pegawai,0,1,'C');
$pdf->SetXY(41, 245);
$pdf->Write(0,$jawatan,0,1,'C');




///Checkbox area////////////////////////////
if($c1 == 1)
{
  $pdf->SetXY(81, 131);
  $pdf->SetFont('ZapfDingbats','', 15);
  $pdf->Cell(4, 3, 7);
}
else{
  $pdf->SetXY(81, 131);
  $pdf->SetFont('ZapfDingbats','', 15);
  $pdf->Cell(4, 3);
}

if($c2 == 1)
{
  $pdf->SetXY(81, 137);
  $pdf->SetFont('ZapfDingbats','', 15);
  $pdf->Cell(4, 3, 7);
}
else{
  $pdf->SetXY(81, 137);
  $pdf->SetFont('ZapfDingbats','', 15);
  $pdf->Cell(4, 3);
}

if($c3 == 1)
{
  $pdf->SetXY(81, 144);
  $pdf->SetFont('ZapfDingbats','', 15);
  $pdf->Cell(4, 3, 7);
}
else{
  $pdf->SetXY(81, 144);
  $pdf->SetFont('ZapfDingbats','', 15);
  $pdf->Cell(4, 3);
}

if($c4 == 1)
{
  $pdf->SetXY(81, 150);
  $pdf->SetFont('ZapfDingbats','', 15);
  $pdf->Cell(4, 3, 7);
}
else{
  $pdf->SetXY(81, 150);
  $pdf->SetFont('ZapfDingbats','', 15);
  $pdf->Cell(4, 3);
}

if($c5 == 1)
{
  $pdf->SetXY(81, 156);
  $pdf->SetFont('ZapfDingbats','', 15);
  $pdf->Cell(4, 3, 7);
}
else{
  $pdf->SetXY(81, 156);
  $pdf->SetFont('ZapfDingbats','', 15);
  $pdf->Cell(4, 3);
}
///Checkbox area////////////////////////////

$userdata = $this->session->userdata('name');
$filename = "MRK02-".$userdata."(".$get_detail[0]->mrks_kodvot.").pdf";
$pdf->Output('',$filename);


