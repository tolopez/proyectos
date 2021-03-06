/* Tooltip */
$(document).ready(function() {
	$('.poshytip').poshytip({
		className : 'tip-twitter',
		showTimeout : 1,
		alignTo : 'target',
		alignX : 'center',
		alignY : 'bottom',
		offsetY : 5,
		allowTipHover : true,
	});
});

/* Responsive Menu */
$(document).ready(function() {
	jQuery("#responsive-menu select").change(function() {
		window.location = jQuery(this).find("option:selected").val();
	});
});
/* Hook up the FlexSlider */
$(document).ready(function() {
	$('.flexslider').flexslider({
		animation : "slide", //String: Select your animation type, "fade" or "slide"
		slideDirection : "horizontal", //String: Select the sliding direction, "horizontal" or "vertical"
		slideshow : true, //Boolean: Animate slider automatically
		slideshowSpeed : 8000, //Integer: Set the speed of the slideshow cycling, in milliseconds
		animationDuration : 8000, //Integer: Set the speed of animations, in milliseconds
		directionNav : false, //Boolean: Create navigation for previous/next navigation? (true/false)
		controlNav : false, //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
		keyboardNav : false, //Boolean: Allow slider navigating via keyboard left/right keys
		mousewheel : false, //Boolean: Allow slider navigating via mousewheel
		prevText : "Previous", //String: Set the text for the "previous" directionNav item
		nextText : "Next", //String: Set the text for the "next" directionNav item
		pausePlay : false, //Boolean: Create pause/play dynamic element
		randomize : false, //Boolean: Randomize slide order
		slideToStart : 1, //Integer: The slide that the slider should start on. Array notation (0 = first slide)
		animationLoop : true, //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
		pauseOnAction : false, //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
		pauseOnHover : false, //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
		start : function() {
		}, //Callback: function(slider) - Fires when the slider loads the first slide
		before : function() {
		}, //Callback: function(slider) - Fires asynchronously with each slider animation
		after : function() {
		}, //Callback: function(slider) - Fires after each slider animation completes
		end : function() {
		} //Callback: function(slider) - Fires when the slider reaches the last slide (asynchronous)
	});
});

// Activate the contactform
$(document).ready(function() {
	$(function() {
		$('#contact_form').submit(function(e) {
			e.preventDefault();
			var form = $(this);
			var post_url = form.attr('action');
			var post_data = form.serialize();
			$('#loader', form).html('<img src="images/loader.gif" /> Please Wait...');
			$.ajax({
				type : 'POST',
				url : post_url,
				data : post_data,
				success : function(msg) {
					$(form).fadeOut(500, function() {
						form.html(msg).fadeIn();
					});
				}
			});
		});
	});
});
// Activate the prettyPhoto
$(document).ready(function() {
	$("a[class^='prettyPhoto']").prettyPhoto();
});

// Activate the MainMenu

$(document).ready(function() {
	$("ul.sf-menu").superfish();
});
//##########################################
// Toggle box
//##########################################
$(document).ready(function() {
	$('.toggle-trigger').click(function() {
		$(this).next().toggle('slow');
		$(this).toggleClass("active");
		return false;
	}).next().hide();
});

$(window).scroll(function() {
	if ($(window).scrollTop() + $(window).height() == $(document).height()) {
		$("#top_link").show("slow");
	} else {
		$("#top_link").hide("slow");
	}
});

function onClickNavMenu() {
	if ($('.nav ul').is(":visible")) {
		$('.nav ul').hide();
	} else {
		$('.nav ul').show();
	}
};

function onClickTopLink() {
	jQuery('html, body').animate({
		scrollTop : 0
	}, 600);
	return false;
};

/*Funciones del Mapa*/
function initializeMap() {
	var myLatlng = new google.maps.LatLng(25.5837492, -103.5067862);
	var mapOptions = {
		zoom : 15,
		center : myLatlng,
		height : 400
	};
	var map = new google.maps.Map(document.getElementById('map-container'), mapOptions);

	var marker = new google.maps.Marker({
		position : myLatlng,
		map : map,
		title : 'Cobrinsa'
	});
}