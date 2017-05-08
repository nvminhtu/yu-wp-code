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
    'numberposts' => -1,
    'posts_per_page' => -1,
    'paged' => $paged
  );
  $the_query = new WP_Query( $args );
  $blog_posts = get_posts($args);
  if($blog_posts) {
    $i=0;
    $show = 0;
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
	   $link_work = get_the_permalink();
    $work_id= get_the_ID();
    $work_title = get_the_title($work_id);
    $work_content = get_the_content($work_id);
    $work_client_name = get_field('work_client_name',$post->ID);
    $work_product_sub_title = get_field('work_product_sub_title',$post->ID);
    $work_product_cost = get_field('work_product_cost',$post->ID);
    $work_product_period = get_field('work_product_period',$post->ID);
    $work_product_link = get_field('work_product_link',$post->ID);
?>


<?php
        $post_objects = get_field('selected_service',$post->ID);
        if( $post_objects ):
          foreach( $post_objects as $post):
            setup_postdata($post);
            $field_id = get_the_ID();
            if($field_id == $service_id) {
              $i++;
              $show++;
              ?>

              <?php if($show==1) { //start show container ?>
                <div id="container04" class="clearfix">
                  <div class="inner clearfix">
                    <h3 class="title_h301 title_h3_works " data-wow-delay="0.3s">WORKS<br />
                      <span><?php the_title(); ?> 実績紹介</span>
                    </h3>
                    <div class="list_works clearfix">
              <?php
                } //end show container
                if($i<=4) {
              ?>

              <div class="box_lworks clearfix wow postItem" data-wow-delay="0.3s">
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
                  <p class="lworks_on_title"><a class="linklw" href="<?php echo $link_work; ?>"><?php echo $work_title; ?></a></p>
                  <p class="lworks_on_title_sub">- <?php echo $work_product_sub_title; ?> - </p>
                  <p class="lworks_on_des">
                    <?php echo mb_substr(strip_tags($work_content),0,55) . '...'; ?>
                  </p>
                  <ul class="list_price">
                    <li><?php echo $work_product_cost; ?></li>
                    <li><?php echo $work_product_period; ?></li>
                  </ul>
                  <?php //echo $work_content; ?>
                  <p class="title_site_adv"><?php echo $work_client_name; ?><br />
                  <a class="link_woout" href="<?php echo $work_product_link; ?>" target="_blank"><?php echo $work_product_link; ?></a></p>
                </div>
                <div class="title_lworks_out clearfix">
                  <p class="title_lworks"><?php echo $work_title; ?></p>
                </div>
              </div>
              <?php
              } //end check 4 item to be displayed
            }
          endforeach;
          wp_reset_postdata();

        endif;

      endforeach; ?>
      <?php if($show >= 1) { //start show container ?>
        </div>
        <p class="btn btn01 btn_horange btn_mw500 wow" data-wow-delay="0.2s"><a href="<?php bloginfo('siteurl'); ?>/work/?category=<?php echo get_the_slug($service_id); ?>"><span>もっと見る</span></a></p>
      </div>
    </div>
    <?php } //end show container ?>
  <?php } ?>
