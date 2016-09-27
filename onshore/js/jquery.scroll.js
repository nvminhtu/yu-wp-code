(function($){
	$(function(){
		$('.sticky_contact a').click(function(){
			if ( $( $(this).attr('href') ).length ) {
				var p = $( $(this).attr('href') ).offset();
				$('html,body').animate({ scrollTop: p.top  }, 600);
			}
			return false;
		});
	});
})(jQuery);

$(window).load(function(){
	var hash01 = location.hash;
	if(hash01){
		var p = $("#contact").offset();
		$('html,body').animate({ scrollTop: p.top  }, 600);
	}
});

