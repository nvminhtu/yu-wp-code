<?php

add_theme_support( 'title-tag' );
//add Featured Image
add_theme_support( 'post-thumbnails' );
add_image_size( 'img_blog', 330, 190, true );

remove_filter( 'the_excerpt', 'wpautop' );
remove_filter( 'the_content', 'wpautop' );

/*increa limit upload file*/
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

require_once (dirname(__FILE__) . '/includes/add_image_size.php');
require_once (dirname(__FILE__) . '/includes/create_posttype.php');
require_once (dirname(__FILE__) . '/includes/shortcode.php');
require_once (dirname(__FILE__) . '/includes/list-blog.php');

// add menu
if (function_exists('register_nav_menu')) {
  register_nav_menu('main-menu', 'Main Menu');
}

add_filter("wpcf7_mail_tag_replaced", "suppress_wpcf7_filter");
function suppress_wpcf7_filter($value, $sub = ""){
	$out	=	!empty($sub) ? $sub : $value;
	$out	=	strip_tags($out);
	$out	=	wptexturize($out);
	return $out;
}