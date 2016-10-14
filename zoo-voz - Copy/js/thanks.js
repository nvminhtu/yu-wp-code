
        	$(window).scroll(function(){
		
				if($(window).scrollTop()===0 ){
					$("#sticky_menu_header").removeClass("fixed");
					$("#main").removeClass("mfixed");
				}
				else{
					$(".sub_megamenu ul").hide();
					$("#sticky_menu_header").addClass("fixed");
					$("#main").addClass("mfixed");
				}
			});