AOS.init({
  once: true,
});

// banner-slider start
$(document).ready(function () {
  $(".experience-slider").slick({
    dots: true,
    // speed: 5000,
    // cssEase: "linear",
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      { breakpoint: 1000, settings: { slidesToShow: 3 } },
      { breakpoint: 557, settings: { slidesToShow: 2 } },
      { breakpoint: 480, settings: { slidesToShow: 1,dots:'false' } },
    ],
  });
});

// banner-slider end

// counter js start **********************************************************************
jQuery(document).ready(function ($) {
  function startCounter() {
    var hT = $(".counter-sec").offset().top,
      hH = $(".counter-sec").outerHeight(),
      wH = $(window).height();
    if ($(window).scrollTop() > hT + hH - wH) {
      $(window).off("scroll", startCounter);
      $(".count").each(function () {
        var $this = $(this);
        var target = $this.find("span").data("target");
        $({ Counter: 0 }).animate(
          { Counter: target },
          {
            duration: 2000,
            easing: "swing",
            step: function (now) {
              $this.find("span").text(Math.ceil(now));
            },
          }
        );
      });
    }
  }
  $(window).scroll(startCounter);
  startCounter();
});

// counter js end**********************************************************************

// // Set up formatting for Credit Card fields
$("#credit .cc-number").formatCardNumber();
$("#credit .cc-expires").formatCardExpiry();
$("#credit .cc-cvc").formatCardCVC();

// login and register tabs js start

$(document).ready(function() {
  const loginBtn = $('#login-btn');
  const registerBtn = $('#register-btn');
  const loginTab = $('#pills-login-tab');
  const registerTab = $('#pills-register-tab');
  const loginPane = $('#pills-login');
  const registerPane = $('#pills-register');

  function showTab(tab) {
    if (tab === 'login') {
      loginTab.addClass('active ');
      registerTab.removeClass('active');
      loginPane.addClass('active show');
      // registerPane.removeClass('active');
    } else {
      loginTab.removeClass('active');
      loginPane.removeClass('active');
      registerTab.addClass('active');
      registerPane.addClass('active show');
    }
  }

  function setTabFromLocalStorage() {
    const tab = localStorage.getItem('activeTab');
    if (tab) {
      showTab(tab);
    } else {
      showTab('login');
    }
  }

  loginBtn.on('click', function() {
    localStorage.setItem('activeTab', 'login');
  });

  registerBtn.on('click', function() {
    localStorage.setItem('activeTab', 'register');
  });

  setTabFromLocalStorage();
});



// login and register tabs js end

$(document).ready(function() {
  const placeorder = $('.your-order .btn1');
  const cashappbtn = $('.your-order .cash-app-btn');
  const collapseOne = $('.your-order #headingOne button');
  const collapseTwo = $('.your-order #headingTwo button');

  collapseOne.on('click', function() {
    if (!collapseOne.hasClass('collapsed')) {
      placeorder.show();
      cashappbtn.hide();
    }
  });

  collapseTwo.on('click', function() {
    if (!collapseTwo.hasClass('collapsed')) {
      placeorder.hide();
      cashappbtn.show();
    }
  });

  // Initial setup to show/hide based on the collapsed class
  if (!collapseOne.hasClass('collapsed')) {
    placeorder.show();
    cashappbtn.hide();
  } else if (!collapseTwo.hasClass('collapsed')) {
    placeorder.hide();
    cashappbtn.show();
  }
});
