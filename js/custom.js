AOS.init({
  once: true
})

// banner-slider start
$(document).ready(function () {
  $('.experience-slider').slick({
    dots: true,
    // speed: 5000,
    // cssEase: "linear",
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      { breakpoint: 1000, settings: { slidesToShow: 3 } },
      { breakpoint: 557, settings: { slidesToShow: 2 } },
      { breakpoint: 480, settings: { slidesToShow: 1 } }
    ]
  });
});

// banner-slider end



// counter js start **********************************************************************
jQuery(document).ready(function ($) {
  function startCounter() {
    var hT = $('.counter-sec').offset().top,
      hH = $('.counter-sec').outerHeight(),
      wH = $(window).height();
    if ($(window).scrollTop() > hT + hH - wH) {
      $(window).off("scroll", startCounter);
      $('.count').each(function () {
        var $this = $(this);
        var target = $this.find('span').data('target');
        $({ Counter: 0 }).animate({ Counter: target }, {
          duration: 2000,
          easing: 'swing',
          step: function (now) {
            $this.find('span').text(Math.ceil(now));
          }
        });
      });
    }
  }
  $(window).scroll(startCounter);
  startCounter();
});


// counter js end**********************************************************************





