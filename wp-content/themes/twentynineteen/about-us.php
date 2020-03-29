<?php
/*
Template Name: About Us
*/
?>
<?php get_header(); ?>

<!-- WELCOME
    ================================================== -->
<section class="py-10 py-md-11">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-10 text-center">

        <!-- Headin -->
        <h1 class="display-3">
          Showcasing Your Messages Better
        </h1>

        <!-- Text -->
        <p class="lead text-muted mb-7 mb-md-9">
          Viwify Digital Display Solutions helps you put across your message with clarity, & elevate your infrastructure, effortlessly
        </p>

      </div>
    </div> <!-- / .row -->
    <div class="row">
      <div class="col-12">

        <!-- Image -->
        <div class="form-row">
          <div class="col-4">

            <img src="<?php bloginfo('template_directory');?>/assets/img/about-us/about-us-5.png" class="img-fluid rounded shadow-lg" alt="...">

          </div>
          <div class="col-3">

            <img src="<?php bloginfo('template_directory');?>/assets/img/about-us/about-us-1.png" class="img-fluid rounded shadow-lg mb-4" alt="...">

            <img src="<?php bloginfo('template_directory');?>/assets/img/about-us/about-us-4.png" class="img-fluid rounded shadow-lg mt-1" alt="...">

          </div>
          <div class="col-5">

            <div class="form-row mb-4">
              <div class="col-5">

                <img src="<?php bloginfo('template_directory');?>/assets/img/about-us/about-us-2.png" class="img-fluid rounded shadow-lg" alt="...">

              </div>
              <div class="col-7">

                <img src="<?php bloginfo('template_directory');?>/assets/img/about-us/about-us-6.png" class="img-fluid rounded shadow-lg" alt="...">

              </div>
            </div> <!-- / .row -->

            <img src="<?php bloginfo('template_directory');?>/assets/img/about-us/about-us-3.png" class="img-fluid rounded shadow-lg mt-1" alt="...">

          </div>
        </div>

      </div>
    </div> <!-- / .row -->
  </div> <!-- / .container -->
</section>

<!-- SCALABLE==================================================-->
<section class="pb-10 pb-md-12">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-md-6 order-md-1">

        <!-- Image -->
        <img src="<?php bloginfo('template_directory');?>/assets/img/about-us-inspire.png" alt="..."
          class="img-fluid mb-6 mb-md-0">

      </div>
      <div class="col-12 col-md-6 order-md-2">

        <!-- Heading -->
        <h2>
          Engage & inspire a bigger crowd with Viwify
        </h2>

        <!-- Text -->
        <p class="font-size-lg text-gray-700 mb-6 mb-md-6">
        The ever-changing world of communication demands more than playing an educational video or broken teleconferences to keep your business future-ready. With Viwify, say bye-bye to stubborn paper charts & messy whiteboards. Purpose-built with industry-best features, our next-gen screens are designed to let your classrooms adopt active learning & to transform your workspaces collaborative. 
        The growing stack of research papers promises:
        </p>

        <!-- List -->
        <div class="row font-size-sm">
          <div class="col-12 col-lg-6">

            <!-- Item -->
            <div class="d-flex">

              <!-- Check -->
              <div class="badge badge-rounded-circle badge-primary-soft mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>

              <!-- Text -->
              <p>
                94% more productivity
              </p>

            </div>
            <div class="d-flex">

              <!-- Check -->
              <div class="badge badge-rounded-circle badge-primary-soft mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>

              <!-- Text -->
              <p>
                Better brand-positioning
              </p>

            </div>

            <!-- Item -->
            <div class="d-flex">

              <!-- Check -->
              <div class="badge badge-rounded-circle badge-primary-soft mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>

              <p class="mb-lg-0">
                87% less employee-transit
              </p>

            </div>

          </div>
          <div class="col-12 col-lg-6">

          <div class="d-flex">

              <!-- Check -->
              <div class="badge badge-rounded-circle badge-primary-soft mt-1 mr-4">
                <i class="fe fe-check"></i>
              </div>

              <!-- Text -->
              <p>
                Better professional efficacy
              </p>

            </div>
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
                More repeat-sales
              </p>

            </div>

          </div>
        </div> <!-- / .row -->

      </div>
    </div> <!-- / .row -->
  </div> <!-- / .container -->
