

jQuery(document).ready(function($){
	$('.news_des dd').magnificPopup({
		//delegate: 'a',
//		type: 'inline',
//		/*tLoading: 'Loading image #%curr%...',*/
//		mainClass: 'mfp-img-mobile',
//		/*gallery: {
//			enabled: true,
//		}*/
//		modal: true

		delegate: 'a',
		type: 'inline',
		preloader: false,
		focus: '#name',
		

	});
});


$(document).ready(function(){
 "use strict";
	$('#slide_img_shop').owlCarousel({
			loop:true,
		margin:15,
		autoplay: true,
		autoplayTimeout: 5000,
		autoplaySpeed: 600,
    pagination: false,
    paginationNumbers: false,
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
