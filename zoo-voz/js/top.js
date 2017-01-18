$(function(){
	//$("#totop").hide();	
	//for index		
	$(window).scroll(function () {
		var top_container02 = $("#container02").offset().top;
		if ($(this).scrollTop() > top_container02) {
			$('#sticky_menu_header').fadeIn();
		} else {
			$('#sticky_menu_header').fadeOut();
		}
	});						
});







$(window).bind("resize load",function() {   
 "use strict"; 
	var w_window = $(window).width();
//var h_window = $(window).height();
	var h_box_video_service = w_window*1080/1920;
	//$("#main_video").height(h_box_video_service);
	$("#main_video").css("max-height",h_box_video_service);
});

/*$(window).bind("resize load",function() {   
 "use strict"; 
	var w_window = $(window).width();
//var h_window = $(window).height();
	var h_box_video_service = w_window*1080/1920;
	$("#box_video_service").height(h_box_video_service);
});*/

/* fixed menu for index page */

$(document).ready(function(e) {
    $("#video_play").click(function(){
		$("#video_service")[0].play();
		//$('#video_service')[0].pause();
	});
	
	
	 $(".idex_news_title").click(function(){
		$("#video_main")[0].play();
		//$('#video_service')[0].pause();
	});
	
	
	setTimeout(function(){ $(".idex_news_title").trigger( "click" ); }, 3000);
	
});




/*$(document).ready(function() {   
 "use strict"; 
	  $('#slider_index_list01').bxSlider({
	    mode: 'fade',
		touchEnabled: false,
	  auto: true,
	  speed: 800,
	  pause: 5000,
		
	  });
});*/


