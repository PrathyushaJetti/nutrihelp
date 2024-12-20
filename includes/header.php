<?php
define('ROOT_PATH', 'http://localhost/nutrihelp/');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php $title = isset($meta['title']) ? $meta['title'] : 'AS Nutri Help';
    echo $title; ?></title>
    <meta name="description" content="<?php
    $title = isset($meta['description']) ? $meta['description'] : 'AS Nutri Help';
    echo $meta['description']; ?>">
    <meta name="keywords" content="<?php
    $title = isset($meta['keywords']) ? $meta['keywords'] : 'AS Nutri Help';
    echo $meta['keywords']; ?>">
    <!-- favicon icon -->
    <link rel="shortcut icon" href="<?= ROOT_PATH ?>img/logo.png" />

    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?= ROOT_PATH ?>css/bootstrap.min.css" />

    <!-- animate -->
    <link rel="stylesheet" type="text/css" href="<?= ROOT_PATH ?>css/animate.css" />

    <!-- owl-carousel -->
    <link rel="stylesheet" type="text/css" href="<?= ROOT_PATH ?>css/owl.carousel.css">

    <!-- fontawesome -->
    <link rel="stylesheet" type="text/css" href="<?= ROOT_PATH ?>css/font-awesome.css" />

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="<?= ROOT_PATH ?>css/themify-icons.css" />

    <!-- flaticon -->
    <link rel="stylesheet" type="text/css" href="<?= ROOT_PATH ?>css/flaticon.css" />

    <!-- REVOLUTION LAYERS STYLES -->

    <link rel="stylesheet" type="text/css" href="<?= ROOT_PATH ?>revolution/css/layers.css">

    <link rel="stylesheet" type="text/css" href="<?= ROOT_PATH ?>revolution/css/settings.css">

    <!-- prettyphoto -->
    <link rel="stylesheet" type="text/css" href="<?= ROOT_PATH ?>css/prettyPhoto.css">

    <!-- shortcodes -->
    <link rel="stylesheet" type="text/css" href="<?= ROOT_PATH ?>css/shortcodes.css" />

    <!-- main -->
    <link rel="stylesheet" type="text/css" href="<?= ROOT_PATH ?>css/main.css" />

    <!-- responsive -->
    <link rel="stylesheet" type="text/css" href="<?= ROOT_PATH ?>css/responsive.css" />

</head>

