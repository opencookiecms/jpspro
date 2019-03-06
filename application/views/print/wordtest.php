<?php

//echo __FILE__;
$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(__DIR__ ."\stest.docx");

$templateProcessor->setValue('Name', 'John Doe');


$templateProcessor->saveAs('MRK01.docx');


//header("Content-Type:application/msword");
//header("Content-Disposition: attachment;filename=MRK01.docx");
//readfile('MRK01.docx');
$success = Gears\Pdf::convert(__DIR__ ."\stest.docx",__DIR__ ."\stest.pdf");
header("Content-Type:application/msword");
header("Content-Disposition: attachment;filename=SSS.docx");
readfile('MRK01.docx');
