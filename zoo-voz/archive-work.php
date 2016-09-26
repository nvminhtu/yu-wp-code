<?php get_header(); ?>
<!-- main start -->
<div id="main" class="clearfix">
  <div class="inner ftb">
    <div id="topic_path" class="clearfix">
      <ul>
        <li><a href="<?php bloginfo('siteurl'); ?>">HOME</a> &gt; </li>
        <li>実績・事例紹介</li>
      </ul>
    </div>

    <h3 class="title_h301"> WORKS <br>
    <span>実績・事例紹介</span></h3>

    <!-- #show content 01 -->
    <?php $my_c = get_query_var( 'category' ); ?>
    <div id="list_cate_works" class="clearfix" data-active-cat="<?php echo $my_c; ?>">
      <div class="squaredThree">
        <ul>
            <li id=""><input class="input_check_all" type="checkbox" value="None" id="active_all" name="check" checked /><label for="active_all">全て</label></li>
          <?php
            $default_posts_per_page = get_option( 'posts_per_page' );
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            global $post;
            global $wp_query;

            $args = array(
              'post_type' =>'service',
              'posts_per_page' => -1,
              'orderby' => date,
              'order' => desc,
              'field' => 'slug'
            );
            $the_query = new WP_Query( $args );
            $blog_posts = get_posts($args);
            if($blog_posts) {
            $i=1;
            foreach($blog_posts as $post) : setup_postdata($post);
          ?>
          <li class=""><input class="input_check" type="checkbox" value="<?php echo get_the_title($post->ID); ?>" id="<?php echo get_the_slug($post->ID); ?>" name="check" /><label for="<?php echo get_the_slug($post->ID); ?>"><?php echo get_the_title($post->ID); ?></label></li>
          <?php
                  $i++;
              endforeach;
              wp_reset_postdata();
            }
          ?>
        </ul>
       </div>
    </div>

    <!-- #show content 01 -->
    <div id="show_content" class="clearfix">
      	<p id="ajax_bg"></p>
        <p id="txt_notfoud">Not Found</p>
        <div class="list_w clearfix">

        <?php
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
            $img_works_home = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'img_works_archive');
            $img_works_home_src = $img_works_home[0];
            $time = get_the_date('Y.m.d', $post->ID);
            $nd = get_the_content();
            $work_id= get_the_ID();
            $work_title = get_the_title($work_id);
            $work_content = get_the_content($work_id);
            // custom fields
            $post_objects = get_field('selected_service',$post->ID);
            $work_product_title = get_field('work_product_title',$post->ID);
            $work_product_sub_title = get_field('work_product_sub_title',$post->ID);
            $work_product_cost = get_field('work_product_cost',$post->ID);
            $work_product_period = get_field('work_product_period',$post->ID);
            $work_product_title = get_field('work_product_title',$post->ID);
            $work_product_link = get_field('work_product_link',$post->ID);
            $service_slugs = '';
            $service_name = '';

            if( $post_objects ):
              foreach( $post_objects as $post):
                $service_slugs .= get_the_slug($post->ID). ' ';
                $service_name = get_the_title($post->ID);
                  $field_id = get_the_ID();
                  $color_code = get_field('service_color',$field_id);
              endforeach;
              wp_reset_postdata();
            endif;

            $color_codes = explode("#", $color_code);
            $color_class = 'service-'.$color_codes[1];
           ?>

            <div class="<?php echo $color_class; ?> catew <?php echo $service_slugs ; ?> box_w clearfix" data-service-color="<?php echo $color_code; ?>">
              <div class="box_w_top clearfix">
                <p class="img_lworks">
                <?php if ( has_post_thumbnail($work_id) ) { ?>
                  <img src="<?php echo $img_works_home_src; ?>" alt="<?php echo get_the_title($work_id); ?>"  />
                <?php } else { ?>
                  <img src="<?php echo bloginfo('template_url'); ?>/images/works_img01.jpg" alt="<?php echo get_the_title($work_id); ?>" />
                <?php } ?>
                </p>
                <div class="box_lworks_on">
                  <p class="lworks_on_title"><?php echo $work_title; ?></p>
                  <p class="lworks_on_title_sub">- <?php echo $work_product_sub_title; ?> - </p>
                  <p class="lworks_on_des">
                    <?php echo mb_substr(strip_tags($work_content),0,55) . '...'; ?>
                  </p>
                  <ul class="list_price">
                    <li><?php echo $work_product_cost; ?></li>
                    <li><?php echo $work_product_period; ?></li>
                  </ul>
                  <ul class="list_price">
                    <li><a href="<?php echo $work_product_link; ?>"  target="_blank"><?php echo $work_product_link; ?></a></li>
                  </ul>
                  <p class="btn btn_site_adv"><a href="<?php echo get_permalink($work_id); ?>">詳しくみる</a></p>
                </div>
              </div>
              <div class="lworks_btitle clearfix">
                <p class="name_cate_w"><span><?php echo $service_name; ?></span></p>
                <p class="title_cate_w"><?php echo $work_title; ?><br />
                  <span><?php echo $work_product_title; ?></span></p>
              </div>
            </div>

          <?php

            $i++;
          endforeach;
        }
        ?>

        </div>
      </div>
    <!-- //#show content 01 -->


  </div>
</div>

<!-- main end -->
<?php get_footer(); ?>
