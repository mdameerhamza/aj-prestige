<?php wp_footer(); ?>

<?php


// Get current URL
$current_url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : getCurrentURL();

// Load different headers based on URL structure
if (strpos($current_url, '/chicago') !== false) {
    // Load header for New York subsite
    get_template_part('custom-footer/footer-chicago');
} elseif (strpos($current_url, '/las-vegas') !== false) {
    // Load header for Las Vegas subsite
    get_template_part('custom-footer/footer-lasvegas');
}elseif (strpos($current_url, '/newyork') !== false) {
    // Load header for Las Vegas subsite
    get_template_part('custom-footer/footer-newyork');
} else {
    // Load default header for other pages
    get_template_part('custom-footer/footer-default');
}
?>
</main>
<script>
        $(document).ready(function () {
    if ($(window).width() < 992) {
    $('ul.nav-menu li>span').click(function(){
        $(this).siblings('ul.sub-menu').slideToggle().parent().siblings().children('ul.sub-menu').slideUp();
        $(this).toggleClass('active-arrow').parent().siblings().children('ul.nav-menu li>span').removeClass('active-arrow');
    });
    }
});
 $(document).ready(function () {
   $('.right-arrow').click(function(){
    //   $(this).toggleClass('active-right-arrow');
    //   $(this).siblings('ul.in-sub-menu').toggleClass('right-sub-menu');
      $(this).siblings('ul.in-sub-menu').slideToggle().parent().siblings().children('ul.in-sub-menu').slideUp();
        $(this).toggleClass('active-right-arrow').parent().siblings().children('ul.nav-menu li>span').removeClass('active-right-arrow');
   }); 
});

document.addEventListener('DOMContentLoaded', function () {
  var swiper = new Swiper('.swiper.background-image-slider', {
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    effect: 'fade',
    speed: 2000,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });
});


</script>
</body>
</html>