(function($) {
    "use strict";

    jQuery(document).ready(function($) {

        $('body').scrollspy({ target: ".navbar" })

        // jQuery for page scrolling feature - requires jQuery Easing plugin
        $('a.page-scroll').on('click', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: ($($anchor.attr('href')).offset().top - 50)
            }, 1250, 'easeInOutExpo');
            event.preventDefault();
        });

        $(".app-screenshot-carousel").owlCarousel({
            items: 4,
            loop: true,
            dots: true,
            nav: false,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                700: {
                    items: 2,
                },
                1000: {
                    items: 4
                }
            }
        });

        $(".video-play").magnificPopup({
            type: 'video',
        });

        // counter up
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });

        $('.screenshot-overlay a').magnificPopup({
            type: 'image',
            removalDelay: 300,
            mainClass: 'mfp-fade',
            gallery: {
                enabled: true
            }
        });

    });


    jQuery(window).on('load', function() {

        jQuery(".preloader").fadeOut('slow');
    });


}(jQuery));