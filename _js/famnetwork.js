function navToggle() {
	jQuery('#toggle-nav').click(function() {
		jQuery('#famnetwork-nav').slideToggle();
		return false;
	});
}

function stickyNav() {
	jQuery('.site').waypoint(function(direction) {
	   if (direction == 'down') {
	   	jQuery('.famnetwork-nav-container').addClass('sticky-nav');
	   } else {
	   	jQuery('.famnetwork-nav-container').removeClass('sticky-nav');
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
		return false;
	});
}
function textCarousel() {
	jQuery('.carousel').carousel({
		interval: 5000
	});
}
function accessPopup() {
	jQuery('.access-icons a').click(function() {
		if(jQuery(this).children('.access-popup').is(':hidden')) {
			jQuery('.access-popup').css('display', 'none');
			jQuery(this).children('.access-popup').css('display', 'block');
		} else {
			jQuery('.access-popup').css('display', 'none');
		}
		return false;
	});
}
jQuery(function() {
	jQuery('.home a[href*="#"]:not([href="#"])').click(function() {
   	if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = jQuery(this.hash);
      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        jQuery('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
function matchProductheight() {
	jQuery('.products li a').matchHeight();
	jQuery('.products li img').matchHeight();
	jQuery('.products li h3').matchHeight();
	jQuery('.products li .price').matchHeight();
}

function accountTrigger() {
	jQuery('.username').click(function() {
		jQuery('.account-info').slideToggle();
	});
}
function audioPlayer() {
	jQuery('video,audio').mediaelementplayer();
}
function expandedHistory() {
	jQuery('.load-history').click(function() {
		if(jQuery(this).hasClass('toggle')) {
			jQuery('.expanded-history').slideUp();
			jQuery(this).html('(Load More)');
			jQuery(this).removeClass('toggle');
		} else {
			jQuery('.expanded-history').slideDown();
			jQuery(this).addClass('toggle');
			jQuery(this).html('(Close)');
		}
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
	audioPlayer();
	accountTrigger();
	resourceTabs();
	registerForm();
	turnCard();
	textCarousel();
	navToggle();
	accessPopup();
	matchProductheight();
	expandedHistory();
});
