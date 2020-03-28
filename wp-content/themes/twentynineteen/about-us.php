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
        <form name="frmContact" method="post"
            enctype="multipart/form-data"
            onsubmit="return validateContactForm()">

            <div class="input-row">
                <label style="padding-top: 20px;">Name</label> <span
                    id="userName-info" class="info"></span><br /> <input
                    type="text" class="input-field" name="userName"
                    id="userName" />
            </div>
            <div class="input-row">
                <label>Email</label> <span id="userEmail-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="userEmail" id="userEmail" />
            </div>
            <div class="input-row">
                <label>Subject</label> <span id="subject-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="subject" id="subject" />
            </div>
            <div class="input-row">
                <label>Message</label> <span id="userMessage-info"
                    class="info"></span><br />
                <textarea name="content" id="content"
                    class="input-field" cols="60" rows="6"></textarea>
            </div>
            <div>
                <input type="submit" name="send" class="btn-submit"
                    value="Send" />

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
    var userName = $("#userName").val();
    var userEmail = $("#userEmail").val();
    var subject = $("#subject").val();
    var content = $("#content").val();
    
    if (userName == "") {
        $("#userName-info").html("Required.");
        $("#userName").css('border', '#e66262 1px solid');
        valid = false;
    }
    if (userEmail == "") {
        $("#userEmail-info").html("Required.");
        $("#userEmail").css('border', '#e66262 1px solid');
        valid = false;
    }
    if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
    {
        $("#userEmail-info").html("Invalid Email Address.");
        $("#userEmail").css('border', '#e66262 1px solid');
        valid = false;
    }

    if (subject == "") {
        $("#subject-info").html("Required.");
        $("#subject").css('border', '#e66262 1px solid');
        valid = false;
    }
    if (content == "") {
        $("#userMessage-info").html("Required.");
        $("#content").css('border', '#e66262 1px solid');
        valid = false;
    }
    if(valid){
      //ajax
      $.ajax({
        type:"post",
        url:"<?php bloginfo('template_directory');?>/admin/contact.php",
        data: 
        {  
          userName :userName,
          userEmail:userEmail,
          subject: subject,
          content: content
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
      document.getElementById("userName").value = '';
      document.getElementById("userEmail").value = '';
      document.getElementById("subject").value = '';
      document.getElementById("content").value = '';
    } 
    return false;
}
</script>

<?php get_footer(); ?>