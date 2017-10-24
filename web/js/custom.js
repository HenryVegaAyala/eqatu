jQuery(document).ready(function ($) {
    // Preloader
    $(window).on("load", function () {
        $("#preloader").delay(100).fadeOut("slow", function () {
            $(this).remove();
        });
    });

    $(".button-collapse").sideNav();

    $(document).ready(function () {
        $('.parallax').parallax();
    });

    // Smoth scroll on page hash links
    $('a[href*="#"]:not([href="#"])').on('click', function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash)
            if (target.length) {
                var top_space = 0

                if ($('#header').length) {
                    top_space = $('#header').outerHeight()
                }

                $('html, body').animate({
                    scrollTop: target.offset().top - top_space
                }, 1500, 'easeInOutExpo')

                if ($(this).parents('.nav-menu').length) {
                    $('.nav-menu .menu-active').removeClass('menu-active')
                    $(this).closest('li').addClass('menu-active')
                }

                if ($('body').hasClass('mobile-nav-active')) {
                    $('body').removeClass('mobile-nav-active')
                    $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars')
                    $('#mobile-body-overly').fadeOut()
                }

                return false
            }
        }
    })

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow')
        } else {
            $('.back-to-top').fadeOut('slow')
        }
    })

    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo')
        return false
    })

})