<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#36B8AA">
    <meta name="description" content="Flow - Raipur (CG). (+91) 9766720007">

    <!-- Schema.org for Google -->
    <meta itemprop="name" content="Flow - Raipur (CG). (+91) 9766720007">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="./assets/images/flow-logo.png">
    <!-- Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Flow - Raipur">
    <meta name="twitter:description" content="">
    <meta name="twitter:site" content="">
    <meta name="twitter:image:src" content="./assets/images/flow-logo.png">
    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta name="og:title" content="Flow - Raipur">
    <meta name="og:description" content="">
    <meta name="og:image" content="./assets/images/flow-logo.png">
    <meta name="og:url" content="https://www.flowmenow.com/">
    <meta name="og:site_name" content="Flow">
    <meta name="og:type" content="website">

    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="./assets/images/favicon.png" sizes="32x32" type="image/png">

    <title>Flow</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link rel="stylesheet" href="assets/css/float_label.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/nav.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style_ref.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    
    <header class="py-4 blur">
        <div class="blur-bg" id="blurbg"></div>
        <div class="container wrapper d-flex justify-content-between align-items-center">
            <a href="" class="logo">
                <img src="./assets/images/flow-logo.png" alt="" height="90">
            </a>
            <input type="checkbox" id="navcheck" role="button" title="menu">
            <label for="navcheck" aria-hidden="true" title="menu" class="navchecklabel d-flex align-items-center">
                <span class="burger">
                    <span class="bar">
                    </span>
                </span>
                <h5 class="menu-txt-1">Menu</h5>
                <h5 class="menu-txt-2">Close</h5>
            </label>
            <nav id="menu">
                <a href="index.html">HOME</a>
                <a href="about.html">ABOUT</a>
                <a href="events.html">EVENTS</a>
                <a onclick="openDrop()" class="btnDrop">
                    PROGRAMS 
                    <i class="fa fa-caret-down fa-sm"></i>
                    <div class="openDrop" id="openDrop">
                        <a href="program-flow.html" class="drop-item">
                            <strong>Student program - </strong>
                            <br>
                            Free To Learn Our Way (FLOW)
                        </a>
                        <br>
                        <hr>
                        <a href="program-wolf.html" class="drop-item">
                            <strong>Teachers program - </strong>
                            <br>
                            Workshops On Wellness & Facilitation (WOLF)
                        </a>
                    </div>
                </a>
                <a href="#">BLOG</a>
                <a href="contact.html">CONTACT</a>
            </nav>
        </div>
    </header>

    <section class="hero-sec">
        <div class="container">
            <div class="intro">
                <h1>Hi! I am Flow</h1>
                <h4>Free To Learn Our Way</h4>
                <p class="mt-4 mb-5 mx-auto">It all began with a question, ‘What was something that was not a part of my education, but I wish it was!’</p>
                <a href="#about" id="nextPage" class="link">
                    <small class="text-dark">READ MORE</small>
                    <div class="mouse">
                        <span class="m_scroll_arrows unu"></span>
                        <span class="m_scroll_arrows doi"></span>
                        <span class="m_scroll_arrows trei"></span>
                    </div>
                </a>
            </div>
        </div>
        <div class="blobs">
            <div class="blob-baige"></div>
            <div class="blob-pink"></div>
            <div class="blob-teal"></div>
            <div class="blob-yellow"></div>
        </div>
    </section>   

<!-- Sticky Social Links -->
<div class="sticky-socials">
    <div class="ico">
        <a href="https://<?=$profile->fblink?>" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://<?=$profile->instalink?>" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://<?=$profile->twitterlink?>" target="_blank"><i class="fab fa-twitter-square"></i></a>
    </div>
</div> 