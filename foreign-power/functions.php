<?php
/*** 01.Add support for theme ***/
add_theme_support( 'title-tag' );

// add Featured Image
add_theme_support( 'post-thumbnails' );
//add_image_size( 'img_blog', 312, 234, true );

remove_filter( 'the_excerpt', 'wpautop' );
remove_filter( 'the_content', 'wpautop' );


/*** 02.Add included files ***/
require_once (dirname(__FILE__) . '/includes/custom-post-types.php');

// ------ require shortcode ----
require_once (dirname(__FILE__) . '/includes/shortcode.php');

// ------ alloww shortcode in widget text
add_filter( 'widget_text', 'do_shortcode');


// disable post in menu wp
function remove_menus(){
 remove_menu_page( 'edit.php' ); //remove Posts
}
add_action( 'admin_menu', 'remove_menus' );

function get_the_slug( $id=null ){
  if( empty($id) ):
    global $post;
    if( empty($post) )
      return ''; // No global $post var available.
    $id = $post->ID;
  endif;

  $slug = basename( get_permalink($id) );
  return $slug;
}


// trim the string function
function trim_word($text, $length, $startPoint=0, $allowedTags=""){
    $text = html_entity_decode(htmlspecialchars_decode($text));
    $text = strip_tags($text, $allowedTags);
    return $text = substr($text, $startPoint, $length);
}

// First, create a function that includes the path to your favicon
function add_favicon() {
  	$favicon_url = get_stylesheet_directory_uri() . '/images/favicon.ico';
	  echo '<link rel="shortcut icon" href="' . $favicon_url . '" />';
}

// Now, just make sure that function runs when you're on the login page and admin pages
add_action('login_head', 'add_favicon');
add_action('admin_head', 'add_favicon');

add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );