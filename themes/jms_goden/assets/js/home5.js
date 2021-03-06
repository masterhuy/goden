

jQuery(function ($) {
    "use strict";
	if($(".product-carousel").length) {
			var productCarousel = $(".product-carousel");			
			var rtl = false;
			if ($("body").hasClass("rtl")) rtl = true;				
			productCarousel.owlCarousel({
				responsiveClass:true,
				responsive:{			
					1199:{
						items:p_itemsDesktop
					},
					991:{
						items:p_itemsDesktopSmall
					},
					768:{
						items:p_itemsTablet
					},
					481:{
						items:p_itemsMobile
					},
					361:{
						items:1
					},
					0: {
						items:1
					}
				},
				rtl: rtl,
					margin: 30,
				    nav: p_nav,
			        dots: p_pag,
					autoplay:auto_play_carousel ,
				    navigationText: ["", ""],
				    slideSpeed: 200
			});
		}
 	if($(".brand-carousel").length) {
		var brandCarousel = $(".brand-carousel");		
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		brandCarousel.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:brand_itemsDesktop
				},
				991:{
					items:brand_itemsDesktopSmall
				},
				768:{
					items:brand_itemsTablet
				},
				481:{
					items:brand_itemsMobile
				},
				0: {
					items:1
				}
			},
				rtl: rtl,
				margin:0,
				nav: p_nav_brand,
		        dots: p_pag_brand,
				autoplay:auto_play_brand,
				slideSpeed: 800,	
		});
	}
	if($(".testimonial-carousel").length) {
		var testimonialCarousel = $(".testimonial-carousel");		
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		testimonialCarousel.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:testi_itemsDesktop
				},
				991:{
					items:testi_itemsDesktopSmall
				},
				768:{
					items:testi_itemsTablet
				},
				481:{
					items:testi_itemsMobile
				},
				0: {
					items:1
				}
			},
				rtl: rtl,
				margin:0,
				nav: p_nav_testi,
		        dots: p_pag_testi,
				autoplay:auto_play_testi,
				slideSpeed: 800,	
		});
	}
	if($(".instagram-carousel").length) {
		var instagramCarousel = $(".instagram-carousel");
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		instagramCarousel.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:8
					},
				991:{
					items:5
				},
				768:{
					items:3
				},
			
				318:{
					items:2
				}
			},
			rtl: rtl,
			margin: 0,
			nav: false,
			dots: false,
			autoplay: true,
			slideSpeed: 200,
			loop: true
		});
	}
	if($(".instagram-carousel").length) {
		var instagramCarousel = $(".instagram-carousel");
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		instagramCarousel.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:8
					},
				991:{
					items:5
				},
				768:{
					items:3
				},
			
				318:{
					items:2
				}
			},
			rtl: rtl,
			margin: 0,
			nav: false,
			dots: false,
			autoplay: true,
			slideSpeed: 200,
			loop: true
		});
	}
	if($(".categories-carousel2").length) {
		var cateCarousel = $(".categories-carousel2");
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		cateCarousel.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:3
					},
				991:{
					items:2
				},
				768:{
					items:2
				},
				318:{
					items:1
				}
			},
			rtl: rtl,
			margin: 20,
			nav: false,
			dots: false,
			autoplay: false,
			slideSpeed: 200,
			loop: true
		});
	}
	if($(".producttab-carousel").length) {		
		var producttabCarousel = $(".producttab-carousel");			
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		producttabCarousel.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:tab_itemsDesktop
				},
				991:{
					items:tab_itemsDesktopSmall
				},
				768:{
					items:tab_itemsTablet
				},
				481:{
					items:tab_itemsMobile
				},
				361:{
					items:1
				},
				0:{
					items:1
				}
			},
			rtl: rtl,
			margin:20,
			nav: p_nav_tab,
			dots: p_pag_tab,
			loop:true,
			autoplay: auto_play_tab,
			slideSpeed: 800,
		});
	}
	if($(".instagram-images").length) {
		var instagramCarousel = $(".instagram-images");
		var rtl = false;
		if ($("body").hasClass("rtl")) rtl = true;				
		instagramCarousel.owlCarousel({
			responsiveClass:true,
			responsive:{			
				1199:{
					items:5
					},
				991:{
					items:4
				},
				768:{
					items:3
				},
				318:{
					items:1
				}
			},
			rtl: rtl,
			margin: 20,
			nav: false,
			dots: false,
			autoplay: false,
			slideSpeed: 200,
			loop: true
		});
	}
});
$(document).ready(function() {
/* Apply fancybox to multiple items */
	$('.grouped_elements').fancybox();
});
