<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>
<?php if ( !is_page_template('about-us.php')): ?>
<section class="py-8 py-md-11 bg-dark">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-8 text-center">

        <!-- Badge -->
        <span class="badge badge-pill badge-gray-700-soft mb-4">
          <span class="h6 font-weight-bold text-uppercase">Get started</span>
        </span>

        <!-- Heading -->
        <h1 class="display-4 text-white">
          Communication is next-gen already. Question is, are you? 
        </h1>

        <!-- Text -->
        <p class="font-size-lg text-muted mb-6 mb-md-8">
          Classrooms, conference rooms, mall, or at work - Viwify displays to get the point across.
        </p>

        <!-- Button -->
        <? include 'template-parts/cta.php' ?>

      </div>
    </div> <!-- / .row -->
  </div> <!-- / .container -->
</section>

<!-- SHAPE
    ================================================== -->
<div class="position-relative">
  <div class="shape shape-bottom shape-fluid-x svg-shim text-gray-200">
    <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor" />
    </svg>
  </div>
</div>
<?php endif; ?>
<!-- FOOTER
    ================================================== -->
<footer class="py-8 py-md-11 bg-gray-200">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-12 col-lg-4 text-center pb-md-8 text-lg-left">

        <!-- Brand -->
        <img src="<?php bloginfo('template_directory');?>/assets/img/brand.svg" alt="..."
          class="footer-brand img-fluid mb-2">

        <!-- Text -->
        <p class="text-gray-700 mb-2">
          Future-Ready Communications.
        </p>

        <!-- Social -->
        <ul class="list-unstyled list-inline list-social mb-6 mb-md-0">
          <li class="list-inline-item list-social-item mr-3">
            <a href="index.html#!" class="text-decoration-none">
              <img src="<?php bloginfo('template_directory');?>/assets/img/icons/social/instagram.svg"
                class="list-social-icon" alt="...">
            </a>
          </li>
          <li class="list-inline-item list-social-item mr-3">
            <a href="index.html#!" class="text-decoration-none">
              <img src="<?php bloginfo('template_directory');?>/assets/img/icons/social/facebook.svg"
                class="list-social-icon" alt="...">
            </a>
          </li>
          <li class="list-inline-item list-social-item mr-3">
            <a href="index.html#!" class="text-decoration-none">
              <img src="<?php bloginfo('template_directory');?>/assets/img/icons/social/twitter.svg"
                class="list-social-icon" alt="...">
            </a>
          </li>
          <li class="list-inline-item list-social-item">
            <a href="index.html#!" class="text-decoration-none">
              <img src="<?php bloginfo('template_directory');?>/assets/img/icons/social/pinterest.svg"
                class="list-social-icon" alt="...">
            </a>
          </li>
        </ul>

      </div>
      <div class="col-12 col-md-4 col-lg-3 offset-lg-1 text-center text-lg-left">

        <!-- Heading -->
        <h6 class="font-weight-bold text-uppercase text-gray-700">
          Products
        </h6>

        <!-- List -->
        <ul class="list-unstyled text-muted mb-6 mb-md-8 mb-lg-0">
          <li class="mb-3">
            <a href="/products" class="text-reset">
              Interactive Displays
            </a>
          </li>
        </ul>

      </div>
      <div class="col-12 col-md-4 col-lg-2 text-center text-lg-left">

        <!-- Heading -->
        <h6 class="font-weight-bold text-uppercase text-gray-700">
          Industries
        </h6>

        <!-- List -->
        <ul class="list-unstyled text-muted mb-6 mb-md-8 mb-lg-0">
          <li class="mb-3">
            <a href="index.html#!" class="text-reset">
              Education
            </a>
          </li>
          <li class="mb-3">
            <a href="index.html#!" class="text-reset">
              Business
            </a>
          </li>
        </ul>

      </div>
      <div class="col-12 col-md-4 col-lg-2 offset-lg-0 text-center text-lg-left">

        <!-- Heading -->
        <h6 class="font-weight-bold text-uppercase text-gray-700">
          Company
        </h6>

        <!-- List -->
        <ul class="list-unstyled text-muted mb-0">
          <li class="mb-3">
            <a href="index.html#!" class="text-reset">
              About Us
            </a>
          </li>
          <li class="mb-3">
            <a href="index.html#!" class="text-reset">
              Out Mission
            </a>
          </li>
        </ul>

      </div>
    </div> <!-- / .row -->
  </div> <!-- / .container -->
</footer>

<!-- JAVASCRIPT
    ================================================== -->
<!-- Libs JS -->
<script src="<?php bloginfo('template_directory');?>/assets/libs/jquery/dist/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/libs/flickity/dist/flickity.pkgd.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/libs/flickity-fade/flickity-fade.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/libs/aos/dist/aos.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/libs/smooth-scroll/dist/smooth-scroll.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/libs/jarallax/dist/jarallax.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/libs/jarallax/dist/jarallax-video.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/libs/jarallax/dist/jarallax-element.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/libs/typed.js/lib/typed.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/libs/countup.js/dist/countUp.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/libs/highlightjs/highlight.pack.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.js">
</script>

<!-- Map -->
<script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>

<!-- Theme JS -->
<script src="<?php bloginfo('template_directory');?>/assets/js/theme.min.js"></script>
<?php wp_footer(); ?>
</body>

</html>