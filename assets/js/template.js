jQuery(document).ready(function($) {

	$(".headroom").headroom({
		"tolerance": 20,
		"offset": 50,
		"classes": {
			"initial": "animated",
			"pinned": "slideDown",
			"unpinned": "slideUp"
		}
	});

    $("a#welcomebutton").on('click', function() {
        $('html,body').animate({
          scrollTop: $("#welcome").offset().top
        }, 1250);
    });
});