<?php
use setasign\Fpdi\Fpdi;


$nopkk = $get_detail[0]->mrk_nopkk;
$kontraktors = $get_detail[0]->mrk_namakon;

//$alamat = "NO. F-617 KAMPUNG HUTAN GELAM, JALAN BATU LINTANG TIKAM BATU 08600 Sungai Petani Kedah Darul Aman";
$inden = $get_detail[0]->mrk_noinden;
$gred = $get_detail[0]->mrk_gred;
$nosebutharga = $get_detail[0]->df_nosebutharga;


$kosprojek = number_format($get_detail[0]->mrk_kosprojek,2);
$kossebenar = number_format($get_detail[0]->lks_hargasebenar,2);
$tajuk = strtoupper($get_detail[0]->df_tajuk);

$ladsehari = $get_detail[0]->mrk_ladsehari;
$laddari = date("d-m-Y",strtotime($get_detail[0]->mrk_laddari));
$ladhingga = date("d-m-Y",strtotime($get_detail[0]->mrk_ladsehingga));

$tarikhmula = date("d-m-Y",strtotime($get_detail[0]->mrk_tarikhmulakon));
$tarikhtamat = date("d-m-Y",strtotime($get_detail[0]->mrk_tarikhjangkasiap));
$tarikhlanjutmasa = date("d-m-Y",strtotime($get_detail[0]->lsk_lanjutmasa));
$tarikhsempurna = date("d-m-Y",strtotime($get_detail[0]->lsk_tarikhkerjasiap));

$pegawai = strtoupper($get_detail[0]->mrk_pegawai);
$jawatan = strtoupper($get_detail[0]->mrk_jawatan);
$tarikah = date("d-m-Y",strtotime($get_detail[0]->tiga_tarikah));
$ulasan = $get_detail[0]->mrk_ulasan;

// initiate FPDI
$pdf = new Fpdi();
// add a page
$pdf->AddPage();
// set the source file
$pdf->setSourceFile("assets/pdf/MRK03.pdf");
// import page 1
$tplIdx = $pdf->importPage(1);
// use the imported page and place it at position 10,10 with a width of 100 mm
$pdf->useTemplate($tplIdx, 0, 0, 210);


$pdf->SetFont('Times','',11);
$pdf->SetTextColor('black');

$pdf->SetXY(58,31);
$pdf->Write(0,$nopkk,0,1,'C'); 

$pdf->SetXY(58,41);
$pdf->Write(0,$kontraktors,0,1,'C');

$pdf->SetXY(62, 49);
$pdf->Write(0,$nosebutharga,0,1,'C');

$pdf->SetXY(63, 55);
$pdf->Write(0,$inden,0,1,'C');

$pdf->SetXY(50, 59);
$pdf->MultiCell(120,5,$tajuk,0,'J');

$pdf->SetXY(58, 83);
$pdf->Write(0,$kosprojek,0,1,'C');

$pdf->SetXY(110, 83);
$pdf->Write(0,$kossebenar,0,1,'C');


$pdf->SetXY(60, 90);
$pdf->Write(0,$tarikhmula,0,1,'C');

$pdf->SetXY(60, 96);
$pdf->Write(0,$tarikhtamat,0,1,'C');

$pdf->SetXY(62, 101);
$pdf->Write(0,$tarikhlanjutmasa,0,1,'C');

$pdf->SetXY(122, 101);
$pdf->Write(0,$tarikhsempurna,0,1,'C');


$pdf->SetXY(67, 106);
$pdf->Write(0,$ladsehari,0,1,'C');

$pdf->SetXY(97, 106);
$pdf->Write(0,$laddari,0,1,'C');

$pdf->SetXY(129, 106);
$pdf->Write(0,$ladhingga,0,1,'C');


$pdf->SetXY(84, 210);
$pdf->MultiCell(110,5,$ulasan,0,'J');

$pdf->SetFont('Times','',12);
$pdf->SetTextColor('black');
$pdf->SetXY(44, 246);
$pdf->Write(0,$pegawai,0,1,'C');
$pdf->SetXY(44, 255);
$pdf->Write(0,$jawatan,0,1,'C');

$pdf->SetXY(134, 246);
$pdf->Write(0,$tarikah,0,1,'C');


$bina = $get_detail[0]->tiga_bina;
$tadbir = $get_detail[0]->tiga_tadbir;
$kemajuan = $get_detail[0]->tiga_kemajuan;
$kerangka = $get_detail[0]->tiga_kerangka;
$kerja = $get_detail[0]->tiga_kerja;
$kemasan = $get_detail[0]->tiga_kemasan;
$luar = $get_detail[0]->tiga_luar;
$kontraktor = $get_detail[0]->tiga_kontraktor;

switch ($bina) {
  case '90% - Keatas':
    $pdf->SetXY(90,134);
    $pdf->SetFont('ZapfDingbats','', 15);
    $pdf->Cell(4, 3, 7);
    break;
  case '75% - 89%':
    $pdf->SetXY(112,134);
    $pdf->SetFont('ZapfDingbats','', 15);
    $pdf->Cell(4, 3, 7);
    break;
  case '50% - 74%':
    $pdf->SetXY(133,134);
    $pdf->SetFont('ZapfDingbats','', 15);
    $pdf->Cell(4, 3, 7);
    break;
  case '50% kebawah':
    $pdf->SetXY(155,134);
    $pdf->SetFont('ZapfDingbats','', 15);
    $pdf->Cell(4, 3, 7);
    break;
  
  default:
    # code...
    break;
}

