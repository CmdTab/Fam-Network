function navToggle(){jQuery("#toggle-nav").click(function(){return jQuery("#famnetwork-nav").slideToggle(),!1})}function stickyNav(){jQuery(".site").waypoint(function(e){"down"==e?jQuery(".site-header").addClass("sticky-nav"):jQuery(".site-header").removeClass("sticky-nav")},{offset:-100})}function resourceTabs(){jQuery(".nav-tabs a").click(function(e){e.preventDefault(),jQuery(this).tab("show")})}function turnCard(){jQuery(".turn-btn").click(function(){return jQuery(this).parent(".front , .back").parent(".flipper").parent(".flip-container").hasClass("hover")?jQuery(this).parent(".front , .back").parent(".flipper").parent(".flip-container").removeClass("hover"):jQuery(this).parent(".front , .back").parent(".flipper").parent(".flip-container").addClass("hover"),!1}),jQuery(".turn-btn").click(function(){return jQuery(this).parent(".boxed-info").parent(".front , .back").parent(".flipper").parent(".flip-container").hasClass("hover")?jQuery(this).parent(".boxed-info").parent(".front , .back").parent(".flipper").parent(".flip-container").removeClass("hover"):jQuery(this).parent(".boxed-info").parent(".front , .back").parent(".flipper").parent(".flip-container").addClass("hover"),!1})}function registerForm(){jQuery(".register-trigger").click(function(){return jQuery(".register-form").hasClass("expanded")?(jQuery(".register-form").removeClass("expanded"),jQuery(".register-form").css("display","none")):(jQuery(".register-form").addClass("expanded"),jQuery(".register-form").css("display","block")),!1})}function smoothScroll(){jQuery(".learn-more").click(function(){return jQuery("html, body").animate({scrollTop:jQuery(".join-free").offset().top-74},2e3),!1}),jQuery(".view-resources").click(function(){return jQuery("html, body").animate({scrollTop:jQuery(".exclusive-pricing").offset().top-74},2e3),!1})}function textCarousel(){}function accessPopup(){jQuery(".access-icons a").click(function(){return jQuery(this).children(".access-popup").is(":hidden")?(jQuery(".access-popup").css("display","none"),jQuery(this).children(".access-popup").css("display","block")):jQuery(".access-popup").css("display","none"),!1})}function matchProductheight(){jQuery(".products li").matchHeight(),jQuery(".products li img").matchHeight(),jQuery(".products li h3").matchHeight(),jQuery(".products li .price").matchHeight()}$(function(){$('a[href*="#"]:not([href="#"]), a[href*="#"]:not(a[data-toggle="tab"])').click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var e=$(this.hash);if(e=e.length?e:$("[name="+this.hash.slice(1)+"]"),e.length)return $("html, body").animate({scrollTop:e.offset().top},1e3),!1}})}),jQuery(document).ready(function(){var e=jQuery(window).width();e>800&&stickyNav(),resourceTabs(),registerForm(),turnCard(),textCarousel(),smoothScroll(),navToggle(),accessPopup(),matchProductheight()});