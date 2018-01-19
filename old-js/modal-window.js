jQuery('.close-modal').click(function(){
	jQuery('.home-modal').removeClass('open');
	setTimeout(function(){
	  jQuery('.home-modal').css('z-index', -1); // change z-index when live
	}, 500);
	return false;
});

jQuery(document).keyup(function(e) {
     if (e.keyCode == 27) { // escape key maps to keycode `27`
        jQuery('.home-modal').removeClass('open');
		setTimeout(function(){
		  jQuery('.home-modal').css('z-index', -1);
		}, 500);
		return false;
    }
});

// uncomment to make cookies active
jQuery(window).load(function() {
	var visits = jQuery.cookie('visits') || 0;
	visits++;

	jQuery.cookie('visits', visits, { expires: 1, path: '/' });

	if ( jQuery.cookie('visits') > 1 ) {
		return false;
	} else {
		jQuery('.home-modal').css('z-index', 30000);
		setTimeout(function(){
		  jQuery('.home-modal').addClass('open');
		}, 1100);
	}
});

// comment out when cookies are active
// jQuery(window).load(function() {
// 	jQuery('.home-modal').css('z-index', 9999);
// 	setTimeout(function(){
// 	  jQuery('.home-modal').addClass('open');
// 	}, 500);
// });

// enque the scripts
//wp_enqueue_script( 'novus-odenton-modal', '/js/modal-window.js', array('novus-odenton-cookies'), '', true );
// wp_enqueue_script( 'novus-odenton-modal', '/js/modal-window.js', array(), '', true );