<?php 
add_shortcode('list_blog', 'shortcode_list_blog');
function shortcode_list_blog() {
	$content_shortcode = '';
	$content_shortcode .= '<div class="clearfix">';
	?>
<?php
global $post;
global $wp_query;
$args = array(
'post_type' =>'blog',
'numberposts' => 3,
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
$img_url = wp_get_attachment_url($thumb,'full'); //get full URL to image
$img_blog = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'img_blog');
//$img_thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'img_blog'); //get full URL to image
$time = get_the_date('Y.m.d', $post->ID);
$nd = get_the_content();
$id= get_the_ID();
$check_new_for_blog = get_post_meta($post->ID, 'check_new_for_blog',true);

		
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

?>
	
<?php 
$i++;
endforeach;
wp_reset_query();
 wp_reset_postdata(); ?>
<?php } 

$content_shortcode .= '</div><p class="btn btn01"><a href="'.get_bloginfo('url').'/blog/">全てのブログを見る</a></p>';
 return $content_shortcode;
 } ?>
