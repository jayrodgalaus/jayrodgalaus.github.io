<?php require 'head.php'; 
$URL = explode("/",$_SERVER['QUERY_STRING']);
$c = ucwords(str_replace("-"," ",$URL['1']));

?>
    <title>Certificates | <?=$c?></title>
    <style>
        #article{
            overflow: hidden;
        }
        .cert{
            display: flex;
            width:fit-content;
            height: fit-content;
            transition: all 0.3s;
            z-index: 100;
        }
        .content{display:none;}
        .c0{transform: rotate(0deg) translateX(100%); transform-origin: 0 50%;}
        .c1{transform: rotate(15deg) translateX(100%); transform-origin: 0 50%;}
        .c2{transform: rotate(30deg) translateX(100%); transform-origin: 0 50%;}
        .c3{transform: rotate(45deg) translateX(100%); transform-origin: 0 50%;}
        .c4{transform: rotate(60deg) translateX(100%); transform-origin: 0 50%;}
        .c5{transform: rotate(75deg) translateX(100%); transform-origin: 0 50%;}
        .c6{transform: rotate(90deg) translateX(100%); transform-origin: 0 50%;}
        .c7{transform: rotate(90deg) translateX(-120%); transform-origin: 100% 50%;}
        .c8{transform: rotate(75deg) translateX(-120%); transform-origin: 100% 50%;}
        .c9{transform: rotate(60deg) translateX(-120%); transform-origin: 100% 50%;}
        .c10{transform: rotate(45deg) translateX(-120%); transform-origin: 100% 50%;}
        .c11{transform: rotate(30deg) translateX(-120%); transform-origin: 100% 50%;}
        .c12{transform: rotate(15deg) translateX(-120%); transform-origin: 100% 50%;}
        .c13{transform: rotate(0deg) translateX(-120%); transform-origin: 100% 50%;}
        @media only screen and (max-width: 576px){
            .testdome-certificate-stamp {width: 139px !important; height: 90px !important; border-radius: 5%; }
            .testdome-certificate-stamp span {font-size:10px;}
        }
        @media only screen and (max-width: 768px){
            .c0{transform: rotate(0deg) translateX(40%); transform-origin: 0 50%;}
            .c1{transform: rotate(15deg) translateX(40%); transform-origin: 0 50%;}
            .c2{transform: rotate(30deg) translateX(40%); transform-origin: 0 50%;}
            .c3{transform: rotate(45deg) translateX(40%); transform-origin: 0 50%;}
            .c4{transform: rotate(60deg) translateX(40%); transform-origin: 0 50%;}
            .c5{transform: rotate(75deg) translateX(40%); transform-origin: 0 50%;}
            .c6{transform: rotate(90deg) translateX(40%); transform-origin: 0 50%;}
            .c7{transform: rotate(75deg) translateX(-40%); transform-origin: 100% 50%;}
            .c8{transform: rotate(60deg) translateX(-40%); transform-origin: 100% 50%;}
            .c9{transform: rotate(45deg) translateX(-40%); transform-origin: 100% 50%;}
            .c10{transform: rotate(30deg) translateX(-40%); transform-origin: 100% 50%;}
            .c11{transform: rotate(15deg) translateX(-40%); transform-origin: 100% 50%;}
            .c12{transform: rotate(0deg) translateX(-40%); transform-origin: 100% 50%;}
            .c13{transform: rotate(-15deg) translateX(-40%); transform-origin: 100% 50%;}
            .testdome-certificate-stamp {width: 154px; height: 100px; border-radius: 5%; }
            .testdome-certificate-stamp span {font-size:10.5px;}
        }
        .bg{
            border: 2px solid rgba(248, 249, 250,1);
            transform: rotate(50deg);  
        }
    </style>
    <script>
        var stylesheet = "https://www.testdome.com/content/source/stylesheets/embed.css";
        link = document.createElement("link");
        link.href = stylesheet;
        link.type = "text/css";
        link.rel = "stylesheet";
        link.media = "screen,print";
        document.getElementsByTagName("head")[0].appendChild(link);
    </script>
