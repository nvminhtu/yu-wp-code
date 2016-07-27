<?php

//add Featured Image
add_theme_support( 'post-thumbnails' );

add_image_size( 'img_blog', 370, 286, true );
add_image_size( 'img_blog_m', 100, 100, true );
add_image_size( 'img_blog_l', 800, 600, true );
add_image_size( 'img_video', 370, 208, true );
add_image_size( 'img_album_gallery', 285, 214, true );

remove_filter( 'the_excerpt', 'wpautop' );
remove_filter( 'the_content', 'wpautop' );
/*increa limit upload file*/
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );
/*--add feature images--*/
require_once (dirname(__FILE__) . '/includes/add_image_size.php');
/*--create post type--*/
require_once (dirname(__FILE__) . '/includes/create_posttype.php');

// add shortcode

require_once (dirname(__FILE__) . '/includes/shortcode.php');
require_once (dirname(__FILE__) . '/includes/list_blog.php');
require_once (dirname(__FILE__) . '/includes/admin_metabox.php');
// add menu

if (function_exists('register_nav_menu'))
 {
 register_nav_menu('main-menu', 'Main Menu');
 }
//add widget
function list_menu_sticky_header()
 {
 register_sidebar(array(
  'name' => 'list_menu_sticky_header',
  'class' => 'list_menu_sticky_header',
  'description' => 'this is list_menu_sticky_header',
  'before_title' => '<dt>',
  'after_title' => '</dt>',
  'before_widget' => '<dl>',
  'after_widget' => '</dl>',
 ));
 }
add_action('widgets_init', 'list_menu_sticky_header');

function list_menu_sticky_footer()
 {
 register_sidebar(array(
  'name' => 'list_menu_sticky_footer',
  'class' => 'list_menu_sticky_footer',
  'description' => 'this is list_menu_sticky_footer',
  'before_title' => '<dt>',
  'after_title' => '</dt>',
  'before_widget' => '<dl>',
  'after_widget' => '</dl>',
 ));
 }
add_action('widgets_init', 'list_menu_sticky_footer');

function sticky_header_list_entry()
 {
 register_sidebar(array(
  'name' => 'sticky_header_list_entry',
  'class' => 'sticky_header_list_entry',
  'description' => 'this is sticky_header_list_entry',
  'before_title' => '<dt>',
  'after_title' => '</dt>',
  'before_widget' => '<dl>',
  'after_widget' => '</dl>',
 ));
 }
add_action('widgets_init', 'sticky_header_list_entry');

//add widget footer
function footer_link_col1()
 {
 register_sidebar(array(
  'name' => 'footer_link_col1',
  'class' => 'footer_link_col1',
  'description' => 'this is footer_link_col1',
  'before_title' => '<dt>',
  'after_title' => '</dt>',
  'before_widget' => '<dl>',
  'after_widget' => '</dl>',
 ));
 }
add_action('widgets_init', 'footer_link_col1');

function footer_link_col2()
 {
 register_sidebar(array(
  'name' => 'footer_link_col2',
  'class' => 'footer_link_col2',
  'description' => 'this is footer_link_col2',
  'before_title' => '<dt>',
  'after_title' => '</dt>',
  'before_widget' => '<dl>',
  'after_widget' => '</dl>',
 ));
 }
add_action('widgets_init', 'footer_link_col2');

function footer_link_col3()
 {
 register_sidebar(array(
  'name' => 'footer_link_col3',
  'class' => 'footer_link_col3',
  'description' => 'this is footer_link_col3',
  'before_title' => '<dt>',
  'after_title' => '</dt>',
  'before_widget' => '<dl>',
  'after_widget' => '</dl>',
 ));
 }
add_action('widgets_init', 'footer_link_col3');



/*function post_type_tags_fix($request) {
	if ( isset($request['tag']) && !isset($request['post_type']) )
	//$request['post_type'] = 'skills';
	 $request['post_type'] = array( 'voice',  'news' ,'post');
	return $request;
}
add_filter('request', 'post_type_tags_fix');

function filter_search($query) {
    if ($query->is_search) {
	$query->set('post_type', array('voice',  'news' ,'post'));
    };
    return $query;
};*/


