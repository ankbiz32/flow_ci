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
    <meta itemprop="image" content="<?=base_url()?>assets/images/flow-logo.png">
    <!-- Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Flow - Raipur">
    <meta name="twitter:description" content="">
    <meta name="twitter:site" content="">
    <meta name="twitter:image:src" content="<?=base_url()?>assets/images/flow-logo.png">
    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta name="og:title" content="Flow - Raipur">
    <meta name="og:description" content="">
    <meta name="og:image" content="<?=base_url()?>assets/images/flow-logo.png">
    <meta name="og:url" content="https://www.flowmenow.com/">
    <meta name="og:site_name" content="Flow">
    <meta name="og:type" content="website">

    <link rel="shortcut icon" href="<?=base_url()?>assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="<?=base_url()?>assets/images/favicon.png" sizes="32x32" type="image/png">

    <title>Flow</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link rel="stylesheet" href="<?=base_url()?>assets/css/float_label.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/nav.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    
    <header class="py-4 blur">
        <div class="blur-bg" id="blurbg"></div>
        <div class="container wrapper d-flex justify-content-between align-items-center">
            <a href="index.html" class="logo">
                <img src="<?=base_url()?>assets/images/flow-logo.png" alt="" height="90">
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
                <a href="index.html" class="main-link">HOME</a>
                <a href="about.html" class="main-link">ABOUT</a>
                <a href="events.html" class="main-link">EVENTS</a>
                <div class="btnDrop-con">
                    <a onclick="openDrop()" class="btnDrop">
                        PROGRAMS
                        <i class="fa fa-caret-down fa-sm"></i>
                        <div class="openDrop" id="openDrop">
                            <a href="program-flow.html" class="drop-item d-flex flex-nowrap sp my-0">
                                <img src="<?=base_url()?>assets/images/stuProg.svg" alt="" height="50" class="mr-2">
                                <span>
                                    <strong>Free To Learn Our Way (FLOW)</strong>
                                    <br>
                                    <span class="text-muted">Program for students</span>
                                </span>
                            </a>
                            <hr>
                            <a href="program-wolf.html" class="drop-item d-flex flex-nowrap sp my-0">
                                <img src="<?=base_url()?>assets/images/teacProg.svg" alt="" height="50" class="mr-2">
                                <span>
                                    <strong> Workshops On Learning & Facilitation (WOLF) </strong>
                                    <br>
                                    <span class="text-muted">Program for teachers</span>
                                </span>
                            </a>
                        </div>
                    </a>
                </div>
                <a href="#" class="main-link">BLOG</a>
                <a href="contact.html" class="main-link">CONTACT</a>
            </nav>
        </div>
    </header>