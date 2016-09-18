$(function(){
	var conf = {
		className : 'externalLink'
	};
	$('a[href^="http"]').click(function(){
		window.open(this.href, "_blank");
		return false;
	}).addClass(conf.className);
});