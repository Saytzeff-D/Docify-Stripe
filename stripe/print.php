<?php
session_start();
require('../fpdf186/fpdf.php');


// Your existing session and variable assignments go here...

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
$city = 'Ogbomoso'; // You can set the city here
$date = date("Y-m-d");
$landlordname = $_SESSION['Checkout']['landlordname'];
$landlordemail = $_SESSION['Checkout']['landlordemail'];
$identificationnumber = $_SESSION['Checkout']['identificationnumber'];
$tenantname = $_SESSION['Checkout']['tenantname'];
$tenantemail = $_SESSION['Checkout']['tenantemail'];
$textIdentification = $_SESSION['Checkout']['textindentification'];
$startdate = $_SESSION['Checkout']['startdate'];
$enddate = $_SESSION['Checkout']['enddate'];
$amount = $_SESSION['Checkout']['amount'];
$deposit = $_SESSION['Checkout']['deposit'];
$signatureData = $_SESSION['Checkout']['signatureData'];
$pdf = new PDF();
$pdf->AddPage();

// Generate content
$pdf->ChapterTitle('Parties');
$pdf->ChapterBody("This Room Rental Agreement (\"Agreement\") is entered into in $city, on $date, between:");
$pdf->ChapterBody("Landlord's Name: $landlordname");
$pdf->ChapterBody("Landlord's Address: $landlordemail");
$pdf->ChapterBody("Landlord's Tax Identification Number: $identificationnumber");
$pdf->ChapterBody("Tenant's Name: $tenantname");
$pdf->ChapterBody("Tenant's Address: $tenantemail");
$pdf->ChapterBody("Tenant's Tax Identification Number: $textIdentification");

$pdf->ChapterTitle('Purpose of the Agreement');
$pdf->ChapterBody("The Landlord leases a room in the dwelling located at $city, under the following conditions:");

$pdf->ChapterTitle('Duration of the Lease');
$pdf->ChapterBody("The lease term shall be [Number of months/years] commencing on $startdate and ending on $enddate");

$pdf->ChapterTitle('Rent');
$pdf->ChapterBody("The Tenant agrees to pay a monthly rent of $amount euros (€), to be paid within the first [Day] days of each month. The agreed payment method is Stripe.");

$pdf->ChapterTitle('Security Deposit');
$pdf->ChapterBody("The Tenant shall provide the Landlord with a security deposit equivalent to $deposit euros (€) at the time of signing this agreement. The deposit will be refunded at the end of the contract, deducting costs for damages or unpaid rent.");

$pdf->ChapterTitle('Use of Common Areas');
$pdf->ChapterBody("The Tenant shall have the right to use the common areas of the Dwelling, including [Specify available common areas such as kitchen, bathroom, living room, etc.].");

$pdf->ChapterTitle("Landlord's Obligations");
$pdf->ChapterBody("The Landlord agrees to maintain the Dwelling in suitable conditions for habitation and to make necessary repairs to ensure proper functioning of facilities and services.");

$pdf->ChapterTitle("Tenant's Obligations");
$pdf->ChapterBody("The Tenant agrees to use the room and common areas of the Dwelling reasonably and respectfully of the rights of other tenants or individuals living in the Dwelling.");

$pdf->ChapterTitle('Termination of the Agreement');
$pdf->ChapterBody("Either party may terminate this Agreement by providing written notice to the other party with [Number of days] days' notice.");

$pdf->ChapterTitle('Applicable Law and Jurisdiction');
$pdf->ChapterBody("This Agreement shall be governed and interpreted in accordance with the laws of [Applicable Jurisdiction].");

$pdf->ChapterBody("Any dispute related to this Agreement shall be subject to the exclusive jurisdiction of the courts of $city");

$pdf->ChapterTitle('Signatures of the Parties');
$pdf->ChapterBody("The parties have executed this Room Rental Agreement on the date mentioned above.");
$pdf->ChapterBody('By the Tenant:');
$pdf->ChapterBody("Printed Name: $tenantname");
$pdf->ChapterBody('Date: ' . date("Y-m-d"));

// Output the PDF
$pdf->Output();
?>
