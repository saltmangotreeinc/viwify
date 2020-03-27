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
  <?php wp_head(); ?>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:300,400,500,600,700&display=swap" rel="stylesheet">
  <!-- Theme CSS -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/style.css<?php echo '?v='.date('dmY.His'); ?>">

  <title>Vivify</title>
</head>

<body>
  <!-- NAVBAR ================================================== -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
      <!-- Brand -->
      <a class="navbar-brand" href="/">
        <img src="<?php bloginfo('template_directory');?>/assets/img/brand.svg" class="navbar-brand-img" alt="...">
      </a>

      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <!-- Navigation -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="/about-us">
              About Us
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/products">
              Blog
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/products">
              Support
            </a>
          </li>
          <li>
            <a href="#!" class="vw-button vw-button--primary">Book a Demo</a>
          </li>
        </ul>
      </div>

    </div>
  </nav>