<?php
/*
Template Name: About Us
*/
?>
<?php get_header(); ?>
<!-- MODALS
    ================================================== -->
<!-- Example -->
<div class="modal fade" id="modalExample" tabindex="-1" role="dialog" aria-labelledby="modalExampleTitle"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">

        <!-- Close -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>

        <!-- Image -->
        <div class="text-center">
          <img src="<?php bloginfo('template_directory');?>/assets/img/illustrations/illustration-1.png" alt="..."
            class="img-fluid mb-3" style="width: 200px;">
        </div>

        <!-- Heading -->
        <h2 class="font-weight-bold text-center mb-1" id="modalExampleTitle">
          Schedule a demo with us
        </h2>

        <!-- Text -->
        <p class="font-size-lg text-center text-muted mb-6 mb-md-8">
          We can help you solve company communication.
        </p>

        <!-- Form -->
        <form>
          <div class="row">
            <div class="col-12 col-md-6">

              <!-- First name -->
              <div class="form-label-group">
                <input type="text" class="form-control form-control-flush" id="registrationFirstNameModal"
                  placeholder="First name">
                <label for="registrationFirstNameModal">First name</label>
              </div>

            </div>
            <div class="col-12 col-md-6">

              <!-- Last name -->
              <div class="form-label-group">
                <input type="text" class="form-control form-control-flush" id="registrationLastNameModal"
                  placeholder="Last name">
                <label for="registrationLastNameModal">Last name</label>
              </div>

            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-6">

              <!-- Email -->
              <div class="form-label-group">
                <input type="email" class="form-control form-control-flush" id="registrationEmailModal"
                  placeholder="Email">
                <label for="registrationEmailModal">Email</label>
              </div>

            </div>
            <div class="col-12 col-md-6">

              <!-- Password -->
              <div class="form-label-group">
                <input type="password" class="form-control form-control-flush" id="registrationPasswordModal"
                  placeholder="Password">
                <label for="registrationPasswordModal">Password</label>
              </div>

            </div>
          </div>
          <div class="row">
            <div class="col-12">

              <!-- Submit -->
              <button class="btn btn-block btn-primary mt-3 lift">
                Request a demo
              </button>

            </div>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>

<!-- Signup: Horizontal  -->
<div class="modal fade" id="modalSignupHorizontal" tabindex="-1" role="dialog"
  aria-labelledby="modalSignupHorizontalTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="card card-row">
        <div class="row no-gutters">
          <div class="col-12 col-md-6 bg-cover card-img-left"
            style="background-image: url('<?php bloginfo('template_directory');?>/assets/img/photos/photo-8.jpg');">

            <!-- Image (placeholder) -->
            <img src="<?php bloginfo('template_directory');?>/assets/img/photos/photo-8.jpg" alt="..."
              class="img-fluid d-md-none invisible">

            <!-- Shape -->
            <div class="shape shape-right shape-fluid-y svg-shim text-white d-none d-md-block">
              <svg viewBox="0 0 112 690" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M116 0H51V172C76 384 0 517 0 517V690H116V0Z" fill="currentColor" />
              </svg>
            </div>

          </div>
          <div class="col-12 col-md-6">
            <div class="card-body">

              <!-- Close -->
              <button type="button" class="modal-close close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>

              <!-- Heading -->
              <h2 class="mb-0 font-weight-bold text-center" id="modalSignupHorizontalTitle">
                Sign Up
              </h2>

              <!-- Text -->
              <p class="mb-6 text-center text-muted">
                Simplify your workflow in minutes.
              </p>

              <!-- Form -->
              <form class="mb-6">

                <!-- Email -->
                <div class="form-group">
                  <label class="sr-only" for="modalSignupHorizontalEmail">
                    Your email
                  </label>
                  <input type="email" class="form-control" id="modalSignupHorizontalEmail" placeholder="Your email">
                </div>

                <!-- Password -->
                <div class="form-group mb-5">
                  <label class="sr-only" for="modalSignupHorizontalPassword">
                    Create a password
                  </label>
                  <input type="password" class="form-control" id="modalSignupHorizontalPassword"
                    placeholder="Create a password">
                </div>

                <!-- Submit -->
                <button class="btn btn-block btn-primary" type="submit">
                  Sign up
                </button>

              </form>

              <!-- Text -->
              <p class="mb-0 font-size-sm text-center text-muted">
                Already have an account? <a href="signin-illustration.html">Log in</a>.
              </p>

            </div>
          </div>

        </div> <!-- / .row -->
      </div>
    </div>
  </div>
</div>

