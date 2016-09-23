<?php

add_theme_support( 'title-tag' );
//add Featured Image
add_theme_support( 'post-thumbnails' );
add_image_size( 'img_blog', 330, 190, true );
add_image_size( 'img_blog01', 370, 214, true );

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

// disable post in menu wp
function remove_menus(){
 remove_menu_page( 'edit.php' );   //Posts
}
add_action( 'admin_menu', 'remove_menus' );

add_filter("wpcf7_mail_tag_replaced", "suppress_wpcf7_filter");
function suppress_wpcf7_filter($value, $sub = ""){
	$out	=	!empty($sub) ? $sub : $value;
	$out	=	strip_tags($out);
	$out	=	wptexturize($out);
	return $out;
}

// required radios
function custom_cf7_required_radio_filter($result, $tag) {
    $name = $tag['name'];

    if ( $tag['type'] == 'radio' && substr($name, -9) == '-required' && empty($_POST[$name])) {
        $result['valid'] = false;
        $result['reason'][$name] = 'Please fill in this required field';
    }
    return $result;
}
add_filter('wpcf7_validate_radio', 'custom_cf7_required_radio_filter', 10, 2);