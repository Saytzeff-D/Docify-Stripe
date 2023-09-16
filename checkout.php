<?php
    if(isset($_POST['submit'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
    body {            
        background-color: #F3F4F4 !important;
        font-family: 'Poppins', sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }
    .cursor-pointer {
        cursor: pointer;
    }
    .text-dark-new {
        color: #343843 !important
    }
    .text-template {
        color: #15ACD7 !important;
    }
    .btn-template {
        background-color: #15ACD7 !important;
    }
    .doc-page {
        max-height: 500px; /* Adjust the maximum height as needed */
        overflow: auto;
    }
    ::-webkit-scrollbar {
        width: 5px;
    }
    ::-webkit-scrollbar-thumb {
        background: #15ACD7;
        border-radius: 10px;
    }
    ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey;
        border-radius: 10px;
    }
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Docify | Rental Agreement</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.5.3/signature_pad.min.js"></script>
     
</head>
<body>
    <?php
        $city = 'Ogbomoso';
        $date=date("Y-m-d");
        include('nav.php')
    ?>
    <div class="container py-5">
        <div>
            <p class="text-template fw-bold fs-4">Checkout</p>
        </div>            
        <div class="row mx-auto w-100">
            <div class="col-md-12 py-2">
                <div class="bg-white p-4">
                    <?php
                        if(isset($_POST['submit'])){
                            $landlordname=$_POST['landlordname'];
                            $landlordemail=$_POST['landlordemail'];
                            $identificationnumber=$_POST['identification_number'];
                            $tenantname=$_POST['tenantname'];
                            $tenantemail=$_POST['tenantemail'];
                            $textIdentification=$_POST['taxidentification'];
                            $startdate=$_POST['startdate'];
                            $enddate=$_POST['enddate'];
                            $amount=$_POST['amount'];
                            $deposit=$_POST['deposit'];
                            $signatureData=$_POST['signatureData'];
                        }
                     ?>
                       
                     <form action="stripe/charge.php" method="POST">
                        <input type="hidden" name="landlordname" value="<?php echo  $landlordname;  ?>">
                        <input type="hidden" name="landlordemail" value="<?php echo  $landlordemail;  ?>">
                        <input type="hidden" name="identificationnumber" value="<?php echo $identificationnumber;  ?>">
                        <input type="hidden" name="tenantname" value="<?php echo $tenantname;  ?>">
                        <input type="hidden" name="tenantemail" value="<?php echo $tenantemail;  ?>">
                        <input type="hidden" name="textindentification" value="<?php echo $textIdentification;  ?>">
                        <input type="hidden" name="startdate" value="<?php echo $startdate; ?>">
                        <input type="hidden" name="enddate" value="<?php echo $startdate; ?>">
                        <input type="hidden" name="amount" value="<?php echo $amount; ?>">
                        <input type="hidden" name="deposit" value="<?php echo $deposit; ?>">
                        <input type="hidden" name="signatureData" value="<?php echo $signatureData; ?>">
                        <h3>Total Amount : $ <?php echo $amount; ?></h3>
                        <label><input type="radio" required>&nbsp;Pay with stripe</label><br><br>
                        <input type="hidden" name="price" value="<?php echo $amount; ?>">
                        <input type="submit" name="paynow" name="payment">
                     </form>
                    <h3></h3>
                </div>
            </div>
        </div>  
</div>
</body>
</html>
<?php 
}else{
    header('location:index.php');
}

?>