<!-- Signup: Vertical  -->
<div class="modal fade" id="modalSignupVertical" tabindex="-1" role="dialog" aria-labelledby="modalSignupVerticalTitle"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="card">

        <!-- Close -->
        <button type="button" class="modal-close close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>

        <!-- Image -->
        <img src="<?php bloginfo('template_directory');?>/assets/img/photos/photo-7.jpg" alt="..." class="card-img-top">

        <!-- Shape -->
        <div class="position-relative">
          <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
            <svg viewBox="0 0 2880 480" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M2160 0C1440 240 720 240 720 240H0V480H2880V0H2160Z"
                fill="currentColor" />
            </svg>
          </div>
        </div>

        <!-- Body -->
        <div class="card-body">

          <!-- Heading -->
          <h2 class="mb-0 font-weight-bold text-center" id="modalSignupVerticalTitle">
            Sign Up
          </h2>

          <!-- Text -->
          <p class="mb-6 text-center text-muted">
            Simplify your workflow in minutes.
          </p>

          <!-- Form -->
          <form class="mb-6">

            <!-- Email -->
            <div class="form-group">
              <label class="sr-only" for="modalSignupVerticalEmail">
                Your email
              </label>
              <input type="email" class="form-control" id="modalSignupVerticalEmail" placeholder="Your email">
            </div>

            <!-- Password -->
            <div class="form-group mb-5">
              <label class="sr-only" for="modalSignupVerticalPassword">
                Create a password
              </label>
              <input type="password" class="form-control" id="modalSignupVerticalPassword"
                placeholder="Create a password">
            </div>

            <!-- Submit -->
            <button class="btn btn-block btn-primary" type="submit">
              Sign up
            </button>

          </form>

          <!-- Text -->
          <p class="mb-0 font-size-sm text-center text-muted">
            Already have an account? <a href="signin-illustration.html">Log in</a>.
          </p>

        </div>

      </div>
    </div>
  </div>
</div>

<!-- Signin: Horizontal  -->
<div class="modal fade" id="modalSigninHorizontal" tabindex="-1" role="dialog"
  aria-labelledby="modalSigninHorizontalTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="card card-row">
        <div class="row no-gutters">
          <div class="col-12 col-md-6 bg-cover card-img-left"
            style="background-image: url('<?php bloginfo('template_directory');?>/assets/img/photos/photo-1.jpg');">

            <!-- Image (placeholder) -->
            <img src="<?php bloginfo('template_directory');?>/assets/img/photos/photo-1.jpg" alt="..."
              class="img-fluid d-md-none invisible">

            <!-- Shape -->
            <div class="shape shape-right shape-fluid-y svg-shim text-white d-none d-md-block">
              <svg viewBox="0 0 112 690" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M116 0H51V172C76 384 0 517 0 517V690H116V0Z" fill="currentColor" />
              </svg>
            </div>

          </div>
          <div class="col-12 col-md-6">
            <div class="card-body">

              <!-- Close -->
              <button type="button" class="modal-close close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>

              <!-- Heading -->
              <h2 class="mb-0 font-weight-bold text-center" id="modalSigninHorizontalTitle">
                Sign In
              </h2>

              <!-- Text -->
              <p class="mb-6 text-center text-muted">
                Simplify your workflow in minutes.
              </p>

              <!-- Form -->
              <form class="mb-6">

                <!-- Email -->
                <div class="form-group">
                  <label class="sr-only" for="modalSigninHorizontalEmail">
                    Your email
                  </label>
                  <input type="email" class="form-control" id="modalSigninHorizontalEmail" placeholder="Your email">
                </div>

                <!-- Password -->
                <div class="form-group mb-5">
                  <label class="sr-only" for="modalSigninHorizontalPassword">
                    Create a password
                  </label>
                  <input type="password" class="form-control" id="modalSigninHorizontalPassword"
                    placeholder="Create a password">
                </div>

                <!-- Submit -->
                <button class="btn btn-block btn-primary" type="submit">
                  Sign in
                </button>

              </form>

              <!-- Text -->
              <p class="mb-0 font-size-sm text-center text-muted">
                Don't have an account yet? <a href="signin-illustration.html">Sign up</a>.
              </p>

            </div>
          </div>

        </div> <!-- / .row -->
      </div>
    </div>
  </div>
</div>

