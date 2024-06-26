<!DOCTYPE html>
<html>

<head>
    <title>
        <?php if (isset($page) && is_string($page)) {
            echo $page;
        } else {
            echo 'Fitness Apparel & Accessories | Revolt Cara';
        } ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content=<?php if (isset($pageTag) && is_string($pageTag)) {
        echo $pageTag;
    } else {
        echo 'desired tag';
    } ?> />
    <meta name="description" content=<?php if (isset($pageDesc) && is_string($pageDesc)) {
        echo $pageDesc;
    } else {
        echo 'desired description';
    } ?> />
    <link rel="shortcut icon" href="media/favicon.png" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/aos.css" rel="stylesheet" type="text/css">
    <link href="css/fancybox.min.css" rel="stylesheet" type="text/css">
    <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="css/owl.theme.default.css" rel="stylesheet" type="text/css">
    <link href="css/jquery-ui.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
    <link href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css">
    <link href="css/custom.css" rel="stylesheet" type="text/css">
    <style>

    </style>
</head>

<body>
    <!-- Navbar Start -->
    <header>
        <div class="top_header_section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="th1">
                            <ul>
                                <li>
                                    <i class="fa-solid fa-phone"></i>
                                    (715) 450-5575
                                </li>
                                <li></li>
                                <li>
                                    <i class="fa-solid fa-envelope"></i>
                                    econolawnec@gmail.com
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <i class="fa-regular fa-circle-user"></i>
                                    Login
                                </li>
                                <li></li>
                                <li>
                                    <i class="fa-solid fa-user-gear"></i>
                                    Register
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg <?php
            echo $headerClass;
        ?>">
            <div class="container container-navbar">
                <div class="logo">
                    <a href="index.php">
                        <img src="images/logo.png" alt="">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.php">SERVICES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blogs.php">BLOG</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn1" href="contactus.php">CONTACT US</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Navbar End -->