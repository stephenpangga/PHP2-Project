<?php

class PdfController extends Controller
{
    public function index()
    {
        return self::view('pdf');
    }
    
    public function generate()
    {
        //echo "generate pdf";

        //require('./srcf/models/pdfgen.php');
        //the barcode file
        $name = $_POST["title"];
        $text = $_POST["content"];
        //require();

        ob_start();
        
        require('./srcf/models/fpdf.php');
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(40,10,$name);
        $pdf->Cell(40,30,$text);
        $pdf->Image('./srcf/models/irazmlh529o31.jpg');
        $pdf->Image('./srcf/models/qrcode.png',20,20,-900);
        $pdf->Output();
        
        ob_end_flush(); 
    }
}