<!-- Signup: Vertical  -->
<div class="modal fade" id="modalSigninVertical" tabindex="-1" role="dialog" aria-labelledby="modalSigninVerticalTitle"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="card">

        <!-- Close -->
        <button type="button" class="modal-close close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>

        <!-- Image -->
        <img src="<?php bloginfo('template_directory');?>/assets/img/photos/photo-21.jpg" alt="..."
          class="card-img-top">

        <!-- Shape -->
        <div class="position-relative">
          <div class="shape shape-bottom shape-fluid-x svg-shim text-white">
            <svg viewBox="0 0 2880 480" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M2160 0C1440 240 720 240 720 240H0V480H2880V0H2160Z"
                fill="currentColor" />
            </svg>
          </div>
        </div>

        <!-- Body -->
        <div class="card-body">

          <!-- Heading -->
          <h2 class="mb-0 font-weight-bold text-center" id="modalSigninVerticalTitle">
            Sign In
          </h2>

          <!-- Text -->
          <p class="mb-6 text-center text-muted">
            Simplify your workflow in minutes.
          </p>

          <!-- Form -->
          <form class="mb-6">

            <!-- Email -->
            <div class="form-group">
              <label class="sr-only" for="modalSigninVerticalEmail">
                Your email
              </label>
              <input type="email" class="form-control" id="modalSigninVerticalEmail" placeholder="Your email">
            </div>

            <!-- Password -->
            <div class="form-group mb-5">
              <label class="sr-only" for="modalSigninVerticalPassword">
                Create a password
              </label>
              <input type="password" class="form-control" id="modalSigninVerticalPassword"
                placeholder="Create a password">
            </div>

            <!-- Submit -->
            <button class="btn btn-block btn-primary" type="submit">
              Sign in
            </button>

          </form>

          <!-- Text -->
          <p class="mb-0 font-size-sm text-center text-muted">
            Don't have an account yet? <a href="signin-illustration.html">Sign up</a>.
          </p>

        </div>

      </div>
    </div>
  </div>
