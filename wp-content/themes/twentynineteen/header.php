<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Required meta tags -->
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="profile" href="https://gmpg.org/xfn/11" />
  <?php wp_head(); ?>
  <!-- Libs CSS -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/fonts/Feather/feather.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/libs/flickity/dist/flickity.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/libs/flickity-fade/flickity-fade.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/libs/aos/dist/aos.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/libs/jarallax/dist/jarallax.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/libs/highlightjs/styles/vs2015.css">
  <link rel="stylesheet"
    href="<?php bloginfo('template_directory');?>/assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.css">

  <!-- Map -->
  <link href='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css' rel='stylesheet' />

  <!-- Theme CSS -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/theme.min.css">

  <title>Vivify</title>
</head>

<body>
  <!-- NAVBAR
    ================================================== -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="index.html">
        <img src="<?php bloginfo('template_directory');?>/assets/img/brand.svg" class="navbar-brand-img" alt="...">
      </a>

      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="navbarCollapse">

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
          aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fe fe-x"></i>
        </button>

        <!-- Navigation -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarLandings" data-toggle="dropdown" href="index.html#"
              aria-haspopup="true" aria-expanded="false">
              Product
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarLandings" data-toggle="dropdown" href="index.html#"
              aria-haspopup="true" aria-expanded="false">
              Use Case
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarLandings" data-toggle="dropdown" href="index.html#"
              aria-haspopup="true" aria-expanded="false">
              Industry
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarLandings" data-toggle="dropdown" href="index.html#"
              aria-haspopup="true" aria-expanded="false">
              About Us
            </a>
          </li>
        </ul>
      </div>

    </div>
  </nav>