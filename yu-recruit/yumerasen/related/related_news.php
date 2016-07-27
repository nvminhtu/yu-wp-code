<div class="related_post clearfix">
          
            
<h3 class="titleh3_02"><span>関連記事</span></h3>
            <?php

	global $post;
	$postID=$post->ID;
	//echo $tuvan_category_slug;
	// The Query 
	$args = array(  
				'post_type' => 'news',
				'post__not_in' => array($postID),
				'posts_per_page' => 5,
				'orderby' => date,
				'order' => desc,
				'field' => 'slug'
		);
$dem =1;
	$query = new WP_Query( $args );
	// The Loop
 	if ( $query->have_posts() ) {
			while ( $query->have_posts() ) 
            { 
					global $post;
					$query->the_post();
					$time = get_the_date('Y.m.d', $post->ID);
					$thumb = get_post_thumbnail_id();
					$img_url = wp_get_attachment_url($thumb,'full'); //get full URL to image
					$img_blog = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'img_blog');
					?>
                    
                    
           <div class="box_link box_news clearfix">
            <div class="box_news_img">
             <?php if ( has_post_thumbnail() ) { ?>
              <a href="<?php the_permalink(); ?>"><img src="<?php echo $img_blog[0]; ?>" alt="<?php the_title(); ?>" /></a>
              <?php }else{
				  ?>
              <a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/album_img01_dummy.jpg" alt="<?php the_title(); ?>" /></a>
              <?php } ?>
            </div>
            <div class="news_info_archive clearfix">
              <p class="news_title"><?php the_title(); ?></p>
              <p class="news_time"><?php the_time('Y.m.d'); ?></p>
              <p class="news_des"><?php echo mb_substr(strip_tags($post-> post_content),0,38) . '...'; ?></p>
            </div>
          </div>             
<?php
			
			}

		} 
		/* Restore original Post Data */
		wp_reset_query();
wp_reset_postdata(); 

		

?>
 
        
        </div>