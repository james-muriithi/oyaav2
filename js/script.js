/* -----------------------------------------------
/* How to use? : Check the GitHub README
/* ----------------------------------------------- */

/* To load a config file (particles.json) you need to host this demo (MAMP/WAMP/local)... */
/*
particlesJS.load('particles-js', 'particles.json', function() {
  console.log('particles.js loaded - callback');
});
*/

(function( $ ) {      "use strict";   
  $(function() {
      $('a[href*="#"]:not([href="#"])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
              var offset = $('nav').outerHeight();
              if (target.length) {
                if (target[0]['id'] == 'home') {
                  $('html, body').animate({
                    scrollTop: 0
                  }, 1000);
                }else{

                  $('html, body').animate({
                    scrollTop: target.offset().top - parseInt(offset, 0)-10
                  }, 1000);
                }
                $('a[href*="#"]:not([href="#"])').parent().removeClass('active');
                $(target).addClass('active');
                
                return false;
              }
            }
        });
      var campaignPos = $('#campaigns').offset().top;
      $( window ).on('scroll',function() {
        var pos = window.pageYoffset;
        if (pos > campaignPos) {
          alert("message");
        }
      });
  });   
}(jQuery));

if ($("#slider_1").length ) {

        $("#slider_1").owlCarousel({
             items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false,
                    loop: true
                },
                600: {
                    items: 1,
                    nav: false,
                    loop: true
                },
                1000: {
                    items: 1,
                    nav: true,
                    loop: true
                }
            },
            nav: false,
            navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"]
        });
        
    }