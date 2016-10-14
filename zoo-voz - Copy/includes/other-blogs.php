<?php
/***
*** @shortcode for displaying other blogs
***/
add_shortcode('other_articles', 'shortcode_other_articles');
function shortcode_other_articles() {
	$content_shortcode = '';
	$post_objects = get_field('select_other_blogs',$post->ID);
	if( $post_objects ):
		foreach( $post_objects as $post):
			$time = get_the_date('Y.m.d', $post->ID);
			$img_other_blogs = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'img_other_blogs');
			$img_other_blogs_src = $img_other_blogs[0];
			setup_postdata($post);
			$content_shortcode .= '<div class="other_articles">
				<div class="list_latestpost_sb_img">
					<p><a href="'.get_permalink($post->ID).'">';
					//get featured image
					if ( has_post_thumbnail($post->ID) ) {
						$content_shortcode .='<img src="'.$img_other_blogs_src.'" alt="'.get_the_title($post->ID).'"  />';
					} else {
						$content_shortcode .='<img src="'.get_bloginfo('template_url').'/images/navi_list_blogimg01.jpg">';
					}
					$content_shortcode .= '</a></p>
				</div>
				<div class="list_latestpost_sb_ct">
					<p class="list_latestpost_sb_title"><a href="'.get_permalink($post->ID).'">'.get_the_title($post->ID).'</a></p>
					<p class="list_latestpost_sb_date">'.$time.'</p>
				</div>
			</div>';

		endforeach;
		wp_reset_postdata();
	endif;

	return $content_shortcode;
}
