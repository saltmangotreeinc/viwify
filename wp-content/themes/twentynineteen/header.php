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
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.css">

    <!-- Map -->
    <link href='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css' rel='stylesheet' />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/assets/css/theme.min.css">

    <title>Landkit</title>
  </head>
  <body>
