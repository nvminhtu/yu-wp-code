<?php
  /***
  *** @include works for service
  *** @include in page: /service/service-name
  ***/

  //--- get specific class for service
  $color_code = get_field('service_color');

  //--- load works - which is categorized by service
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  global $post;
  global $wp_query;
  $args = array(
    'post_type' =>'work',
    'orderby' => date,
    'field' => 'slug',
    'paged' => $paged
  );
  $the_query = new WP_Query( $args );
  $blog_posts = get_posts($args);
  if($blog_posts) {
    $i=1;
?>
<?php
  foreach($blog_posts as $post) : setup_postdata($post);
    $post_categories = wp_get_post_categories(get_the_ID());
    $thumb = get_post_thumbnail_id();
    $img_url = wp_get_attachment_url($thumb,'full'); //get full URL to image
    $img_works_home = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'img_works_home');
    $img_works_home_src = $img_works_home[0];
    $time = get_the_date('Y.m.d', $post->ID);
    $nd = get_the_content();
    $work_id= get_the_ID();
    $work_title = get_the_title($work_id);
    $work_content = get_the_content($work_id);
    $work_product_title = get_field('work_product_title',$post->ID);
    $work_product_link = get_field('work_product_link',$post->ID);
?>

<?php
        $post_objects = get_field('selected_service',$post->ID);
        if( $post_objects ):
          foreach( $post_objects as $post):
            setup_postdata($post);
            $field_id = get_the_ID();
            if($field_id == $service_id) {
              ?>
              <div class="box_lworks clearfix wow zoomIn" data-wow-delay="0.3s">
                <p class="img_lworks">
                  <a href="<?php echo get_permalink($work_id); ?>">
                    <?php
                      //get featured image
                      if ( has_post_thumbnail($work_id) ) { ?>
                        <img src="<?php echo $img_works_home_src; ?>" alt="<?php echo get_the_title($work_id); ?>"  />
                      <?php } else { ?>
                        <img src="<?php echo bloginfo('template_url'); ?>/images/list_works.png" alt="<?php echo get_the_title($work_id); ?>" />
                      <?php }
                    ?>
                    <span class="cate_works" data-cat-color="<?php echo $color_code; ?>"> <?php echo get_the_title($service_id); ?></span>
                  </a>
                </p>
                <div class="box_lworks_on">
                  <p class="lworks_on_title"><?php echo $work_title; ?></p>
                  <?php echo $work_content; ?>
                  <p class="title_site_adv"><?php echo $work_product_title; ?><br />
                  <a href="<?php echo $work_product_link; ?>" target="_blank"><?php echo $work_product_link; ?></a></p>
                </div>
                <p class="title_lworks abc"><?php echo $work_title; ?></p>
              </div>
              <?php
            }
          endforeach;
          wp_reset_postdata();
        endif;
        $i++;
      endforeach;
    }
  ?>
