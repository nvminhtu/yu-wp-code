<?php
	
	global $wp_query;
	global $post;

	
	if(is_home() || is_front_page()||is_page('index'))
	{
		echo 'id="index"';
	}
	

else if ( is_search() ) {
 	echo 'class="under"';
}
	


	else if( is_page('blog')||get_post_type( get_the_ID() ) == 'post' || is_category() )
	{
		echo 'class="under blog"';
	}
	
	else if( get_post_type( get_the_ID() ) == 'news' || is_tax( 'news' )  )
	{
		echo 'class="under news"';
	}
	
	else if( get_post_type( get_the_ID() ) == 'qa' || is_tax( 'qa' )  )
	{
		echo 'class="under qa"';
	}
	
	else if( get_post_type( get_the_ID() ) == 'album' || is_tax( 'album' )  )
	{
		echo 'class="under album"';
	}
	
	


	else{
		echo 'class="under"';
}
