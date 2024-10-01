

$(document).ready(function(){
    var winWidth = $(window).width();
    if(winWidth > 1500){
        $('.ti-widget-container.ti-col-4').removeClass('ti-col-4');
        $('.ti-widget-container').addClass('ti-col-3');
    }
    
    $('.ti-review-item').css('position', 'static');
})
$(window).on("load", function(){
    var winWidth = $(window).width();
    if(winWidth > 1500){
        setTimeout(function(){
        $('.ti-widget-container.ti-col-4').removeClass('ti-col-4');
        $('.ti-widget-container').addClass('ti-col-3');
        }, 1000)
    }
    $('.ti-review-item').css('position', 'static');
})
$(window).on("resize", function(){
    $('.ti-review-item').css('position', 'static');
})


//video Play and Pause button


// get video element id
var vidClip = document.getElementById("myVideo");

// play video event
function playVid() {
  myVideo.play();
}

// pause video event
function pauseVid() {
  myVideo.pause();
}
$(document).ready(function () {
  // toggle button class on click
  $('button').on('click', function () {
    $('.first,.second').toggle();
  });

  // toggle button class when finished
  vidClip.onended = function (e) {
    $('.first,.second').toggle();
  };
});

$(document).ready(function ($) {

  $(".inderies-card:first-child").addClass("card-active");
  $(".inderies-card").click(function () {

    var activeCard = $(".inderies-card.card-active");
   
    // If the clicked card is not already active
    if (!$(this).hasClass("card-active")) {
      // Slide the currently active card to 20% width
      activeCard.animate({ flex: '0 0 9%' }, 400, function () {
        activeCard.removeClass("card-active");
        
      });

      // Slide the clicked card to 100% width
      $(this).animate({ flex: '0 0 64%' }, 400, function () {
        $(this).addClass("card-active");
      });
    }
  });

});


    $(document).ready(function () {
    if ($(window).width() < 992) {
    $('.down-arrow').click(function(){
        $(this).siblings('ul.sub-menu').slideToggle().parent().siblings().children('ul.sub-menu').slideUp();
        $(this).toggleClass('active-arrow').parent().siblings().children('ul.nav-menu li>span').removeClass('active-arrow');
    });
    }
});

/*------ HAMBURGER ------*/
$(document).ready(function () {
  $(".hamburger").click(function () {
    $(this).toggleClass("is-active");
    $('.menusflex').toggleClass('active');
    $('.menusflex>span').toggleClass('span-height');
    $('.inner-header').toggleClass('scroll-nav');
    $('body').toggleClass('active');
    $('#header').toggleClass('bgg-clr');
    $('.logo').toggleClass('logo-invert');
  
  });
 
});


// for adding arrows in sub-menu menu
$(document).ready(function(){
	$('ul#menu-header-menu > .menu-item-has-children').append('<span class="down-arrow"><img src="https://i.ibb.co/CKZ2d7k/Vector.png"></span>');
  $('ul.sub-menu > .menu-item-has-children').append('<span class="right-arrow"><img src="https://i.ibb.co/VNMFVn4/icons8-down-1.png"></span>');
});

// for adding class in the inner sub-menu menu
$(document).ready(function(){
  $('ul.nav-menu ul.sub-menu ul').addClass('in-sub-menu');
  $('ul.nav-menu ul.sub-menu ul').removeClass('sub-menu');
});

/*------ MENU Fixed ------*/
function updateStyles() {
  var $scroll = $(window).scrollTop();
  var $navbar = $(".navbar");
  var $header = $(".inner-header");

  if ($scroll > 60) {
    $navbar.addClass("scroll-nav");
    $header.addClass("scroll-nav");
    $('.top-header').addClass('top-header-animate');

  } else {
    $navbar.removeClass("scroll-nav");
    $header.removeClass("scroll-nav");
    $('.top-header').removeClass('top-header-animate');

  }
}

// Call the function on scroll
$(window).on("scroll", function () {
  updateStyles();
});
$(document).ready(function(){
   var swiper2 = new Swiper(".client-tstmnl-slider", {
  slidesPerView: 1,
  spaceBetween: 10,
  loop: true,
 
  pagination: false,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    // When window width is <= 768px
    768: {
      slidesPerView: 1.5,
      spaceBetween: 50,
    },
    // Add more breakpoints as needed
  },
}); 
});

