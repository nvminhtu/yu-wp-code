<?php
/*======================/Create post type - star /=============================*/
function prefix_register_all()
{
	/* create post type Blog -----Start ---- */
	register_post_type(
		'blog',
		array(
			'labels'        => array(
				'name'               => __('ブログ', 'text_domain'),
				'singular_name'      => __('ブログ', 'text_domain'),
				'menu_name'          => __('ブログ', 'text_domain'),
				'name_admin_bar'     => __('ブログ', 'text_domain'),
				'all_items'          => __('All Items', 'text_domain'),
				'add_new'            => _x('Add New', 'blog', 'text_domain'),
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
			'menu_position' => 3,
			'supports'      => array(
				'title',
				'editor',
				'thumbnail',
				'excerpt',
				'custom-fields',
			),
			'taxonomies'    => array(
				'blog-cat',
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
				'name'              => _x('Categories', 'blog', 'text_domain'),
				'singular_name'     => _x('Category', 'blog', 'text_domain'),
				'menu_name'         => __('Categories', 'text_domain'),
				'all_items'         => __('All Categories', 'text_domain'),
				'edit_item'         => __('Edit Category', 'text_domain'),
				'view_item'         => __('View Category', 'text_domain'),
				'update_item'       => __('Update Category', 'text_domain'),
				'add_new_item'      => __('Add New Category', 'text_domain'),
				'new_item_name'     => __('New Category Name', 'text_domain'),
				'parent_item'       => __('Parent Category', 'text_domain'),
				'parent_item_colon' => __('Parent Category:', 'text_domain'),
				'search_items'      => __('Search Categories', 'text_domain'),
			),
			'show_admin_column' => true,
			'hierarchical'      => true,
			'rewrite'           => array(
				'slug' => 'blog-cat',
			),
		)
	);

		/* create post type Blog -----End ---- */
	/* create post type News -----Start ---- */
	register_post_type(
		'news',
		array(
			'labels'        => array(
				'name'               => __('ニュース', 'text_domain'),
				'singular_name'      => __('ニュース', 'text_domain'),
				'menu_name'          => __('ニュース', 'text_domain'),
				'name_admin_bar'     => __('ニュース', 'text_domain'),
				'all_items'          => __('All Items', 'text_domain'),
				'add_new'            => _x('Add New', 'news', 'text_domain'),
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
			'menu_position' => 4,
			'supports'      => array(
				'title',
				'editor',
				'thumbnail',
				'excerpt',
				'custom-fields',
			),
			'taxonomies'    => array(
				'news-cat',
			),
			'has_archive'   => true,
			'menu_icon'   => 'dashicons-admin-site',
			'rewrite'       => array(
				'slug' => 'news',
			),
		)
	);

	register_taxonomy(
		'news-cat',
		array(
			'news',
		),
		array(
			'labels'            => array(
				'name'              => _x('Categories', 'news', 'text_domain'),
				'singular_name'     => _x('Category', 'news', 'text_domain'),
				'menu_name'         => __('Categories', 'text_domain'),
				'all_items'         => __('All Categories', 'text_domain'),
				'edit_item'         => __('Edit Category', 'text_domain'),
				'view_item'         => __('View Category', 'text_domain'),
				'update_item'       => __('Update Category', 'text_domain'),
				'add_new_item'      => __('Add New Category', 'text_domain'),
				'new_item_name'     => __('New Category Name', 'text_domain'),
				'parent_item'       => __('Parent Category', 'text_domain'),
				'parent_item_colon' => __('Parent Category:', 'text_domain'),
				'search_items'      => __('Search Categories', 'text_domain'),
			),
			'show_admin_column' => true,
			'hierarchical'      => true,
			'rewrite'           => array(
				'slug' => 'news-cat',
			),
		)
	);

		/* create post type News -----End ---- */
		
		/* create post type QA -----Start ---- */
	register_post_type(
		'qa',
		array(
			'labels'        => array(
				'name'               => __('よくあるご質問', 'text_domain'),
				'singular_name'      => __('よくあるご質問', 'text_domain'),
				'menu_name'          => __('よくあるご質問', 'text_domain'),
				'name_admin_bar'     => __('よくあるご質問', 'text_domain'),
				'all_items'          => __('All Items', 'text_domain'),
				'add_new'            => _x('Add New', 'qa', 'text_domain'),
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
				'editor',
				'thumbnail',
				'excerpt',
				'custom-fields',
			),
			'taxonomies'    => array(
				'qa-cat',
			),
			'has_archive'   => true,
			'menu_icon'   => 'dashicons-format-chat',
			'rewrite'       => array(
				'slug' => 'qa',
			),
		)
	);

	register_taxonomy(
		'qa-cat',
		array(
			'qa',
		),
		array(
			'labels'            => array(
				'name'              => _x('Categories', 'qa', 'text_domain'),
				'singular_name'     => _x('Category', 'qa', 'text_domain'),
				'menu_name'         => __('Categories', 'text_domain'),
				'all_items'         => __('All Categories', 'text_domain'),
				'edit_item'         => __('Edit Category', 'text_domain'),
				'view_item'         => __('View Category', 'text_domain'),
				'update_item'       => __('Update Category', 'text_domain'),
				'add_new_item'      => __('Add New Category', 'text_domain'),
				'new_item_name'     => __('New Category Name', 'text_domain'),
				'parent_item'       => __('Parent Category', 'text_domain'),
				'parent_item_colon' => __('Parent Category:', 'text_domain'),
				'search_items'      => __('Search Categories', 'text_domain'),
			),
			'show_admin_column' => true,
			'hierarchical'      => true,
			'rewrite'           => array(
				'slug' => 'qa-cat',
			),
		)
	);

		/* create post type QA -----End ---- */
	
	/* create post type Album -----Start ---- */
	register_post_type(
		'album',
		array(
			'labels'        => array(
				'name'               => __('アルバム', 'text_domain'),
				'singular_name'      => __('アルバム', 'text_domain'),
				'menu_name'          => __('アルバム', 'text_domain'),
				'name_admin_bar'     => __('アルバム', 'text_domain'),
				'all_items'          => __('All Items', 'text_domain'),
				'add_new'            => _x('Add New', 'album', 'text_domain'),
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
			'menu_position' => 6,
			'supports'      => array(
				'title',
				'editor',
				'thumbnail',
				'excerpt',
				'custom-fields',
			),
			'taxonomies'    => array(
				'album-cat',
			),
			'has_archive'   => true,
			'menu_icon'   => 'dashicons-images-alt2',
			'rewrite'       => array(
				'slug' => 'album',
			),
		)
	);

	register_taxonomy(
		'album-cat',
		array(
			'album',
		),
		array(
			'labels'            => array(
				'name'              => _x('Categories', 'album', 'text_domain'),
				'singular_name'     => _x('Category', 'album', 'text_domain'),
				'menu_name'         => __('Categories', 'text_domain'),
				'all_items'         => __('All Categories', 'text_domain'),
				'edit_item'         => __('Edit Category', 'text_domain'),
				'view_item'         => __('View Category', 'text_domain'),
				'update_item'       => __('Update Category', 'text_domain'),
				'add_new_item'      => __('Add New Category', 'text_domain'),
				'new_item_name'     => __('New Category Name', 'text_domain'),
				'parent_item'       => __('Parent Category', 'text_domain'),
				'parent_item_colon' => __('Parent Category:', 'text_domain'),
				'search_items'      => __('Search Categories', 'text_domain'),
			),
			'show_admin_column' => true,
			'hierarchical'      => true,
			'rewrite'           => array(
				'slug' => 'album-cat',
			),
		)
	);

		/* create post type Album -----End ---- */
	/* create post type Interview -----Start ---- */
	register_post_type(
		'interview',
		array(
			'labels'        => array(
				'name'               => __('先輩インタビュー', 'text_domain'),
				'singular_name'      => __('先輩インタビュー', 'text_domain'),
				'menu_name'          => __('先輩インタビュー', 'text_domain'),
				'name_admin_bar'     => __('先輩インタビュー', 'text_domain'),
				'all_items'          => __('All Items', 'text_domain'),
				'add_new'            => _x('Add New', 'interview', 'text_domain'),
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
			'menu_position' => 7,
			'supports'      => array(
				'title',
				'editor',
				'thumbnail',
				'excerpt',
				'custom-fields',
			),
			'taxonomies'    => array(
				'interview-cat',
			),
			'has_archive'   => true,
			'menu_icon'   => 'dashicons-id',
			'rewrite'       => array(
				'slug' => 'interview',
			),
		)
	);

	register_taxonomy(
		'interview-cat',
		array(
			'interview',
		),
		array(
			'labels'            => array(
				'name'              => _x('Categories', 'interview', 'text_domain'),
				'singular_name'     => _x('Category', 'interview', 'text_domain'),
				'menu_name'         => __('Categories', 'text_domain'),
				'all_items'         => __('All Categories', 'text_domain'),
				'edit_item'         => __('Edit Category', 'text_domain'),
				'view_item'         => __('View Category', 'text_domain'),
				'update_item'       => __('Update Category', 'text_domain'),
				'add_new_item'      => __('Add New Category', 'text_domain'),
				'new_item_name'     => __('New Category Name', 'text_domain'),
				'parent_item'       => __('Parent Category', 'text_domain'),
				'parent_item_colon' => __('Parent Category:', 'text_domain'),
				'search_items'      => __('Search Categories', 'text_domain'),
			),
			'show_admin_column' => true,
			'hierarchical'      => true,
			'rewrite'           => array(
				'slug' => 'interview-cat',
			),
		)
	);

		/* create post type Interview -----End ---- */	
		
		
		
}

add_action('init', 'prefix_register_all', 0);

/* @xai chung*/
function prefix_flush_rewrite_rules()
{
	flush_rewrite_rules();
}
add_action('after_switch_theme', 'prefix_flush_rewrite_rules');

/*======================/Create post type - end /=============================*/

/* change color for icon menu admin */

function replace_admin_menu_icons_css() {
    ?>
    <style>
        #adminmenu #menu-posts-news div.wp-menu-image::before,
		#adminmenu #menu-posts div.wp-menu-image::before,
		#adminmenu #menu-posts-qa div.wp-menu-image::before,
		#adminmenu #menu-posts-album div.wp-menu-image::before,
		#adminmenu #menu-posts-blog div.wp-menu-image::before,
		#adminmenu #menu-posts-interview div.wp-menu-image::before
		
		 {
    color:#F08D39;
}

    </style>
 <?php
}

add_action( 'admin_head', 'replace_admin_menu_icons_css' );

?>