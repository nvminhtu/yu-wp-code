<?php
/***
***  @shortcode for displaying list of news
***/
add_shortcode('list_news', 'shortcode_list_news');
function shortcode_list_news() {
	$content_shortcode = '';
	global $post;
	global $wp_query;

	$args = array(
		'post_type' =>'news',
		'numberposts' => 1,
		'orderby' => date,
		'order' => desc,
		'field' => 'slug'
	);

	$blog_posts = get_posts($args);
	if($blog_posts) {
		$i=1;
	  foreach($blog_posts as $post) : setup_postdata($post);

			$time = get_the_date('Y.m.d', $post->ID);
			$nd = get_the_content();
			$id= get_the_ID();

			$content_shortcode .= '<div class="box_news_idx clearfix  " data-wow-delay="1s">';
			$content_shortcode .= '<div class="idex_news_title clearfix">';
			$content_shortcode .= '<p>お知らせ</p>';
			$content_shortcode .= '</div>';
			$content_shortcode .= '<div class="idex_news_ct clearfix">';
				$content_shortcode .= '<p class="news_date_sidx">'.$time.'</p>';
				$content_shortcode .= '<p class="news_title_sidx"><a href="'.get_permalink().'">'.get_the_title().'</a></p>';
			$content_shortcode .= '</div>';
			$content_shortcode .= '<div class="idex_news_btnmore clearfix">';
				$content_shortcode .= '<p id="btn_all_news"><a href="'.get_bloginfo('siteurl').'/news/"><span>MORE</span></a></p>';
			$content_shortcode .= '</div>';
			$content_shortcode .= '</div>';
		$i++;
	endforeach;
	wp_reset_query();
	wp_reset_postdata(); ?>
<?php }
   return $content_shortcode;
 } ?>
