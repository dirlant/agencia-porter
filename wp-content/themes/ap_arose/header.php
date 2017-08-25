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

  <!-- Librerias integradas
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/css/slick.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/css/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/css/examples.css">
-->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/css/main.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/css/jquery.fullPage.css">

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

  <header id="header-menu" class="header">

    <?php $class = (is_front_page()) ? '' : 'logo-top'  ?>
    <a class="navbar-brand <?php echo $class ?>" href="<?php echo get_site_url()?>" >
      <img src="<?php echo get_field('logo', 'option') ?>" alt="logo"/>
    </a>
    <div class="nav-trigger" role="button" title="sweet hamburger">
      <div class="hamburger">
        <div class="icon" style="color:#fff;"></div>
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
  </header>