switch ($tadbir) {
  case '90% - Keatas':
    $pdf->SetXY(90,142);
    $pdf->SetFont('ZapfDingbats','', 15);
    $pdf->Cell(4, 3, 7);
    break;
  case '75% - 89%':
    $pdf->SetXY(112,142);
    $pdf->SetFont('ZapfDingbats','', 15);
    $pdf->Cell(4, 3, 7);
    break;
  case '50% - 74%':
    $pdf->SetXY(133,142);
    $pdf->SetFont('ZapfDingbats','', 15);
    $pdf->Cell(4, 3, 7);
    break;
  case '50% kebawah':
    $pdf->SetXY(155,142);
    $pdf->SetFont('ZapfDingbats','', 15);
    $pdf->Cell(4, 3, 7);
    break;
  
  default:
    # code...
    break;
}

switch ($kemajuan) {
  case '90% - Keatas':
    $pdf->SetXY(90,150);
    $pdf->SetFont('ZapfDingbats','', 15);
    $pdf->Cell(4, 3, 7);
    break;
  case '75% - 89%':
    $pdf->SetXY(112,150);
    $pdf->SetFont('ZapfDingbats','', 15);
    $pdf->Cell(4, 3, 7);
    break;
  case '50% - 74%':
    $pdf->SetXY(133,150);
    $pdf->SetFont('ZapfDingbats','', 15);
    $pdf->Cell(4, 3, 7);
    break;
  case '50% kebawah':
    $pdf->SetXY(155,150);
    $pdf->SetFont('ZapfDingbats','', 15);
    $pdf->Cell(4, 3, 7);
    break;
  
  default:
    # code...
    break;
}

switch ($kerangka) {
  case '90% - Keatas':
    $pdf->SetXY(90,158);
    $pdf->SetFont('ZapfDingbats','', 15);
    $pdf->Cell(4, 3, 7);
    break;
  case '75% - 89%':
    $pdf->SetXY(112,158);
    $pdf->SetFont('ZapfDingbats','', 15);
    $pdf->Cell(4, 3, 7);
    break;
  case '50% - 74%':
    $pdf->SetXY(133,158);
    $pdf->SetFont('ZapfDingbats','', 15);
    $pdf->Cell(4, 3, 7);
    break;
  case '50% kebawah':
    $pdf->SetXY(155,158);
    $pdf->SetFont('ZapfDingbats','', 15);
    $pdf->Cell(4, 3, 7);
    break;
  
  default:
    # code...
    break;
}

switch ($kerja) {
  case '90% - Keatas':
    $pdf->SetXY(90,166);
    $pdf->SetFont('ZapfDingbats','', 15);
    $pdf->Cell(4, 3, 7);
    break;
  case '75% - 89%':
    $pdf->SetXY(112,166);
    $pdf->SetFont('ZapfDingbats','', 15);
    $pdf->Cell(4, 3, 7);
    break;
  case '50% - 74%':
    $pdf->SetXY(133,166);
    $pdf->SetFont('ZapfDingbats','', 15);
    $pdf->Cell(4, 3, 7);
    break;
  case '50% kebawah':
    $pdf->SetXY(155,166);
    $pdf->SetFont('ZapfDingbats','', 15);
    $pdf->Cell(4, 3, 7);
    break;
  
  default:
    # code...
    break;
}

switch ($kemasan) {
  case '90% - Keatas':
    $pdf->SetXY(91,174);
    $pdf->SetFont('ZapfDingbats','', 15);
    $pdf->Cell(4, 3, 7);
    break;
  case '75% - 89%':
    $pdf->SetXY(112,174);
    $pdf->SetFont('ZapfDingbats','', 15);
    $pdf->Cell(4, 3, 7);
    break;
  case '50% - 74%':
    $pdf->SetXY(133,174);
    $pdf->SetFont('ZapfDingbats','', 15);
    $pdf->Cell(4, 3, 7);
    break;
  case '50% kebawah':
    $pdf->SetXY(155,174);
    $pdf->SetFont('ZapfDingbats','', 15);
    $pdf->Cell(4, 3, 7);
    break;
  
  default:
    # code...
    break;
}

switch ($luar) {
  case '90% - Keatas':
    $pdf->SetXY(91,181);
    $pdf->SetFont('ZapfDingbats','', 15);
    $pdf->Cell(4, 3, 7);
    break;
  case '75% - 89%':
    $pdf->SetXY(112,181);
    $pdf->SetFont('ZapfDingbats','', 15);
    $pdf->Cell(4, 3, 7);
    break;
  case '50% - 74%':
    $pdf->SetXY(133,181);
    $pdf->SetFont('ZapfDingbats','', 15);
    $pdf->Cell(4, 3, 7);
    break;
  case '50% kebawah':
    $pdf->SetXY(155,181);
    $pdf->SetFont('ZapfDingbats','', 15);
    $pdf->Cell(4, 3, 7);
    break;
  
  default:
    # code...
    break;
}

switch ($kontraktor) {
  case '90% - Keatas':
    $pdf->SetXY(91,194);
    $pdf->SetFont('ZapfDingbats','', 15);
    $pdf->Cell(4, 3, 7);
    break;
  case '75% - 89%':
    $pdf->SetXY(112,194);
    $pdf->SetFont('ZapfDingbats','', 15);
    $pdf->Cell(4, 3, 7);
    break;
  case '50% - 74%':
    $pdf->SetXY(133,194);
    $pdf->SetFont('ZapfDingbats','', 15);
    $pdf->Cell(4, 3, 7);
    break;
  case '50% kebawah':
    $pdf->SetXY(155,194);
    $pdf->SetFont('ZapfDingbats','', 15);
    $pdf->Cell(4, 3, 7);
    break;
  
  default:
    # code...
    break;
}








$userdata = $this->session->userdata('name');
$filename = "MRK03-".$userdata."(".$get_detail[0]->mrks_kodvot.").pdf";
$pdf->Output('',$filename);


