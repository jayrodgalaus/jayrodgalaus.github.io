<?php require 'head.php'; 
$URL = explode("/",$_SERVER['QUERY_STRING']);
$c = ucwords(str_replace("-"," ",$URL['1']));

?>
    <title>Certificates | <?=$c?></title>
    <style>
        .cert:hover{
            width: fit-content;
            transition: all 0.1s;
            box-shadow: 5px 10px 10px rgba(7,120,201,0.5);
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
            <a class="mainnav navbar-brand" href="../home.php">
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
                            <a class="nav-link" aria-current="page" href="../home.php">Home</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="container container-lg mt-5 pos-rel">
        <div class="content mt-5 pt-2 pos-rel">
            <div class="d-flex flex-column align-items-center justify-content-center">
                <h1 class="text-white"><?=$c == "HTML5CSS"?"HTML5 & CSS": $c ?> Certificate</h1>
                <span class="lead text-white">Click below to view</span>
                <div class="cert" title='View certificate'>
                    <a href="https://www.testdome.com/certificates/e584f3916f144d97a81871c652efa287" class="testdome-certificate-stamp gold">
                        <span class="testdome-certificate-test-name">HTML/CSS</span>
                        <span class="testdome-certificate-card-logo">TestDome<br>Certificate</span>
                    </a>                    
                </div>
            </div>
            <hr>
            <div class="d-flex w-100 flex-column align-items-center justify-content-center">
                <h3 class="text-white">Check my other certificates</h3>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-center" id="other-certs">
                    <?php
                        $testdome = [
                            "HTML5CSS"=>"https://www.testdome.com/certificates/e584f3916f144d97a81871c652efa287",
                            "JavaScript"=>"https://www.testdome.com/certificates/21cc459df17241a9be7ec84b248cc6f2",
                            "PHP"=>"https://www.testdome.com/certificates/8549ea2942b54b22bb9458928b0832e8",
                            "Bootstrap"=>"https://www.testdome.com/certificates/2d3b0e43593a47ec8ba5723ad1fcf1f5",
                            "JQuery"=>"https://www.testdome.com/certificates/63d1b3b116fe4f03a7c804731bf4af16",
                            "Laravel"=>"https://www.testdome.com/certificates/f4d3a46f5c994bb496fc1e39b3083740",
                            "DBMS"=>"https://www.testdome.com/certificates/3e9bee4cd09b4d7d9f47df547a5d8413"];
                        foreach ($testdome as $key=>$value) {
                            if($c == $key){continue;}
                            echo "
                                <div class='cert m-3' title='View certificate'>
                                    <a href='".$value."' class='testdome-certificate-stamp gold'>
                                        <span class='testdome-certificate-test-name'>".($key == "HTML5CSS"?"HTML5 & CSS": $key)."</span>
                                        <span class='testdome-certificate-card-logo'>TestDome<br>Certificate</span>
                                    </a>                    
                                </div>
                            ";
                        }


                    ?>
                </div>
            </div>
        </div>
    </div>

</body>