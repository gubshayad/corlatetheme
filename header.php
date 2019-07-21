<!DOCTYPE html>
<html lang="<?php language_attributes() ?>">

<head>
    <meta charset="<?php bloginfo('charset');?>">

    <title><?php wp_title('|',true,'right'); ?> </title>
    

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/images/ico/apple-touch-icon-57-precomposed.png">

    <?php  wp_head();?>
</head>
<!--/head-->

<body class="homepage">
    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <div class="top-number">
                            <p><i class="fa fa-phone-square"></i> +0123 456 70 90</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo"></a>
                </div>

                <div class="collapse navbar-collapse navbar-right">

                   <?php include_once('nav-menus.php');?>

                    <!-- 
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-item.html">Blog Single</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="404.html">404</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact-us.html">Contact</a></li>
                    </ul> -->
                    
                </div>
            </div>
            <!--/.container-->
        </nav>
        <!--/nav-->

    </header>
    <!--/header-->