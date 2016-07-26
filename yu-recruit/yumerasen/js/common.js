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


/*$(document).ready(function(){
	$('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
		$(this).toggleClass('open');
	});
});*/

/* menu sticky */

$(window).scroll(function() {
	"use strict";
	var position_main = $("#header").offset().top + $("#header").height();
	//alert(position_main);
	var position_sTop = $(window).scrollTop();
	if(position_sTop>=position_main){
		$("#sticky_menu").fadeIn();
	}
	else{
		$("#sticky_menu").fadeOut();
	}
	
});	

//list_menu_sticky_header
$(window).bind("load",function(){
	"use strict";
	var h_window = $(window).height();
	var h_list_menu_sticky_header = h_window - 57;
	$('#btn_menu').click(function(){
		//fix bg outer dark
		$("#bg_box_out").toggleClass('active');
		
		//change text for txt menu
		if($(this).find("#nav-icon").hasClass("open")){
			$(this).find(".txt_menu").html("MENU");
		}
		else{
			$(this).find(".txt_menu").html("ClOSE");
		}
		//nav-icon toggle class open
		$(this).find("#nav-icon").toggleClass('open');
		//list_menu_sticky_header toggle
		$("#list_menu_sticky_header").css("height",h_list_menu_sticky_header).stop(1,1).slideToggle();
	});
	
	$('.btn_sub').click(function(){
		//toggle sub menu
		$(this).parent().toggleClass("open");
		$(this).parent().next("ul").stop(1,1).slideToggle();
	});
	
	
	
});	

$(window).bind("resize",function(){
	var w_window = $(window).width();
	if(w_window>768){

		
		$("#bg_box_out").removeClass('active');
		$("#btn_menu").find(".txt_menu").html("MENU");
		$("#btn_menu").find("#nav-icon").removeClass('open');
		$("#list_menu_sticky_header").slideUp();
	
	}
});	




