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
        .text-title {
            color: #343843 !important
        }
        .cursor-pointer {
            cursor: pointer;
        }
        .step-card {
            background-color: #15ACD7 !important;
            color: #fff !important
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Docify | Home</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</head>
<body class="animate__animated animate__fadeIn animate__slow">
    <?php include('nav.php') ?>
    <div class="container py-5">
        <div class="row w-100 mx-auto">
            <div class="col-md-6">
                <img alt='image' src="./assets/docify.webp" class="img-fluid animate__animated animate__zoomIn animate__slower" />
            </div>
            <div class="col-md-6 p-4">            
                <p class="text-title fs-1 fw-bold animate__animated animate__fadeInUp animate__slower">
                    ¡CREA FÁCILMENTE TUS DOCUMENTOS LEGALES!
                </p>
                <p class="fw-light text-title fs-5 animate__animated animate__fadeInUp animate__slower">
                    Un formulario muy intuitivo te guiará en la redacción de tus documentos
                </p>
            </div>
        </div>
        <div class="row w-100 mx-auto container card-deck animate__animated animate__fadeInUp animate__slower mt-4">            
            <div class="col-md-3 mb-md-0 mb-4 cursor-pointer" onClick="document.location.href='<?php echo 'templates.php' ?>'">
                <div class="text-center p-3 shadow step-card">
                    <div class="d-flex justify-content-center py-2">
                        <img src="./assets/choose_template.svg" width="50px" alt="fill template" />
                    </div>
                    <p class="display-5 fs-5 fw-bold">
                        1. ELEGIR UN MODELO
                    </p>                    
                    <p class="fs-6 fw-lighter py-4">
                        Puedes elegir entre nuestros 25 documentos disponibles.
                    </p>
                </div>
            </div>
            <div class="col-md-3 mb-md-0 mb-4">
                <div class="text-center p-3 shadow step-card">
                    <div class="d-flex justify-content-center py-2">
                        <img src="./assets/fill_template.svg" width="50px" alt="fill template" />
                    </div>
                    <p class="display-5 fs-5 fw-bold">
                        2. RELLENAR EL DOCUMENTO
                    </p>                    
                    <p class="fs-6 fw-lighter">
                        Contesta a algunas preguntas y tu documento se creará automáticamente.
                    </p>
                </div>
            </div>
            <div class="col-md-3 mb-md-0 mb-4">
                <div class="text-center p-3 shadow step-card">
                    <div class="d-flex justify-content-center py-2">
                        <img src="./assets/print_template.svg" width="50px" alt="fill template" />
                    </div>
                    <p class="display-5 fs-5 fw-bold">
                        3. GUARDAR - IMPRIMIR
                    </p>                    
                    <p class="fs-6 fw-lighter">
                        ¡Tu documento ya se puede utilizar! Utilízalo para lo que quieras.
                    </p>
                </div>
            </div>
            <div class="col-md-3 mb-md-0 mb-4">
                <div class="text-center p-3 shadow bg-white">
                    <div class="d-flex justify-content-center py-2">
                        <img src="./assets/icon-lawyer-dark.svg" width="50px" alt="fill template" />
                    </div>
                    <p class="display-5 fs-5 fw-bold">
                        CONSULTAR A UN ABOGADO
                    </p>
                    <p class="fs-6 fw-lighter">
                        Si lo deseas, puedes pedir la ayuda de un abogado
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>