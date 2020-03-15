if($('.navbar').length) {
  var menu = $('.navbar');
  var origOffsetY = menu.offset().top;

  function scroll() {
      if ($(window).scrollTop() > origOffsetY) {
          $('.navbar').addClass('navbar-fixed');
      } else {
          $('.navbar').removeClass('navbar-fixed');
      }
  }
  document.onscroll = scroll;
}