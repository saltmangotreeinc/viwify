<div class="vw-book-demo--wrapper">
  <form class="vw-book-demo d-flex" method="POST" onsubmit="return submitEmail()">
    <input type="email" name="email" id="demo-email" placeholder="Email Address" required/>
    <button type="submit" data-loading-text="Booking...">Book a Demo</button>
  </form>
  <p class="vw--14 vw--light">A personalized consultation with our product expert</p>
</div>

<script type="text/javascript">
    function submitEmail(){
      var email=document.getElementById('demo-email').value;
      $.ajax({
        type:"post",
        url:"<?php bloginfo('template_directory');?>/admin/submit-email.php",
        data: 
        {  
          'email' :email,
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
      document.getElementById('demo-email').value = '';
      return false;
     }
</script>