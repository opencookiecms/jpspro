<?php
$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(__DIR__ ."\stest.docx");

$templateProcessor->setValue('Name', 'John Doe');
$templateProcessor->setValue(array('City', 'Street'), array('Detroit', '12th Street'));
