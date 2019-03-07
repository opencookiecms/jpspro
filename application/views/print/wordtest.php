<?php

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$dompdf->loadHtml('hellowdom');

$dompdf->setPaper('A4', 'landscape');

$dompdf->render();

$dompdf->stream();
// $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(__DIR__ ."\stest.docx");

// $templateProcessor->setValue('Name', 'John Doe');




// $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(__DIR__ ."\stest.docx");
// $templateProcessor->setValue('Name', 'Syed Mohd afiq');

// $templateProcessor->saveAs('MRK01.docx');

// $domPdfPath = realpath(PHPWORD_BASE_DIR . '/../vendor/dompdf/dompdf');
// \PhpOffice\PhpWord\Settings::setPdfRendererPath($domPdfPath);
// \PhpOffice\PhpWord\Settings::setPdfRendererName('DomPDF');

// //Load temp file
// $phpWord = \PhpOffice\PhpWord\IOFactory::load($filepath); 

// //Save it
// $xmlWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord , 'PDF');
// $xmlWriter->save('result.pdf');  

// $document = new Gears\Pdf(__DIR__ ."\stest.docx");
// $document->converter = function()
// {
// 	return new Gears\Pdf\Docx\Converter\Unoconv();
// };
// $document->save(__DIR__ ."\stest.pdf");
