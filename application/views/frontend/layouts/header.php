<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Umesh Jaiswar - Digital Marketing Expert</title>
    <!-- FAVICON  -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url() ?>assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url() ?>assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo base_url() ?>assets/images/favicon/site.webmanifest">

    <!-- BOOTSTRAP  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- GOOGLE FONT  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&display=swap" rel="stylesheet">

    <!-- CUSTOM CSS  -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css?v=<?php echo md5(date("ymdHsi")) ?>">



</head>

<body>
    <!-- CUSTOM CURSOR  -->
    <div id="cursor"></div>
    <div id="cursor-border"></div>


    <!-- HEADER START HERE  -->
    <header>
        <div class="desktop-header boxWidth flex-nowrap justify-content-between align-items-center">
            <div class="left">
                <a href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>assets/images/logo.webp" alt="umesh jaiswar logo"></a>
            </div>
            <div class="middle d-flex flex-nowrap align-items-center">
                <a href="#about-us">About</a>
                <a href="#feature-work">work</a>
                <a href="#testimonial">testimonials</a>
                <a href="#services">services</a>
            </div>
            <div class="right">
                <a href="javascript:void(0)" data-cal-link="umesh-jaiswar/free-consulting-meeting" data-cal-namespace="free-consulting-meeting" data-cal-config='{"layout":"month_view"}' class="button">
                    get in touch
                </a>
            </div>
        </div>
        <div class="mobile-header flex-nowrap justify-content-between align-items-center">
            <div class="left">
                <a href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>assets/images/logo.webp" alt="umesh jaiswar logo"></a>
            </div>
            <div class="right">
                <button class="d-flex flex-column justify-content-center align-items-center" data-bs-toggle="offcanvas" data-bs-target="#menuMobileOffCanvas" aria-controls="menuMobileOffCanvas">
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>

    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="menuMobileOffCanvas" aria-labelledby="menuMobileOffCanvasLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="menuMobileOffCanvasLabel">Menu</h5>
            <button type="button" data-bs-dismiss="offcanvas" aria-label="Close">Close</button>
        </div>
        <div class="offcanvas-body d-flex flex-column">
            <a href="#about-us" class="offcanvasLinkButton">About</a>
            <a href="#feature-work" class="offcanvasLinkButton">work</a>
            <a href="#testimonial" class="offcanvasLinkButton">testimonials</a>
            <a href="#services" class="offcanvasLinkButton">services</a>
            <!-- <a href="#">blog</a> -->
        </div>
        <div class="offcanvas-footer">
            <a href="javascript:void(0)" data-cal-link="umesh-jaiswar/free-consulting-meeting" data-cal-namespace="free-consulting-meeting" data-cal-config='{"layout":"month_view"}' class="button">get in touch</a>
        </div>
    </div>