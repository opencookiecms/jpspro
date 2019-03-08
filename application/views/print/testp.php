<?php

$phpWord = new \PhpOffice\PhpWord\PhpWord();

$domPdfPath = realpath(VENDOR_PATH.'/dompdf/dompdf');
\PhpOffice\PhpWord\Settings::setPdfRendererPath($domPdfPath);
\PhpOffice\PhpWord\Settings::setPdfRendererName('DomPDF');

$template = new \PhpOffice\PhpWord\TemplateProcessor(FILES_PATH.'/imie.docx');
$template->setValue('variableName', 'Jacek');
$template->saveAs(FILES_PATH.'/result.docx');

//Load temp file
$phpWord = \PhpOffice\PhpWord\IOFactory::load(FILES_PATH.'/result.docx');

$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'HTML');
$objWriter->save(FILES_PATH.'/hello.html');
chmod(FILES_PATH.'/hello.html', 0777);

$dompdf = new \Dompdf\Dompdf();
$dompdf->load_html(file_get_contents(FILES_PATH.'/hello.html'));

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();
$pdf_string = $dompdf->output();
file_put_contents(FILES_PATH.'/result2.pdf', $pdf_string);