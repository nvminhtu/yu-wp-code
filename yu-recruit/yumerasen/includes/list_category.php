  <ul>
        <?php
          $taxonomies = array( 
    'category',
);
$args = array(
    'order'             => 'ASC',
	
    'hide_empty'        => false, 
    'exclude'           => array(), 
    'exclude_tree'      => array(), 
    'include'           => array(),
    'number'            => '', 
    'fields'            => 'all', 
    'slug'              => '',
    'parent'            => '',
    'hierarchical'      => true, 
    'child_of'          => 0, 
    'get'               => '', 
    'name__like'        => '',
    'description__like' => '',
    'pad_counts'        => false, 
    'offset'            => '', 
    'search'            => '', 
    'cache_domain'      => 'core',
	
); 

$terms_list = get_terms($taxonomies, $args);
/*echo "<pre>";
	 print_r($terms_list);  
echo "</pre>";*/ 
	 foreach($terms_list as $terms) : setup_postdata($terms);
?>
		<li><a href="<?php bloginfo( 'url' ); ?>/category/<?php echo $terms->slug; ?>/">
		<?php echo $terms->name; ?></a></li>
	<?php
	 endforeach;
	 wp_reset_query(); 
	  ?>   
      </ul>