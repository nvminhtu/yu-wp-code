<?php add_shortcode('list_qa', 'shortcode_list_qa');
function shortcode_list_qa() {
	$content_shortcode = '';
	$content_shortcode .= '<div id="container08" class="clearfix">';
	$content_shortcode .= '<div class="inner clearfix">';
	$content_shortcode .= '<h3 class="title01">よくあるご質問</h3>';
	$content_shortcode .= '<div class="box_list_qa clearfix">';

	global $post;
	global $wp_query;
	$args = array(
		'post_type' =>'qa',
		'numberposts' => -1,
		'orderby' => date,
		'order' => desc,
		'field' => 'slug'
	);
	$qa_posts = get_posts($args);
	if($qa_posts) {
		$i=1;
		foreach($qa_posts as $post) : setup_postdata($post);	
			$post_categories = wp_get_post_categories( get_the_ID() );
			$thumb = get_post_thumbnail_id();
			$img_url = wp_get_attachment_url($thumb,'full'); //get full URL to image
			$img_blog = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'img_blog');
			
			$time = get_the_date('Y.m.d', $post->ID);
			$nd = get_the_content();
			$id= get_the_ID();
			$content_shortcode .= '<div class="box_qa clearfix"><dl>';
	        $content_shortcode .= '<dt>Q. 国籍はどこが多いですか？ </dt>';
	        $content_shortcode .= '<dd>A. 主に東南アジア、中国、中東の生徒がほとんどですが、世界各国から生徒として入校しております。</dd>';
	        $content_shortcode .= '</dl></div>';
			
			/*		
			$content_shortcode .= '<div class="blog_box01 box_link">';
			if ( has_post_thumbnail() ) {
				$content_shortcode .= '<p class="blog_img"><a href="'.get_the_permalink().'"><img src="'.$img_blog[0].'" alt="'.get_the_title().'" />';
				if (!empty($check_new_for_blog)){
					$content_shortcode .= '<span class="flag_new"><span>NEW</span></span>';
				}
				$content_shortcode .= '</a></p>';
			}
			$content_shortcode .= '<div class="blog_idx_info"><p class="blog_title">'.get_the_title().'</p>';
			$content_shortcode .= '<p class="blog_des">'.mb_substr(strip_tags($post-> post_content),0,38).'...</p>';
			$content_shortcode .= '<p class="blog_time">'.get_the_time('Y.m.d').'</p></div></div>';
			*/ 
			
			$i++;
		endforeach;
		wp_reset_query();
		wp_reset_postdata();
	} 
	// $content_shortcode .= '</div><p class="btn btn01"><a href="'.get_bloginfo('url').'/blog/">全てのブログを見る</a></p>';
	$content_shortcode .= '</div>';
	$content_shortcode .= '<p class="btn btn01"><a href="#">MORE</a></p>';
	$content_shortcode .= '</div></div>';
 	return $content_shortcode;
 } 