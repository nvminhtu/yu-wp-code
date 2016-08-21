//loader 
$(window).load(function(){
	$("#loader").fadeToggle({display:"none"}, "slow");
});

$(document).ready(function() {
	"use strict";
	$('#totop').hover(function(){
		$(this).find('img').addClass('active');
	},function(){
		$(this).find('img').removeClass('active');
	});

});



/*$(window).scroll(function() {
	"use strict";
	var position_main = $("#header").offset().top + $("#header").height();
	//alert(position_main);
	var position_sTop = $(window).scrollTop();
	if(position_sTop>=position_main){
		$("#sticky_footer").fadeIn();
	}
	else{
		$("#sticky_footer").fadeOut();
	}
	
});*/

$(function(){
	$("#totop").hide();			
	$(window).scroll(function () {
		if ($(this).scrollTop() > 300) {
			$('#sticky_footer').fadeIn();
		} else {
			$('#sticky_footer').fadeOut();
		}
	});			
				
});