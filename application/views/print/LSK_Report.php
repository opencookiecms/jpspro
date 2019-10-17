<?php
use setasign\Fpdi\Fpdi;

$kontraktor = strtoupper($get_detail[0]->mrk_namakon);
$alamat = strtoupper($get_detail[0]->mrk_alamatkon);
//$alamat = "NO. F-617 KAMPUNG HUTAN GELAM, JALAN BATU LINTANG TIKAM BATU 08600 Sungai Petani Kedah Darul Aman";
$inden = $get_detail[0]->mrk_noinden;
$gred = $get_detail[0]->mrk_gred;
$nosebutharga = $get_detail[0]->df_nosebutharga;
$wc = $get_detail[0]->lsk_perkeso;
$liabili = $get_detail[0]->lsk_liability;
$kodperuntukan = $get_detail[0]->lsk_peruntukan;
$kosprojek = number_format($get_detail[0]->mrk_kosprojek,2);
$kossebenar = number_format($get_detail[0]->lks_hargasebenar,2);
$tajuk = strtoupper($get_detail[0]->df_tajuk);

$tarikhmula = $get_detail[0]->mrk_tarikhmulakon;
$tarikhtamat = $get_detail[0]->mrk_tarikhjangkasiap;
$tarikhlanjutmasa = $get_detail[0]->lsk_lanjutmasa;
$tarikhsempurna = $get_detail[0]->lsk_tarikhkerjasiap;

$laporanpegawai = strtoupper($get_detail[0]->lsk_laporanpegawai);
$tarikskui = $get_detail[0]->lsk_tarikhperakui;

$juruterad = $get_detail[0]->lsk_juruterad;
$jawatand = $get_detail[0]->lsk_jawatanjuruterad;

$ketuabahagian = $get_detail[0]->lsk_ketuabahagian;
$jawatanketuabahagian = $get_detail[0]->lsk_jawatanketuab;

$juruterajs = $get_detail[0]->lsk_juruteraj;
$jawatanj = $get_detail[0]->lsk_jawatanjuruteraj;

$ins1 = $get_detail[0]->insurans_no;
$ins2 = $get_detail[0]->insurans_no2;

$jins1 = $get_detail[0]->jenis_insuran;
$jins2 = $get_detail[0]->jenis_insuran2;





$tarikhjangka = $get_detail[0]->mrk_tarikhjangkasiap;
$pegawai = $get_detail[0]->mrk_pegawai;
$jawatan = $get_detail[0]->mrk_jawatan;
$tarikhlaporan = $get_detail[0]->mrk_tarikh;
// initiate FPDI
$pdf = new Fpdi();
// add a page
$pdf->AddPage();
// set the source file
$pdf->setSourceFile("assets/pdf/laporansiapkerja.pdf");
// import page 1
$tplIdx = $pdf->importPage(1);
// use the imported page and place it at position 10,10 with a width of 100 mm
$pdf->useTemplate($tplIdx, 5, 5, 200);

$pdf->SetXY(180, 45);
$pdf->SetFont('Times','',14);
$pdf->Write(0,$gred,0,1,'C');
// now write some text above the imported page
$pdf->SetFont('Times','',10);
$pdf->SetTextColor('black');

$pdf->SetXY(69, 45);
$pdf->Write(0,$kontraktor,0,1,'C');




$pdf->SetXY(69, 51);
$pdf->MultiCell(65,5,$alamat,0);

$pdf->SetXY(69, 70);
$pdf->MultiCell(120,5,$tajuk,0,'J');

$pdf->SetXY(69, 95);
$pdf->Write(0,$inden,0,1,'C');

$pdf->SetXY(69, 104);
$pdf->Write(0,$nosebutharga,0,1,'C');

$pdf->SetXY(76, 113);
$pdf->Write(0,$wc,0,1,'C');

$pdf->SetXY(134, 113);
$pdf->Write(0,$liabili,0,1,'C');

$pdf->SetXY(105, 113);
$pdf->SetFont('Times','B',10);
$pdf->Write(0,$jins1.' - ',0,1,'C');

$pdf->SetFont('Times','',10);
$pdf->SetXY(114, 113);
$pdf->Write(0,$ins1,0,1,'C');

$pdf->SetXY(144, 113);
$pdf->SetFont('Times','B',10);
$pdf->Write(0,$jins2.' - ',0,1,'C');

$pdf->SetFont('Times','',10);
$pdf->SetXY(153, 113);
$pdf->Write(0,$ins2,0,1,'C');

$pdf->SetXY(69, 122);
$pdf->Write(0,$kodperuntukan,0,1,'C');

$pdf->SetXY(75, 131);
$pdf->Write(0,$kosprojek,0,1,'C');
$pdf->SetXY(150, 131);
$pdf->Write(0,$kossebenar,0,1,'C');

$pdf->SetXY(69, 140);
$pdf->Write(0,$tarikhmula,0,1,'C');

$pdf->SetXY(69, 149);
$pdf->Write(0,$tarikhtamat,0,1,'C');

$pdf->SetXY(69, 158);
$pdf->Write(0,$tarikhlanjutmasa,0,1,'C');

$pdf->SetXY(69, 168);
$pdf->Write(0,$tarikhsempurna,0,1,'C');

$pdf->SetXY(69, 174);
$pdf->MultiCell(120,5,$laporanpegawai,0,'J');

$pdf->SetFont('Times','',11);
$pdf->SetXY(155, 204);
$pdf->Write(0,$pegawai,0,1,'C');
$pdf->SetXY(155, 208);
$pdf->Write(0,$jawatan,0,1,'C');

$pdf->SetXY(28, 204);
$pdf->Write(0,$tarikskui,0,1,'C');

$pdf->SetXY(88, 256);
$pdf->Write(0,$juruterad,0,1,'C');

$pdf->SetXY(95, 260);
$pdf->Write(0,$jawatand,0,1,'C');

$pdf->SetXY(38, 227);
$pdf->Write(0,$ketuabahagian,0,1,'C');

$pdf->SetXY(37, 231);
$pdf->Write(0,$jawatanketuabahagian,0,1,'C');

$pdf->SetXY(155, 227);
$pdf->Write(0,$juruterajs,0,1,'C');

$pdf->SetXY(145, 231);
$pdf->Write(0,$jawatanj,0,1,'C');

$userdata = $this->session->userdata('name');
$filename = "Laporan siap kerja-".$userdata."(".$get_detail[0]->mrks_kodvot.").pdf";
$pdf->Output('',$filename);