</div>

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
            Landings
          </a>
          <div class="dropdown-menu dropdown-menu-xl p-0" aria-labelledby="navbarLandings">
            <div class="row no-gutters">
              <div class="col-12 col-lg-6">
                <div class="dropdown-img-left"
                  style="background-image: url('<?php bloginfo('template_directory');?>/assets/img/photos/photo-3.jpg');">

                  <!-- Heading -->
                  <h4 class="font-weight-bold text-white mb-0">
                    Want to see an overview?
                  </h4>

                  <!-- Text -->
                  <p class="font-size-sm text-white">
                    See all the pages at once.
                  </p>

                  <!-- Button -->
                  <a href="overview.html" class="btn btn-sm btn-white shadow-dark fonFt-size-sm">
                    View all pages
                  </a>

                </div>
              </div>
              <div class="col-12 col-lg-6">
                <div class="dropdown-body">
                  <div class="row no-gutters">
                    <div class="col-6">

                      <!-- Heading -->
                      <h6 class="dropdown-header">
                        Services
                      </h6>

                      <!-- List -->
                      <a class="dropdown-item" href="coworking.html">
                        Coworking
                      </a>
                      <a class="dropdown-item" href="rental.html">
                        Rental
                      </a>
                      <a class="dropdown-item mb-5" href="job.html">
                        Job Listing
                      </a>

                      <!-- Heading -->
                      <h6 class="dropdown-header">
                        Apps
                      </h6>

                      <!-- List -->
                      <a class="dropdown-item" href="desktop-app.html">
                        Desktop
                      </a>
                      <a class="dropdown-item" href="mobile-app.html">
                        Mobile
                      </a>

                    </div>
                    <div class="col-6">

                      <!-- Heading -->
                      <h6 class="dropdown-header">
                        Web
                      </h6>

                      <!-- List -->
                      <a class="dropdown-item" href="index.html">
                        Basic
                      </a>
                      <a class="dropdown-item" href="enterprise.html">
                        Enterprise
                      </a>
                      <a class="dropdown-item" href="service.html">
                        Service
                      </a>
                      <a class="dropdown-item" href="cloud.html">
                        Cloud Hosting
                      </a>

                    </div>
                  </div> <!-- / .row -->
                </div>
              </div>
            </div> <!-- / .row -->
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarPages" data-toggle="dropdown" href="index.html#"
            aria-haspopup="true" aria-expanded="false">
            Pages
          </a>
          <div class="dropdown-menu dropdown-menu-lg" aria-labelledby="navbarPages">
            <div class="row no-gutters">
              <div class="col-6 col-lg-4">

                <!-- Heading -->
                <h6 class="dropdown-header">
                  Career
                </h6>

                <!-- List -->
                <a class="dropdown-item" href="careers.html">
                  Listing
                </a>
                <a class="dropdown-item mb-5" href="career-single.html">
                  Opening
                </a>

                <!-- Heading -->
                <h6 class="dropdown-header">
                  Company
                </h6>

                <!-- List -->
                <a class="dropdown-item" href="about.html">
                  About
                </a>
                <a class="dropdown-item" href="pricing.html">
                  Pricing
                </a>
                <a class="dropdown-item mb-5 mb-lg-0" href="terms-of-service.html">
                  Terms
                </a>

              </div>
              <div class="col-6 col-lg-4">

                <!-- Heading -->
                <h6 class="dropdown-header">
                  Help center
                </h6>

                <!-- List -->
                <a class="dropdown-item" href="help-center.html">
                  Overview
                </a>
                <a class="dropdown-item mb-5" href="help-center-article.html">
                  Article
                </a>

                <!-- Heading -->
                <h6 class="dropdown-header">
                  Contact
                </h6>

                <!-- List -->
                <a class="dropdown-item" href="contact.html">
                  Basic
                </a>
                <a class="dropdown-item" href="contact-alt.html">
                  Cover
                </a>

              </div>
              <div class="col-6 col-lg-4">

                <!-- Heading -->
                <h6 class="dropdown-header">
                  Blog
                </h6>

                <!-- List -->
                <a class="dropdown-item" href="blog.html">
                  Rich View
                </a>
                <a class="dropdown-item" href="blog-post.html">
                  Article
                </a>
                <a class="dropdown-item" href="blog-showcase.html">
                  Showcase
                </a>
                <a class="dropdown-item" href="blog-search.html">
                  Search
                </a>

              </div>
            </div>
          </div> <!-- / .row -->
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarAccount" data-toggle="dropdown" href="index.html#"
            aria-haspopup="true" aria-expanded="false">
            Account
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarAccount">
            <li class="dropdown-item dropright">
              <a class="dropdown-link dropdown-toggle" data-toggle="dropdown" href="index.html#">
                Sign In
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="signin-cover.html">
                  Side Cover
                </a>
                <a class="dropdown-item" href="signin-illustration.html">
                  Illustration
                </a>
                <a class="dropdown-item" href="signin.html">
                  Basic
                </a>
                <a class="dropdown-item" data-toggle="modal" href="index.html#modalSigninHorizontal">
                  Modal Horizontal
                </a>
                <a class="dropdown-item" data-toggle="modal" href="index.html#modalSigninVertical">
                  Modal Vertical
                </a>
              </div>
            </li>
            <li class="dropdown-item dropright">
              <a class="dropdown-link dropdown-toggle" data-toggle="dropdown" href="index.html#">
                Sign Up
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="signup-cover.html">
                  Side Cover
                </a>
                <a class="dropdown-item" href="signup-illustration.html">
                  Illustration
                </a>
                <a class="dropdown-item" href="signup.html">
                  Basic
                </a>
                <a class="dropdown-item" data-toggle="modal" href="index.html#modalSignupHorizontal">
                  Modal Horizontal
                </a>
                <a class="dropdown-item" data-toggle="modal" href="index.html#modalSignupVertical">
                  Modal Vertical
                </a>
              </div>
            </li>
            <li class="dropdown-item dropright">
              <a class="dropdown-link dropdown-toggle" data-toggle="dropdown" href="index.html#">
                Password Reset
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="password-reset-cover.html">
                  Side Cover
                </a>
                <a class="dropdown-item" href="password-reset-illustration.html">
                  Illustration
                </a>
                <a class="dropdown-item" href="password-reset.html">
                  Basic
                </a>
              </div>
            </li>
            <li class="dropdown-item dropright">
              <a class="dropdown-link dropdown-toggle" data-toggle="dropdown" href="index.html#">
                Error
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="error-cover.html">
                  Side Cover
                </a>
                <a class="dropdown-item" href="error-illustration.html">
                  Illustration
                </a>
                <a class="dropdown-item" href="error.html">
                  Basic
                </a>
              </div>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDocumentation" data-toggle="dropdown" href="index.html#"
            aria-haspopup="true" aria-expanded="false">
            Documentation
          </a>
          <div class="dropdown-menu dropdown-menu-md" aria-labelledby="navbarDocumentation">
            <div class="list-group list-group-flush">
              <a class="list-group-item" href="docs/index.html">

                <!-- Icon -->
                <div class="icon icon-sm text-primary">
                  <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
                    <title>Stockholm-icons / General / Clipboard</title>
                    <desc>Created with Sketch.</desc>
                    <g id="Stockholm-icons-/-General-/-Clipboard" stroke="none" stroke-width="1" fill="none"
                      fill-rule="evenodd">
                      <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                      <path
                        d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z"
                        id="Combined-Shape" fill="#335EEA" opacity="0.3"></path>
                      <path
                        d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z"
                        id="Combined-Shape" fill="#335EEA"></path>
                      <rect id="Rectangle-152" fill="#335EEA" opacity="0.3" x="7" y="10" width="5" height="2" rx="1">
                      </rect>
                      <rect id="Rectangle-152-Copy" fill="#335EEA" opacity="0.3" x="7" y="14" width="9" height="2"
                        rx="1"></rect>
                    </g>
                  </svg>
                </div>

                <!-- Content -->
                <div class="ml-4">

                  <!-- Heading -->
                  <h6 class="font-weight-bold text-uppercase text-primary mb-0">
                    Documentation
                  </h6>

                  <!-- Text -->
                  <p class="font-size-sm text-gray-700 mb-0">
                    Customizing and building
                  </p>

                </div>

              </a>
              <a class="list-group-item" href="docs/alerts.html">

                <!-- Icon -->
                <div class="icon icon-sm text-primary">
                  <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
                    <title>Stockholm-icons / Layout / Layout-4-blocks</title>
                    <desc>Created with Sketch.</desc>
                    <g id="Stockholm-icons-/-Layout-/-Layout-4-blocks" stroke="none" stroke-width="1" fill="none"
                      fill-rule="evenodd">
                      <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                      <rect id="Rectangle-7" fill="#335EEA" x="4" y="4" width="7" height="7" rx="1.5"></rect>
                      <path
                        d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                        id="Combined-Shape" fill="#335EEA" opacity="0.3"></path>
                    </g>
                  </svg>
                </div>

                <!-- Content -->
                <div class="ml-4">

                  <!-- Heading -->
                  <h6 class="font-weight-bold text-uppercase text-primary mb-0">
                    Components
                  </h6>

                  <!-- Text -->
                  <p class="font-size-sm text-gray-700 mb-0">
                    Full list of components
                  </p>

                </div>

              </a>
              <a class="list-group-item" href="docs/changelog.html">

                <!-- Icon -->
                <div class="icon icon-sm text-primary">
                  <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
                    <title>Stockholm-icons / Files / File</title>
                    <desc>Created with Sketch.</desc>
                    <g id="Stockholm-icons-/-Files-/-File" stroke="none" stroke-width="1" fill="none"
                      fill-rule="evenodd">
                      <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
                      <path
                        d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z"
                        id="Combined-Shape" fill="#335EEA" opacity="0.3"></path>
                      <rect id="Rectangle" fill="#335EEA" x="6" y="11" width="9" height="2" rx="1"></rect>
                      <rect id="Rectangle-Copy" fill="#335EEA" x="6" y="15" width="5" height="2" rx="1"></rect>
                    </g>
                  </svg>
                </div>

                <!-- Content -->
                <div class="ml-4">

                  <!-- Heading -->
                  <h6 class="font-weight-bold text-uppercase text-primary mb-0">
                    Changelog
                  </h6>

                  <!-- Text -->
                  <p class="font-size-sm text-gray-700 mb-0">
                    Keep track of changes
                  </p>

                </div>

                <!-- Badge -->
                <span class="badge badge-pill badge-primary-soft ml-auto">
                  1.1.0
                </span>

              </a>
            </div>
          </div>
        </li>
      </ul>

      <!-- Button -->
      <a class="navbar-btn btn btn-sm btn-primary lift ml-auto" href="https://themes.getbootstrap.com/product/landkit/"
        target="_blank">
        Buy now
      </a>

    </div>

  </div>
