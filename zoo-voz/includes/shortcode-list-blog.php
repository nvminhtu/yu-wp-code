<?php
/***
*** @shortcode for displaying list of blogs
***/
add_shortcode('list_blog', 'shortcode_list_blog');
function shortcode_list_blog() {
	$content_shortcode = '';
	$content_shortcode .= '<h3 class="title_h301 title_h3_blog " data-wow-delay="0.3s">BLOG <span>ブログ</span></h3>';
	$content_shortcode .= '<div class="list_blog clearfix">';
	global $post;
	global $wp_query;
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

	$args = array(
		'post_type' =>'blog',
		'numberposts' => -1,
    'posts_per_page' => 4,
		'orderby' => date,
		'order' => desc,
		'field' => 'slug',
		'paged' => $paged
	);

	$the_query = new WP_Query( $args );
	$blog_posts = get_posts($args);
		if($blog_posts) {
		$i=1;

		foreach($blog_posts as $post) : setup_postdata($post);
			$thumb = get_post_thumbnail_id();
			$img_url = wp_get_attachment_url($thumb,'full');
			$img_blog = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'img_blog');

			$img_blog_src = $img_blog[0];

			$time = get_the_date('Y.m.d', $post->ID);
			$nd = get_the_content();
			$id= get_the_ID();
			$check_new_for_blog = get_post_meta($post->ID, 'check_new_for_blog',true);

			$content_shortcode .= '<div class="blog_box01 col col4 wow postItem heightLine-blog01" data-wow-duration="0.5s" data-wow-delay="0.3s" data-wow-offset="180">';
			$content_shortcode .= '<p class="blog_img"><a href="'.get_permalink().'">';

			if(has_post_thumbnail($id)) {
				$content_shortcode .= '<img src="'.$img_blog_src.'" alt="" />';
			} else {
				$content_shortcode .= '<img src="'.get_bloginfo('template_url').'/images/img_blog01.png" alt="" />';
			}

			if (!empty($check_new_for_blog)){
				$content_shortcode .= '<span class="flag_new">';
				$content_shortcode .= '<img src="'.get_bloginfo('template_url').'/images/icon_flagnew01.png" alt="" /></span>';
			}

			$content_shortcode .= '<span class="blog_time">'.$time.'</span></a></p>';
				$content_shortcode .= '<div class="blog_idx_info clearfix">';
					$content_shortcode .= '<p class="blog_title"><a href="'.get_the_permalink().'">'.get_the_title().'</a></p>';

						$terms = wp_get_post_terms($post->ID, 'blog-cat', '');
						if ( !empty( $terms ) && !is_wp_error( $terms ) ){
								 $content_shortcode .= '<ul class="blog_list_tag clearfix">';
								 foreach ( $terms as $term ) {
									 $content_shortcode .= '<li><a href="'.get_term_link($term).'">'.$term->name.'</a></li>';
								 }
								 $content_shortcode .= '</ul>';
						 }

				$content_shortcode .= '</div>';
			$content_shortcode .= '</div>';
				$i++;
			endforeach;

			/* -------------------------
				custom pagination
			----------------------------*/
			$range = 4;
			global $paged;

		/*	if(empty($paged)) $paged = 1;
			if($pages == '') {
					$orig_query = $wp_query; // fix for pagination to work
					$wp_query =  $the_query;
					$pages = $wp_query->max_num_pages;

					if(!$pages){
							$pages = 1;
					}
			}*/

				/* if(1 != $pages) {
					$content_shortcode .= '<div class="navi_list clearfix"><ul>';
					if($paged > 1) {
						$content_shortcode .= '<li class="prev_page"><span>&lsaquo; Previous</span></a></li>';
					} else {
						$content_shortcode .= '<li class="prev_page disable"><a href="'.get_pagenum_link($paged - 1).'">&lsaquo; Previous</a></li>';
					}

					for ($i=1; $i <= $pages; $i++) {
						if (1 != $pages) {
									if($paged == $i) {
										$content_shortcode .= '<li class="active"><span class="current">'.$i.'</span></li>';
									} else {
										$content_shortcode .= '<li><a href="'.get_bloginfo('siteurl').'/blog/page/'.$i.'" class="inactive">'.$i.'</a></li>';
									}
							}
					}
					$next_page = $paged + 1;
					if ($paged < $pages) $content_shortcode .= '<li class="next_page"><a href="'.get_bloginfo('siteurl').'/blog/page/'.$next_page.'">Next &rsaquo;</a>';
					$content_shortcode .= '</ul></div>';
			}
				$wp_query = $orig_query;
			*/


			wp_reset_query();
			wp_reset_postdata();
	 	 }
	 $content_shortcode .= '</div>';
   $content_shortcode .= '<p class="btn btn01 btn_hblue btn_mw500"><a href="'.get_bloginfo('siteurl').'/blog/"><span>もっと見る</span></a></p>';
	 /* -------------------------
		 end custom pagination
	 ----------------------------*/

   return $content_shortcode;
 }
