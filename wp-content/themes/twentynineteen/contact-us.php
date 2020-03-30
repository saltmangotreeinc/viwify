<?php
/*
Template Name: Contact Us
*/
?>
<?php get_header(); ?>
<br /><br /><br /><br /><br /><br />

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
      <center><button type="submit" class="btn btn-primary" name="send">Get in touch</button></center>

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

<br /><br /><br /><br /><br />
<script type="text/javascript">
  function () {
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
    if (valid) {
      //ajax
      $.ajax({
        type: "post",
        url: "<?php bloginfo('template_directory');?>/admin/contact.php",
        data: {
          firstName: firstName,
          lastName: lastName,
          company: company,
          email: email,
          mobile: mobile,
          subject: subject,
          message: message
        },
        cache: false,
        success: function (html) {
          console.log('Inserted into db:', $.parseJSON(html));
          $('#msg').html(html);
        },
        error: function (err) {
          console.log('Error:', err);
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