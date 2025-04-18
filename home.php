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
    <title>JaGalau Web</title>
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
        #logobox{
            animation: upright 0.3s ease-in-out 0.5s forwards;
        }
        #logobox2{
            animation: upright 0.3s ease-in-out 0.3s forwards;
        }
        #logobox,#logobox2{
            border: 1px solid rgba(248, 249, 250,0);
            transform: rotate(0deg);  
            position: relative;
            width: fit-content;
            margin-left: auto;
            margin-right: auto;
        }
        #logobox img{
            transform: rotate(-60deg);
        }
        #logobox2.spinning{
            border: 1px solid rgba(248, 249, 250,0);
            animation: spin 1s ease-in-out forwards;
        }
        @keyframes upright{
            from{
                border: 1px solid rgba(248, 249, 250,0);
                transform: rotate(0deg);                
            }to{
                border: 1px solid #f8f9fa;
                transform: rotate(30deg);
            }
        }
        @keyframes spin{
            from{                
                border: 1px solid rgba(248, 249, 250,1);
                transform: rotate(30deg);
            }to{                
                border: 1px solid rgba(248, 249, 250,1);
                transform: rotate(360deg);
            }
        }
        #sidescroller{scroll-behavior: smooth;}
        #box {
            background-color: white;
            border: 5px solid black;
            transition: all 1s;
            width: 200px;
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            padding: 20px;
            line-height: 0.7;
            top: 0;
        }
        #box2{
            background-color: rgba(255,255,255,0);
            border: 4px solid rgba(0,0,0,0);
            transition: all 0.6s;
            width: 0px;
            height: 0px;
            border-radius: 50%;
            z-index: 1;
        }
        .vertical {
            font-size: 32px;
            font-variant: small-caps; 
            transition: all 0.6s;
            color: rgba(0,0,0,1);
            position: relative;
            z-index: 2;
        }
        .skill.big{
            cursor: pointer;
            /* background-color: #0e1d2c !important; */
            background: linear-gradient(0deg, rgba(14,29,44,1) 0%, rgba(7,90,151,1) 100%);
            opacity: 1 !important;
        }

    </style>
