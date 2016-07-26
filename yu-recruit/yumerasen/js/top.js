$(document).ready(function(){
 "use strict";
	$('#box_news_slide_idx').owlCarousel({
		loop:true,
		margin:3,
		autoplay: true,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
		responsive:{
			1200:{
				items:1,
				nav:false,
		  
			},
			0:{
				items:1,
				nav:false,
		  
			}
		}
	});

		  
	$('#index_slide_staff').owlCarousel({
		loop:true,
		margin:50,
		autoplay: true,
		autoplayTimeout: 5000,
		autoplaySpeed: 600,
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
				
				items:2,
				nav:true,
				touchDrag: true,
			},
			1200:{
				
				items:2,
				nav:true,
			}
		}
	});


});



$(document).ready(function() {   
 "use strict"; 
	//$(".news").mCustomScrollbar();	
});



$(window).bind("resize load",function() {   
 "use strict"; 
	var w_window = $(window).width();
	var h_window = $(window).height();
	$("#main_video").css({"width":w_window,"height":h_window});
});

/* fixed menu for index page */
$(window).bind("scroll load resize",function() { 
 	"use strict"; 
	var position_sTop = $(window).scrollTop();
	//var container01_top = $("#container01").offset().top-80;
	var container01_top = $("#container01").offset().top;
	if(position_sTop>=container01_top){
		$("#container01").css("margin-top","80px");
		$("#menu_top").addClass("fixed").fadeIn();
		
	}
	else{
		$("#container01").css("margin-top","0");
		$("#menu_top").removeClass("fixed");
		
	}

});




