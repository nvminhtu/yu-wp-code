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


$(document).ready(function() {
	"use strict";
	$('#list_cate_works li').click(function(){
		$(this).toggleClass("active");
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



//set width sub_megamenu
$(window).bind("resize load scroll",function(){
		"use strict";
		var w_window = $(window).width();
		$(".sub_megamenu ul").width(w_window);
});	


$(window).bind("load",function(){
	    "use strict";
		$(".sub_megamenu").hover(function(){
		//	var h_menu_top = $(this).height();
			var pos_left = $(this).offset().left;
			//$(".thongso").html(pos_left);
			$(this).find("ul").css({
				"left":-pos_left,
				//"top":h_menu_top
			});
			$(this).addClass("active_hover");
			$(this).find("ul").delay(800).stop(1,0).slideDown();
			
		},function(){
			
			$(this).find("ul").delay(800).stop(1,0).slideUp();
			$(this).removeClass("active_hover");
		});
});	



$(window).bind("load",function(){
	    "use strict";
		$(".sub_menu_top").hover(function(){
			$(this).addClass("active_hover");
			$(this).find("ul").delay(800).stop(1,0).slideDown();
		},function(){
			$(this).find("ul").delay(800).stop(1,0).slideUp();
			$(this).removeClass("active_hover");

		});
});	


//list_menu_sticky_header
$(window).bind("load",function(){
	"use strict";
	var h_window = $(window).height();
	var h_list_menu_sticky_header = h_window - 52;
	$('#btn_menu').click(function(){
		//fix bg outer dark
		//$("#bg_box_out").toggleClass('active');
		$("#bg_box_out").fadeToggle();		
		//nav-icon toggle class open
		$(this).find("#nav-icon").toggleClass('open');
		//list_menu_sticky_header toggle
		$("#nav_menu_sp").css("height",h_list_menu_sticky_header).stop(1,1).slideToggle(300);
	});
	
	$(".sub").each(function() {
        $(this).append("<span class='btn_sub'></span>");
    });
	
	
	$('.btn_sub').click(function(){
		//toggle sub menu
		$(this).parent().find("a").toggleClass("open");
		$(this).parent().find("ul").stop(1,1).slideToggle();
	});
	
/*	
	$('.sub > a').click(function(){
		//toggle sub menu
		$(this)
		.toggleClass("open")
		.next("ul").stop(1,1).slideToggle();
	});*/
	
	
	
});


$(document).ready(function(e) {
	"use strict";
	$(".box_lservice").click(function(){
		 window.location=$(this).find("a").attr("href");
		return false;
	});
	
	/*$(".box_lservice").click(function(e){
		
		if ($(".box_lservice").closest(".blog_list_n").length === 0) {
			
		  
			
		}
		return false;
	});*/
	
	
	$(".box_link").on('click', function (e) {
		"use strict";
		//alert("12312");
		if ($(e.target).closest(".blog_list_n").length === 0) {
			
		     window.location=$(this).find("a").attr("href");
			
		}
	});
	
	
});



$(window).bind('load',function(){
 	var total_cate = $('.box_archive_blog .bloglist_box01').length;
 	$("#more_blog").click(function(){
		 var array_blog = [];
		 var flag = 0;
		 $('.box_archive_blog .bloglist_box01').each(function(index, element) {
           	if($(this).css('display') === 'none'&&flag < 6) {
				flag++;
				$(this).fadeIn(500);
			}
        });
	});
});



$(document).ready(function() {   
 "use strict"; 
	 $(".box_lworks_on").on('click', function (e) {
    	if ($(e.target).closest(".link_woout").length === 0) {
     		  window.location=$(this).find("a.linklw").attr("href");
		}
});
});



$(window).bind("load",function(){
	//hover menu blog on menu

	$(".menu_blog01,#blog_menu_top").hover(function(){
	 	$("#blog_menu_top").stop(1,0).delay(200).slideDown();
		
	},function(){
		$("#blog_menu_top").stop(1,0).delay(200).slideUp();
	});
		//hover menu works on menu
	$(".menu_works01,#works_menu_top").hover(function(){
	 	$("#works_menu_top").stop(1,0).delay(200).slideDown();
		
	},function(){
		$("#works_menu_top").stop(1,0).delay(200).slideUp();
	});
	
	//list single menu
	$("#list_cate_menu01 li a").hover(function(){
		$("#list_cate_menu01 li a").removeClass("is-active");
		$(this).addClass("is-active");
		$(".listsgPost").hide();
		var active_role = $(this).attr("role");
		$(active_role).show();
		
	});
});

























