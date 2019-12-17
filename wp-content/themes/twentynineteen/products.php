<?php
/*
Template Name: Products
*/
?>
<?php get_header(); ?>

<!-- WELCOME
    ================================================== -->
<section data-jarallax data-speed=".8" class="pt-12 pb-10 pt-md-15 pb-md-14"
  style="background-image: url('<?php bloginfo('template_directory');?>/assets/img/products-banner.png')">
  <div class="container">
    <div class="row align-items-center mb-8 mb-sm-12">
      <div class="col-12 col-md-8 col-lg-6">

        <!-- Heading -->
        <h1 class="display-3 font-weight-bold text-white" id="welcomeHeadingSource">
          Designed to deliver <br />
          <span class="text-warning" data-toggle="typed"
            data-options='{"strings": ["better experiences", "faster breakthroughs", "higher engagement"]}'></span>
        </h1>


        <!-- Text -->
        <p class="font-size-lg text-white-80 mb-6">
          Viwify Interactive Display Boards let you truly captivate your audience with next-generation collaborative
          features.
        </p>

        <!-- Buttons -->
        <div class="text-center text-md-left">
          <? include 'template-parts/cta.php' ?>
        </div>

      </div>
    </div> <!-- / .row -->
  </div> <!-- / .container -->
</section>

