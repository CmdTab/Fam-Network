function navToggle() {
	jQuery('#toggle-nav').click(function() {
		jQuery('#famnetwork-nav').slideToggle();
		return false;
	});
}

function stickyNav() {
	jQuery('.site').waypoint(function(direction) {
	   if (direction == 'down') {
	   	jQuery('.site-header').addClass('sticky-nav');
	   } else {
	   	jQuery('.site-header').removeClass('sticky-nav');
	   }
	}, { offset: -100 });
}

function resourceTabs() {
	jQuery('.nav-tabs a').click(function (e) {
		e.preventDefault()
		jQuery(this).tab('show')
	});
}

function turnCard() {
	jQuery('.turn-btn').click(function() {
		if(jQuery( this ).parent( '.front , .back' ).parent( '.flipper' ).parent( '.flip-container' ).hasClass( 'hover' )) {
			jQuery( this ).parent( '.front , .back' ).parent( '.flipper' ).parent( '.flip-container' ).removeClass( 'hover');
		} else {
			jQuery( this ).parent( '.front , .back' ).parent( '.flipper' ).parent( '.flip-container' ).addClass( 'hover');
		}
		return false;
	});
	jQuery('.turn-btn').click(function() {
		if(jQuery( this ).parent( '.boxed-info' ).parent( '.front , .back' ).parent( '.flipper' ).parent( '.flip-container' ).hasClass( 'hover' )) {
			jQuery( this ).parent( '.boxed-info' ).parent( '.front , .back' ).parent( '.flipper' ).parent( '.flip-container' ).removeClass( 'hover');
		} else {
			jQuery( this ).parent( '.boxed-info' ).parent( '.front , .back' ).parent( '.flipper' ).parent( '.flip-container' ).addClass( 'hover');
		}
		return false;
	});
}

function registerForm() {
	jQuery( '.register-trigger' ).click(function() {
		if (jQuery('.register-form').hasClass('expanded')) {
			jQuery( '.register-form' ).removeClass( 'expanded' );
			jQuery( '.register-form' ).css( 'display' , 'none' );
		} else {
			jQuery( '.register-form' ).addClass( 'expanded' );
			jQuery( '.register-form' ).css( 'display' , 'block' );
		}
	});
}

function smoothScroll() {
	jQuery(".learn-more").click(function() {
	    jQuery('html, body').animate({
	        scrollTop: jQuery(".join-free").offset().top - 74
	    }, 2000);
	    return false;
	});
	jQuery(".view-resources").click(function() {
	    jQuery('html, body').animate({
	        scrollTop: jQuery(".exclusive-pricing").offset().top - 74
	    }, 2000);
	    return false;
	});
}

jQuery(document).ready(function() {
	var vw = jQuery(window).width();
	if (vw > 800) {
		stickyNav();
	}
	if (vw < 800) {
		
	}
	resourceTabs();
	registerForm();
	turnCard();
	smoothScroll();
	navToggle();
});