<?php

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Style\Conditional;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
 
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$spreadsheet->getActiveSheet()->getStyle('2:2')->getFont()->setBold(true);
$spreadsheet->getActiveSheet()->getStyle('A2:K2')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('a2aeb4');


$spreadsheet->getActiveSheet()->getStyle('A2')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP); 
$spreadsheet->getActiveSheet()->getStyle('B2')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP); 
$spreadsheet->getActiveSheet()->getStyle('C2')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP); 
$spreadsheet->getActiveSheet()->getStyle('D2')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP); 
$spreadsheet->getActiveSheet()->getStyle('F2')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP); 
$spreadsheet->getActiveSheet()->getStyle('G2')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP); 
$spreadsheet->getActiveSheet()->getStyle('H2')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP); 
$spreadsheet->getActiveSheet()->getStyle('I2')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP); 
$spreadsheet->getActiveSheet()->getStyle('J2')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP); 
$spreadsheet->getActiveSheet()->getStyle('K2')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP); 

$spreadsheet->getActiveSheet()->getCell('A2')->setValue("Bil");
$spreadsheet->getActiveSheet()->getCell('B2')->setValue("Kod Peruntukan");
$spreadsheet->getActiveSheet()->getCell('C2')->setValue("Tajuk Projek");
$spreadsheet->getActiveSheet()->getCell('D2')->setValue("Harga Kontrak");
$spreadsheet->getActiveSheet()->getCell('E2')->setValue("Butiran Kontrak\n(1)Nama Kontraktor\n(2)No Kontrak/Sebutharga\n(3)Mula/Siap\n(4)EOT");
$spreadsheet->getActiveSheet()->getStyle('E2')->getAlignment()->setWrapText(true);




$spreadsheet->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
$spreadsheet->getActiveSheet()->getColumnDimension('E')->setAutoSize(false);
$spreadsheet->getActiveSheet()->getColumnDimension('E')->setWidth('40');
$spreadsheet->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
$spreadsheet->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
//$spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth('50');
$spreadsheet->getActiveSheet()->getColumnDimension('C')->setAutoSize(false);
$spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth('50');
$spreadsheet->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
$spreadsheet->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
$spreadsheet->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
$spreadsheet->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
$spreadsheet->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);
$spreadsheet->getActiveSheet()->getColumnDimension('K')->setAutoSize(true);

$spreadsheet->getActiveSheet()->getCell('F2')->setValue("Waran Diterima (A)");
$spreadsheet->getActiveSheet()->getCell('G2')->setValue("Perbelanjaan (B)");
$spreadsheet->getActiveSheet()->getCell('H2')->setValue("Tanggungan (B)");
$spreadsheet->getActiveSheet()->getCell('I2')->setValue("Baki");
$spreadsheet->getActiveSheet()->getCell('J2')->setValue("Perbelanjaan Sehingga 2020");
$spreadsheet->getActiveSheet()->getCell('K2')->setValue("Kemajuan Projek");

$no = 1;
$t = 2;
$jd = $kira;
for ($i = 3; $i <=$jd+$t; $i++)
{
  $a =$laporan_sb[$i-3]->df_bakiperuntukan;
  $b =$laporan_sb[$i-3]->kos_belanja;
  $c =$laporan_sb[$i-3]->kos_tanggung;
  
  $tt = $a-$b-$c;
  $spreadsheet->getActiveSheet()->setCellValue('A'.$i,$no++);
  $spreadsheet->getActiveSheet()->setCellValue('B'.$i,$laporan_sb[$i-3]->df_kodvot);
  $spreadsheet->getActiveSheet()->setCellValue('C'.$i,$laporan_sb[$i-3]->df_tajuk);
  $spreadsheet->getActiveSheet()->getStyle('C'.$i)->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP)->setWrapText(true);
  $spreadsheet->getActiveSheet()->setCellValue('D'.$i,number_format($laporan_sb[$i-3]->mrk_kosprojek,2));
 
 


  $spreadsheet->getActiveSheet()->setCellValue('E'.$i,'(1) '.$laporan_sb[$i-3]->mrk_namakon."\n(2)".$laporan_sb[$i-3]->df_nosebutharga."\n(3)".$laporan_sb[$i-3]->mrk_tarikhmulakon." / ".$laporan_sb[$i-3]->mrk_tarikhjangkasiap."\n(4)".$laporan_sb[$i-3]->mrk_laddari." / ".$laporan_sb[$i-3]->mrk_ladsehingga);
  $spreadsheet->getActiveSheet()->getStyle('E'.$i)->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP)->setWrapText(true);     # code...
  $spreadsheet->getActiveSheet()->setCellValue('F'.$i,number_format($laporan_sb[$i-3]->df_bakiperuntukan,2));
  $spreadsheet->getActiveSheet()->setCellValue('G'.$i,number_format($laporan_sb[$i-3]->kos_belanja,2));
  $spreadsheet->getActiveSheet()->setCellValue('H'.$i,number_format($laporan_sb[$i-3]->kos_tanggung,2));
  $spreadsheet->getActiveSheet()->setCellValue('I'.$i,number_format($tt,2));
  $spreadsheet->getActiveSheet()->setCellValue('J'.$i,'0.00');
  $spreadsheet->getActiveSheet()->setCellValue('K'.$i,$laporan_sb[$i-3]->mrk_psebenar."%");
}

$styleArray = [
			'borders' => [
				'allBorders' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				],
			],
		];
$i = $i - 1;
$sheet->getStyle('A2:K'.$i)->applyFromArray($styleArray);


 


$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, "Xlsx");
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="file.xlsx"');
$writer->save("php://output");
?>