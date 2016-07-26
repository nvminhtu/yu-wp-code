 <ul>
        <li><a href="<?php bloginfo('url'); ?>">ホーム</a>&gt;</li>
<?php
	
	global $wp_query;
	global $post;

	 if ( is_search() ) {
		echo '<li>検索</li>';
	}
	


	else if( get_post_type( get_the_ID() ) == 'blog' || is_tax( 'blog' )  )
	{
		if(is_single()){
			?>
				 <li><a href="<?php bloginfo('url'); ?>/blog/">ブログ</a>&gt;</li>
				 <li><?php the_title(); ?></li>	   
			<?php
        }
		else if(is_archive()){
			echo '<li>ブログ</li>';
		}
	
	}
	
	else if( get_post_type( get_the_ID() ) == 'news' || is_tax( 'news' )  )
	{
		if(is_single()){
			?>
				 <li><a href="<?php bloginfo('url'); ?>/news/">ニュース</a>&gt;</li>
				 <li><?php the_title(); ?></li>	   
			<?php
        }
		else if(is_archive()){
			echo '<li>ニュース</li>';
		}
	}
	
	else if( get_post_type( get_the_ID() ) == 'qa' || is_tax( 'qa' )  )
	{
		echo '<li>よくあるご質問</li>';
	}
	
	else if( get_post_type( get_the_ID() ) == 'album' || is_tax( 'album' )  )
	{
		echo '<li>夢楽染アルバム</li>';
	}
	
	


	else{ ?>
		<li><?php the_title(); ?></li>
        <?php
	}
?>
</ul>