<body>

    <!--page start-->
    <div class="page">

        <!-- preloader start -->
        <div id="preloader">
            <div id="status">&nbsp;
          
            </div>
            
        </div>
        <!-- preloader end -->


        <!--header start-->
        <header id="masthead" class="header ttm-header-style-stackcenter">
            <!-- ttm-topbar-wrapper -->
            <div class="ttm-topbar-wrapper ttm-bgcolor-black ttm-textcolor-white clearfix">
                <div class="container">
                    <div class="ttm-topbar-content">
                        <ul class="list-inline top-contact  topbar-left text-left">
                            <li><a href="https://maps.app.goo.gl/pN2dKEG2ZR5Vkzj37" target="_blank"><i
                                        class="fa fa-map-marker"></i></a></li>

                            <li> <i class="fa fa-clock-o"></i> Mon-Sat: 9am to 6pm</li>
                        </ul>
                        <div class="topbar-right text-right">
                            <ul class="list-inline top-contact">
                                <li><i class="fa fa-envelope-o"></i><a
                                        href="mailto:support@asnutrihelp.com.com">support@asnutrihelp.com</a></li>
                            </ul>
                            <div class="ttm-social-links-wrapper list-inline">
                                <ul class="social-icons list-inline">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="https://www.instagram.com/asnutrihelp?igsh=MTh4eXVteWk5bGhpZQ=="><i class="fa fa-instagram"></i></a>
                                    </li>
                                    <li><a href="https://www.youtube.com/@ASNUTRIHELP"><i class="fa fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="ttm-topbar-btn ttm-textcolor-white">
                            <a class="ttm-btn ttm-btn-size-md ttm-btn-bgcolor-skincolor" href="img/ASNH-PAMPHLET.pdf" target="_blank">View Brochure</a>

                            </div>
                            <span class="ttm-fbar-btn ttm-fbar-btn-cposition-right">
                                <a href="#" class="ttm-fbar-btn-link">
                                    <span class="ttm-fbar-open-icon"><i class="ti ti-menu"></i></span>
                                    <span class="ttm-fbar-close-icon"><i class="ti ti-close"></i></span>
                                    <span class="ttm-hide">Open</span>
                                </a>
                            </span>
                        </div>
                        <div class="ttm-fbar ttm-fbar-right">
                            <div class="ttm-fbar-inner">
                                <div
                                    class="ttm-fbar-box-w ttm-bg ttm-bgimage-yes ttm-bgcolor-skincolor ttm-textcolor-white">
                                    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
                                    <div class="ttm-fbar-content-wrapper">
                                        <div class="ttm-fbar-content">
                                            <div class="ttm-fbar-box">
                                                <div class="floatingbar-widget-top">
                                                    <div class="ttm-fbar-widget ttm-fbar-widget-even">
                                                        <div class="textwidget widget-text">
                                                            <div
                                                                class="ttm-author-widget text-center ttm-textcolor-white">
                                                                <div class="author-widget_img">
                                                                    <img src="img/logo.png" class="author-img"
                                                                        alt="logo">
                                                                </div>
                                                                <h4 class="author-name">AS Nutri Help</h4>
                                                                <p class="author-widget_text">AS Nutri Help is your
                                                                    trusted partner in health and wellness, providing
                                                                    professional nutrition support specifically designed
                                                                    to meet your unique objectives.</p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ttm-fbar-widget ttm-fbar-widget-odd">
                                                        <h3 class="widget-title">Opening Hours:</h3>
                                                        <div class="textwidget widget-text">These are our normal opening
                                                            hours. When we are closed can be found here.<br>
                                                            <div class="ttm-pricelistbox-wrapper ">
                                                                <div class="ttm-pricelist-block-wrapper">
                                                                    <ul class="ttm-pricelist-block mt-10">
                                                                        <li><span>Monday - Friday</span>
                                                                            <p class="service-price">8.00 – 17.00</p>
                                                                        </li>
                                                                        <li><span>Saturday</span>
                                                                            <p class="service-price">8.00 – 15.00</p>
                                                                        </li>
                                                                        <li><span>Sunday</span>
                                                                            <p class="service-price">Closed</p>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ttm-fbar-widget ttm-fbar-widget-even">
                                                        <div class="featured-icon-box left-icon icon-align-top">
                                                            <div class="featured-icon">
                                                                <div
                                                                    class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-md ttm-icon_element-style-square">
                                                                    <i class="fa fa-phone"></i>
                                                                </div>
                                                            </div>
                                                            <div class="featured-content">
                                                                <div class="featured-title">
                                                                    <h5><a href="tel:+918125043330">+91 8125043330</a>
                                                                    </h5>

                                                                </div>
                                                                <div class="featured-desc">
                                                                    <p>Have a question? call us now</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="ttm-fbar-close">
                                            <span class="ttm-fbar-close-icon">
                                                <i class="ti ti-close"></i>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- ttm-topbar-wrapper end -->
            <!-- ttm-header-wrap -->
            <div class="ttm-header-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="widget-left clearfix">
                                <div class="info-widget">
                                    <div class="info-widget-content">
                                        <p>24/7 Emergency Care</p>
                                        <a href="tel:+918125043330">
                                            <h2>+91 8125043330</h2>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- site-branding -->
                            <div class="site-branding">
                                <a class="home-link" href="<?= ROOT_PATH ?>index.php" title="Nutricare" rel="home">
                                    <img id="logo-img" class="img-center" src="<?= ROOT_PATH ?>img/logo-2.png"
                                        alt="logo-img">
                                </a>
                            </div><!-- site-branding end -->
                        </div>
                        <div class="col-lg-3">
                            <div class="widget-right clearfix">
                                <div class="info-widget">
                                    <div class="info-widget-content">
                                        <p><a href="contact-us.php">Request an</a></p>
                                        <h2><a href="contact-us.php">Get Appointment</a></h2>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- ttm-stickable-header-w -->
                            <div id="ttm-stickable-header-w" class="ttm-stickable-header-w ttm-bgcolor-white clearfix">
                                <div id="site-header-menu" class="site-header-menu">
                                    <div class="site-header-menu-inner ttm-stickable-header">
                                        <div class="container">
                                            <!--site-navigation -->
                                            <div id="site-navigation" class="site-navigation">
                                                <div class="ttm-menu-toggle">
                                                    <input type="checkbox" id="menu-toggle-form">
                                                    <label for="menu-toggle-form" class="ttm-menu-toggle-block">
                                                        <span class="toggle-block toggle-blocks-1"></span>
                                                        <span class="toggle-block toggle-blocks-2"></span>
                                                        <span class="toggle-block toggle-blocks-3"></span>
                                                    </label>
                                                </div>
                                                <nav id="menu" class="menu">
                                                    <ul class="">
                                                        <li class="active"><a href="<?= ROOT_PATH ?>index.php">Home</a>
                                                            <!-- <ul>
                                                                <li class="active"><a href="index.php">Sample Homepage 1</a></li>
                                                                <li><a href="home-2.html">Sample Homepage 2</a></li>
                                                                <li><a href="home-3.html">Sample Homepage 3</a></li>
                                                                <li><a href="home-4.html">Sample Homepage 4<span class="label-new">New</span></a></li>
                                                                <li><a href="home-5.html">Sample Homepage 5<span class="label-new">New</span></a></li>
                                                                <li class="active"><a href="#">Header Styles</a>
                                                                    <ul>
                                                                        <li><a href="header-classic.html" target="_blank" >Header Classic</a></li>
                                                                        <li><a target="_blank" href="header-overlay.html">Header Overlay</a></li>
                                                                        <li class="active"><a href="index.php">Header Stack Center</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul> -->
                                                        </li>
                                                        <li><a href="<?= ROOT_PATH ?>About.php">About Us</a>
                                                            <!-- <ul>
                                                                <li><a href="aboutus-1.html">About Us 1</a></li>
                                                                <li><a href="aboutus-2.html">About Us 2</a></li>
                                                                <li><a href="services.html">Services</a></li>
                                                                <li><a href="our-team.html">Our Team</a></li>
                                                                <li><a href="success-story.html">Success Story</a></li>
                                                                <li><a href="classes.html">Classes</a></li>
                                                                <li><a href="meal-plan.html">Meal-Plan</a></li>
                                                                <li><a href="contact-us.html">Contact Us</a></li>
                                                                <li><a href="faq.html">FAQs</a></li>
                                                                <li><a href="error.html">Error Page</a></li>
                                                                <li><a href="element.html">Elements</a></li>
                                                            </ul> -->
                                                        </li>
                                                        <li><a href="<?= ROOT_PATH ?>service.php"> Diets</a>
                                                            <!-- <ul>
                                                                <li><a href="personalized-nutrition.html">Personalized Nutrition</a></li>
                                                                <li><a href="weight-loss-programs.html">Weight Loss Programs</a></li>
                                                                <li><a href="workout-routines.html">Workout Routines</a></li>
                                                                <li><a href="sports-nutritionist.html">Sports Nutritionist</a></li>
                                                                <li><a href="individual-coaching.html">Individual Coaching</a></li>
                                                                <li><a href="child-nutrition.html">Child Nutrition</a></li>
                                                            </ul> -->
                                                        </li>
                                                        <!-- <li><a href="#">Portfolio</a>
                                                            <ul>
                                                                <li><a href="portfolio-style-1.html">Gallery Classic</a></li>
                                                                <li><a href="portfolio-style-2.html">Gallery Overlay</a></li>
                                                                <li><a href="portfolio-style-3.html">Gallery Single</a></li>
                                                            </ul>
                                                        </li> -->
                                                        <!-- <li><a href="#">Blog</a>
                                                            <ul>
                                                                <li><a href="blog.html">Blog Classic</a></li>
                                                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                                                <li><a href="blog-left-image.html">Blog Left Image</a></li>
                                                                <li><a href="single-blog.html">Single Blog View</a></li>
                                                            </ul>
                                                        </li> -->
                                                        <!-- <li><a href="#">Shop</a>
                                                            <ul>
                                                                <li><a href="home-shop.html">Home Shop</a></li>
                                                                <li><a href="shop.html">Default Shop</a></li>
                                                                <li><a href="product-details.html">Single Product Details</a></li>
                                                                <li><a href="cart.html">Cart</a></li>
                                                                <li><a href="checkout.html">Checkout</a></li>
                                                            </ul>
                                                        </li> -->
                                                        <li><a href="<?= ROOT_PATH ?>contact-us.php">Contact Us</a>

                                                        </li>
                                                    </ul>
                                                </nav>
                                                <!-- <div class="ttm-rt-contact">
                                                    <div class="ttm-header-icons ">
                                                        <span class="ttm-header-icon ttm-header-cart-link">
                                                            <a href="#"><i class="ti ti-shopping-cart"></i>
                                                                <span class="number-cart">0</span>
                                                            </a>
                                                        </span>
                                                        <div class="ttm-header-icon ttm-header-search-link">
                                                            <a href="#" class="sclose"><i class="ti ti-search"></i></a>
                                                            <div class="ttm-search-overlay">
                                                                <div class="ttm-bg-layer"></div>
                                                                <div class="ttm-icon-close"></div>
                                                                <div class="ttm-search-outer">
                                                                    <form method="get" class="ttm-site-searchform" action="#">
                                                                        <input type="search" class="field searchform-s" name="s" placeholder="Type Word Then Enter...">
                                                                        <button type="submit">
                                                                            <i class="ti ti-search"></i>
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> -->
                                            </div><!-- site-navigation end-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- ttm-stickable-header-w end-->
                    </div>
                </div>
            </div><!--ttm-header-wrap end -->
        </header>
        <!--header end-->