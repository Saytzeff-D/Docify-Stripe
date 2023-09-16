<?php
session_start();
require('../fpdf186/fpdf.php'); // Include the FPDF library

if (isset($_SESSION['Checkout'])) {
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
    $city = 'Ogbomoso'; // You can set the city here
    $date = date("Y-m-d");
    echo "<script>alert('Payment Paid Successfully')</script>";
    echo "<script>window.open('print.php')</script>";
    echo "<script>location='../index.php'</script>";
}
?>