/*************************           content_by_id         ****************************************/
function close_tags($text) {
    $patt_open    = "%((?<!</)(?<=<)[\s]*[^/!>\s]+(?=>|[\s]+[^>]*[^/]>)(?!/>))%";
    $patt_close    = "%((?<=</)([^>]+)(?=>))%";
    if (preg_match_all($patt_open,$text,$matches))
    {
        $m_open = $matches[1];
        if(!empty($m_open))
        {
            preg_match_all($patt_close,$text,$matches2);
            $m_close = $matches2[1];
            if (count($m_open) > count($m_close))
            {
                $m_open = array_reverse($m_open);
                foreach ($m_close as $tag) $c_tags[$tag]++;
                foreach ($m_open as $k => $tag)    if ($c_tags[$tag]--<=0) $text.='</'.$tag.'>';
            }
        }
    }
    return $text;
}
function content_by_id($num, $id) {
	$post_content = get_post($id);
	//$show_content = wp_trim_words($post_content->post_content,5);
	$show_content = $post_content->post_content;
	$pos=strpos($show_content, ' ', 10);
	$result= substr($show_content,0,$pos );

	$theContent = $post_content ->post_content;
	$output = preg_replace('/<img[^>]+./','', $theContent);
	//$limit = $num;
	$content = explode(' ', $output, $limit);
	//array_pop($content);
	$content = implode(" ",$content);
	//$content = strip_tags($content, '<p><a><address><a><abbr><acronym><b><big><blockquote><br><caption><cite><class><code><col><del><dd><div><dl><dt><em><font><h1><h2><h3><h4><h5><h6><hr><i><img><ins><kbd><li><ol><p><pre><q><s><span><strike><strong><sub><sup><table><tbody><td><tfoot><tr><tt><ul><var>');
	$a = close_tags($content);
	$b= $a." ...";
	return $result;
}

function get_the_popular_excerpt(){
$excerpt = get_the_content();
$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
$excerpt = strip_shortcodes($excerpt);
$excerpt = strip_tags($excerpt);
$excerpt = substr($excerpt, 0, 10);
$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
$excerpt = $excerpt.'... <a href="'.$permalink.'">more</a>';
return $excerpt;
}

function truncate ( $length) {
	$str = get_the_content();
    if (strlen($str) > $length) {
        $str = substr($str, 0, $length+1);
        $pos = strrpos($str, ' ');
        $str = substr($str, 0, ($pos > 0)? $pos : $length);
    }
    return $str;
}


/* test confirm mail */

add_filter( 'wpcf7_validate_email*', 'custom_email_confirmation_validation_filter', 20, 2 );

function custom_email_confirmation_validation_filter( $result, $tag ) {
    $tag = new WPCF7_Shortcode( $tag );

    if ( 'your-email-confirm' == $tag->name ) {
        $your_email = isset( $_POST['your-email'] ) ? trim( $_POST['your-email'] ) : '';
        $your_email_confirm = isset( $_POST['your-email-confirm'] ) ? trim( $_POST['your-email-confirm'] ) : '';

        if ( $your_email != $your_email_confirm ) {
            $result->invalidate( $tag, "Are you sure this is the correct address?" );
        }
    }

    return $result;
}


/* disable post in menu wp */
function remove_menus(){
 remove_menu_page( 'edit.php' );   //Posts
}
add_action( 'admin_menu', 'remove_menus' );

define ('WPCF7_AUTOP', 'false');

remove_filter('the_content', 'wpautop');

add_filter( 'wpcf7_messages', 'confirm_email_messages');

function confirm_email_messages($messages) {
    $messages['invalid_confirm_email'] = array(
            'description' => __('The email addresses do not match.'),
            'default' => __('The email addresses do not match.'),
        );

        return $messages;
}
