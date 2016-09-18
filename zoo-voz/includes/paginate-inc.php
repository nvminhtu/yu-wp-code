<?php
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  global $post;
  global $wp_query;
  $args = array(
    'post_type' =>'blog',
    'numberposts' => -1,
    'posts_per_page' => 4,
    'orderby' => date,
    'order' => desc,
    'field' => 'slug',
    'paged' => $paged
  );
  $the_query = new WP_Query( $args );
  $blog_posts = get_posts($args);
  if($blog_posts) {
    $i=1;

  foreach($blog_posts as $post) : setup_postdata($post);
    //$post_categories = wp_get_post_categories( get_the_ID() );
    $thumb = get_post_thumbnail_id();
    $img_url = wp_get_attachment_url($thumb,'full');
    $img_blog = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'img_blog');

    $time = get_the_date('Y.m.d', $post->ID);
    $nd = get_the_content();
    $id= get_the_ID();
    $check_new_for_blog = get_post_meta($post->ID, 'check_new_for_blog',true);
  ?>
    <p>TEST ASS</p>
    <?php  $i++;
    endforeach;
    wp_pagenavi( array( 'query' => $the_query ) );
    wp_reset_query();
    wp_reset_postdata();
   }

?>
