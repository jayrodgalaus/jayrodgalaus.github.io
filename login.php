<?php
require 'define.php';  
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Anaheim' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="icon" href="favicon.ico" type="image/ico"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script> -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <title>Login | JaGalau</title>
    <style>
        #mast{
            /* background-image: linear-gradient(to bottom, rgb(244, 147, 255)) */
            background-image: linear-gradient(180deg, #3a648f03, #0e1d2c 85%), radial-gradient(ellipse at top left, #4d92fa80, transparent 50%), radial-gradient(ellipse at top right, #086e8280, transparent 50%), radial-gradient(ellipse at center right, #712cf980, rgb(0 0 0 / 0%) 50%), radial-gradient(ellipse at center left, #51266d80, rgb(0 0 0 / 0%) 50%);
        }
        #mainnav *{
            color: #f8f9fa !important;
        }
        #mainnav{
            min-height: 56px;
        }
        .home-text{
            font-size: 30pt !important;
        }
        

    </style>
</head>
<body>    

    <div id="mast" class="vw-100 vh-100">
        <div class="container container-lg text-light d-flex align-items-center h-100">
            <div class="row w-100">
                <div class="col-sm-6">
                    <h1 class="xs-text-center">JaGalau Tasks Module</h1>
                    <p class="lead">A centralized platform for organizing and tracking project tasks. </p>
                </div>
                <div class="col-sm-6">
                    <div class="card w-75 mx-auto shadow-sm bg-dark">
                        <div class="card-body">
                            <h2>Login</h2><hr>
                            <form id="loginForm">
                                <span class="text-danger d-none" id="invalidWarning">Invalid Credentials<br></span>
                                <input type="hidden" name="crud-type" value="login">
                                <label for="username">Username</label>
                                <input type="text" required class="form-control form-control-sm" name="username">
                                <label for="password">Password</label>
                                <input type="password" required class="form-control form-control-sm" name="password">
                                <button class="btn btn-sm btn-light mt-3 float-end">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
    <footer class="bg-dark p-5">
        <div class="container text-light">
            <div class="row">
                <div class="col-sm-4" style="border-right: 1px solid white">
                    <h4>CONTACT US</h4>
                    <p><i class="fas fa-envelope"></i> jsgalaus@gmail.com</p>
                    <p><i class="fas fa-phone"></i> +63 991 8388 677</p>
                </div>
                <div class="col-sm-4"></div>
                <div class="col-sm-4"></div>
            </div>
        </div>
    </footer>

    <script src="assets/js/login.js"></script>
</body>
</html>