</nav>

<!-- WELCOME
    ================================================== -->
<section class="pt-4 pt-md-11">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-md-5 col-lg-6 order-md-2">

        <!-- Image -->
        <img src="<?php bloginfo('template_directory');?>/assets/img/illustrations/illustration-2.png"
          class="img-fluid mw-md-150 mw-lg-130 mb-6 mb-md-0" alt="..." data-aos="fade-up" data-aos-delay="100">

      </div>
      <div class="col-12 col-md-7 col-lg-6 order-md-1" data-aos="fade-up">

        <!-- Heading -->
        <h1 class="display-3 text-center text-md-left">
          Welcome to <span class="text-primary">Landkit</span>. <br>
          Develop anything.
        </h1>

        <!-- Text -->
        <p class="lead text-center text-md-left text-muted mb-6 mb-lg-8">
          Build a beautiful, modern website with flexible Bootstrap components built from scratch.
        </p>

        <!-- Buttons -->
        <div class="text-center text-md-left">
          <a href="overview.html" class="btn btn-primary shadow lift mr-1">
            View all pages <i class="fe fe-arrow-right d-none d-md-inline ml-3"></i>
          </a>
          <a href="docs/index.html" class="btn btn-primary-soft lift">
            Documentation
          </a>
        </div>

      </div>
    </div> <!-- / .row -->
  </div> <!-- / .container -->
</section>

<!-- FEATURES
    ================================================== -->
