<?php
require('../fpdf186/fpdf.php'); // Include the FPDF library
class PDF extends FPDF {
    function Header() {
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, 'ROOM RENTAL AGREEMENT', 0, 1, 'C');
    }

    function ChapterTitle($title) {
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 6, "$title", 0, 1, 'L');
    }

    function ChapterBody($body) {
        $this->SetFont('Arial', '', 12);
        $this->MultiCell(0, 10, "$body");
    }
}

$pdf = new PDF();
$pdf->AddPage();

// Generate content
$pdf->ChapterTitle('Parties');

// Output the PDF
$pdf->Output();
?>