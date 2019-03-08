<?php


echo APPPATH.'vendor\dompdf\dompdf';
use Dompdf\Dompdf;

$phpWord = new \PhpOffice\PhpWord\PhpWord();

$dompdf = new Dompdf();

$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(__DIR__ ."\stest.docx");
$templateProcessor->setValue('Name', 'dammmmmm');

$templateProcessor->saveAs('assets/document/MRK01.docx');

$readfirst = \PhpOffice\PhpWord\IOFactory::createReader('Word2007');
$readfirst = \PhpOffice\PhpWord\IOFactory::load('assets/document/MRK01.docx');

\PhpOffice\PhpWord\Settings::setPdfRendererPath(APPPATH.'libraries\vendor\dompdf\dompdf');
\PhpOffice\PhpWord\Settings::setPdfRendererName('DomPDF');

// $phpWord = \PhpOffice\PhpWord\IOFactory::load('MRK01.docx');

$xmlWriter = \PhpOffice\PhpWord\IOFactory::createWriter($readfirst , 'PDF');

$xmlWriter->save('assets/document/MRK01.pdf');