<section class="py-8 py-md-11 border-bottom">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-4" data-aos="fade-up">

        <!-- Icon -->
        <div class="icon text-primary mb-3">
          <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
            <title>Stockholm-icons / General / Settings-1</title>
            <desc>Created with Sketch.</desc>
            <g id="Stockholm-icons-/-General-/-Settings-1" stroke="none" stroke-width="1" fill="none"
              fill-rule="evenodd">
              <rect id="bound" x="0" y="0" width="24" height="24"></rect>
              <path
                d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                id="Combined-Shape" fill="#335EEA"></path>
              <path
                d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                id="Combined-Shape" fill="#335EEA" opacity="0.3"></path>
            </g>
          </svg>
        </div>

        <!-- Heading -->
        <h3>
          Built for developers
        </h3>

        <!-- Text -->
        <p class="text-muted mb-6 mb-md-0">
          Landkit is built to make your life easier. Variables, build tooling, documentation, and reusable components.
        </p>

      </div>
      <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="50">

        <!-- Icon -->
        <div class="icon text-primary mb-3">
          <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
            <title>Stockholm-icons / Layout / Layout-arrange</title>
            <desc>Created with Sketch.</desc>
            <g id="Stockholm-icons-/-Layout-/-Layout-arrange" stroke="none" stroke-width="1" fill="none"
              fill-rule="evenodd">
              <rect id="bound" x="0" y="0" width="24" height="24"></rect>
              <path
                d="M5.5,4 L9.5,4 C10.3284271,4 11,4.67157288 11,5.5 L11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L5.5,8 C4.67157288,8 4,7.32842712 4,6.5 L4,5.5 C4,4.67157288 4.67157288,4 5.5,4 Z M14.5,16 L18.5,16 C19.3284271,16 20,16.6715729 20,17.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,17.5 C13,16.6715729 13.6715729,16 14.5,16 Z"
                id="Combined-Shape" fill="#335EEA"></path>
              <path
                d="M5.5,10 L9.5,10 C10.3284271,10 11,10.6715729 11,11.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,12.5 C20,13.3284271 19.3284271,14 18.5,14 L14.5,14 C13.6715729,14 13,13.3284271 13,12.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z"
                id="Combined-Shape" fill="#335EEA" opacity="0.3"></path>
            </g>
          </svg>
        </div>

        <!-- Heading -->
        <h3>
          Designed to be modern
        </h3>

        <!-- Text -->
        <p class="text-muted mb-6 mb-md-0">
          Designed with the latest design trends in mind. Landkit feels modern, minimal, and beautiful.
        </p>

      </div>
      <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="100">

        <!-- Icon -->
        <div class="icon text-primary mb-3">
          <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
            <title>Stockholm-icons / Code / Code</title>
            <desc>Created with Sketch.</desc>
            <g id="Stockholm-icons-/-Code-/-Code" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <rect id="bound" x="0" y="0" width="24" height="24"></rect>
              <path
                d="M17.2718029,8.68536757 C16.8932864,8.28319382 16.9124644,7.65031935 17.3146382,7.27180288 C17.7168119,6.89328641 18.3496864,6.91246442 18.7282029,7.31463817 L22.7282029,11.5646382 C23.0906029,11.9496882 23.0906029,12.5503176 22.7282029,12.9353676 L18.7282029,17.1853676 C18.3496864,17.5875413 17.7168119,17.6067193 17.3146382,17.2282029 C16.9124644,16.8496864 16.8932864,16.2168119 17.2718029,15.8146382 L20.6267538,12.2500029 L17.2718029,8.68536757 Z M6.72819712,8.6853647 L3.37324625,12.25 L6.72819712,15.8146353 C7.10671359,16.2168091 7.08753558,16.8496835 6.68536183,17.2282 C6.28318808,17.6067165 5.65031361,17.5875384 5.27179713,17.1853647 L1.27179713,12.9353647 C0.909397125,12.5503147 0.909397125,11.9496853 1.27179713,11.5646353 L5.27179713,7.3146353 C5.65031361,6.91246155 6.28318808,6.89328354 6.68536183,7.27180001 C7.08753558,7.65031648 7.10671359,8.28319095 6.72819712,8.6853647 Z"
                id="Combined-Shape" fill="#335EEA"></path>
              <rect id="Rectangle-28" fill="#335EEA" opacity="0.3"
                transform="translate(12.000000, 12.000000) rotate(-345.000000) translate(-12.000000, -12.000000) "
                x="11" y="4" width="2" height="16" rx="1"></rect>
            </g>
          </svg>
        </div>

        <!-- Heading -->
        <h3>
          Documentation for everything
        </h3>

        <!-- Text -->
        <p class="text-muted mb-0">
          We've written extensive documentation for components and tools, so you never have to reverse engineer
          anything.
        </p>

      </div>
    </div> <!-- / .row -->
  </div> <!-- / .container -->
</section>

<!-- SCALABLE
    ================================================== -->
