<?php
use setasign\Fpdi\Fpdi;

// initiate FPDI
$pdf = new FPDI();

// get the page count
$pageCount = $pdf->setSourceFile('assets/pdf/PSMK.pdf');

$nosebutharga = $get_detail[0]->df_nosebutharga;
$namakon = $get_detail[0]->mrk_namakon;
$alamat = strtoupper($get_detail[0]->mrk_alamatkon);
$gred = $get_detail[0]->mrk_gred;
$tajuk = strtoupper($get_detail[0]->df_tajuk);
$tarikhsiap = date("d-m-Y",strtotime($get_detail[0]->mrk_tarikhsiapsebenar));
$nokewangan = $get_detail[0]->mrk_nowangjaminansatu;
$harga1 = number_format($get_detail[0]->mrk_hargasatu,2);
$bakiwang = number_format($get_detail[0]->mrk_bakiwangjamin,2);
$garantibank = $get_detail[0]->mrk_nowangjaminandua;
$harga2 = number_format($get_detail[0]->mrk_hargadua,2);
$wanglaksana = number_format($get_detail[0]->mrk_wangjaminlaksana,2);
$wangbon = number_format($get_detail[0]->mrk_tambahbonlaksana,2);
$bakibon = number_format($get_detail[0]->mrk_bakibonlaksana,2);
$peguasa = strtoupper($get_detail[0]->mrk_pegawaipenguasa);
$jawatan = strtoupper($get_detail[0]->mrk_jawatanpp);

// iterate through all pages
for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
    // import a page
    $templateId = $pdf->importPage($pageNo);
    // get the size of the imported page
    $size = $pdf->getTemplateSize($templateId);

    // create a page (landscape or portrait depending on the imported page size)
    if ($size['0'] > $size['1']) {
        $pdf->AddPage('L', array($size['0'], $size['1']));
    } else {
        $pdf->AddPage('P', array($size['0'], $size['1']));
    }

    // use the imported page
    if($pageNo == 1){
        $pdf->useTemplate($templateId, 0, 0, 210);
        $pdf->SetFont('Times','',10);
        $pdf->SetXY(35,91);
        $pdf->Write(0,$nosebutharga,0,1,'C');
        $pdf->SetFont('Times','B',10);
        $pdf->SetXY(35,130);
        $pdf->Write(0,$namakon,0,1,'C');
        $pdf->SetFont('Times','',10);
        $pdf->SetXY(35, 132);
        $pdf->MultiCell(70,5,$alamat,0,'J');
        $pdf->SetFont('Times','B',11);
        $pdf->SetXY(75,152);
        $pdf->Write(0,$gred,0,1,'C');
        $pdf->SetFont('Times','',11);
        $pdf->SetXY(42,161);
        $pdf->Write(0,$nosebutharga,0,1,'C');
        $pdf->SetXY(44,167);
        $pdf->MultiCell(120,5,$tajuk,0,'J');
        $pdf->SetXY(77,211);
        $pdf->Write(0,$tarikhsiap,0,1,'C');
        $pdf->SetXY(116,233);
        $pdf->Write(0,$nokewangan,0,1,'C');
        $pdf->SetXY(170,233);
        $pdf->Write(0,$harga1,0,1,'C');
        $pdf->SetXY(130,247);
        $pdf->Write(0,$bakiwang,0,1,'C');
    }
    else{
        $pdf->useTemplate($templateId, 0, 0, 210);
        $pdf->SetFont('Times','',11);
        $pdf->SetXY(158,8);
        $pdf->Write(0,$garantibank,0,1,'C');
        $pdf->SetXY(70,13);
        $pdf->Write(0,$harga2,0,1,'C');
        $pdf->SetXY(85,36);
        $pdf->Write(0,$wanglaksana,0,1,'C');
        $pdf->SetXY(148,65);
        $pdf->Write(0,$wangbon,0,1,'C');
        $pdf->SetXY(98,74);
        $pdf->Write(0,$bakibon,0,1,'C');
        $pdf->SetXY(128,111);
        $pdf->Write(0,$peguasa,0,1,'C');
        $pdf->SetXY(128,120);
        $pdf->Write(0,$jawatan,0,1,'C');
      
    }
   
}








$userdata = $this->session->userdata('name');
$filename = "PSMK-".$userdata."(".$get_detail[0]->mrks_kodvot.").pdf";
$pdf->Output('',$filename);