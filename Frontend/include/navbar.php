<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bali Products</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/bali.ico" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Oswald:400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/mediaelementplayer.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
    
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>

  <noscript>Sorry, your browser does not support JavaScript!</noscript>
  <!-- test CI plsss -->


  <div class="site-wrap">

    <div class="site-navbar mt-4">
        <div class="container py-1">
            <div class="row align-items-center">
                <div class="col-8 col-md-8 col-lg-12">
                    <h1 class="mb-0"><a href="index.php" class="text-white h2 mb-0"><strong>Bali Products<span class="text-primary">.</span></strong></a></h1>
                    
                    <!--vicky ini buat klo udh login jdi namanya langsung ada gitu-->
                    <!-- the code below activated when session of cookie is set -->
                    <?php
                        if(!isset($_COOKIE["user_id"])){
                            print '<h4 style="text-align: right; color: rgba(255, 255, 255, 0.5); letter-spacing: 4px "><span><a href="login.php">Login</a></span> / <span><a href="sign_up.php">Sign Up</a></span><span style="color: rgba(255, 255, 255, 0)">---</span> | <span style="color: rgba(255, 255, 255, 0)">---</span><span><a href="login.php" style="text-align: right"><span class="icon-shopping-cart"></span></a></span></h4>';
                        }
                        else{
                            print '<h4 style="text-align: right; color: rgba(255, 255, 255, 0.5); letter-spacing: 4px "><a href="user_info.php"><span style="color: #e3c4a8">' .$_COOKIE["username"]. '</span></a><span style="color: rgba(255, 255, 255, 0)">---</span> | <span style="color: rgba(255, 255, 255, 0)">---</span><span><a href="cart.php" style="text-align: right"><span class="icon-shopping-cart"></span></a></span></h4>';
                        }
                    ?>

                </div>
                <div class="col-4 col-md-4 col-lg-12">
                    <nav class="site-navigation text-right text-md-right" role="navigation">

                        <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                        <ul class="site-menu js-clone-nav d-none d-lg-block">
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li class="has-children">
                                <a href="shop.php">Shop</a>
                                <ul class="dropdown arrow-top">
                                    <li><a href="home_wares.php">Home Wares</a></li>
                                    <li><a href="soft_furniture.php">Soft Furniture</a></li>
                                    <li><a href="tableware.php">Tableware</a></li>
                                    <li><a href="fashion.php">Fashion</a></li>
                                    <li><a href="home_furniture.php">Home Furniture</a></li>
                                    <li><a href="clothing.php">Clothings</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="services.php">Services</a>
                                <ul class="dropdown arrow-top">
                                    <li><a href="private_label.php">Private Label</a></li>
                                    <li><a href="interior_solution.php">Bali Style Interior Solutions</a></li>
                                    <li><a href="corporate_meeting.php">Corporate Meetings & Events</a></li>
                                    <li><a href="custom_made.php">Custom Made & Designs</a></li>
                                    <li><a href="exports_quality.php">Exports & Quality Control</a></li>
                                    <li><a href="wholesale_sourcing.php">Wholesale Sourcing Tour</a></li>
                                    <li><a href="service_fee.php">Service Fees</a></li>
                                    <li><a href="terms.php">Terms</a></li>
                                </ul>
                            </li>
                            <li><a href="blog.php">Blog</a></li>
                            <li class="has-children">
                                <a href="about_us.php">About</a>
                                <ul class="dropdown arrow-top">
                                    <li><a href="about_us.php">About Us</a></li>
                                    <li><a href="testimonial.php">Testimonials</a></li>
                                    <li><a href="customer.php">Our Customers</a></li>
                                    <li><a href="team.php">Our Team</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="contact.php">Contact Us</a>
                            </li>
                            <li>
                                <div class="input-group mb-3" >
                                    <input type="text" class="form-control bg-transparent" placeholder="Search"
                                        aria-label="Search" aria-describedby="button-addon2" style="background-color: rgba(255, 255, 255, 0.2);">
                                    <div class="input-group-append" >
                                        <button class="btn btn-primary rounded-top-right-0" type="button" id="button-addon2">Search</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    
    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->