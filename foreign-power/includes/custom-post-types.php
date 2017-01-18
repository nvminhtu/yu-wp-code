<?php
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
		'has_archive'   => true,
		'menu_icon'   => 'dashicons-format-chat',
		'rewrite'       => array(
			'slug' => 'qa',
		),
	)
);
/* @xai chung*/
function prefix_flush_rewrite_rules()
{
	flush_rewrite_rules();
}
add_action('after_switch_theme', 'prefix_flush_rewrite_rules');
/*======================/Create post type - end /=============================*/
?>