<?php
  /***
  *** @include other blogs for service
  ***/
  add_shortcode('related_blogs', 'shortcode_related_blogs');
  function shortcode_related_blogs() {
  	$content_shortcode = '';
    $content_shortcode .= '<div class="related_box_out clearfix">';
  		$content_shortcode .= '<p class="ptitle_01">おすすめ記事</p>';
      $content_shortcode .= '<div class="related_box_ct clearfix">';

        global $post;
        $postID=$post->ID;
        $args = array(
          'post_type' => 'blog',
          'post__not_in' => array($postID),
          'posts_per_page' => 4,
          'orderby' => date,
          'order' => desc,
          'field' => 'slug'
        );
        $query = new WP_Query( $args );
        // The Loop
        $i = 0;
		$j = 0;
        if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
              global $post;

              $query->the_post();
              $n_posts = $query ->post_count;
              $time = get_the_date('Y.m.d', $post->ID);
              $img_blog = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'img_blog');
              $img_blog_src = $img_blog[0];

              if($i==($n_posts-1) || $i == ($n_posts-2)) {
                $last_class = 'last';
              } else {
                $last_class = '';
              }
			  //set lineheight
				  if($i%2==0) {
					$stt_h = $j++;
				  }

              $content_shortcode .= '<div class="related_box heightLine-'.$stt_h.' clearfix '.$last_class.'">';
        				$content_shortcode .= '<div class="list_latestpost_sb_img"><p><a href="'.get_permalink($post->ID).'">';
                if(has_post_thumbnail($id)) {
                  $content_shortcode .= '<img src="'.$img_blog_src.'" alt="" />';
                } else {
                  $content_shortcode .= '<img src="'.get_bloginfo('template_url').'/images/navi_list_blogimg01.jpg">';
                }

        				$content_shortcode .= '</a></p></div>';
        				$content_shortcode .= '<div class="list_latestpost_sb_ct">';
        					$content_shortcode .= '<p class="list_latestpost_sb_title"><a href="'.get_permalink($post->ID).'">'.get_the_title($post->ID).'</a></p>';
        					$content_shortcode .= '<p class="list_latestpost_sb_date">'.$time.'</p>';
        				$content_shortcode .= '</div>';
        			$content_shortcode .= '</div>';
              $i++;
            }
         }
         /* Restore original Post Data */
         wp_reset_query();
         wp_reset_postdata();

  		$content_shortcode .= '</div>';
  		$content_shortcode .= '<p class="link_related"><a href="'.get_bloginfo('siteurl').'/blog/">その他の記事一覧</a></p>';
  	$content_shortcode .= '</div>';

  	return $content_shortcode;
  }
