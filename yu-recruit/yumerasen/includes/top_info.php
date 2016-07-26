<?php
	
	global $wp_query;
	global $post;

	$h2_des = get_post_meta($post->ID, 'desciption_h2',true); 
	
	
	if(is_home() || is_front_page())
	{ 
	$text_main_visual_01 = get_post_meta($post->ID, 'text_main_visual_01',true); 
	$text_main_visual_02 = get_post_meta($post->ID, 'text_main_visual_02',true); 
	?>
    
   <!-- <h2 class="sl01"><?php //echo $text_main_visual_01; ?></h2>
	<h2 class="sl02"><?php // echo $text_main_visual_02; ?></h2>-->
		<!--<h2 class="sl01"><span class="f36">テキストが</span><br />
          <span class="f56">入ります。</span><br />
          <span class="f33">テキストが<br />
          入ります。</span></h2>
        <h2 class="sl02"><span class="f22">テキストが</span><br /><span class="f35">入ります。</span><br /><span class="f20">テキストが<br />入ります。</span></h2>-->
        
      <?php
	}
	
	else if ( is_search() ) {
   ?>
     <h2>検索</h2>

        <?php
}
	
	
	else if( get_post_type( get_the_ID() ) == 'blog' || is_tax( 'blog' )  )
	{
	
		$h2_des_archive =  ptad_get_post_type_description();
		?>
		<h2>ブログ</h2>
        <p class="h2_des"><?php  echo $h2_des_archive; ?></p>
        <?php
	}
	
	else if( get_post_type( get_the_ID() ) == 'news' || is_tax( 'news' )  )
	{
		$h2_des_archive =  ptad_get_post_type_description();
		?>
		<h2>ニュース</h2>
        <p class="h2_des"><?php  echo $h2_des_archive; ?></p>
        <?php
	}
	
	else if( get_post_type( get_the_ID() ) == 'qa' || is_tax( 'qa' )  )
	{
		$h2_des_archive =  ptad_get_post_type_description();
		?>
		<h2>よくあるご質問</h2>
        <p class="h2_des"><?php  echo $h2_des_archive; ?></p>
        <?php
	}
	
	
	else if( get_post_type( get_the_ID() ) == 'album' || is_tax( 'album' )  )
	{
		$h2_des_archive =  ptad_get_post_type_description();
		?>
		<h2>夢楽染アルバム</h2>
        <p class="h2_des"><?php  echo $h2_des_archive; ?></p>
        <?php
	}
	

	
    else if( is_404())
	{ ?>
		<h2>ページが見つかりません</h2>
        <?php
	}
	
	
	else if(is_page())
	{ ?>
		<h2><?php the_title(); ?></h2>
        <p class="h2_des"><?php  echo $h2_des; ?></p>
        <?php
	}
	

	else{
		
}
