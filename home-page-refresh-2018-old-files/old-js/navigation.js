// JavaScript Document
jQuery(document).ready(function($) {
	var x = 0;
	
	// CLONE OUR AUX NAV AND ADD TO MAIN MENU
	var auxNavUl = jQuery('<ul>', {id: 'mobile-aux-nav'});
	jQuery('#site-navigation').append(auxNavUl);
	
	var auxNavContent = jQuery('#aux-menu').html();
	jQuery(auxNavUl).append(auxNavContent);
	
	function togglePanes() {
		if(x==0) {
			//console.log(x);
			$('.menu-toggle').attr('aria-expanded', 'true');
			$('#masthead').addClass('toggled');
			$('#translate-wrap').addClass('toggled');
			$('#site-navigation').addClass('toggled');
			setTimeout(function(){
				x=1;
			}, 350);
		} else {
			//console.log(x);
			$('.menu-toggle').attr('aria-expanded', 'false');
			$('#masthead').removeClass('toggled');
			$('#translate-wrap').removeClass('toggled');
			setTimeout(function(){
				x=0;
				$('#site-navigation').removeClass('toggled');
			}, 350);
		}
	}
	
	$('.menu-toggle').click(function(e) {
		togglePanes();
	});
	
	$('#translate-wrap').click(function() {
		if($(this).hasClass('toggled')) {
			togglePanes();
		}
	});
	
	/*$('#masthead').click(function() {
		if($(this).hasClass('toggled')) {
			togglePanes();
		}
	});*/
});

/*jQuery(document).ready(function($) {
	var x = 0;
	
	function togglePanes() {
		if(x==0) {
			//console.log(x);
			$('.menu-toggle').attr('aria-expanded', 'true');
			$('#masthead').addClass('toggled');
			$('#translate-wrap').addClass('toggled');
			$('#site-navigation').addClass('toggled');
			setTimeout(function(){
				x=1;
			}, 350);
		} else {
			//console.log(x);
			$('.menu-toggle').attr('aria-expanded', 'false');
			$('#masthead').removeClass('toggled');
			$('#translate-wrap').removeClass('toggled');
			setTimeout(function(){
				x=0;
				$('#site-navigation').removeClass('toggled');
			}, 350);
		}
	}
	
	$('.menu-toggle').click(function(e) {
		togglePanes();
	});
	
	$('#translate-wrap').click(function() {
		if($(this).hasClass('toggled')) {
			togglePanes();
		}
	});
});*/