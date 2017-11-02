jQuery(document).ready(function ($) {
// loading init page
	$(window).on("load", function () {
		$("#preloader").delay(100).fadeOut("slow", function () {
			$(this).remove();
		});
	});

	// collapse NavBar Materialize
	$(".button-collapse").sideNav();

	// Parallax Materialize
	$(document).ready(function () {
		$(".parallax").parallax();
	});

	// Rotation text
	$("#hero .rotating").Morphext({
		animation: "flipInX",
		separator: ",",
		speed: 3000
	});

	$(document).ready(function(){
		$(".materialboxed").materialbox();
	});

	$(document).ready(function(){
		$(".slider").slider({
			full_width: true,
			indicators:false,
			height:400,
			interval:1000,
			autoplay:false
		});
	});

	jQuery("#id-mobile").on("click", function () {
		$("#mobile-demo").hide();
	});

	jQuery("#id-mobile-show").on("click", function () {
		$("#mobile-demo").show();
	});

	// Smoth scroll on page hash links
	$("a[href*=\"#\"]:not([href=\"#\"])").on("click", function () {
		if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
			var target = $(this.hash);
			if (target.length) {
				var top_space = 0;

				if ($("#header").length) {
					top_space = $("#header").outerHeight();
				}

				$("html, body").animate({
					scrollTop: target.offset().top - top_space
				}, 1500, "easeInOutExpo");

				if ($(this).parents(".nav-menu").length) {
					$(".nav-menu .menu-active").removeClass("menu-active");
					$(this).closest("li").addClass("menu-active");
				}

				if ($("body").hasClass("mobile-nav-active")) {
					$("body").removeClass("mobile-nav-active");
					$("#mobile-nav-toggle i").toggleClass("fa-times fa-bars");
					$("#mobile-body-overly").fadeOut();
				}

				return false;
			}
		}
	});

	// Button back slow 1
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			$(".back-to-top").fadeIn("slow");
		} else {
			$(".back-to-top").fadeOut("slow");
		}
	});

	// Button back slow 2
	$(".back-to-top").click(function () {
		$("html, body").animate({scrollTop: 0}, 1500, "easeInOutExpo");
		return false;
	});
});