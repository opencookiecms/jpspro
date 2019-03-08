<?php

$phpWord = new \PhpOffice\PhpWord\PhpWord();

$domPdfPath = realpath(APPPATH.'libraries\vendor\mpdf\mpdf');
\PhpOffice\PhpWord\Settings::setPdfRendererPath($domPdfPath);
\PhpOffice\PhpWord\Settings::setPdfRendererName('Mpdf');

$template = new \PhpOffice\PhpWord\TemplateProcessor(__DIR__ ."\stest.docx");
$template->setValue('Name', 'Jacek');
$template->saveAs('assets/document/mrks.docx');

//Load temp file
$phpWord = \PhpOffice\PhpWord\IOFactory::load('assets/document/mrks.docx');

$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'HTML');
$objWriter->save('assets/document/mrkshtml.html');


$dompdf = new \Dompdf\Dompdf();
$dompdf->load_html(file_get_contents('assets/document/mrkshtml.html'));

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();
$pdf_string = $dompdf->output();
file_put_contents('assets/document/mrkpdf.pdf', $pdf_string);
$dompdf->stream();