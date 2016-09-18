$(function(){
	//$("#totop").hide();	
	//for index		
	$(window).scroll(function () {
		var top_sticky_menu_header = $("#main").offset().top;
		if ($(this).scrollTop() > top_sticky_menu_header - 99) {
			$('#sticky_menu_header,#header').addClass("fixed");
			$(".sub_megamenu ul").hide();
		} else {
			$('#sticky_menu_header,#header').removeClass("fixed");
		}
	});						
});
