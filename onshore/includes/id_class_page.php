<?php
	
	global $wp_query;
	global $post;

	
	if(is_home() || is_front_page()||is_page('index'))
	{
		echo 'id="index"';
	}
		
	else if(is_page('test-home')){
		echo 'class="under"';
}
else{
		echo 'id="index"';
}