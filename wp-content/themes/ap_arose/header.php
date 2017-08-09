<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Responsive Bootstrap Creative HTML Template">
  <meta name="keywords" content="arose, Bootstrap, creative Template, minimal, agency, corporate">
  <meta name="author" content="rashed amin">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- SITE TITLE -->
  <title>Agencia Porter</title>

  <!-- =========================
FAV AND TOUCH ICONS (RETINA)
============================== -->
  <link rel="icon" href="<?php echo get_template_directory_uri()?>/images/favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri()?>/images/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri()?>/images/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri()?>/images/apple-touch-icon-114x114.png">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri()?>/images/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri()?>/images/favicon-16x16.png" sizes="16x16" />
  <meta name="msapplication-TileImage" content="ms-icon-144x144.png" />

  <!-- =========================
STYLESHEETS
============================== -->
  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/bootstrap.min.css">

  <!-- FONT ICONS -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/elegant-icons/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/et-line-font/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/fonts/font-awesome.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/ion-icon/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/app-icons/styles.css">
  <!--[if lte IE 7]><script src="<?php echo get_template_directory_uri()?>/js/lte-ie7.js"></script><![endif]-->



  <!-- CAROUSEL AND LIGHTBOX -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/owl.theme.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/owl.carousel.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/nivo-lightbox.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/nivo_themes/default/default.css">

  <!-- ANIMATIONS -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/animate.min.css">
  <link href="<?php echo get_template_directory_uri()?>/css/animated-headline.css" rel="stylesheet">

  <!-- MAIN STYLESHEETS -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/styles.css">

  <!-- COLORS -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/color-schemes/charcoal-black.css">


  <!-- RESPONSIVE FIXES -->
  <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/responsive.css"> -->

  <!--[if lt IE 9]>
  <script src="<?php echo get_template_directory_uri()?>/js/html5shiv.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/js/respond.min.js"></script>
  <![endif]-->

  <!-- Libreria slick -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/css/slick.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/css/slick-theme.css">
  <!-- Estilos propios -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/style.css">
  <?php wp_head(); ?>
</head>

<body>

  <!-- =========================
PRE LOADER
============================== -->
  <div class="preloader">
      <div id="ip-container" class="ip-container">
          <div class="ip-header">
              <div class="ip-loader">
                  <svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
                      <path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z" />
                      <path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z" />
                  </svg>
              </div>
          </div>
      </div>
  </div>
    <!-- =========================
  HEADER
  ============================== -->

  <header class="header">

    <a class="navbar-brand" href="<?php echo get_site_url()?>">
      <img src="http://localhost/wp-agencia-porter/wp-content/uploads/2017/08/logo-01.png" alt="logo" />
    </a>
    <div class="nav-trigger" role="button" title="sweet hamburger">
      <div class="hamburger">
        <div class="icon"></div>
      </div>
    </div>

    <?php
      $args = array(
        'theme_location' => 'menu-principal',
        'container' => 'div',
        'container_id' => 'top-nav',
        'container_class' => 'nav navbar-nav navbar-right main-navigation'
      );
      //wp_nav_menu( $args );
    ?>

    <?php
    /*
    wp_nav_menu(array(
      'theme_location' => 'menu-principal',
      'container' => 'div',
      'container_id' => 'top-nav',
      'container_class' => 'nav navbar-nav navbar-right main-navigation',
      'walker' => new CSS_Menu_Walker()
    ));
    */

    $args = array(
      'theme_location' => 'menu-principal',
      'depth' => 0,
      'container' => 'div',
      'container_id' => 'top-nav',
      'container_class' => 'nav navbar-nav navbar-right main-navigation',
      'walker'  => new BootstrapNavMenuWalker()
      );
    wp_nav_menu($args);

    ?>
    <!--
     <div id="top-nav" class="hidden-xs ">
      <ul class="nav navbar-nav navbar-right main-navigation">
          <li><a href="#">Home</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">About</a>
            <ul class="dropdown-menu">
              <li><a href="about-us.html">About us</a></li>
              <li><a href="about-me.html">About me</a></li>
            </ul>
          </li>
            <li><a href="service.html">services</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio</a>
            <ul class="dropdown-menu">
              <li><a href="index-2.html">Masonry 3 col</a></li>
              <li><a href="index.html">Grid 4 col</a></li>
              <li><a href="portfolio-5-col-grid.html">Grid 5 col</a></li>
            </ul>
          </li>

        <li><a href="blog-list.html">blog</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </div>
  -->
  </header>
