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
require_once (dirname(__FILE__) . '/includes/shortcodes.php');
require_once (dirname(__FILE__) . '/includes/list_qa.php');

/* add menu */
if (function_exists('register_nav_menu')) {
  register_nav_menu('main-menu', 'Main Menu');
}

/* disable post in menu wp */
function remove_menus(){
 remove_menu_page( 'edit.php' );   //Posts
}
add_action( 'admin_menu', 'remove_menus' );

define ('WPCF7_AUTOP', 'false');

/* test confirm mail */
add_filter( 'wpcf7_validate_email*', 'custom_email_confirmation_validation_filter', 20, 2 );
function custom_email_confirmation_validation_filter( $result, $tag ) {
    $tag = new WPCF7_Shortcode( $tag );
    if ( 'your-email-confirm' == $tag->name ) {
        $your_email = isset( $_POST['your-email'] ) ? trim( $_POST['your-email'] ) : '';
        $your_email_confirm = isset( $_POST['your-email-confirm'] ) ? trim( $_POST['your-email-confirm'] ) : '';
        if ( $your_email != $your_email_confirm ) {
            $result->invalidate( $tag, "The email addresses do not match." );
        }
    }
    return $result;
}