</section>
<section class="py-10 py-md-11">
<div class="container">
  <form name="about-us-form" method="post" onsubmit="return validateContactForm()">
      <div class="form-group row">
          <div class="col input-row">
            <input type="text" class="form-control input-field" placeholder="First Name" name="firstName" id="firstName" />
            <span id="firstName-info" class="info"></span>
          </div>
          <div class="col input-row">
            <input type="text" class="form-control input-field" placeholder="Last Name" name="lastName" id="lastName" />
            <span id="lastName-info" class="info"></span>
          </div>
        </div>
        <div class="form-group row">
          <div class="col input-row">
            <input type="text" class="form-control input-field" placeholder="Company" name="company" id="company" />
            <span id="company-info" class="info"></span>
          </div>
          <div class="col input-row">
            <input type="text" class="form-control input-field" placeholder="Email" name="email" id="email" />
            <span id="email-info" class="info"></span>
          </div>
        </div>
        <div class="form-group row">
          <div class="col input-row">
            <input type="number" class="form-control input-field" placeholder="Mobile" name="mobile" id="mobile" />
            <span id="mobile-info" class="info"></span>
          </div>
          <div class="col input-row">
            <input type="text" class="form-control input-field" placeholder="Subject" name="subject" id="subject" />
            <span id="subject-info" class="info"></span>
          </div>
        </div>
        <div class="form-group row">
          <div class="col input-row">
            <textarea class="form-control" id="message" rows="4" placeholder="Message"></textarea>
            <span id="message-info" class="info"></span>
          </div>
        </div>
        <div class="col input-row">
          <button type="submit" class="btn btn-primary mb-2" name="send">Get in touch</button>

            <div id="statusMessage"> 
              <?php
              if (! empty($message)) {
                  ?>
                  <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
              <?php
              }
              ?>
            </div>
        </div>
  </form>
</div>
</section>

<script type="text/javascript">
function validateContactForm() {
    var valid = true;

    $(".info").html("");
    $(".input-field").css('border', '#e0dfdf 1px solid');
    var firstName = $("#firstName").val();
    var lastName = $("#lastName").val();
    var company = $("#company").val() || null;
    var email = $("#email").val();
    var mobile = $("#mobile").val() || null;
    var subject = $("#subject").val() || null;
    var message = $("#message").val();
    
    if (firstName == "") {
        $("#firstName-info").html("Required.");
        $("#firstName").css('border', '#e66262 1px solid');
        valid = false;
    }
    if (lastName == "") {
        $("#lastName-info").html("Required.");
        $("#lastName").css('border', '#e66262 1px solid');
        valid = false;
    }
    if (!email.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
        $("#email-info").html("Invalid Email Address.");
        $("#email").css('border', '#e66262 1px solid');
        valid = false;
    }
    if (message == "") {
        $("#message-info").html("Required.");
        $("#message").css('border', '#e66262 1px solid');
        valid = false;
    }
    if(valid){
      //ajax
      $.ajax({
        type:"post",
        url:"<?php bloginfo('template_directory');?>/admin/contact.php",
        data: 
        {  
          firstName :firstName,
          lastName: lastName,
          company: company,
          email: email,
          mobile: mobile,
          subject: subject,
          message: message
        },
        cache:false,
        success: function (html) 
        {
          console.log('Inserted into db:', $.parseJSON(html));
          $('#msg').html(html);
        },
        error : function(err) 
        {
          console.log('Error:',err);
        }
        });
        $("#firstName").val('');
        $("#lastName").val('');
        $("#company").val('');
        $("#email").val('');
        $("#mobile").val('');
        $("#subject").val('');
        $("#message").val('');
    } 
    return false;
}
</script>

<?php get_footer(); ?>