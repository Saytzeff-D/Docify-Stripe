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
    .text-title {
        color: #343843 !important
    }
    .border-template {
        border-color: #15ACD7 !important;
    }
    .btn-template {
        background-color: #15ACD7 !important;
    }
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Docify | Templates</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>        
</head>
<body>
    <?php
        $agreementTray = [
            ['template'=> 'Room Rental Agreement', 'page'=> 'rent.php'],
            ['template'=> 'Franchise Agreement', 'page'=> 'franchise.php'],
            ['template'=>  'Leasing Contract Agreement', 'page'=> 'leasing.php'],
            ['template'=>  'Marriage Agreement', 'page'=> 'marriage.php']
        ];
    ?>
    <?php include('nav.php') ?>
    <div class="container py-5">
        <p class="text-center text-title fs-1 animate__animated animate__fadeIn animate__slow">
            Choose a Template            
        </p>
        <div class="row w-100 mx-auto container">
            <?php
                foreach ($agreementTray as $agreement) {
            ?>
            <div class="col-md-3 mb-4 animate__animated animate__fadeIn animate__slow">
                <div class="border border-template p-3 shadow-lg">
                    <p class="text-title text-center fs-4 fw-bolder" >
                        <?php echo $agreement['template'] ?>
                    </p>
                    <div class="d-flex justify-content-center pt-4">
                        <button onClick="document.location.href='<?php echo dirname($_SERVER['REQUEST_URI']).'/'.$agreement['page'] ?>'" class="btn btn-dark fw-bold btn-lg rounded-0">
                            Fill Template
                        </button>
                    </div>
                </div>
            </div>
                    
               <?php }?>
        </div>
    </div>
</body>
</html>