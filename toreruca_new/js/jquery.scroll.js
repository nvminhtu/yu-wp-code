/*(function($){
	$(function(){
		$('a[href^="#"]').click(function(){
			if ( $( $(this).attr('href') ).length ) {
				var p = $( $(this).attr('href') ).offset();
				$('html,body').animate({ scrollTop: p.top - 73 }, 600);
			}
			return false;
		});
	});
})(jQuery);
*/

(function($){
	$(function(){
		$('#toTop a[href^="#"]').click(function(){
			if ( $( $(this).attr('href') ).length ) {
				var p = $( $(this).attr('href') ).offset();
				$('html,body').animate({ scrollTop: p.top }, 600);
			}
			return false;
		});
	});
})(jQuery);




//totop
$(document).ready(function(e) {
     $("#toTop").hide();
	$(window).scroll(function () {
	 if ($(this).scrollTop() > 200) {
	 $("#toTop").fadeIn();
	 } else {
	 $("#toTop").fadeOut();
	 }
	});
});