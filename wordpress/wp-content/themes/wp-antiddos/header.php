<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <!-- saved from url=(0014)about:internet -->
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<!-- wrapper -->
<div class="wrapper">
  <header role="banner">
    <div class="container">
      <div class="row">

        <div class="col-md-3 col-sm-6 col-md-offset-3 header-top--phone">
          звоните: <a href="tel:+380947112310">+38 (094) 711 23 10</a>
        </div><!-- /.col-md-3 col-md-offset-3 header-top--phone -->

        <div class="col-md-3 col-sm-6 header-top--mail">
          пишите: <a href="mailto:info@antiddos.eu">info@antiddos.eu</a>
        </div><!-- /.col-md-3 header-top--mail -->

        <div class="col-md-3 col-sm-12 header-top--security">
          <a href="#" class="stand-link"><span>Встать под защиту</span></a>
          <ul class="change-lang">
            <li class="active">EN</li>
            <li>RU</li>
          </ul><!-- change-lang -->
        </div><!-- /.col-md-3 header-top--security -->

        <div class="logo col-sm-12 col-md-3">
          <?php if ( is_front_page() && is_home() ){ } else { ?>
            <a href="<?php echo home_url(); ?>">
              <?php  } ?>
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
              <?php if ( is_front_page() && is_home() ){
              } else { ?>
            </a>
          <?php } ?>
        </div><!-- /logo -->

        <nav class="header--nav col-sm-12 col-md-9" role="navigation">
          <?php wpeHeadNav(); ?>
        </nav><!-- /header--nav -->

      </div><!-- /.row -->
    </div><!-- /.container -->
  </header><!-- /header -->

  <section role="main">
