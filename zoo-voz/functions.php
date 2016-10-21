<?php
/*** 01.Add support for theme ***/
add_theme_support( 'title-tag' );

// add Featured Image
add_theme_support( 'post-thumbnails' );
add_image_size( 'img_blog', 312, 234, true );
add_image_size( 'img_blog_thanks', 200, 120, true );
add_image_size( 'img_archive_blog', 307, 234, true );
add_image_size( 'img_archive_service', 800, 478, true );
add_image_size( 'img_works_home', 337, 274, true );
add_image_size( 'img_works_archive', 446, 260, true );
add_image_size( 'img_other_blogs', 92, 70, true );
add_image_size( 'img_sidebar', 92, 70, true );
add_image_size( 'img_sub_menu', 220, 130, true );
add_image_size( 'img_news', 240, 160, true );

remove_filter( 'the_excerpt', 'wpautop' );
remove_filter( 'the_content', 'wpautop' );

// increa limit upload file
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

/*** 02.Add included files ***/
require_once (dirname(__FILE__) . '/includes/add-image-size.php');
require_once (dirname(__FILE__) . '/includes/custom-post-types.php');
require_once (dirname(__FILE__) . '/includes/widgets.php');
require_once (dirname(__FILE__) . '/includes/pagination.php');
require_once (dirname(__FILE__) . '/includes/admin-metabox.php');
// require_once (dirname(__FILE__) . '/includes/admin-options.php');

// ------ require shortcode ----
require_once (dirname(__FILE__) . '/includes/shortcode.php');
require_once (dirname(__FILE__) . '/includes/shortcode-sidebar.php');
require_once (dirname(__FILE__) . '/includes/shortcode-list-works.php');
require_once (dirname(__FILE__) . '/includes/shortcode-list-blog.php');
require_once (dirname(__FILE__) . '/includes/shortcode-list-news.php');
require_once (dirname(__FILE__) . '/includes/shortcode-related-blogs.php');
require_once (dirname(__FILE__) . '/includes/shortcode-related-sblogs.php');
require_once (dirname(__FILE__) . '/includes/shortcode-other-blogs.php');

// ------ alloww shortcode in widget text
add_filter( 'widget_text', 'shortcode_unautop');
add_filter( 'widget_text', 'do_shortcode');

/*** 03.Setting for theme ***/
if (function_exists('register_nav_menu')) {
  register_nav_menu('sticky-menu-pc', 'Sticky Menu PC');
  register_nav_menu('sticky-menu-sp', 'Sticky Menu SP');
  register_nav_menu('service-menu', 'Service Menu');
  register_nav_menu('top-menu', 'Top Menu');
}
// disable post in menu wp
function remove_menus(){
 remove_menu_page( 'edit.php' ); //remove Posts
}
add_action( 'admin_menu', 'remove_menus' );

function add_custom_query_var( $vars ){
  $vars[] = "category";
  return $vars;
}
add_filter( 'query_vars', 'add_custom_query_var' );

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

//this adds the function above to the 'pre_get_posts' action
// function custom_posts_per_page($query) {
//     if (is_home()||is_front_page()) {
//         $query->set('posts_per_page', 4);
//     }
//     else if (is_search()) {
//         $query->set('posts_per_page', -1);
//     } else {
//         $query->set('posts_per_page', -1);
//     } //endif
// }
// add_action('pre_get_posts', 'custom_posts_per_page');

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
