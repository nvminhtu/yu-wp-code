<?php
  /***
  *** CPT: Create custom post types
  ***/

/* Step 1 - CPT: Register Post type
----------------------------------------------*/
function prefix_register_post_type(){
	register_post_type(
		'shop',
		array(
			'labels'        => array(
				'name'               => __('Shop', 'text_domain'),
				'singular_name'      => __('Shop', 'text_domain'),
				'menu_name'          => __('Shop', 'text_domain'),
				'name_admin_bar'     => __('Shop Item', 'text_domain'),
				'all_items'          => __('All Items', 'text_domain'),
				'add_new'            => _x('Add New', 'shop', 'text_domain'),
				'add_new_item'       => __('Add New Item', 'text_domain'),
				'edit_item'          => __('Edit Item', 'text_domain'),
				'new_item'           => __('New Item', 'text_domain'),
				'view_item'          => __('View Item', 'text_domain'),
				'search_items'       => __('Search Items', 'text_domain'),
				'not_found'          => __('No items found.', 'text_domain'),
				'not_found_in_trash' => __('No items found in Trash.', 'text_domain'),
				'parent_item_colon'  => __('Parent Items:', 'text_domain'),
			),
			'public'        => true,
			'menu_position' => 5,
			'supports'      => array(
				'title',
				'thumbnail',
				'excerpt',
				'custom-fields',
        'author',
        'excerpt',
        'trackbacks',
        'comments',
        'revisions',
        'page-attributes'
			),
			'has_archive'   => 'true',
			'rewrite' => false
		)
	);
}
add_action('init', 'prefix_register_post_type');

/* Step 2 - CPT: Setup %Tag% for permalink
----------------------------------------------*/
global $wp_rewrite;
$shop_structure = '/shop/%shop%';
$wp_rewrite->add_rewrite_tag("%shop%", '([^/]+)', "shop=");
$wp_rewrite->add_permastruct('shop', $shop_structure, false);
/* Step 3 - CPT: Translate Post type link for permalink
----------------------------------------------*/
add_filter('post_type_link', 'shop_permalink', 10, 3);
//@Adapted from get_permalink function in wp-includes/link-template.php
function shop_permalink($permalink, $post_id, $leavename) {
  $post = get_post($post_id);
  $rewritecode = array(
      '%year%',
      '%monthnum%',
      '%day%',
      '%hour%',
      '%minute%',
      '%second%',
      $leavename? '' : '%postname%',
      '%post_id%',
      '%category%',
      '%author%',
      $leavename? '' : '%pagename%',
  );

  if ( '' != $permalink && !in_array($post->post_status, array('draft', 'pending', 'auto-draft')) ) {
      $unixtime = strtotime($post->post_date);

      $category = '';
      if ( strpos($permalink, '%category%') !== false ) {
          $cats = get_the_category($post->ID);
          if ( $cats ) {
              usort($cats, '_usort_terms_by_ID'); // order by ID
              $category = $cats[0]->slug;
              if ( $parent = $cats[0]->parent )
                  $category = get_category_parents($parent, false, '/', true) . $category;
          }
          // show default category in permalinks, without
          // having to assign it explicitly
          if ( empty($category) ) {
              $default_category = get_category( get_option( 'default_category' ) );
              $category = is_wp_error( $default_category ) ? '' : $default_category->slug;
          }
      }

      $author = '';
      if ( strpos($permalink, '%author%') !== false ) {
          $authordata = get_userdata($post->post_author);
          $author = $authordata->user_nicename;
      }

      $date = explode(" ",date('Y m d H i s', $unixtime));
      $rewritereplace =
      array(
          $date[0],
          $date[1],
          $date[2],
          $date[3],
          $date[4],
          $date[5],
          $post->post_name,
          $post->ID,
          $category,
          $author,
          $post->post_name,
      );
      $permalink = str_replace($rewritecode, $rewritereplace, $permalink);
  }
  else { // if they're not using the fancy permalink option

  }
  return $permalink;
}
add_filter( 'rewrite_rules_array', 'custom_permalink_for_my_cpt' );
function custom_permalink_for_my_cpt( $rules ) {
    $custom_rules = array();
    // for archive urls
    $custom_rules['shop/?$'] = 'index.php?post_type=shop';
    return $custom_rules + $rules;
}
?>