<section class="pt-6 pt-md-9 pb-10 pb-md-15 border-bottom">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-md-6 order-md-2">

        <!-- Image -->
        <img src="<?php bloginfo('template_directory');?>/assets/img/illustrations/illustration-1.png" alt="..." class="img-fluid mb-6 mb-md-0">

      </div>
      <div class="col-12 col-md-6 order-md-1">

        <!-- Badge -->
        <span class="badge badge-pill badge-primary-soft mb-3">
          <span class="h6 text-uppercase">Scalable</span>
        </span>

        <!-- Heading -->
        <h2>
          Flexible office space means <br>
          <span class="text-primary">growing your team is easy</span>.
        </h2>

        <!-- Text -->
        <p class="font-size-lg text-gray-700 mb-6 mb-md-6">
          Rather than worrying about switching offices every couple years, you can instead stay in the same location and
          grow-up from your shared coworking space to an office that takes up an entire floor.
        </p>

        <!-- List -->
        <div class="row">
          <div class="col-12 col-lg-6">

            <!-- Item -->
            <div class="d-flex">

              <!-- Check -->
              <div class="badge badge-rounded-circle badge-primary-soft mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>

              <!-- Text -->
              <p>
                Add space anytime
              </p>

            </div>

            <!-- Item -->
            <div class="d-flex">

              <!-- Check -->
              <div class="badge badge-rounded-circle badge-primary-soft mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>

              <p class="mb-lg-0">
                Group discounts
              </p>

            </div>

          </div>
          <div class="col-12 col-lg-6">

            <!-- Item -->
            <div class="d-flex">

              <!-- Check -->
              <span class="badge badge-rounded-circle badge-primary-soft mt-1 mr-4">
                <i class="fe fe-check"></i>
              </span>

              <!-- Text -->
              <p>
                Infinite flexibility
              </p>

            </div>

            <!-- Item -->
            <div class="d-flex">

              <!-- Check -->
              <div class="badge badge-rounded-circle badge-primary-soft mr-1 mr-4">
                <i class="fe fe-check"></i>
              </div>

              <!-- Text -->
              <p class="mb-0">
                Snacks included
              </p>

            </div>

          </div>
        </div> <!-- / .row -->

      </div>
    </div> <!-- / .row -->
    <div class="row align-items-center pt-8 pt-md-10">
      <div class="col-12 col-md-6 order-md-1">

        <!-- Image -->
        <img src="<?php bloginfo('template_directory');?>/assets/img/illustrations/illustration-1.png" alt="..." class="img-fluid mb-6 mb-md-0">

      </div>
      <div class="col-12 col-md-6 order-md-2">

        <!-- Badge -->
        <span class="badge badge-pill badge-primary-soft mb-3">
          <span class="h6 text-uppercase">Scalable</span>
        </span>

        <!-- Heading -->
        <h2>
          Flexible office space means <br>
          <span class="text-primary">growing your team is easy</span>.
        </h2>

        <!-- Text -->
        <p class="font-size-lg text-gray-700 mb-6 mb-md-6">
          Rather than worrying about switching offices every couple years, you can instead stay in the same location and
          grow-up from your shared coworking space to an office that takes up an entire floor.
        </p>

        <!-- List -->
        <div class="row">
          <div class="col-12 col-lg-6">

            <!-- Item -->
            <div class="d-flex">

              <!-- Check -->
              <div class="badge badge-rounded-circle badge-primary-soft mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>

              <!-- Text -->
              <p>
                Add space anytime
              </p>

            </div>

            <!-- Item -->
            <div class="d-flex">

              <!-- Check -->
              <div class="badge badge-rounded-circle badge-primary-soft mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>

              <p class="mb-lg-0">
                Group discounts
              </p>

            </div>

          </div>
          <div class="col-12 col-lg-6">

            <!-- Item -->
            <div class="d-flex">

              <!-- Check -->
              <span class="badge badge-rounded-circle badge-primary-soft mt-1 mr-4">
                <i class="fe fe-check"></i>
              </span>

              <!-- Text -->
              <p>
                Infinite flexibility
              </p>

            </div>

            <!-- Item -->
            <div class="d-flex">

              <!-- Check -->
              <div class="badge badge-rounded-circle badge-primary-soft mr-1 mr-4">
                <i class="fe fe-check"></i>
              </div>

              <!-- Text -->
              <p class="mb-0">
                Snacks included
              </p>

            </div>

          </div>
        </div> <!-- / .row -->

      </div>
    </div> <!-- / .row -->
  </div> <!-- / .container -->
</section>


<!-- SHAPE
    ================================================== -->
<div class="position-relative mt-n8">
  <div class="shape shape-bottom shape-fluid-x svg-shim text-gray-200">
    <svg viewBox="0 0 2880 480" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M2160 0C1440 240 720 240 720 240H0V480H2880V0H2160Z"
        fill="currentColor" />
    </svg>
  </div>
</div>

<!-- STATS
    ================================================== -->
