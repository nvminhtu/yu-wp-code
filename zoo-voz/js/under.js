
		
$(window).bind("load scroll",function(){
		var top_sticky_menu_header = $("#main").offset().top;
		if ($(this).scrollTop() > top_sticky_menu_header - 99) {
			$('#sticky_menu_header,#header').addClass("fixed");
			$(".sub_megamenu ul").hide();
			$("#main").addClass("menu_fixed");
		} else {
			$('#sticky_menu_header,#header').removeClass("fixed");
			$("#main").removeClass("menu_fixed");
		}
	});						




$(window).bind("load scroll",function(){
	var s_top = $(window).scrollTop();
	var top_sticky_menu_header = $("#main").offset().top;
	var h_under_header = $(".under #header").height();
	var top_blog_menu_top = h_under_header + 99 - s_top ;
	if ($(this).scrollTop() > top_sticky_menu_header - 99) {
		
		$(".under #blog_menu_top").css("top","79px" );
		$(".under #works_menu_top").css("top","79px" );
		
	}
	else{
		$(".under #blog_menu_top").css("top",top_blog_menu_top );
		$(".under #works_menu_top").css("top",top_blog_menu_top );
	}

});