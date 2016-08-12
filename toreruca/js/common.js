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

