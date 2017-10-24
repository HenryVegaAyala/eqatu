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

})