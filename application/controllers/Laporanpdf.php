<?php
Class Laporanpdf extends CI_Controller{
    
    function __construct() {
        parent::__construct();

        $this->load->library('pdf');
        $this->load->database();
        $this->load->model('Mrk_model');

        $this->load->helper('url');
    }
    
    function index(){
        $pdf = new FPDF('p','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        //font tajuk
        $pdf->SetFont('Arial','B',10);
        //tajuk
        $pdf->Cell(190,7,'Borang MRK 01',0,1,'R');
        //space
        $pdf->Cell(5,7,'',0,1);
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','',16);
        // mencetak string
        $pdf->Cell(190,7,' ',0,1,'C');
        $pdf->Cell(190,7,'UNTUK DIISI SEMASA PERMULAAN PROJEK',0,1,'C');
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(190,7,'(SILA ISI BAHAGIAN A SAHAJA)',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);

        //font
        $pdf->SetFont('Arial','U',12);
        $pdf->Cell(190,7,'BAHAGIAN A',0,1,'L');

        //space & FONT
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(190,7,'1.    No. PENDAFTARAN PKK:',0,1,'L');
        $pdf->Cell(190,7,'2.    NAMA KONTRAKTOR',0,1,'L');
        $pdf->Cell(190,7,'3.    NO. KONTRAK',0,1,'L');
        $pdf->Cell(190,7,'4.    NO. INDEN/PESANAN TEMPATAN',0,1,'L');
        $pdf->Cell(190,7,'5.    TAJUK KERJA',0,1,'L');
        $pdf->Cell(190,7,'6.    TEMPAT PROJEK',0,1,'L');

        $pdf->Output();
    }
}