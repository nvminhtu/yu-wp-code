$(document).ready(function(){
 "use strict";
	$('#slide_img_shop').owlCarousel({
			loop:true,
		margin:15,
		autoplay: true,
		autoplayTimeout: 5000,
		autoplaySpeed: 600,
		responsive:{
			0:{
				items:1,
				nav:true
			},
			320:{
				margin:20,
				items:1,
				nav:true,
				touchDrag: true,
			},
			480:{
				margin:20,
				items:2,
				nav:true,
				touchDrag: true,
			},
			800:{

				items:3,
				nav:true,
				touchDrag: true,
			},
			1200:{

				items:3,
				nav:true,
				touchDrag: true,
			},
			2000:{

				items:3,
				nav:true,
				touchDrag: true,
			},

		}
	});
});
