<?php
/***
*** @CPT - Custom post type
***/

function prefix_register_all() {

	/* 01 -- Blog ------- */
	register_post_type(
		'blog',
		array(
			'labels'        => array(
				'name'               => __('ブログ', 'custom_text_posttype'),
				'singular_name'      => __('ブログ', 'custom_text_posttype'),
				'menu_name'          => __('ブログ', 'custom_text_posttype'),
				'name_admin_bar'     => __('ブログ', 'custom_text_posttype'),
				'all_items'          => __('All Items', 'custom_text_posttype'),
				'add_new'            => _x('Add New', 'blog', 'custom_text_posttype'),
				'add_new_item'       => __('Add New Item', 'custom_text_posttype'),
				'edit_item'          => __('Edit Item', 'custom_text_posttype'),
				'new_item'           => __('New Item', 'custom_text_posttype'),
				'view_item'          => __('View Item', 'custom_text_posttype'),
				'search_items'       => __('Search Items', 'custom_text_posttype'),
				'not_found'          => __('No items found.', 'custom_text_posttype'),
				'not_found_in_trash' => __('No items found in Trash.', 'custom_text_posttype'),
				'parent_item_colon'  => __('Parent Items:', 'custom_text_posttype'),
			),
			'public'        => true,
			'menu_position' => 3,
			'supports'      => array(
				'title',
				'editor',
				'thumbnail',
				'excerpt',
				'custom-fields'
			),
			'taxonomies'    => array(
				'blog-cat',
				'post_tag'
			),
			'has_archive'   => true,
			'menu_icon'   => 'dashicons-welcome-write-blog',
			'rewrite'       => array(
				'slug' => 'blog',
			),
		)
	);

	register_taxonomy(
		'blog-cat',
		array(
			'blog',
		),
		array(
			'labels'            => array(
				'name'              => _x('Categories', 'blog', 'custom_text_posttype'),
				'singular_name'     => _x('Category', 'blog', 'custom_text_posttype'),
				'menu_name'         => __('Categories', 'custom_text_posttype'),
				'all_items'         => __('All Categories', 'custom_text_posttype'),
				'edit_item'         => __('Edit Category', 'custom_text_posttype'),
				'view_item'         => __('View Category', 'custom_text_posttype'),
				'update_item'       => __('Update Category', 'custom_text_posttype'),
				'add_new_item'      => __('Add New Category', 'custom_text_posttype'),
				'new_item_name'     => __('New Category Name', 'custom_text_posttype'),
				'parent_item'       => __('Parent Category', 'custom_text_posttype'),
				'parent_item_colon' => __('Parent Category:', 'custom_text_posttype'),
				'search_items'      => __('Search Categories', 'custom_text_posttype'),
			),
			'show_admin_column' => true,
			'hierarchical'      => true,
			'rewrite'           => array(
				'slug' => 'blog-cat',
			)
		)
	);

	/* 02 -- News ------- */
	register_post_type(
		'news',
		array(
			'labels'        => array(
				'name'               => __('お知らせ', 'custom_text_posttype'),
				'singular_name'      => __('お知らせ', 'custom_text_posttype'),
				'menu_name'          => __('お知らせ', 'custom_text_posttype'),
				'name_admin_bar'     => __('お知らせ', 'custom_text_posttype'),
				'all_items'          => __('All Items', 'custom_text_posttype'),
				'add_new'            => _x('Add New', 'news', 'custom_text_posttype'),
				'add_new_item'       => __('Add New Item', 'custom_text_posttype'),
				'edit_item'          => __('Edit Item', 'custom_text_posttype'),
				'new_item'           => __('New Item', 'custom_text_posttype'),
				'view_item'          => __('View Item', 'custom_text_posttype'),
				'search_items'       => __('Search Items', 'custom_text_posttype'),
				'not_found'          => __('No items found.', 'custom_text_posttype'),
				'not_found_in_trash' => __('No items found in Trash.', 'custom_text_posttype'),
				'parent_item_colon'  => __('Parent Items:', 'custom_text_posttype'),
			),
			'public'        => true,
			'menu_position' => 5,
			'supports'      => array(
				'title',
				'editor',
				'thumbnail',
				'excerpt',
				'custom-fields',
			),
			'has_archive'   => true,
			'menu_icon'   => 'dashicons-admin-site',
			'rewrite'       => array(
				'slug' => 'news',
			)
		)
	);

	/* 02 -- Works ------- */
	register_post_type(
		'work',
		array(
			'labels'        => array(
				'name'               => __('Works', 'custom_text_posttype'),
				'singular_name'      => __('Work', 'custom_text_posttype'),
				'menu_name'          => __('Works', 'custom_text_posttype'),
				'name_admin_bar'     => __('Works', 'custom_text_posttype'),
				'all_items'          => __('All Items', 'custom_text_posttype'),
				'add_new'            => _x('Add New', 'news', 'custom_text_posttype'),
				'add_new_item'       => __('Add New Item', 'custom_text_posttype'),
				'edit_item'          => __('Edit Item', 'custom_text_posttype'),
				'new_item'           => __('New Item', 'custom_text_posttype'),
				'view_item'          => __('View Item', 'custom_text_posttype'),
				'search_items'       => __('Search Items', 'custom_text_posttype'),
				'not_found'          => __('No items found.', 'custom_text_posttype'),
				'not_found_in_trash' => __('No items found in Trash.', 'custom_text_posttype'),
				'parent_item_colon'  => __('Parent Items:', 'custom_text_posttype'),
			),
			'public'        => true,
			'menu_position' => 5,
			'supports'      => array(
				'title',
				'editor',
				'thumbnail',
				'excerpt',
				'custom-fields',
			),
			'has_archive'   => true,
			'menu_icon'   => 'dashicons-admin-site',
			'rewrite'       => array(
				'slug' => 'work',
			)
		)
	);

	/* 03 -- Services ------- */
	register_post_type(
		'service',
		array(
			'labels'        => array(
				'name'               => __('Services', 'custom_text_posttype'),
				'singular_name'      => __('Service', 'custom_text_posttype'),
				'menu_name'          => __('Services', 'custom_text_posttype'),
				'name_admin_bar'     => __('Services', 'custom_text_posttype'),
				'all_items'          => __('All Items', 'custom_text_posttype'),
				'add_new'            => _x('Add New', 'news', 'custom_text_posttype'),
				'add_new_item'       => __('Add New Item', 'custom_text_posttype'),
				'edit_item'          => __('Edit Item', 'custom_text_posttype'),
				'new_item'           => __('New Item', 'custom_text_posttype'),
				'view_item'          => __('View Item', 'custom_text_posttype'),
				'search_items'       => __('Search Items', 'custom_text_posttype'),
				'not_found'          => __('No items found.', 'custom_text_posttype'),
				'not_found_in_trash' => __('No items found in Trash.', 'custom_text_posttype'),
				'parent_item_colon'  => __('Parent Items:', 'custom_text_posttype'),
			),
			'public'        => true,
			'menu_position' => 5,
			'supports'      => array(
				'title',
				'editor',
				'thumbnail',
				'excerpt',
				'custom-fields',
			),
			'has_archive'   => true,
			'menu_icon'   => 'dashicons-admin-site',
			'rewrite'       => array(
				'slug' => 'service',
			)
		)
	);
}

add_action('init', 'prefix_register_all', 0);


/* @xai chung*/
function prefix_flush_rewrite_rules()
{
	flush_rewrite_rules();
}
add_action('after_switch_theme', 'prefix_flush_rewrite_rules');
/*======================/Create post type - end /=============================*/

?>