<section class="pt-10 pt-md-10 pb-14 pb-md-15">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-8 text-center">

        <!-- Preheading -->
        <h6 class="text-uppercase text-gray-500 font-weight-bold">
          Viwify Interactive Display Boards
        </h6>

        <!-- Heading -->
        <h1 class="font-weight-bold">
          The better way to communicate
        </h1>

        <!-- Text -->
        <p class="font-size-lg text-muted mb-7 mb-md-9">
          The interactive touch screen displays from Viwify help you connect with your audience with clarity and convey
          your message quickly.
        </p>

      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-4 text-center mb-8" data-aos="fade-up">

        <!-- Icon -->
        <div class="icon text-primary mb-3">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M1 4H23C23.1326 4 23.2598 4.05268 23.3536 4.14645C23.4473 4.24021 23.5 4.36739 23.5 4.5V17.5H1C0.867392 17.5 0.740215 17.4473 0.646447 17.3536C0.552678 17.2598 0.5 17.1326 0.5 17V4.5C0.5 4.36739 0.552678 4.24021 0.646447 4.14645C0.740215 4.05268 0.867392 4 1 4V4Z"
              stroke="url(#paint0_linear)" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M3 17.5L1.5 20" stroke="url(#paint1_linear)" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M21 17.5L22.5 20" stroke="url(#paint2_linear)" stroke-linecap="round" stroke-linejoin="round" />
            <defs>
              <linearGradient id="paint0_linear" x1="12" y1="4" x2="12" y2="17.5" gradientUnits="userSpaceOnUse">
                <stop stop-color="#335EEA" />
                <stop offset="1" stop-color="#1037B5" />
              </linearGradient>
              <linearGradient id="paint1_linear" x1="2.25" y1="17.5" x2="2.25" y2="20" gradientUnits="userSpaceOnUse">
                <stop stop-color="#335EEA" />
                <stop offset="1" stop-color="#1037B5" />
              </linearGradient>
              <linearGradient id="paint2_linear" x1="21.75" y1="17.5" x2="21.75" y2="20" gradientUnits="userSpaceOnUse">
                <stop stop-color="#335EEA" />
                <stop offset="1" stop-color="#1037B5" />
              </linearGradient>
            </defs>
          </svg>

        </div>

        <!-- Heading -->
        <h3>
          Sleek framing system
        </h3>

        <!-- Text -->
        <p class="text-muted mb-6 mb-md-0">
          The ultra thin, fanless, cablefree design stand at a mere 19mm
        </p>

      </div>
      <div class="col-12 col-md-4 text-center mb-8" data-aos="fade-up" data-aos-delay="50">

        <!-- Icon -->
        <div class="icon text-primary mb-3">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0)">
              <path d="M6.00098 0.502991L9.00098 1.50299L8.00098 4.00299" stroke="url(#paint0_linear)"
                stroke-linecap="round" stroke-linejoin="round" />
              <path d="M19.486 23.503L16.501 22.503L17.486 20.003" stroke="url(#paint1_linear)" stroke-linecap="round"
                stroke-linejoin="round" />
              <path d="M21 18C20.006 20.718 18.369 22.5 16.5 22.5" stroke="url(#paint2_linear)" stroke-linecap="round"
                stroke-linejoin="round" />
              <path d="M4.31836 6.493C5.28736 3.5 7.02136 1.5 9.00036 1.5" stroke="url(#paint3_linear)"
                stroke-linecap="round" stroke-linejoin="round" />
              <path
                d="M9.49979 6.48297C9.49979 6.21775 9.60515 5.9634 9.79269 5.77586C9.98022 5.58833 10.2346 5.48297 10.4998 5.48297C10.765 5.48297 11.0194 5.58833 11.2069 5.77586C11.3944 5.9634 11.4998 6.21775 11.4998 6.48297V11.237L12.4998 11.483L13.9998 6.66697C14.0719 6.44162 14.2271 6.2522 14.4339 6.1373C14.6408 6.0224 14.8836 5.99065 15.113 6.04851C15.3425 6.10637 15.5412 6.2495 15.6688 6.44875C15.7964 6.648 15.8432 6.88839 15.7998 7.12097L14.4998 11.983C15.5188 12.455 16.5798 12.759 16.3098 13.926C16.1798 14.49 15.5638 17.926 15.4608 18.503H9.34479L6.28379 13.913C5.06879 12.055 8.11979 11.413 9.50079 14.503L9.49979 6.48297Z"
                stroke="url(#paint4_linear)" stroke-linecap="round" stroke-linejoin="round" />
            </g>
            <defs>
              <linearGradient id="paint0_linear" x1="7.50098" y1="0.502991" x2="7.50098" y2="4.00299"
                gradientUnits="userSpaceOnUse">
                <stop stop-color="#335EEA" />
                <stop offset="1" stop-color="#1037B5" />
              </linearGradient>
              <linearGradient id="paint1_linear" x1="17.9935" y1="20.003" x2="17.9935" y2="23.503"
                gradientUnits="userSpaceOnUse">
                <stop stop-color="#335EEA" />
                <stop offset="1" stop-color="#1037B5" />
              </linearGradient>
              <linearGradient id="paint2_linear" x1="18.75" y1="18" x2="18.75" y2="22.5" gradientUnits="userSpaceOnUse">
                <stop stop-color="#335EEA" />
                <stop offset="1" stop-color="#1037B5" />
              </linearGradient>
              <linearGradient id="paint3_linear" x1="6.65936" y1="1.5" x2="6.65936" y2="6.493"
                gradientUnits="userSpaceOnUse">
                <stop stop-color="#335EEA" />
                <stop offset="1" stop-color="#1037B5" />
              </linearGradient>
              <linearGradient id="paint4_linear" x1="11.1782" y1="5.48297" x2="11.1782" y2="18.503"
                gradientUnits="userSpaceOnUse">
                <stop stop-color="#335EEA" />
                <stop offset="1" stop-color="#1037B5" />
              </linearGradient>
              <clipPath id="clip0">
                <rect width="24" height="24" fill="white" />
              </clipPath>
            </defs>
          </svg>

        </div>

        <!-- Heading -->
        <h3>
          IR multi-touch
        </h3>

        <!-- Text -->
        <p class="text-muted mb-6 mb-md-0">
          Supports up to 10 multi-touch points
        </p>

      </div>
      <div class="col-12 col-md-4 text-center mb-8" data-aos="fade-up" data-aos-delay="100">

        <!-- Icon -->
        <div class="icon text-primary mb-3">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0)">
              <path
                d="M6.47687 15.449C5.8617 14.4645 5.52143 13.3332 5.49143 12.1726C5.46143 11.0121 5.74279 9.8647 6.30627 8.8497C6.86975 7.83471 7.69478 6.98914 8.69563 6.40089C9.69647 5.81264 10.8366 5.50317 11.9975 5.50464C13.1584 5.50612 14.2978 5.81849 15.2971 6.40928C16.2965 7.00007 17.1194 7.84773 17.6803 8.86416C18.2411 9.88059 18.5196 11.0287 18.4866 12.1891C18.4537 13.3496 18.1105 14.48 17.4929 15.463"
                stroke="url(#paint0_linear)" stroke-linecap="round" stroke-linejoin="round" />
              <path
                d="M4.99201 18.43C3.74531 17.0728 2.92027 15.3823 2.61743 13.5645C2.31459 11.7466 2.54703 9.87996 3.28641 8.19189C4.02579 6.50382 5.2402 5.06725 6.78165 4.05723C8.32311 3.0472 10.1251 2.50732 11.968 2.50338C13.8108 2.49944 15.6151 3.0316 17.1609 4.03502C18.7066 5.03844 19.9272 6.4698 20.6738 8.15468C21.4204 9.83957 21.6608 11.7052 21.3657 13.5244C21.0707 15.3435 20.2529 17.0375 19.012 18.4"
                stroke="url(#paint1_linear)" stroke-linecap="round" stroke-linejoin="round" />
              <path
                d="M10.4861 11.5C10.4861 11.2348 10.5915 10.9804 10.779 10.7929C10.9666 10.6054 11.2209 10.5 11.4861 10.5C11.7514 10.5 12.0057 10.6054 12.1933 10.7929C12.3808 10.9804 12.4861 11.2348 12.4861 11.5V16.254L16.4061 17.424C16.7212 17.5147 16.9895 17.7228 17.1556 18.0054C17.3218 18.288 17.3731 18.6236 17.2991 18.943C17.1691 19.507 16.5541 22.943 16.4501 23.519H10.3301L7.26914 18.934C6.05414 17.076 9.10514 16.434 10.4861 19.523V11.5Z"
                stroke="url(#paint2_linear)" stroke-linecap="round" stroke-linejoin="round" />
            </g>
            <defs>
              <linearGradient id="paint0_linear" x1="11.9893" y1="5.50464" x2="11.9893" y2="15.463"
                gradientUnits="userSpaceOnUse">
                <stop stop-color="#335EEA" />
                <stop offset="1" stop-color="#1037B5" />
              </linearGradient>
              <linearGradient id="paint1_linear" x1="11.9883" y1="2.50336" x2="11.9883" y2="18.43"
                gradientUnits="userSpaceOnUse">
                <stop stop-color="#335EEA" />
                <stop offset="1" stop-color="#1037B5" />
              </linearGradient>
              <linearGradient id="paint2_linear" x1="12.1607" y1="10.5" x2="12.1607" y2="23.519"
                gradientUnits="userSpaceOnUse">
                <stop stop-color="#335EEA" />
                <stop offset="1" stop-color="#1037B5" />
              </linearGradient>
              <clipPath id="clip0">
                <rect width="24" height="24" fill="white" />
              </clipPath>
            </defs>
          </svg>

        </div>

        <!-- Heading -->
        <h3>
          Short response time
        </h3>

        <!-- Text -->
        <p class="text-muted mb-0">
          Boasts smooth gesture recognition capabilities
        </p>

      </div>
      <div class="col-12 col-md-4 text-center mb-8" data-aos="fade-up" data-aos-delay="100">

        <!-- Icon -->
        <div class="icon text-primary mb-3">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M22.5 2H1.5C0.947715 2 0.5 2.44772 0.5 3V18C0.5 18.5523 0.947715 19 1.5 19H22.5C23.0523 19 23.5 18.5523 23.5 18V3C23.5 2.44772 23.0523 2 22.5 2Z"
              stroke="url(#paint0_linear)" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M13.5 19H10.5V22H13.5V19Z" stroke="url(#paint1_linear)" stroke-linecap="round"
              stroke-linejoin="round" />
            <path d="M7 22H17" stroke="url(#paint2_linear)" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M10.5 15V7C9.17392 7 7.90215 7.52678 6.96447 8.46447C6.02678 9.40215 5.5 10.6739 5.5 12V13H10.5"
              stroke="url(#paint3_linear)" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M17.5 7L13.5 11L17.5 15" stroke="url(#paint4_linear)" stroke-linecap="round"
              stroke-linejoin="round" />
            <path d="M13.5 15V7" stroke="url(#paint5_linear)" stroke-linecap="round" stroke-linejoin="round" />
            <defs>
              <linearGradient id="paint0_linear" x1="12" y1="2" x2="12" y2="19" gradientUnits="userSpaceOnUse">
                <stop stop-color="#335EEA" />
                <stop offset="1" stop-color="#1037B5" />
              </linearGradient>
              <linearGradient id="paint1_linear" x1="12" y1="19" x2="12" y2="22" gradientUnits="userSpaceOnUse">
                <stop stop-color="#335EEA" />
                <stop offset="1" stop-color="#1037B5" />
              </linearGradient>
              <linearGradient id="paint2_linear" x1="12" y1="22" x2="12" y2="23" gradientUnits="userSpaceOnUse">
                <stop stop-color="#335EEA" />
                <stop offset="1" stop-color="#1037B5" />
              </linearGradient>
              <linearGradient id="paint3_linear" x1="8" y1="7" x2="8" y2="15" gradientUnits="userSpaceOnUse">
                <stop stop-color="#335EEA" />
                <stop offset="1" stop-color="#1037B5" />
              </linearGradient>
              <linearGradient id="paint4_linear" x1="15.5" y1="7" x2="15.5" y2="15" gradientUnits="userSpaceOnUse">
                <stop stop-color="#335EEA" />
                <stop offset="1" stop-color="#1037B5" />
              </linearGradient>
              <linearGradient id="paint5_linear" x1="14" y1="7" x2="14" y2="15" gradientUnits="userSpaceOnUse">
                <stop stop-color="#335EEA" />
                <stop offset="1" stop-color="#1037B5" />
              </linearGradient>
            </defs>
          </svg>

        </div>

        <!-- Heading -->
        <h3>
          4K
        </h3>

        <!-- Text -->
        <p class="text-muted mb-0">
          Delivers immersive viewing experience with 4K resolution
        </p>

      </div>
      <div class="col-12 col-md-4 text-center mb-8" data-aos="fade-up" data-aos-delay="100">

        <!-- Icon -->
        <div class="icon text-primary mb-3">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4.5 5.5V7.5" stroke="url(#paint0_linear)" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M19.5 16.5V18.5" stroke="url(#paint1_linear)" stroke-linecap="round" stroke-linejoin="round" />
            <path
              d="M7.5 3.5H1.5C0.947715 3.5 0.5 3.94772 0.5 4.5V8.5C0.5 9.05228 0.947715 9.5 1.5 9.5H7.5C8.05228 9.5 8.5 9.05228 8.5 8.5V4.5C8.5 3.94772 8.05228 3.5 7.5 3.5Z"
              stroke="url(#paint2_linear)" stroke-linecap="round" stroke-linejoin="round" />
            <path
              d="M2 0.5H7C7.13261 0.5 7.25979 0.552678 7.35355 0.646447C7.44732 0.740215 7.5 0.867392 7.5 1V3.5H1.5V1C1.5 0.867392 1.55268 0.740215 1.64645 0.646447C1.74021 0.552678 1.86739 0.5 2 0.5V0.5Z"
              stroke="url(#paint3_linear)" stroke-linecap="round" stroke-linejoin="round" />
            <path
              d="M16.5 20.5H22.5C23.0523 20.5 23.5 20.0523 23.5 19.5V15.5C23.5 14.9477 23.0523 14.5 22.5 14.5H16.5C15.9477 14.5 15.5 14.9477 15.5 15.5V19.5C15.5 20.0523 15.9477 20.5 16.5 20.5Z"
              stroke="url(#paint4_linear)" stroke-linecap="round" stroke-linejoin="round" />
            <path
              d="M22 23.5H17C16.8674 23.5 16.7402 23.4473 16.6464 23.3536C16.5527 23.2598 16.5 23.1326 16.5 23V20.5H22.5V23C22.5 23.1326 22.4473 23.2598 22.3536 23.3536C22.2598 23.4473 22.1326 23.5 22 23.5Z"
              stroke="url(#paint5_linear)" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M5.5 9.5H3.5V13.5H5.5V9.5Z" stroke="url(#paint6_linear)" stroke-linecap="round"
              stroke-linejoin="round" />
            <path d="M20.5 10.5H18.5V14.5H20.5V10.5Z" stroke="url(#paint7_linear)" stroke-linecap="round"
              stroke-linejoin="round" />
            <path
              d="M4.5 13.5V19.5C4.5 20.5609 4.92143 21.5783 5.67157 22.3284C6.42172 23.0786 7.43913 23.5 8.5 23.5C9.56087 23.5 10.5783 23.0786 11.3284 22.3284C12.0786 21.5783 12.5 20.5609 12.5 19.5V4C12.5 3.07174 12.8687 2.1815 13.5251 1.52513C14.1815 0.868749 15.0717 0.5 16 0.5C16.9283 0.5 17.8185 0.868749 18.4749 1.52513C19.1313 2.1815 19.5 3.07174 19.5 4V10.5"
              stroke="url(#paint8_linear)" stroke-linecap="round" stroke-linejoin="round" />
            <defs>
              <linearGradient id="paint0_linear" x1="5" y1="5.5" x2="5" y2="7.5" gradientUnits="userSpaceOnUse">
                <stop stop-color="#335EEA" />
                <stop offset="1" stop-color="#1037B5" />
              </linearGradient>
              <linearGradient id="paint1_linear" x1="20" y1="16.5" x2="20" y2="18.5" gradientUnits="userSpaceOnUse">
                <stop stop-color="#335EEA" />
                <stop offset="1" stop-color="#1037B5" />
              </linearGradient>
              <linearGradient id="paint2_linear" x1="4.5" y1="3.5" x2="4.5" y2="9.5" gradientUnits="userSpaceOnUse">
                <stop stop-color="#335EEA" />
                <stop offset="1" stop-color="#1037B5" />
              </linearGradient>
              <linearGradient id="paint3_linear" x1="4.5" y1="0.5" x2="4.5" y2="3.5" gradientUnits="userSpaceOnUse">
                <stop stop-color="#335EEA" />
                <stop offset="1" stop-color="#1037B5" />
              </linearGradient>
              <linearGradient id="paint4_linear" x1="19.5" y1="20.5" x2="19.5" y2="14.5" gradientUnits="userSpaceOnUse">
                <stop stop-color="#335EEA" />
                <stop offset="1" stop-color="#1037B5" />
              </linearGradient>
              <linearGradient id="paint5_linear" x1="19.5" y1="23.5" x2="19.5" y2="20.5" gradientUnits="userSpaceOnUse">
                <stop stop-color="#335EEA" />
                <stop offset="1" stop-color="#1037B5" />
              </linearGradient>
              <linearGradient id="paint6_linear" x1="4.5" y1="9.5" x2="4.5" y2="13.5" gradientUnits="userSpaceOnUse">
                <stop stop-color="#335EEA" />
                <stop offset="1" stop-color="#1037B5" />
              </linearGradient>
              <linearGradient id="paint7_linear" x1="19.5" y1="10.5" x2="19.5" y2="14.5" gradientUnits="userSpaceOnUse">
                <stop stop-color="#335EEA" />
                <stop offset="1" stop-color="#1037B5" />
              </linearGradient>
              <linearGradient id="paint8_linear" x1="12" y1="0.5" x2="12" y2="23.5" gradientUnits="userSpaceOnUse">
                <stop stop-color="#335EEA" />
                <stop offset="1" stop-color="#1037B5" />
              </linearGradient>
            </defs>
          </svg>


        </div>

        <!-- Heading -->
        <h3>
          HDMI, VGA, AV, & more
        </h3>

        <!-- Text -->
        <p class="text-muted mb-0">
          Supports multiple image signal input
        </p>

      </div>
      <div class="col-12 col-md-4 text-center mb-8" data-aos="fade-up" data-aos-delay="100">

        <!-- Icon -->
        <div class="icon text-primary mb-3">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M3.5 4.5H1.5C1.23478 4.5 0.98043 4.60536 0.792893 4.79289C0.605357 4.98043 0.5 5.23478 0.5 5.5V22.5C0.5 22.7652 0.605357 23.0196 0.792893 23.2071C0.98043 23.3946 1.23478 23.5 1.5 23.5H18.5C18.7652 23.5 19.0196 23.3946 19.2071 23.2071C19.3946 23.0196 19.5 22.7652 19.5 22.5V20.5"
              stroke="url(#paint0_linear)" stroke-linecap="round" stroke-linejoin="round" />
            <path
              d="M23.5 1.5C23.5 1.23478 23.3946 0.98043 23.2071 0.792893C23.0196 0.605357 22.7652 0.5 22.5 0.5H4.5C4.23478 0.5 3.98043 0.605357 3.79289 0.792893C3.60536 0.98043 3.5 1.23478 3.5 1.5V19.5C3.5 19.7652 3.60536 20.0196 3.79289 20.2071C3.98043 20.3946 4.23478 20.5 4.5 20.5H22.5C22.7652 20.5 23.0196 20.3946 23.2071 20.2071C23.3946 20.0196 23.5 19.7652 23.5 19.5V1.5Z"
              stroke="url(#paint1_linear)" stroke-linecap="round" stroke-linejoin="round" />
            <path
              d="M11.3 14.272C11.2179 14.3171 11.1254 14.3401 11.0317 14.3387C10.938 14.3372 10.8463 14.3114 10.7656 14.2638C10.6849 14.2162 10.618 14.1484 10.5714 14.0671C10.5248 13.9857 10.5002 13.8937 10.5 13.8V7.036C10.5002 6.94162 10.5252 6.84895 10.5724 6.76723C10.6196 6.68551 10.6875 6.61759 10.7691 6.57024C10.8507 6.5229 10.9434 6.49777 11.0377 6.49738C11.1321 6.49699 11.225 6.52134 11.307 6.568L17.229 9.952C17.3115 9.99914 17.3801 10.0673 17.4278 10.1495C17.4755 10.2316 17.5006 10.325 17.5006 10.42C17.5006 10.515 17.4755 10.6084 17.4278 10.6906C17.3801 10.7727 17.3115 10.8409 17.229 10.888L11.3 14.272Z"
              stroke="url(#paint2_linear)" stroke-linecap="round" stroke-linejoin="round" />
            <defs>
              <linearGradient id="paint0_linear" x1="10" y1="4.5" x2="10" y2="23.5" gradientUnits="userSpaceOnUse">
                <stop stop-color="#335EEA" />
                <stop offset="1" stop-color="#1037B5" />
              </linearGradient>
              <linearGradient id="paint1_linear" x1="13.5" y1="0.5" x2="13.5" y2="20.5" gradientUnits="userSpaceOnUse">
                <stop stop-color="#335EEA" />
                <stop offset="1" stop-color="#1037B5" />
              </linearGradient>
              <linearGradient id="paint2_linear" x1="14.0003" y1="6.49738" x2="14.0003" y2="14.3387"
                gradientUnits="userSpaceOnUse">
                <stop stop-color="#335EEA" />
                <stop offset="1" stop-color="#1037B5" />
              </linearGradient>
            </defs>
          </svg>

        </div>

        <!-- Heading -->
        <h3>
          Smart identification
        </h3>

        <!-- Text -->
        <p class="text-muted mb-0">
          Automatically identify the signal source and switch to that channel
        </p>

      </div>
      <div class="col-12 col-md-4 text-center" data-aos="fade-up" data-aos-delay="100">

        <!-- Icon -->
        <div class="icon text-primary mb-3">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M23.5 19.5C23.5 19.7652 23.3946 20.0196 23.2071 20.2071C23.0196 20.3946 22.7652 20.5 22.5 20.5H1.5C1.23478 20.5 0.98043 20.3946 0.792893 20.2071C0.605357 20.0196 0.5 19.7652 0.5 19.5V7.5C0.5 7.23478 0.605357 6.98043 0.792893 6.79289C0.98043 6.60536 1.23478 6.5 1.5 6.5H22.5C22.7652 6.5 23.0196 6.60536 23.2071 6.79289C23.3946 6.98043 23.5 7.23478 23.5 7.5V19.5Z"
              stroke="url(#paint0_linear)" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M7 23.5H17" stroke="url(#paint1_linear)" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M10.5 20.5V23.5" stroke="url(#paint2_linear)" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M13.5 20.5V23.5" stroke="url(#paint3_linear)" stroke-linecap="round" stroke-linejoin="round" />
            <path
              d="M16.7141 1.92902C15.3185 0.997313 13.6782 0.500061 12.0001 0.500061C10.3221 0.500061 8.68172 0.997313 7.28613 1.92902"
              stroke="url(#paint4_linear)" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M15 4.23402C14.0735 3.75198 13.0444 3.50031 12 3.50031C10.9556 3.50031 9.92653 3.75198 9 4.23402"
              stroke="url(#paint5_linear)" stroke-linecap="round" stroke-linejoin="round" />
            <defs>
              <linearGradient id="paint0_linear" x1="12" y1="6.5" x2="12" y2="20.5" gradientUnits="userSpaceOnUse">
                <stop stop-color="#335EEA" />
                <stop offset="1" stop-color="#1037B5" />
              </linearGradient>
              <linearGradient id="paint1_linear" x1="12" y1="23.5" x2="12" y2="24.5" gradientUnits="userSpaceOnUse">
                <stop stop-color="#335EEA" />
                <stop offset="1" stop-color="#1037B5" />
              </linearGradient>
              <linearGradient id="paint2_linear" x1="11" y1="20.5" x2="11" y2="23.5" gradientUnits="userSpaceOnUse">
                <stop stop-color="#335EEA" />
                <stop offset="1" stop-color="#1037B5" />
              </linearGradient>
              <linearGradient id="paint3_linear" x1="14" y1="20.5" x2="14" y2="23.5" gradientUnits="userSpaceOnUse">
                <stop stop-color="#335EEA" />
                <stop offset="1" stop-color="#1037B5" />
              </linearGradient>
              <linearGradient id="paint4_linear" x1="12.0001" y1="0.500061" x2="12.0001" y2="1.92902"
                gradientUnits="userSpaceOnUse">
                <stop stop-color="#335EEA" />
                <stop offset="1" stop-color="#1037B5" />
              </linearGradient>
              <linearGradient id="paint5_linear" x1="12" y1="3.50031" x2="12" y2="4.23402"
                gradientUnits="userSpaceOnUse">
                <stop stop-color="#335EEA" />
                <stop offset="1" stop-color="#1037B5" />
              </linearGradient>
            </defs>
          </svg>


        </div>

        <!-- Heading -->
        <h3>
          Stay Connected
        </h3>

        <!-- Text -->
        <p class="text-muted mb-0">
          Support 2.4G/5G WIFI, LAN internet access.
        </p>

      </div>
      <div class="col-12 col-md-4 text-center" data-aos="fade-up" data-aos-delay="100">

        <!-- Icon -->
        <div class="icon text-primary mb-3">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M16.0004 22L12.9404 17.408C11.7254 15.553 14.7294 14.928 16.1104 18.02V10C16.1104 9.73478 16.2157 9.48043 16.4033 9.29289C16.5908 9.10536 16.8452 9 17.1104 9C17.3756 9 17.63 9.10536 17.8175 9.29289C18.005 9.48043 18.1104 9.73478 18.1104 10V14.754L22.0734 15.9C22.3887 15.9913 22.6571 16.1999 22.8234 16.483C22.9897 16.7661 23.0412 17.1021 22.9674 17.422L22.8824 17.789L22.1174 22"
              stroke="url(#paint0_linear)" stroke-linecap="round" stroke-linejoin="round" />
            <path
              d="M11.0996 17H2.59961C2.20178 17 1.82025 16.842 1.53895 16.5607C1.25764 16.2794 1.09961 15.8978 1.09961 15.5V3.5C1.09961 3.10218 1.25764 2.72064 1.53895 2.43934C1.82025 2.15804 2.20178 2 2.59961 2H20.5996C20.9974 2 21.379 2.15804 21.6603 2.43934C21.9416 2.72064 22.0996 3.10218 22.0996 3.5V14"
              stroke="url(#paint1_linear)" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M6.59668 20H11.5967" stroke="url(#paint2_linear)" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M10.0967 17V20" stroke="url(#paint3_linear)" stroke-linecap="round" stroke-linejoin="round" />
            <defs>
              <linearGradient id="paint0_linear" x1="17.8287" y1="9" x2="17.8287" y2="22"
                gradientUnits="userSpaceOnUse">
                <stop stop-color="#335EEA" />
                <stop offset="1" stop-color="#1037B5" />
              </linearGradient>
              <linearGradient id="paint1_linear" x1="11.5996" y1="2" x2="11.5996" y2="17"
                gradientUnits="userSpaceOnUse">
                <stop stop-color="#335EEA" />
                <stop offset="1" stop-color="#1037B5" />
              </linearGradient>
              <linearGradient id="paint2_linear" x1="9.09668" y1="20" x2="9.09668" y2="21"
                gradientUnits="userSpaceOnUse">
                <stop stop-color="#335EEA" />
                <stop offset="1" stop-color="#1037B5" />
              </linearGradient>
              <linearGradient id="paint3_linear" x1="10.5967" y1="17" x2="10.5967" y2="20"
                gradientUnits="userSpaceOnUse">
                <stop stop-color="#335EEA" />
                <stop offset="1" stop-color="#1037B5" />
              </linearGradient>
            </defs>
          </svg>


        </div>

        <!-- Heading -->
        <h3>
          One-button access
        </h3>

        <!-- Text -->
        <p class="text-muted mb-0">
          A whiteboard to streaming a video to surfing the internet- all in a tap.
        </p>

      </div>
      <div class="col-12 col-md-4 text-center" data-aos="fade-up" data-aos-delay="100">

        <!-- Icon -->
        <div class="icon text-primary mb-3">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M6.48664 13.453C5.87147 12.4685 5.5312 11.3372 5.50119 10.1766C5.47119 9.01612 5.75255 7.86873 6.31603 6.85373C6.87951 5.83873 7.70455 4.99317 8.70539 4.40492C9.70624 3.81667 10.8464 3.5072 12.0073 3.50867C13.1682 3.51015 14.3075 3.82251 15.3069 4.41331C16.3062 5.0041 17.1291 5.85176 17.69 6.86819C18.2509 7.88461 18.5294 9.03271 18.4964 10.1932C18.4635 11.3536 18.1203 12.4841 17.5026 13.467"
              stroke="url(#paint0_linear)" stroke-linecap="round" stroke-linejoin="round" />
            <path
              d="M10.4999 9.50806C10.4999 9.24284 10.6052 8.98849 10.7928 8.80095C10.9803 8.61341 11.2347 8.50806 11.4999 8.50806C11.7651 8.50806 12.0195 8.61341 12.207 8.80095C12.3945 8.98849 12.4999 9.24284 12.4999 9.50806V14.2621L16.4189 15.4311C16.7341 15.5219 17.0024 15.7302 17.1687 16.0129C17.335 16.2957 17.3866 16.6314 17.3129 16.9511C17.3129 16.9511 16.5669 20.9511 16.4629 21.5271H10.3399L7.27989 16.9371C6.06489 15.0801 9.11589 14.4371 10.4969 17.5271L10.4999 9.50806Z"
              stroke="url(#paint1_linear)" stroke-linecap="round" stroke-linejoin="round" />
            <defs>
              <linearGradient id="paint0_linear" x1="11.999" y1="3.50867" x2="11.999" y2="13.467"
                gradientUnits="userSpaceOnUse">
                <stop stop-color="#335EEA" />
                <stop offset="1" stop-color="#1037B5" />
              </linearGradient>
              <linearGradient id="paint1_linear" x1="12.1729" y1="8.50806" x2="12.1729" y2="21.5271"
                gradientUnits="userSpaceOnUse">
                <stop stop-color="#335EEA" />
                <stop offset="1" stop-color="#1037B5" />
              </linearGradient>
            </defs>
          </svg>

        </div>

        <!-- Heading -->
        <h3>
          Touch screen technology
        </h3>

        <!-- Text -->
        <p class="text-muted mb-0">
          Compatible with a finger, wet hand, gloved finger, stylus, or pen
        </p>

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

<section class="pt-9 pt-md-9 pb-10 pb-md-12 bg-gray-200">
  <div class="container">
    <div class="row align-items-center mb-8 mb-sm-12">
      <div class="col-12 col-md-6 order-md-1">

        <!-- Image -->
        <img src="<?php bloginfo('template_directory');?>/assets/img/product/wayfinding-applications.png" alt="..."
          class="img-fluid mb-6 mb-md-0">

      </div>
      <div class="col-12 col-md-6 order-md-2">

        <!-- Heading -->
        <h2>
          Wayfinding Applications
        </h2>

        <!-- Text -->
        <p class="font-size-lg text-gray-700 mb-6 mb-md-6">
          From printed maps to digital yet static maps on monitors to interactive touch screens, indoor wayfinding has evolved over the decades. Deliver seamless image experiences and keep it super easy to navigate your campus with Viwify E series interactive displays.
        </p>

      </div>
    </div> <!-- / .row -->
    <div class="row align-items-center mb-8 mb-sm-12">
      <div class="col-12 col-md-6 order-md-2">

        <!-- Image -->
        <img src="<?php bloginfo('template_directory');?>/assets/img/product/interactive-directories.png" alt="..."
          class="img-fluid mb-6 mb-md-0">

      </div>
      <div class="col-12 col-md-6 order-md-1">

        <!-- Heading -->
        <h2>
          Interactive Directories
        </h2>

        <!-- Text -->
        <p class="font-size-lg text-gray-700 mb-6 mb-md-6">
          Guide & direct your guests, patients, students, or visitors to their desired locations with Viwify E series interactive displays. Transform the way your customers communicate with you & create a positive, engaging experience for them, hasslefree.
        </p>

      </div>
    </div> <!-- / .row -->
    <div class="row align-items-center mb-8 mb-sm-12">
      <div class="col-12 col-md-6 order-md-1">

        <!-- Image -->
        <img src="<?php bloginfo('template_directory');?>/assets/img/product/video-conferencing.png" alt="..."
          class="img-fluid mb-6 mb-md-0">

      </div>
      <div class="col-12 col-md-6 order-md-2">

        <!-- Heading -->
        <h2>
          Video Conferencing
        </h2>

        <!-- Text -->
        <p class="font-size-lg text-gray-700 mb-6 mb-md-6">
          Empower your team to collaborate & enhance professional efficacy with Viwify E series interactive displays- the smarter solution for your business. Grab incredible business advantages & foster creativity with seamless video conferencing capabilities.
        </p>

      </div>
    </div> <!-- / .row -->
    <div class="row align-items-center">
      <div class="col-12 col-md-6 order-md-2">

        <!-- Image -->
        <img src="<?php bloginfo('template_directory');?>/assets/img/product/collaborative-classroom.png" alt="..."
          class="img-fluid mb-6 mb-md-0">

      </div>
      <div class="col-12 col-md-6 order-md-1">

        <!-- Heading -->
        <h2>
          Collaborative Classrooms
        </h2>

        <!-- Text -->
        <p class="font-size-lg text-gray-700 mb-6 mb-md-6">
          Interactive displays captivate & boost student engagement. Support active learning & offer much more learning opportunities to your students- from kinesthetic learners to auditory & visual learners to early learners & advanced learners.
        </p>

      </div>
    </div> <!-- / .row -->
  </div> <!-- / .container -->
</section>
<?php get_footer(); ?>