</head>
<body>    
    <nav id="mainnav" class="mainnav navbar navbar-expand-lg bg-dark fixed-top">
        <div class="mainnav container-fluid px-5">
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <i class="fa-solid fa-list-ul"></i>
            </button> -->
            <a class="mainnav navbar-brand" href="#">
                <img class="mainnav " src="assets/icons/logo.svg" alt="Bootstrap" width="30" height="24">
            </a>            
            <button class="mainnav navbar-toggler text-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="mainnav bg-dark offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="mainnav offcanvas-header"> 
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">JG Web</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="mainnav offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item" data-bs-dismiss="offcanvas">
                            <a class="nav-link" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item" data-bs-dismiss="offcanvas">
                            <a class="nav-link" href="#about-us">About</a>
                        </li>
                        <li class="nav-item" data-bs-dismiss="offcanvas">
                            <a class="nav-link" href="#about-us"">Portfolio</a>
                        </li>
                        <li class="nav-item" data-bs-dismiss="offcanvas">
                            <a class="nav-link" href="#skills">Skills</a>
                        </li>
                        <li class="nav-item" data-bs-dismiss="offcanvas">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div id="mast" class="vw-100 vh-100">
        <div class="container container-lg text-light d-flex align-items-center h-100">
            <div class="row flex-grow-1" id="mastrow">
                <div class="col-lg-1"></div>
                <div class="col-lg-5">
                    <div class="d-xl-flex align-items-center pos-rel text-center">
                        <div id="logobox" class="rounded">
                            <div id="logobox2" class="rounded p-5">
                                <img src="assets/icons/logo.svg" height="70" class="d-none md-d-block" alt="" >
                                <img src="assets/icons/logo.svg" height="50" class="d-none sm-d-block md-d-none" alt="" >
                                <img src="assets/icons/logo.svg" height="30" class="d-none xs-d-block" alt="" >
                            </div>
                        </div>
                        <h1>Web systems, made to order</h1>
                    </div>
                    
                </div>
                <div class="col-lg-5">
                    <div class="opacity-50 text-center">
                        <h2>Have an app or system for commission? Let's build it piece by piece!</h2>                        
                    </div>
                    <div class="w-100 text-center mt-3">
                        <a href="#sect-builder"><button class="btn btn-lg btn-primary fw-bold p-3">Get started</button></a>
                    </div>
                    
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
    </div>
    <div id="sect-builder" class="vw-100 vh-100">
        <div class="container container-lg">
            <div class="content">
                <div class="row">    
                    <div class="col-sm-6 text-light">
                        <h2>Parts Selection</h2>
                        
                        <p>First, let's select some features functionalities that would go into your app. Most of these are pretty standard, but their complexity might vary depending on your needs</p>
                        <div class="accordion card" id="ac">
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ac1" aria-expanded="false" aria-controls="ac1">
                                    Login and Registration
                                    </button>
                                </h3>
                                <div id="ac1" class="accordion-collapse collapse" data-bs-parent="#ac">
                                    <div class="accordion-body">For systems that use <b>authentication</b>, this feature is definitely a must. However, if you don't care who uses your system (such as for calculations, games, etc.), then you don't have to add these. <a href="info/login-and-register">Read more about what comes with this feature ></a></div>
                                    <a href="#selected-parts">
                                        <button class="btn btn-primary float-end me-2 mb-2">Add</button>
                                    </a>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ac2" aria-expanded="false" aria-controls="ac2">
                                    User Types
                                    </button>
                                </h3>
                                <div id="ac2" class="accordion-collapse collapse" data-bs-parent="#ac">
                                    <div class="accordion-body">The <b>content</b> you serve, usable <b>features</b>, and <b>permissions</b> can all be determined by the types of your users. It is recommended to have this feature if your system will be used by users with different roles such as admins, guests, customers, etc. <a href="info/login-and-register#user-types">Read More about user types></a></div>
                                    <a href="#selected-parts">
                                        <button class="btn btn-primary float-end me-2 mb-2">Add</button>
                                    </a>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ac3" aria-expanded="false" aria-controls="ac3">
                                    Dashboards
                                    </button>
                                </h3>
                                <div id="ac3" class="accordion-collapse collapse" data-bs-parent="#ac">
                                    <div class="accordion-body">
                                        This goes well together with <b>User Types</b>, and is quite useful in information management systems where the user can view and manage the contents of the system and its data. <a href="info/dashboards">Read More ></a>
                                    </div>
                                    <a href="#selected-parts">
                                        <button class="btn btn-primary float-end me-2 mb-2">Add</button>
                                    </a>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ac4" aria-expanded="false" aria-controls="ac4">
                                    Audit Trails
                                    </button>
                                </h3>
                                <div id="ac4" class="accordion-collapse collapse" data-bs-parent="#ac">
                                    <div class="accordion-body">An audit trail is a record or trail of actions that has been performed by users, applications, or systems. It typically includes information such as the user who performed the action, the action that was performed, the time and date of the action, and the results of the action. <a href="#">Read More ></a>
                                        
                                    </div>
                                    <a href="#selected-parts">
                                        <button class="btn btn-primary float-end me-2 mb-2">Add</button>
                                    </a>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ac5" aria-expanded="false" aria-controls="ac5">
                                    Wireframes
                                    </button>
                                </h3>
                                <div id="ac5" class="accordion-collapse collapse" data-bs-parent="#ac">
                                    <div class="accordion-body">
                                        Designing the interface of a system on the fly can be a time-consuming task, so having a wireframe on hand would really speed up the development process. If you don't have one already, we can make one for you! <a href="#">Read More ></a>
                                    </div>
                                    <a href="#selected-parts">
                                        <button class="btn btn-primary float-end me-2 mb-2">Add</button>
                                    </a>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ac6" aria-expanded="false" aria-controls="ac6">
                                    Brands and logos
                                    </button>
                                </h3>
                                <div id="ac6" class="accordion-collapse collapse" data-bs-parent="#ac">
                                    <div class="accordion-body">
                                        You can request a logo that represents your brand's personality and values. Our design process is collaborative and personalized, refining the design until it meets your needs and exceeds your expectations. The app's theme, design, and color scheme will also revolve around your logo and brand. <a href="#">Read More ></a>
                                    </div>
                                    <a href="#selected-parts">
                                        <button class="btn btn-primary float-end me-2 mb-2">Add</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card mt-3">
                            <div class="card-body">
                                <h5 id="selected-parts">Selected parts</h5>                                
                                <div id="selected-features" class="d-flex flex-wrap text-light">
                                    <div class="sf p-1 m-1 card bg-dark d-none" val="ac1" id="sf-1">
                                        <div class="card-body p-1">Login and Registration<button class="btn btn-sm bg-dark text-light"><i class="fa-solid fa-x"></i></button></div>
                                    </div>
                                    <div class="sf p-1 m-1 card bg-dark d-none" val="ac2" id="sf-2">
                                        <div class="card-body p-1">User Types<button class="btn btn-sm bg-dark text-light"><i class="fa-solid fa-x"></i></button></div>
                                    </div>
                                    <div class="sf p-1 m-1 card bg-dark d-none" val="ac3" id="sf-3">
                                        <div class="card-body p-1">Dashboards<button class="btn btn-sm bg-dark text-light"><i class="fa-solid fa-x"></i></button></div>
                                    </div>
                                    <div class="sf p-1 m-1 card bg-dark d-none" val="ac4" id="sf-4">
                                        <div class="card-body p-1">Audit Trails<button class="btn btn-sm bg-dark text-light"><i class="fa-solid fa-x"></i></button></div>
                                    </div>
                                    <div class="sf p-1 m-1 card bg-dark d-none" val="ac5" id="sf-5">
                                        <div class="card-body p-1">Wireframes<button class="btn btn-sm bg-dark text-light"><i class="fa-solid fa-x"></i></button></div>
                                    </div>
                                    <div class="sf p-1 m-1 card bg-dark d-none" val="ac6" id="sf-6">
                                        <div class="card-body p-1">Brands and Logos<button class="btn btn-sm bg-dark text-light"><i class="fa-solid fa-x"></i></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="d-flex align-items-center">
                
                
            </div>
        </div>
    </div>
    <div id="waves"  class="vw-100 pos-rel" style="height: 350px">
        <!-- <svg xmlns="http://www.w3.org/2000/svg" class="pos-a b0" viewBox="0 0 1440 320"><path fill="#f8f9fa" fill-opacity="0.7" d="M0,128L20,122.7C40,117,80,107,120,128C160,149,200,203,240,197.3C280,192,320,128,360,117.3C400,107,440,149,480,181.3C520,213,560,235,600,250.7C640,267,680,277,720,245.3C760,213,800,139,840,138.7C880,139,920,213,960,229.3C1000,245,1040,203,1080,197.3C1120,192,1160,224,1200,218.7C1240,213,1280,171,1320,144C1360,117,1400,107,1420,101.3L1440,96L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path></svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="pos-a b0" viewBox="0 0 1440 320"><path fill="#f8f9fa" fill-opacity="0.9" d="M0,224L24,213.3C48,203,96,181,144,186.7C192,192,240,224,288,213.3C336,203,384,149,432,112C480,75,528,53,576,85.3C624,117,672,203,720,218.7C768,235,816,181,864,154.7C912,128,960,128,1008,154.7C1056,181,1104,235,1152,250.7C1200,267,1248,245,1296,240C1344,235,1392,245,1416,250.7L1440,256L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"></path></svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="pos-a b0" viewBox="0 0 1440 320"><path fill="#f8f9fa" fill-opacity="0.7" d="M0,192L24,181.3C48,171,96,149,144,138.7C192,128,240,128,288,133.3C336,139,384,149,432,170.7C480,192,528,224,576,197.3C624,171,672,85,720,64C768,43,816,85,864,101.3C912,117,960,107,1008,101.3C1056,96,1104,96,1152,122.7C1200,149,1248,203,1296,234.7C1344,267,1392,277,1416,282.7L1440,288L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"></path></svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="pos-a b0" viewBox="0 0 1440 320"><path fill="#f8f9fa" fill-opacity="0.9" d="M0,96L24,122.7C48,149,96,203,144,213.3C192,224,240,192,288,181.3C336,171,384,181,432,160C480,139,528,85,576,80C624,75,672,117,720,117.3C768,117,816,75,864,64C912,53,960,75,1008,117.3C1056,160,1104,224,1152,234.7C1200,245,1248,203,1296,181.3C1344,160,1392,160,1416,160L1440,160L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"></path></svg> -->
        <svg xmlns="http://www.w3.org/2000/svg" class="pos-a b0" viewBox="0 0 1440 320"><path fill="#f8f9fa" fill-opacity="0.9" d="M0,160L40,32L80,288L120,288L160,224L200,192L240,224L280,160L320,224L360,256L400,224L440,320L480,288L520,320L560,64L600,96L640,224L680,160L720,160L760,320L800,96L840,128L880,256L920,288L960,288L1000,256L1040,192L1080,224L1120,256L1160,160L1200,96L1240,288L1280,64L1320,64L1360,288L1400,320L1440,224L1440,320L1400,320L1360,320L1320,320L1280,320L1240,320L1200,320L1160,320L1120,320L1080,320L1040,320L1000,320L960,320L920,320L880,320L840,320L800,320L760,320L720,320L680,320L640,320L600,320L560,320L520,320L480,320L440,320L400,320L360,320L320,320L280,320L240,320L200,320L160,320L120,320L80,320L40,320L0,320Z"></path></svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="pos-a b0" viewBox="0 0 1440 320"><path fill="#f8f9fa" fill-opacity="0.8" d="M0,288L130.9,160L261.8,128L392.7,96L523.6,160L654.5,256L785.5,224L916.4,192L1047.3,128L1178.2,288L1309.1,96L1440,288L1440,320L1309.1,320L1178.2,320L1047.3,320L916.4,320L785.5,320L654.5,320L523.6,320L392.7,320L261.8,320L130.9,320L0,320Z"></path></svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="pos-a b0" viewBox="0 0 1440 320"><path fill="#f8f9fa" fill-opacity="0.7" d="M0,160L130.9,64L261.8,96L392.7,160L523.6,192L654.5,192L785.5,192L916.4,160L1047.3,320L1178.2,224L1309.1,288L1440,96L1440,320L1309.1,320L1178.2,320L1047.3,320L916.4,320L785.5,320L654.5,320L523.6,320L392.7,320L261.8,320L130.9,320L0,320Z"></path></svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="pos-a b0" viewBox="0 0 1440 320"><path fill="#f8f9fa" fill-opacity="0.9" d="M0,160L130.9,96L261.8,128L392.7,128L523.6,128L654.5,224L785.5,96L916.4,256L1047.3,192L1178.2,64L1309.1,192L1440,64L1440,320L1309.1,320L1178.2,320L1047.3,320L916.4,320L785.5,320L654.5,320L523.6,320L392.7,320L261.8,320L130.9,320L0,320Z"></path></svg>
    </div>

    <div id="about-us" class="vw-100 bg-light pos-rel">
        <div class="container pos-rel text-center py-3">
            <span class="home-text sm-d-none md-d-block p-5">
                Hi, my name is Jayrod and I'm a freelance web developer specializing in creating innovative and user-friendly web apps.
            </span>
            <h1 class="lead sm-d-block md-d-none p-5">
                Hi, my Name is Jayrod and I'm a freelance web developer specializing in creating innovative and user-friendly web apps. 
            </h1>
            <div class="pos-rel x-centered w-50">
                <hr>
            </div>
        </div>
    </div>
    <div id="projects" class="vw-100 vh-50 bg-light pos-rel">
        <button id="box" class="pos-rel">
            <div id="boxtext" class="vertical text-center">
                check my projects
                <!-- <div id="goto-projects" class="mt-3">
                    <i class="fa-solid fa-right-to-bracket"></i>
                </div> -->
                
            </div>
            <div id="box2" class="pos-a centered"></div>
            
        </button>
    </div>
    <div id="skills" class="vw-100 bg-light pos-rel">
        <div class="container pos-rel text-center py-3">
            <span class="home-text sm-d-none md-d-block p-5">
                My Skills
            </span>
            <span class="lead sm-d-block md-d-none p-5">
                My Skills
            </span>
            <div class="pos-rel x-centered w-50">
                <hr>
            </div>
        </div>
        
        <div class="container sm-vh-50 d-flex flex-wrap justify-content-center align-items-end" style="min-height: 400px">
            <a href="cert/HTML5CSS" class="clearformat">
                <div id="skill-1" class="skill bg-dark flex-grow-1 mx-2 p-2" percent="85">
                    <i class="fa-brands fa-html5"></i>
                    <div style="height: 30px; width: 100%">HTML5</div>
                </div>
            </a>
            <a href="cert/HTML5CSS" class="clearformat">
                <div id="skill-2" class="skill bg-dark flex-grow-1 mx-2 p-2" percent="62">
                    <i class="fa-brands fa-css3"></i>
                    <div style="height: 30px; width: 100%">CSS3</div>
                </div>
            </a>
            <div id="skill-3" class="skill bg-dark flex-grow-1 mx-2 p-2" percent="70">
                <i class="fa-brands fa-js"></i>
                <div style="height: 30px; width: 100%">JAVASCRIPT</div>
            </div>
            <div id="skill-4" class="skill bg-dark flex-grow-1 mx-2 p-2" percent="65">
                <i class="fa-brands fa-php"></i>
                <div style="height: 30px; width: 100%">PHP</div>
            </div>
            <div id="skill-5" class="skill bg-dark flex-grow-1 mx-2 p-2" percent="80">
                <i class="fa-brands fa-bootstrap"></i>
                <div style="height: 30px; width: 100%">BOOTSTRAP</div>
            </div>
            <div id="skill-6" class="skill bg-dark flex-grow-1 mx-2 p-2" percent="85">
                <svg xmlns="http://www.w3.org/2000/svg" height="28pt" viewBox="0 0 32 32" fill="#ffffff">
                    <path d="M2.144 7.705c-2.83 4.07-2.48 9.364-.316 13.7.05.104.105.206.158.308l.1.195c.02.038.042.075.063.112.037.07.075.134.113.202l.207.354.118.194.24.375.102.158c.113.168.228.336.347.5l.068.092a16.39 16.39 0 0 0 .316.42l.12.152.292.36.112.134c.133.157.27.313.407.465.014.015.02.02.024.026a20.44 20.44 0 0 0 .414.436l.133.134.33.324.135.13a16.98 16.98 0 0 0 .453.412l.496.42.17.136.343.268.183.14.385.276.18.127c.123.085.248.166.374.247l.162.108a20.81 20.81 0 0 0 .585.358l.162.1.44.246c.08.043.162.084.243.125l.314.163.073.035.13.062.498.23.105.047a17.83 17.83 0 0 0 .581.241l.14.056.548.203.07.024a21.72 21.72 0 0 0 .61.2l.148.044c.2.063.416.14.63.178 13.694 2.497 17.67-8.23 17.67-8.23-3.34 4.352-9.27 5.5-14.9 4.222-.213-.048-.42-.114-.627-.176l-.156-.047a18.62 18.62 0 0 1-.604-.197l-.083-.03a20.87 20.87 0 0 1-.532-.197l-.15-.06a15.16 15.16 0 0 1-.575-.24l-.115-.05-.485-.226-.14-.067c-.126-.06-.25-.127-.375-.2l-.25-.13c-.152-.08-.3-.166-.45-.252l-.152-.085a21.76 21.76 0 0 1-.585-.358c-.053-.034-.105-.07-.158-.105l-.416-.277c-.046-.03-.1-.064-.134-.094l-.394-.285-.175-.132-.355-.278-.158-.127-.442-.373a.73.73 0 0 0-.05-.04l-.465-.423-.13-.126-.332-.33-.13-.13c-.14-.143-.276-.287-.4-.434-.007-.007-.014-.014-.02-.022a16.98 16.98 0 0 1-.416-.474l-.1-.13-.3-.37-.1-.137-.346-.46C2.982 15.6 1.86 9.722 4.354 4.902m6.58-.625c-2.048 2.947-1.937 6.9-.34 10.008a13.06 13.06 0 0 0 .906 1.512c.307.44.647.963 1.054 1.316.148.163.302.32.46.477l.12.12a13.41 13.41 0 0 0 .469.436c.007.005.012.012.02.017.182.16.366.3.553.458l.124.097a13.46 13.46 0 0 0 .574.419l.017.012c.086.06.174.115.262.173.042.027.082.056.124.082a11.64 11.64 0 0 0 .425.26l.06.035.376.2c.044.025.1.046.134.07l.263.136c.013.007.027.012.04.018a11.39 11.39 0 0 0 .548.255l.12.05a14.16 14.16 0 0 0 .45.182l.192.07a14.26 14.26 0 0 0 .413.143l.187.06c.197.06.4.14.597.173 10.573 1.752 13.014-6.4 13.014-6.4-2.2 3.17-6.46 4.68-11.008 3.5a13.06 13.06 0 0 1-.599-.173c-.06-.018-.12-.038-.18-.058l-.42-.144-.2-.07a15.08 15.08 0 0 1-.45-.182l-.122-.05a12.58 12.58 0 0 1-.552-.256l-.277-.14-.16-.082a13.16 13.16 0 0 1-.35-.197l-.084-.047a12.34 12.34 0 0 1-.424-.26c-.043-.027-.085-.057-.128-.085l-.275-.182a13.24 13.24 0 0 1-.57-.418l-.13-.1c-2-1.572-3.568-3.72-4.318-6.154-.786-2.525-.617-5.36.745-7.66m5.732-.183C17.12 3.5 17 5.698 17.838 7.66c.883 2.083 2.693 3.716 4.806 4.5l.262.1.116.036.377.1c5.838 1.128 7.42-2.996 7.843-3.603-1.387 1.997-3.718 2.476-6.578 1.782-.226-.055-.474-.137-.692-.214a8.46 8.46 0 0 1-.822-.341 8.5 8.5 0 0 1-1.441-.879C19.15 7.2 17.56 3.486 19.23.47"/>
                </svg>
                <div style="height: 30px; width: 100%">JQUERY</div>
            </div>
        </div>
        <div class="container sm-vh-50 d-flex flex-wrap justify-content-center align-items-end" style="min-height: 400px"><!--  -->
            <div id="skill-7" class="skill bg-dark flex-grow-1 mx-2 p-3" percent="60">
                <i class="fa-brands fa-laravel"></i>
                <div style="height: 30px; width: 100%">LARAVEL</div>
            </div>
            <div id="skill-8" class="skill bg-dark flex-grow-1 mx-2 p-3" percent="65">
                <svg height="28pt" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20 9.70443C19.5463 10.0634 19.0503 10.3678 18.5513 10.6173C16.7096 11.5381 14.3521 12 12 12C9.64787 12 7.29044 11.5381 5.44872 10.6173C4.94966 10.3678 4.45372 10.0634 4 9.70443V12C4 13.0575 4.83807 14.0759 6.34315 14.8284C7.84341 15.5786 9.87823 16 12 16C14.1218 16 16.1566 15.5786 17.6569 14.8284C19.1619 14.0759 20 13.0575 20 12V9.70443ZM20 15.7044C19.5463 16.0634 19.0503 16.3678 18.5513 16.6173C16.7096 17.5381 14.3521 18 12 18C9.64787 18 7.29044 17.5381 5.44872 16.6173C4.94966 16.3678 4.45372 16.0634 4 15.7044V18C4 20.2091 7.58172 22 12 22C16.4183 22 20 20.2091 20 18V15.7044ZM20 6C20 3.79086 16.4183 2 12 2C7.58172 2 4 3.79086 4 6C4 7.0575 4.83807 8.07589 6.34315 8.82843C7.84341 9.57856 9.87823 10 12 10C14.1218 10 16.1566 9.57856 17.6569 8.82843C19.1619 8.07589 20 7.0575 20 6Z" fill="#ffffff"/>
                </svg>
                <div style="height: 30px; width: 100%">DBMS</div>
            </div>
            <div id="skill-10" class="skill bg-dark flex-grow-1 mx-2 p-3" percent="32">
                <i class="fa-brands fa-wordpress"></i>
                <div style="height: 30px; width: 100%">wordpress</div>
            </div>
            <div id="skill-9" class="skill bg-dark flex-grow-1 mx-2 p-3"  percent="50">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                    height="28pt" viewBox="0 0 2105.000000 2007.000000"
                    preserveAspectRatio="xMidYMid meet">

                    <g transform="translate(0.000000,2007.000000) scale(0.100000,-0.100000)"
                    fill="#ffffff" stroke="none">
                        <path d="M10111 20044 c2 -5 28 -58 57 -116 291 -592 225 -1313 -197 -2157
                        -415 -827 -1021 -1528 -2280 -2636 -859 -756 -1181 -1055 -1747 -1620 -526
                        -525 -743 -757 -1127 -1205 -1289 -1501 -2081 -3052 -2361 -4625 -289 -1627
                        24 -3225 878 -4485 717 -1056 1780 -1878 3113 -2405 276 -110 773 -269 998
                        -320 39 -9 79 -18 90 -21 11 -3 -43 28 -120 68 -381 200 -673 410 -974 703
                        -473 460 -815 994 -991 1550 -255 805 -118 1744 383 2615 292 508 737 1015
                        1252 1426 105 84 280 214 287 214 3 0 -8 -53 -23 -117 -95 -394 -108 -657 -45
                        -904 42 -166 99 -284 207 -429 313 -423 848 -626 1370 -520 517 105 876 436
                        989 910 101 425 -15 921 -307 1318 -30 40 -108 132 -175 205 -727 793 -1051
                        1361 -1128 1977 -15 125 -12 386 5 509 67 457 271 908 591 1306 87 108 345
                        375 362 375 5 0 -2 -36 -14 -81 -116 -400 8 -824 377 -1290 158 -199 463 -488
                        724 -686 193 -145 702 -473 1310 -843 853 -519 1151 -711 1534 -989 603 -438
                        1100 -913 1458 -1392 487 -652 762 -1322 833 -2029 15 -146 15 -486 0 -654
                        -90 -1043 -713 -2008 -1745 -2703 -228 -154 -652 -382 -920 -496 -60 -26 -105
                        -47 -100 -47 6 0 105 25 220 54 765 198 1478 481 2167 860 527 289 1030 637
                        1478 1022 267 230 663 640 887 919 657 819 1068 1730 1212 2685 68 456 72 982
                        11 1485 -77 634 -257 1226 -551 1815 -133 266 -233 437 -404 695 -369 552
                        -858 1088 -1430 1565 -284 237 -769 580 -1125 795 -177 107 -640 359 -647 352
                        -2 -3 0 -14 6 -25 18 -34 53 -184 60 -257 l7 -70 16 95 c9 52 16 82 17 65 1
                        -42 -28 -217 -38 -229 -5 -6 -19 -40 -31 -76 -12 -36 -42 -108 -67 -160 -25
                        -52 -47 -101 -49 -107 -6 -30 -105 -155 -184 -233 -217 -214 -515 -357 -836
                        -400 -56 -8 -151 -11 -245 -8 -432 14 -778 188 -1048 528 -214 268 -338 554
                        -403 930 -20 114 -16 514 6 670 44 317 100 539 326 1300 169 568 230 870 251
                        1249 35 656 -113 1333 -440 2006 -320 659 -826 1310 -1412 1815 -164 142 -325
                        270 -318 254z"/>
                    </g>
                </svg>
                <div style="height: 30px; width: 100%">codeigniter</div>
            </div>
            <div id="skill-11" class="skill bg-dark flex-grow-1 mx-2 p-3" percent="30">
                <svg xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality"  height="28pt"  fill="#ffffff" clip-rule="evenodd" viewBox="0 0 507 511.92">
                    <path d="M223.36 0c61.68 0 117.53 25 157.95 65.43 40.42 40.42 65.42 96.26 65.42 157.94 0 45.12-13.39 87.12-36.4 122.25L507 450.99l-66.66 60.93-93.23-102.59c-35.42 23.63-77.98 37.4-123.75 37.4-61.67 0-117.52-25-157.94-65.42C25 340.88 0 285.04 0 223.36c0-61.67 25-117.52 65.42-157.94S161.69 0 223.36 0zm-16.05 178.1c12.05 0 21.82 9.77 21.82 21.82s-9.77 21.82-21.82 21.82-21.82-9.77-21.82-21.82 9.77-21.82 21.82-21.82zM55.05 216.47c24.31-31.16 51.43-55.99 80.23-72.7 28.22-16.38 58.07-25.02 88.52-24.33 28.53.66 57.29 9.64 85.4 26.05 28.02 16.35 55.55 40.18 81.71 70.56l5.43 6.3-4.62 6.9c-21.19 31.7-47.11 56.41-75.52 73.12-29.04 17.09-60.69 25.81-92.56 25.14-30.85-.65-61.75-10.12-90.55-26.92-28.79-16.79-55.57-40.91-78.17-70.82l-5.03-6.67 5.16-6.63zm168.11-49.26c15.51 0 29.6 6.32 39.78 16.5 10.17 10.17 16.48 24.26 16.48 39.77 0 15.51-6.31 29.59-16.48 39.77-10.18 10.18-24.27 16.49-39.78 16.49-15.51 0-29.57-6.31-39.75-16.49-10.21-10.18-16.52-24.26-16.52-39.77 0-15.5 6.3-29.55 16.5-39.75 10.23-10.23 24.28-16.52 39.77-16.52zm-76.93-4.55c-24.34 14.12-47.51 34.76-68.68 60.59 19.69 24.55 42.37 44.4 66.49 58.45 25.7 14.99 53.02 23.44 80.03 24.01 27.8.58 55.53-7.1 81.11-22.15 23.52-13.84 45.27-33.93 63.66-59.58-22.83-25.47-46.61-45.56-70.67-59.6-25-14.59-50.2-22.57-74.8-23.14-26.29-.6-52.32 7.01-77.14 21.42zm217.46-79.61c-35.91-35.91-85.53-58.13-140.33-58.13-54.8 0-104.41 22.22-140.32 58.13-35.91 35.91-58.12 85.51-58.12 140.31s22.21 104.42 58.12 140.32c35.91 35.92 85.52 58.12 140.32 58.12s104.42-22.2 140.33-58.12c35.91-35.9 58.11-85.51 58.11-140.32 0-54.8-22.2-104.4-58.11-140.31z"/>
                </svg>
                <div style="height: 30px; width: 100%">SEO</div>
            </div>
            <a href="https://www.linkedin.com/learning/certificates/241cc7cd53f8a038dd7b4bab26e47a468a97e54abbbe4463a667ae000f32b9e9" target="_blank" class="clearformat">
                <div id="skill-12" class="skill bg-dark flex-grow-1 mx-2 p-3" percent="40">
                    <svg xmlns="http://www.w3.org/2000/svg" height="28pt" viewBox="0 0 32 32" id="agile">
                        <g>
                            <path fill="#ffffff" d="M14.394,6.02l.313-.313a1,1,0,1,0-1.414-1.414l-2,2a1,1,0,0,0,0,1.414l2,2a1,1,0,0,0,1.414-1.414l-.271-.271A8.994,8.994,0,0,1,14,26H3a1,1,0,0,0,0,2H14a10.993,10.993,0,0,0,.394-21.98Z"></path><path fill="#ffffff" d="M29.707 26.293l-2-2a1 1 0 00-1.414 1.414l.293.293H23a1 1 0 000 2h3.586l-.293.293a1 1 0 101.414 1.414l2-2A1 1 0 0029.707 26.293zM6.011 24a1 1 0 00.8-1.6A8.9 8.9 0 015 17 9 9 0 019.5 9.217a1 1 0 00-1-1.734A11.007 11.007 0 003 17a10.883 10.883 0 002.211 6.6A1 1 0 006.011 24z"></path>
                        </g>
                    </svg>
                    <div style="height: 30px; width: 100%">AGILE</div>
                </div>
            </a>
        </div>
    </div>
    <div id="waves" class="vw-100 pos-rel" style="height: 350px">
        <svg xmlns="http://www.w3.org/2000/svg" class="pos-a t0" viewBox="0 0 1440 320"><path fill="#f8f9fa" fill-opacity="0.9" d="M0,160L40,32L80,288L120,288L160,224L200,192L240,224L280,160L320,224L360,256L400,224L440,0L480,288L520,0L560,64L600,96L640,224L680,160L720,160L760,0L800,96L840,128L880,256L920,288L960,288L1000,256L1040,192L1080,224L1120,256L1160,160L1200,96L1240,288L1280,64L1320,64L1360,288L1400,0L1440,224L1440,0L1400,0L1360,0L1320,0L1280,0L1240,0L1200,0L1160,0L1120,0L1080,0L1040,0L1000,0L960,0L920,0L880,0L840,0L800,0L760,0L720,0L680,0L640,0L600,0L560,0L520,0L480,0L440,0L400,0L360,0L320,0L280,0L240,0L200,0L160,0L120,0L80,0L40,0L0,0Z"></path></svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="pos-a t0" viewBox="0 0 1440 320"><path fill="#f8f9fa" fill-opacity="0.8" d="M0,288L130.9,160L261.8,128L392.7,96L523.6,160L654.5,256L785.5,224L916.4,192L1047.3,128L1178.2,288L1309.1,96L1440,288L1440,0L1309.1,0L1178.2,0L1047.3,0L916.4,0L785.5,0L654.5,0L523.6,0L392.7,0L261.8,0L130.9,0L0,0Z"></path></svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="pos-a t0" viewBox="0 0 1440 320"><path fill="#f8f9fa" fill-opacity="0.7" d="M0,160L130.9,64L261.8,96L392.7,160L523.6,192L654.5,192L785.5,192L916.4,160L1047.3,0L1178.2,224L1309.1,288L1440,96L1440,0L1309.1,0L1178.2,0L1047.3,0L916.4,0L785.5,0L654.5,0L523.6,0L392.7,0L261.8,0L130.9,0L0,0Z"></path></svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="pos-a t0" viewBox="0 0 1440 320"><path fill="#f8f9fa" fill-opacity="0.9" d="M0,160L130.9,96L261.8,128L392.7,128L523.6,128L654.5,224L785.5,96L916.4,256L1047.3,192L1178.2,64L1309.1,192L1440,64L1440,0L1309.1,0L1178.2,0L1047.3,0L916.4,0L785.5,0L654.5,0L523.6,0L392.7,0L261.8,0L130.9,0L0,0Z"></path></svg>
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

    <script>
        $(function(){
            const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
            const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
            const wid = $(window).width();
            $(document)
            .on('click','body',function(e){
                if(!$(e.target).hasClass('mainnav')){
                    var exp = ($('#mainnavbar-toggler').attr('aria-expanded'));
                    if(exp == 'true' || $('#navbarContent').hasClass('show')){
                        $('#navbarContent').removeClass('show')
                        $('#mainnavbar-toggler').attr('aria-expanded',false)
                    }
                }
            })
            .on('click','#logobox2',function(){
                $(this).addClass('spinning')
                setTimeout(function(){$('#logobox2').removeClass('spinning')},1000)
            })
            .on('click','#ac .btn-primary',function(e){
                var item = $(this).closest('.accordion-item');
                var title = (item.find('.accordion-button').attr("aria-controls")).trim();
                $('.sf[val='+title+']').removeClass('d-none')
            })
            .on('click','.sf button',function(){
                $(this).closest('.sf').addClass('d-none');
            })
            .on('mouseenter','#box.full',function(e){
                let l = $(this).css('left');
                let newl = "calc("+l+" - 10px)";
                $(this).css({"height":"220px","width":"220px","left":newl,"top":"-10px","border": "2px solid black"})
                // $('#box2').css({"height":"200px","width":"200px"});
                setTimeout(()=>{
                    // option 1: small circle border
                    // $('#box2').css({"height":"200px","width":"200px","border":"4px solid rgba(0,0,0,1)"});
                    // option 2: small circle invert
                    /* $('#box2').css({"height":"200px","width":"200px","border":"4px solid rgba(0,0,0,1)","background-color": "rgba(0,0,0,1)"});
                    $('#boxtext').css({"color":"rgba(255,255,255,1)"}); */
                    // option 3: full circle invert
                    $('#box2').css({"height":"220px","width":"220px","border":"4px solid rgba(0,0,0,1)","background-color": "rgba(0,0,0,1)"});
                    $('#boxtext').css({"color":"rgba(255,255,255,1)"});
                },200);
            })
            .on('mouseleave','#box.full',function(e){
                let l = "calc("+wid/2+"px - 100px)";
                // option 2: small circle invert
                /* $('#box2').css({"height":"0px","width":"0px","border":"4px solid rgba(0,0,0,0)","background-color": "rgba(255,255,255,0)"})
                $('#boxtext').css({"color":"rgba(0,0,0,1)"}); */
                // option 3: full circle invert
                $('#boxtext').css({"color":"rgba(0,0,0,1)"});
                setTimeout(()=>{
                    $('#box2').css({"height":"0px","width":"0px","border":"none"})
                },100);
                setTimeout(()=>{
                    $(this).css({"height":"200px","width":"200px","left":l,"top":"0","border": "5px solid black"})
                },200);
            })
            .on('mouseenter','.skill.full',function(e){
                let percent = $(this).attr('percent')
                // $(this).css({"opacity":percent-15+"%"});
                $(this).addClass('big')
            })
            .on('mouseleave','.skill.full',function(e){
                let percent = $(this).attr('percent')
                $(this).css({"opacity":percent+"%"})
                $(this).removeClass('big')
            })
            ;

            const numSteps = 20.0;
            let boxElement;
            let skillbox;
            let rotation = 0;
            let skillboxObservers = [];
            // Set things up
            window.addEventListener(
                "load",
                (event) => {
                    boxElement = document.querySelector("#box");
                    skillbox = $('.skill').toArray();//document.getElementsByClassName("home-text");
                    createObserver();
                },
                false,
            );
            function createObserver() {
                let observer; 
                let options = {
                    root: null,
                    rootMargin: "50px",
                    threshold: buildThresholdList(),
                };
                skillbox.forEach((ele)=>{
                    let skillboxObserver = new IntersectionObserver(skillboxIntersect, options);
                    skillboxObserver.observe(ele);
                    skillboxObservers.push(skillboxObserver);
                })
                observer = new IntersectionObserver(boxIntersect, options);
                observer.observe(boxElement);

                
            }
            function buildThresholdList() {
                let thresholds = [];
                let numSteps = 20;

                for (let i = 1.0; i <= numSteps; i++) {
                    let ratio = i / numSteps;
                    thresholds.push(ratio);
                }

                thresholds.push(0);
                return thresholds;
            }
            function boxIntersect(entries, observer) {
                entries.forEach((entry) => {
                    let inter = Math.round(entry.intersectionRatio*100)/100;
                    let left = (wid/2 - 100)
                    if(inter >= 0.75){inter = 1; entry.target.classList.add("full")}
                    else{entry.target.classList.remove("full")}

                    $('.ratio').text(inter);
                    
                    entry.target.style.transform = "rotate("+inter*360+"deg)";
                    entry.target.style.left = left*inter+"px";
                    $('.wid').text("calc("+wid/2+"px-100px)")
                });
            }
            function skillboxIntersect(entries, observer) {
                if(wid<=576){
                    entries.forEach((entry) => {
                        let inter = Math.round(entry.intersectionRatio*100)/100;
                        if(inter >= 0.78){
                            inter = 1; 
                            entry.target.classList.add("full");
                            let r = Math.random() * (500 - 200) + 200;
                            $(entry.target).css({"border-radius":"50%"});
                            
                        }
                        else{
                            entry.target.classList.remove("full")
                            $(entry.target).css({"border-radius":"5px 5px 0 0"});
                        }
                    });
                }else{
                    entries.forEach((entry) => {
                        let inter = Math.round(entry.intersectionRatio*100)/100;
                        if(inter >= 0.78 && $(entry.target).not('.full')){
                            inter = 1; 
                            entry.target.classList.add("full");
                            let r = Math.random() * (300 - 100) + 100;
                            let percent = $(entry.target).attr('percent')
                            setTimeout(function(){$(entry.target).css({"height": percent+"%","opacity":percent+"%"});},r)
                            
                        }
                    });
                }
                
            }



        })
    </script>
</body>
</html>