<?php
/***
*** @shortcode for displaying list of blogs
***/
add_shortcode('related_sblogs', 'shortcode_related_sblogs');
function shortcode_related_sblogs() {
	$service_slug = get_the_slug();

	$content_shortcode = '';

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
		'paged' => $paged,
		'tax_query' => array(
				array(
						'taxonomy' => 'blog-cat',   // taxonomy name
						'field' => 'slug',         // term_id, slug or name
						'terms' => $service_slug     // term id, term slug or term name
				)
		)
	);

	$the_query = new WP_Query( $args );
	$blog_posts = get_posts($args);
		if($blog_posts) {
			$i=1;
			$content_shortcode .= '<div id="container03" class="clearfix">';
			$content_shortcode .= '<div class="inner clearfix">';
			$content_shortcode .= '<h3 class="title_h301 title_h3_blog " data-wow-delay="0.3s">BLOG <span>ブログ</span></h3>';
			$content_shortcode .= '<div class="list_blog clearfix">';


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

			wp_reset_query();
			wp_reset_postdata();

			$content_shortcode .= '</div>';
	    $content_shortcode .= '<p class="btn btn01 btn_hblue btn_mw500"><a href="'.get_bloginfo('siteurl').'/blog/blog-cat/'.$service_slug.'"><span>もっと見る</span></a></p>';

			$content_shortcode .= '</div>';
			$content_shortcode .= '</div>';
	 	 }
   return $content_shortcode;
 }
