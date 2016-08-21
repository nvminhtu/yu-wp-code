$(document).ready(function(){
 "use strict";

		  
	$('.slide_blog').owlCarousel({
		loop:true,
		margin:50,
		autoplay: true,
		autoplayTimeout: 5000,
		autoplaySpeed: 600,
		nav:true,
		responsive:{
			0:{
				items:1,
				nav:true
			},
			480:{
				margin:0,
				items:1,
				nav:true,
				touchDrag: true,
			},
			
			768:{
				
				items:3,
			
				touchDrag: true,
			},
			1200:{
				items:3,
				
			}
		}
	});
	
	/*$('.box_slide_question_list').owlCarousel({
		loop:true,
		margin:50,
		autoplay: true,
		autoplayTimeout: 5000,
		autoplaySpeed: 600,
		nav:true,
		responsive:{
			0:{
				items:1,
				nav:true
			},
			480:{
				margin:20,
				items:1,
				nav:true,
				touchDrag: true,
			},
			
			768:{
				
				items:1,
			
				touchDrag: true,
			},
			1200:{
				items:1,
				
				
			}
		}
	});*/


});



$(document).ready(function() {   
 "use strict"; 
	$(document).ready(function(){
	  $('.slider_index_list').bxSlider({
	  	mode: 'fade',
		pager:false,
		auto:true,
		controls: false
	  });
	});	
});


$(window).bind("resize load",function() {   
 "use strict"; 
	var w_window = $(window).width();
	var h_window = $(window).height();
	
});

/* fixed menu for index page */