</head>
<body class="p-0 m-0">    
    
    <nav id="mainnav" class="mainnav navbar navbar-expand-lg bg-dark fixed-top">
        <div class="mainnav container-fluid px-5">
            <a class="mainnav navbar-brand" href="../index.html">
                <img class="mainnav " src="../assets/icons/logo.svg" alt="Bootstrap" width="30" height="24">
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
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="../index.html">Home</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    
    <div id="article" class="vw-100 vh-100 pos-rel" >
        <div id="bb" class="bg pos-a vw-100 vh-100">
            <div id="bbb" class="bg w-75 h-75">
                <div id="bbbb" class="bg w-75 h-75"></div>
            </div>
        </div>
        <div class="container container-lg mt-5 pos-rel">
            <div class="content mt-5 pt-2 pos-rel">
                <div class="vh-25 pos-rel">
                    <div class="cert shadow pos-a c0" r='0'>
                        <a href="https://www.testdome.com/certificates/e584f3916f144d97a81871c652efa287" class="testdome-certificate-stamp gold">
                            <span class="testdome-certificate-test-name">HTML/CSS</span>
                            <span class="testdome-certificate-card-logo">TestDome<br>Certificate</span>
                        </a>
                        
                    </div>
                    <div class="cert shadow pos-a c1" r='1'>
                        <a href="https://www.testdome.com/certificates/21cc459df17241a9be7ec84b248cc6f2" class="testdome-certificate-stamp gold">
                            <span class="testdome-certificate-test-name">JavaScript</span>
                            <span class="testdome-certificate-card-logo">TestDome<br>Certificate</span>
                        </a>
                    </div>
                    <div class="cert shadow pos-a c2" r='2'>
                    <a href="https://www.testdome.com/certificates/8549ea2942b54b22bb9458928b0832e8" class="testdome-certificate-stamp gold">
                        <span class="testdome-certificate-test-name">PHP</span>
                        <span class="testdome-certificate-card-logo">TestDome<br>Certificate</span>
                    </a>
                    </div>
                    <div class="cert shadow pos-a c3" r='3'>
                        <a href="https://www.testdome.com/certificates/2d3b0e43593a47ec8ba5723ad1fcf1f5" class="testdome-certificate-stamp gold">
                            <span class="testdome-certificate-test-name">Bootstrap</span>
                            <span class="testdome-certificate-card-logo">TestDome<br>Certificate</span>
                        </a>
                    </div>
                    <div class="cert shadow pos-a c4" r='4'>
                        <a href="https://www.testdome.com/certificates/63d1b3b116fe4f03a7c804731bf4af16" class="testdome-certificate-stamp gold">
                            <span class="testdome-certificate-test-name">JQuery</span>
                            <span class="testdome-certificate-card-logo">TestDome<br>Certificate</span>
                        </a>
                    </div>
                    <div class="cert shadow pos-a c5" r='5'>
                        <a href="https://www.testdome.com/certificates/f4d3a46f5c994bb496fc1e39b3083740" class="testdome-certificate-stamp gold">
                            <span class="testdome-certificate-test-name">Laravel</span>
                            <span class="testdome-certificate-card-logo">TestDome<br>Certificate</span>
                        </a>
                    </div>
                    <div class="cert shadow pos-a c6" r='6'>
                        <a href="https://www.testdome.com/certificates/3e9bee4cd09b4d7d9f47df547a5d8413" class="testdome-certificate-stamp silver">
                            <span class="testdome-certificate-test-name">DBMS</span>
                            <span class="testdome-certificate-card-logo">TestDome<br>Certificate</span>
                        </a>
                    </div>
                </div>
                <div class="vh-25 pos-rel"></div>
                <div class="vh-25 w-100 pos-rel b0">
                    <div class="cert shadow pos-a pos-br c7" r='6'>
                        <a href="https://www.testdome.com/certificates/3e9bee4cd09b4d7d9f47df547a5d8413" class="testdome-certificate-stamp silver">
                            <span class="testdome-certificate-test-name">Wordpress</span>
                            <span class="testdome-certificate-card-logo">TestDome<br>Certificate</span>
                        </a>
                    </div>
                    <div class="cert shadow pos-a pos-br c8" r='5'>
                        <a href="https://www.testdome.com/certificates/21cc459df17241a9be7ec84b248cc6f2" class="testdome-certificate-stamp gold">
                            <span class="testdome-certificate-test-name">JavaScript</span>
                            <span class="testdome-certificate-card-logo">TestDome<br>Certificate</span>
                        </a>
                    </div>
                    <div class="cert shadow pos-a pos-br c9" r='4'>
                    <a href="https://www.testdome.com/certificates/8549ea2942b54b22bb9458928b0832e8" class="testdome-certificate-stamp gold">
                        <span class="testdome-certificate-test-name">PHP</span>
                        <span class="testdome-certificate-card-logo">TestDome<br>Certificate</span>
                    </a>
                    </div>
                    <div class="cert shadow pos-a pos-br c10" r='3'>
                        <a href="https://www.testdome.com/certificates/2d3b0e43593a47ec8ba5723ad1fcf1f5" class="testdome-certificate-stamp gold">
                            <span class="testdome-certificate-test-name">Bootstrap</span>
                            <span class="testdome-certificate-card-logo">TestDome<br>Certificate</span>
                        </a>
                    </div>
                    <div class="cert shadow pos-a pos-br c11" r='2'>
                        <a href="https://www.testdome.com/certificates/63d1b3b116fe4f03a7c804731bf4af16" class="testdome-certificate-stamp gold">
                            <span class="testdome-certificate-test-name">JQuery</span>
                            <span class="testdome-certificate-card-logo">TestDome<br>Certificate</span>
                        </a>
                    </div>
                    <div class="cert shadow pos-a pos-br c12" r='1'>
                        <a href="https://www.testdome.com/certificates/63d1b3b116fe4f03a7c804731bf4af16" class="testdome-certificate-stamp gold">
                            <span class="testdome-certificate-test-name">JQuery</span>
                            <span class="testdome-certificate-card-logo">TestDome<br>Certificate</span>
                        </a>
                    </div>
                    <div class="cert shadow pos-a pos-br c13" r='0'>
                        <a href="https://www.testdome.com/certificates/f4d3a46f5c994bb496fc1e39b3083740" class="testdome-certificate-stamp gold">
                            <span class="testdome-certificate-test-name">Laravel</span>
                            <span class="testdome-certificate-card-logo">TestDome<br>Certificate</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function(){
            let wid = $(window).width();
            $(window).resize(function(){wid = $(window).width()})
            $('.content').fadeIn(500);
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
            .on('mouseenter touchenter','.cert',function(){
                let r = $(this).attr('r')*15;
                let rb = $(this).prev().attr('r')*15;
                let ra = $(this).next().attr('r')*15;
                if($(this).hasClass("pos-br")){
                    $(this).prev().css({'transform':'rotate('+(r+20)+'deg) translateX(-'+(wid <= 768 ? 40 : 120)+'%)'})
                    $(this).next().css({'transform':'rotate('+(r-27)+'deg) translateX(-'+(wid <= 768 ? 40 : 120)+'%)'})
                }else{
                    $(this).prev().css({'transform':'rotate('+(r-20)+'deg) translateX('+(wid <= 768 ? 40 : 100)+'%)'})
                    $(this).next().css({'transform':'rotate('+(r+27)+'deg) translateX('+(wid <= 768 ? 40 : 100)+'%)'})
                }
                
            })
            .on('mouseleave touchleave','.cert',function(){
                let r = $(this).attr('r')*15;
                let rb = $(this).prev().attr('r')*15;
                let ra = $(this).next().attr('r')*15;
                if($(this).hasClass("pos-br")){
                    $(this).prev().css({'transform':'rotate('+(rb)+'deg) translateX(-'+(wid <= 768 ? 40 : 120)+'%)'})
                    $(this).next().css({'transform':'rotate('+(ra)+'deg) translateX(-'+(wid <= 768 ? 40 : 120)+'%)'})
                }else{
                    $(this).prev().css({'transform':'rotate('+(rb)+'deg) translateX('+(wid <= 768 ? 40 : 100)+'%)'})
                    $(this).next().css({'transform':'rotate('+(ra)+'deg) translateX('+(wid <= 768 ? 40 : 100)+'%)'})
                }
                
            })
        })
    </script>
</body>
</html>