<?php get_header(); ?>

<!-- main start -->
<div id="main" class="clearfix">
  <div class="inner">
  <div id="topic_path" class="clearfix">
      <ul>
          <li><a href="<?php bloginfo('siteurl'); ?>">HOME</a> &gt; </li>
          <li><a href="<?php bloginfo('siteurl'); ?>/work/">実績・事例紹介</a> &gt; </li>
          <li><?php the_title(); ?></li>
        </ul>
    </div>
    <?php
		// Start the loop.
		while ( have_posts() ) : the_post();
      $img_works_detail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full');
      $img_works_detail_src = $img_works_detail[0];
      $work_product_title = get_field('work_product_title',$post->ID);
      $work_product_sub_title = get_field('work_product_sub_title',$post->ID);
      $work_product_cost = get_field('work_product_cost',$post->ID);
      $work_product_period = get_field('work_product_period',$post->ID);
      $work_product_title = get_field('work_product_title',$post->ID);
      $work_product_link = get_field('work_product_link',$post->ID);
      $work_client_name = get_field('work_client_name',$post->ID);
      $work_target_user = get_field('work_target_user',$post->ID);
      $work_devices = get_field('work_devices',$post->ID);
    ?>
	<div class="content_inner clearfix">
       <h3 class="title_h302"><?php the_title(); ?></h3>
        <p class="image_f"><img src="<?php echo $img_works_detail_src; ?>" alt="" /></p>
        <p class="txt_des_w"><?php the_content(); ?></p>

      <div class="w_info clearfix">
        <dl>
        	<dt>会社名</dt>
            <dd><?php echo $work_client_name; ?></dd>
        </dl>
        <dl>
        	<dt>URL</dt>
            <dd><a class="external" href="<?php echo $work_product_link; ?>" target="_blank"><?php echo $work_product_link; ?></a></dd>
        </dl>
        <dl>
        	<dt>ターゲットユーザー</dt>
            <dd><?php echo $work_target_user; ?></dd>
        </dl>
        <dl>
        	<dt>デバイス</dt>
            <dd><?php echo $work_devices; ?></dd>
        </dl>
        <dl>
        	<dt>提供サービス</dt>
            <dd>
               <ul class="list_ajenda">
                <?php
                    $post_objects = get_field('selected_service',$post->ID);
                    if( $post_objects ):
                      foreach( $post_objects as $post):
                        setup_postdata($post);
                        $field_id = get_the_ID(); ?>
                        <li><a href="<?php echo get_permalink($field_id); ?>"><?php echo get_the_title($field_id); ?></a></li>
                <?php endforeach;
                      wp_reset_postdata();
                    endif;
                ?>
              </ul>
              </dd>
        </dl>
      </div>



        </div>
	<?php
		endwhile;
    // End of the loop.
		?>
  <!-- .inner --></div>
<!-- #main --></div>
<?php get_footer(); ?>
