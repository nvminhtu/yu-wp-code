
	
$(function a($){

	var $target = $('#sidebar');
	//var min =  $('#header').outerHeight()+$('.slide_top').outerHeight()+$('.topic_path').outerHeight()+45+$('.navi_contact').outerHeight()+5;
	var min = $('#header').outerHeight() + 50;
	//alert(min);
	var w_content = $("#content_blog").width()+50;
	var max = $('#footer').position().top - $target.outerHeight();
	var top = $target.position().top - min;
	var $dummy = $('<div/>').css({
		width: $target.outerWidth() + 'px',
		height: $target.outerHeight() + 'px'
	}).addClass("dummy_navi").insertAfter($target);
		$target.css({
		position: 'fixed',
		top: top,
		right: $target.offset().left
	});

	var timer;
	var dest;
	var scrollTop;
	var callback = function(){
		if($(window).width()>1200){
			
			$target.css({right:"inherit"});
			$target.css({left:$dummy.offset().left + w_content});
		}
		else{
			$target.css({right:"3%"});
			$target.css({left:"auto"});
		}
		
		if( scrollTop != $(window).scrollTop() ) {
			$target.stop();
			if( min  > $(window).scrollTop()+ 80 ){
				$target.css({ top: top + min-$(window).scrollTop() });
			} else if( max < $(window).scrollTop()+ 80 ){
				$target.css({ top: top + max - $(window).scrollTop() });
			} else {
				
				$target.css({ top: top + 90 });
				var sub = scrollTop - $(window).scrollTop();
				sub = sub < 0
						? Math.max( sub, -30 )
						: Math.min( sub, 30 );

			}
			scrollTop = $(window).scrollTop();
		}
	};
	

	
	$(window).bind('scroll resize', callback);
	callback();



	$(window).resize(function() {
		a();
	});



})