<section class="py-8 py-md-10 bg-gray-200">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-md-5 col-lg-6 order-md-2">

        <!-- Image -->
        <img src="<?php bloginfo('template_directory');?>/assets/img/illustrations/illustration-8.png" alt="..."
          class="img-fluid mb-6 mb-md-0">

      </div>
      <div class="col-12 col-md-7 col-lg-6 order-md-1">

        <!-- Heading -->
        <h2>
          Stay focused on your business. <br>
          <span class="text-primary">Let us handle the design</span>.
        </h2>

        <!-- Text -->
        <p class="font-size-lg text-gray-700 mb-6">
          You have a business to run. Stop worring about cross-browser bugs, designing new pages, keeping your
          components up to date. Let us do that for you.
        </p>

        <!-- Stats -->
        <div class="d-flex">
          <div class="pr-5">
            <h3 class="mb-0">
              <span data-toggle="countup" data-from="0" data-to="100" data-aos data-aos-id="countup:in"></span>%
            </h3>
            <p class="text-gray-700 mb-0">
              Satisfaction
            </p>
          </div>
          <div class="border-left border-gray-300"></div>
          <div class="px-5">
            <h3 class="mb-0">
              <span data-toggle="countup" data-from="0" data-to="24" data-aos data-aos-id="countup:in"></span>/
              <span data-toggle="countup" data-from="0" data-to="7" data-aos data-aos-id="countup:in"></span>
            </h3>
            <p class="text-gray-700 mb-0">
              Support
            </p>
          </div>
          <div class="border-left border-gray-300"></div>
          <div class="pl-5">
            <h3 class="mb-0">
              <span data-toggle="countup" data-from="0" data-to="100" data-aos data-aos-id="countup:in"></span>k+
            </h3>
            <p class="text-gray-700 mb-0">
              Sales
            </p>
          </div>
        </div>

      </div>
    </div> <!-- / .row -->
  </div> <!-- / .container -->
</section>

<!-- FAQ
    ================================================== -->
<section class="pt-6 bg-dark">
  <div class="container pt-8 pt-md-11">
    <div class="row">
      <div class="col-12 col-md-6">

        <!-- Item -->
        <div class="d-flex">

          <!-- Badge -->
          <div class="badge badge-lg badge-rounded-circle badge-success">
            <span>?</span>
          </div>

          <div class="ml-5">

            <!-- Heading -->
            <h4 class="text-white">
              Can I use Landkit for my clients?
            </h4>

            <!-- Text -->
            <p class="text-muted mb-6 mb-md-8">
              Absolutely. The Bootstrap Themes license allows you to build a websites for personal use or for a client.
            </p>

          </div>

        </div>

        <!-- Item -->
        <div class="d-flex">

          <!-- Badge -->
          <div class="badge badge-lg badge-rounded-circle badge-success">
            <span>?</span>
          </div>

          <div class="ml-5">

            <!-- Heading -->
            <h4 class="text-white">
              Do I get free updates?
            </h4>

            <!-- Text -->
            <p class="text-muted mb-6 mb-md-0">
              Yes. We update all of our themes with each Bootstrap update, plus are constantly adding new components,
              pages, and features to our themes.
            </p>

          </div>

        </div>

      </div>
      <div class="col-12 col-md-6">

        <!-- Item -->
        <div class="d-flex">

          <!-- Badge -->
          <div class="badge badge-lg badge-rounded-circle badge-success">
            <span>?</span>
          </div>

          <div class="ml-5">

            <!-- Heading -->
            <h4 class="text-white">
              Is there a money back guarantee?
            </h4>

            <!-- Text -->
            <p class="text-muted mb-6 mb-md-8">
              Yup! Bootstrap Themes come with a satisfaction guarantee. Submit a return and get your money back.
            </p>

          </div>

        </div>

        <!-- Item -->
        <div class="d-flex">

          <!-- Badge -->
          <div class="badge badge-lg badge-rounded-circle badge-success">
            <span>?</span>
          </div>

          <div class="ml-5">

            <!-- Heading -->
            <h4 class="text-white">
              Does it work with Rails? React? Laravel?
            </h4>

            <!-- Text -->
            <p class="text-muted mb-6 mb-md-0">
              Yes. Landkit has basic CSS/JS files you can include. If you want to enable deeper customization, you can
              integrate it into your assets pipeline or build processes.
            </p>

          </div>

        </div>

      </div>
    </div> <!-- / .row -->
  </div> <!-- / .container -->
</section>

<!-- CTA
    ================================================== -->
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
          Get Landkit and save your time.
        </h1>

        <!-- Text -->
        <p class="font-size-lg text-muted mb-6 mb-md-8">
          Stop wasting time trying to do it the "right way" and build a site from scratch. Landkit is faster, easier,
          and you still have complete control.
        </p>

        <!-- Button -->
        <a href="https://themes.getbootstrap.com/product/landkit/" target="_blank" class="btn btn-success lift">
          Buy it now <i class="fe fe-arrow-right"></i>
        </a>

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

<?php get_footer(); ?>