<?php

//echo __FILE__;
$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(__DIR__ ."\stest.docx");

$templateProcessor->setValue('Name', 'John Doe');


$templateProcessor->saveAs('MRK01.docx');

$document = new Gears\Pdf(__DIR__ ."\stest.docx");
$document->converter = function()
{
	return new Gears\Pdf\Docx\Converter\Unoconv();
};
$document->save(__DIR__ ."\stest.pdf");