<?php


use Dompdf\Dompdf;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\Settings;

$phpWord = new \PhpOffice\PhpWord\PhpWord();

$dompdf = new Dompdf();

$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(__DIR__ ."\dk.docx");
$templateProcessor->setValue('Name', 'Poning');
$templateProcessor->setValue('nopkk','pening Kepala');

$templateProcessor->saveAs('assets/document/dk.docx');

//$readfirst = \PhpOffice\PhpWord\IOFactory::createReader('Word2007');
//$readfirst = \PhpOffice\PhpWord\IOFactory::load('assets/document/MRK01.docx');

//Settings::setPdfRendererPath(APPPATH.'libraries\vendor\dompdf\dompdf');
Settings::setPdfRendererName(Settings::PDF_RENDERER_DOMPDF);
Settings::setPdfRendererPath('.');

//$loadword = \PhpOffice\PhpWord\IOFactory::load('MRK01.docx');

$phpWord = IOFactory::load('assets/document/dk.docx' ,'Word2007');

$phpWord->save('assets/document/newdk.pdf','PDF');