$(document).ready(function(){
  $('.car-ride-slider').owlCarousel({
        loop:true,
        margin:20,
        nav:true,
 navText: ["<img src='https://i.ibb.co/CzqDYwq/slider-prev-arrow.png' >" , "<img src='https://i.ibb.co/H2z270s/slider-rit-arrow.png'> "],
        dots:false,
        responsive:{
            0:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
 });

/*------ for navebar list ------*/
$(document).ready(function () {
  // Initially hide all sub-menus and in-sub-menus
  // $('.sub-menu').hide();

  // function toggleSubMenu() {
  //   // Close all open sub-menus
  //   $('.nav-menu > li').not(this).find('.sub-menu').fadeOut("slow");

  //   // Toggle the visibility of the clicked sub-menu
  //   $(this).find('.sub-menu').fadeToggle();

  //   // Hide all other in-sub-menus
  //   $('.in-sub-menu').not($(this).find('.sub-menu .in-sub-menu')).removeClass('visible');

  //   // Toggle the visibility and add/remove the overlay class
  //   $('.overlay-element').addClass('overlay');
  //   $('.inner-header').addClass('scroll-nav');
  // }

  // Toggle sub-menu based on screen width
  // $('.nav-menu > li').click(function () {
  //   if ($(window).width() < 992) {
  //     // Close other open sub-menus on screens less than 768px
  //     $('.nav-menu > li').not(this).find('.sub-menu').slideUp("");
  //     $(this).find('.sub-menu').slideToggle("");
  //     // Add/remove a class for background styling
  //     // $(this).toggleClass('menu-background');
  //   } else {
  //     toggleSubMenu.call(this);
  //   }
  // });

  // $('.sub-menu li, .navbar .sub-menu li .right-arrow img').click(function (e) {
  //   // Prevent the click event from bubbling up to the parent li
  //   e.stopPropagation();

  //   if ($(window).width() < 992) {
  //     // Slide toggle in-sub-menu on screens less than 768px
  //     var inSubMenu = $(this).find('.in-sub-menu');
  //     $('.in-sub-menu').not(inSubMenu).slideUp("");

  //     // Add/remove a class for background styling
  //     $(this).toggleClass('menu-background');

  //     inSubMenu.slideToggle("");
  //   } else {
  //     // Close other in-sub-menus within the same .sub-menu
  //     $(this).closest('.sub-menu').find('.in-sub-menu').not($(this).find('.in-sub-menu')).removeClass('visible');

  //     // Toggle the visibility of the clicked in-sub-menu
  //     $(this).find('.in-sub-menu').toggleClass('visible');
  //   }
  // });

  // Close sub-menus and in-sub-menus when clicking outside
  $(document).click(function (e) {
    if (!$(e.target).closest('.nav-menu li').length && $(e.target).hasClass('overlay-element')) {
      $('.sub-menu, .in-sub-menu').fadeOut("slow");
      // Add/remove a class for background styling
      $('.nav-menu > li').removeClass('menu-background');
      $('.overlay-element').removeClass('overlay');
      $('.inner-header').removeClass('scroll-nav');
      $('.in-sub-menu').removeClass('visible');
    }
  });

  // Close sub-menus and in-sub-menus when scrolling
  $(window).scroll(function () {
    $('.sub-menu, .in-sub-menu').fadeOut("slow");
    // Add/remove a class for background styling
    $('.nav-menu > li').removeClass('menu-background');
    $('.overlay-element').removeClass('overlay');
    $('.in-sub-menu').removeClass('visible');
  });
});


$(document).ready(function () {
  (function ($) {
    $(function () {

      var faqItems = $('.js-ag-faq_title');
      var progressBar = $('.progress-bar');
      var autoToggle;

      function toggleNextItem(index) {
        $('.js-ag-faq_text').slideUp();
        faqItems.eq(index).next('.js-ag-faq_text').slideDown(function () {
          var nextIndex = (index + 1) % faqItems.length;
          autoToggle = setTimeout(function () {
            toggleNextItem(nextIndex);
          }, 4000);
          progressBar.width(0);
          progressBar.animate({
            width: "100%"
          }, 4000, "linear");
        });
      }

      faqItems.on('click', function () {
        var index = $(this).index();
        $(this).next('.js-ag-faq_text').slideToggle();
        clearTimeout(autoToggle);
        progressBar.stop().width(0);
        toggleNextItem(index);
      });
      toggleNextItem(0);

    });
  })(jQuery);
});

// for animation on scrol on text

$(document).ready(function () {
  $('.animation-custom').appear();

  $('.animation-custom').on('appear', function () {
      $(this).addClass('animate'); // Add animation class to h2
  });


  $('.animation-custom').on('disappear', function () {
      $(this).removeClass('animate'); // Remove animation classes
  });
});