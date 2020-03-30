<div class="vw-book-demo--wrapper">
  <form class="vw-book-demo d-flex" id="bookDemo" method="POST" onsubmit="return submitEmail()">
    <input type="email" name="email" id="demo-email" placeholder="Email Address" required />
    <button type="submit">Book a Demo</button>
  </form>
  <p class="vw--14 vw--light">A personalized consultation with our product expert</p>
</div>

<script type="text/javascript">
  function submitEmail() {
    $('.vw-book-demo button').html('Booking...');
    var email = $('.vw-book-demo').find('input[name="email"]').val();
    if (!email) { // form2
      email = $('.vw-cta--wrapper .vw-book-demo').find('input[name="email"]').val();
    }
    $.ajax({
      type: "post",
      url: "<?php bloginfo('template_directory');?>/admin/submit-email.php",
      data: {
        'email': email,
      },
      cache: false,
      success: function (html) {
        console.log('Inserted into DB:', $.parseJSON(html));
        $('.vw-book-demo button').html('Success!');
        setTimeout(() => {
          $('form').trigger('reset');
          $('.vw-book-demo button').html('Book a Demo!');
        }, 1000);
      },
      error: function (err) {
        console.log('Error:', err);
      }
    });
    return false;
  }
</script>