<?php 
add_shortcode('list_blog', 'shortcode_list_blog');
function shortcode_list_blog() {
	$content_shortcode = '';
	$content_shortcode .= '<div class="slide_blog clearfix">';
	?>
<?php
	global $post;
	global $wp_query;
	$args = array(
	'post_type' =>'blog',
	'numberposts' => -1,
	'orderby' => date,
	'order' => desc,
	'field' => 'slug'
	);
	$blog_posts = get_posts($args);
	if($blog_posts) {
	$i=1;
?>
	<?php
	foreach($blog_posts as $post) : setup_postdata($post);	
		$post_categories = wp_get_post_categories( get_the_ID() );
		$thumb = get_post_thumbnail_id();
		$img_url = wp_get_attachment_url($thumb,'full');
		$img_blog = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'img_blog');
		
		$time = get_the_date('Y.m.d', $post->ID);
		$nd = get_the_content();
		$id= get_the_ID();

		$content_shortcode .= '<div class="slide_box hover">';
		if ( has_post_thumbnail() ) {
			$content_shortcode .= '<p class="slide_img"><a href="'.get_the_permalink().'"><img src="'.$img_blog[0].'" alt="'.get_the_title().'" /></a></p>';
		}
	    $content_shortcode .= '<p class="title_blog01"><a href="'.get_the_permalink().'">'.get_the_title().'</a></p>';
	    $content_shortcode .= '<p class="txt_des">'.mb_substr(strip_tags($post->post_content),0,38).'...</p>';
	    $content_shortcode .= '<p class="blog_date">'.$time.'</p>';
	    $content_shortcode .= '</div>';
		$i++;
	endforeach;
	wp_reset_query();
	wp_reset_postdata(); ?>
<?php }
   $content_shortcode .= '</div>';
   return $content_shortcode;
 } ?>