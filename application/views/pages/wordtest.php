<?php
$unicodeChar = "\u{2611}";
$docx = new DOCXTemplate(APPPATH.'libraries\PhpWords\Nama.docx');
$docx->set('nama','syeds');
$docx->set('tahun','lega rasanya dapabertuer');
$docx->set('umur',$get_detail[0]->mrk_namakon);
$docx->set('test','test');
$docx->set('box','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ex velit, egestas ultrices sagittis a, commodo et tellus. Maecenas facilisis rutrum commodo');

$docx->saveAs('testsave.docx');

header("Content-Type:application/msword");
header("Content-Disposition: attachment;filename=testsave.docx");
readfile('testsave.docx');

?>
