<?php
  function check_has_work($service_id) {
    // start load works
      $has_works = "false";
      global $post;
      global $wp_query;
      $args = array(
        'post_type' =>'work',
        'orderby' => date,
        'posts_per_page' => -1,
        'field' => 'slug',
        'paged' => $paged
      );
      $the_query = new WP_Query( $args );
      $blog_posts = get_posts($args);
      if($blog_posts) {
        $j=1;
        foreach($blog_posts as $post) : setup_postdata($post);
          $work_id= $post->ID;
          $work_title = get_the_title($work_id);
          $work_content = get_the_content($work_id);

          // custom fields
          $service_child_id = '';
          //get service is the same to current selected service tab
          $post_objects = get_field('selected_service',$post->ID);

            if( $post_objects ):
              foreach( $post_objects as $post):

                $service_slugs .= get_the_slug($post->ID). ' ';
                $service_name = get_the_title($post->ID);
                  $service_child_id = $post->ID;
                  $field_id = get_the_ID();
                  $color_code = get_field('service_color',$field_id);
              endforeach;
              wp_reset_postdata();
            endif;

          if($service_child_id==$service_id) {
            $has_works = "true";
          }
          endforeach;
          wp_reset_postdata();
     }
     return $has_works;
   }
?>
