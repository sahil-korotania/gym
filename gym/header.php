<?php
    session_start();
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gym</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="black-bg">
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loader.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper d-flex align-items-center justify-content-between">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html" style="font-size:50px;" class="text-light h1">Find Your Gym</a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <?php
                                        if(isset($_SESSION['email']))
                                        {
                                            echo'<li><a href="#">Gym</a>
                                                    <ul class="submenu">
                                                        <li><a href="gym_form.php">Form</a></li>
                                                        <li><a href="gym_table.php">Table</a></li>
                                                    </ul>
                                                </li>
                                                  <li><a href="#">Packages</a>
                                                    <ul class="submenu">
                                                        <li><a href="packages_form.php">Form</a></li>
                                                        <li><a href="packages_table.php">Table</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Timing</a>
                                                    <ul class="submenu">
                                                        <li><a href="timing_form.php">Form</a></li>
                                                        <li><a href="timing_table.php">Table</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="contact_table.php">Contact</a></li>';
                                        }
                                        else{
                                            echo '<li><a href="index.php">Home</a></li>
                                            <li><a href="about.php">About</a></li>
                                            <li><a href="gym.php">Gym</a></li>
                                            <li><a href="contact.php">Contact</a></li>';
                                        }
                                    ?>
                                </ul>
                            </nav>
                        </div>          
                        <!-- Header-btn -->
                        <?php
                        if(!isset($_SESSION['name']))
                        {
                        echo '<div class="header-btns d-none d-lg-block f-right">
                            <a href="register.php" class="btn">User Register</a>
                            <a href="login.php" class="btn">User Login</a>
                            <a href="admin_login.php" class="btn">Admin Login</a>
                           </div>';
                        }
                        else{
                        echo '<div class="header-btns d-none d-lg-block f-right">
                                <a href="#" class="btn">'.$_SESSION['name'].'</a>
                                <a href="logout.php" class="btn">Logout</a>
                           </div>';
                        }
                        ?>
                       <!-- Mobile Menu -->
                       <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>