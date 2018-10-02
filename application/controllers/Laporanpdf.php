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
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->Cell(190,7,'Surat Jaminan Bank',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'Jaminan bank untuk masa depan projek.',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,6,'Kod Vot',1,0);
        $pdf->Cell(85,6,'TAJUK PROJEK',1,0);
        $pdf->Cell(27,6,'NO HP',1,0);
        $pdf->Cell(25,6,'IC',1,1);
        $pdf->SetFont('Arial','',10);
        $pdf->Output();
    }
}