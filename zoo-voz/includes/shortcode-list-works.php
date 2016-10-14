<?php
/***
*** @shortcode for displaying list of blogs
***/
add_shortcode('list_works', 'shortcode_list_works');
function shortcode_list_works() {
	$content_shortcode = '';
	$content_shortcode .= '<h3 class="title_h301 title_h3_works " data-wow-delay="0.3s">WORKS<br />';
	$content_shortcode .= '<span>実績紹介</span></h3>';
	$content_shortcode .= '<div class="list_works clearfix">';
	global $post;
	global $wp_query;
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

	$args = array(
		'post_type' =>'work',
		'numberposts' => 4,
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
			$img_works_home = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'img_works_home');
			$img_works_home_src = $img_works_home[0];
			$work_client_name = get_field('work_client_name',$post->ID);
			$work_product_link = get_field('work_product_link',$post->ID);
			$work_product_sub_title = get_field('work_product_sub_title',$post->ID);
			$work_product_cost = get_field('work_product_cost',$post->ID);
			$work_product_period = get_field('work_product_period',$post->ID);

			$time = get_the_date('Y.m.d', $post->ID);
			$nd = get_the_content();
			$id= get_the_ID();
			$work_content = get_the_content($id);
			$link_work = get_the_permalink();
			$check_new_for_blog = get_post_meta($post->ID, 'check_new_for_blog',true);

			$service_objects = get_field('selected_service',$post->ID);
			if( $service_objects ):
				foreach( $service_objects as $post2):
						$service_id = $post2->ID;
				endforeach;
			endif;
			$color_code = get_field('service_color',$service_id);
			$color_codes = explode("#", $color_code);
			$color_class= 'service-'.$color_codes[1];

			$content_shortcode .= '<div class="box_lworks '.	$color_class.' clearfix wow postItem" data-wow-duration="0.5s" data-wow-delay="0.3s" data-cat-color="'.$color_code.'">';
				$content_shortcode .= '<p class="img_lworks"><a href="'.get_permalink($post->ID).'">';

				//get featured image
				if ( has_post_thumbnail($id) ) {
					$content_shortcode .= '<img src="'.$img_works_home_src.'" alt="'.get_the_title().'" />';
				} else {
					$content_shortcode .= '<img src="'.get_bloginfo('template_url').'/images/list_works.png" alt="'.get_the_title().'" />';
				}

				//get services of works
				$post_objects = get_field('selected_service',$post->ID);

				if( $post_objects ):
					foreach( $post_objects as $post_cat):
							$content_shortcode .= '<span class="cate_works">'.get_the_title($post_cat->ID).'</span>';
					endforeach;
          wp_reset_postdata();
        endif;

				$content_shortcode .= '</a></p>';

				$content_shortcode .= '<div class="box_lworks_on">';
					$content_shortcode .= '<p class="lworks_on_title"><a class="linklw" href="'.$link_work.'">'.get_the_title($id).'</a></p>';
					$content_shortcode .= '<p class="lworks_on_title_sub">- '.$work_product_sub_title.' - </p>';
					$content_shortcode .= '<p class="lworks_on_des">';
						$content_shortcode .= mb_substr(strip_tags($work_content),0,55) . '...';
					$content_shortcode .= '</p>';
					$content_shortcode .= '<ul class="list_price">';
						$content_shortcode .= '<li>'.$work_product_cost.'</li>';
						$content_shortcode .= '<li>'.$work_product_period.'</li>';
					$content_shortcode .= '</ul>';
					// $content_shortcode .= $work_content;
					$content_shortcode .= '<p class="title_site_adv">'.$work_client_name.'<br />';
					$content_shortcode .= '<a class="link_woout" href="'.$work_product_link.'" target="_blank">'.$work_product_link.'</a></p>';
				$content_shortcode .= '</div>';
				$content_shortcode .= '<div class="title_lworks_out"><p class="title_lworks">'.get_the_title($id).'</p></div>';
				$content_shortcode .= '</div>';

				$i++;
			endforeach;
			wp_reset_query();
			wp_reset_postdata();
	 	 }
	 $content_shortcode .= '</div>';
   $content_shortcode .= '<p class="btn btn01 btn_hblue btn_mw500"><a href="'.get_bloginfo('siteurl').'/work/"><span>もっと見る</span></a></p>';

   return $content_shortcode;
 }
