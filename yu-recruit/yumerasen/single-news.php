<?php

get_header();?>

<!-- #content -->

<div id="content" class="clearfix">
  <div class="inner clearfix"> 
    
    <!-- .content01 -->
    <div class="content01">
      <?php if(have_posts()): 
	   while(have_posts()): the_post(); 
	   $img_blog = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'img_blog');
	   $img_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full');
	   ?>
      <div class="blog_detail_box">
        <p class="blog_detail_title">
          <?php the_title(); ?>
        </p>
        <p class="blog_detail_date">
          <?php the_time('Y.m.d'); ?>
        </p>
        <?php if ( has_post_thumbnail() ) { ?>
        
        <p class="blog_detail_img"> <img src="<?php echo $img_url[0]; ?>" alt="<?php the_title(); ?>" /></p>
        <?php } ?>
        <section>
          <p>
            <?php the_content(); ?>
          </p>
        </section>
      </div>
      <?php endwhile; ?>
      <?php  endif; ?>
       <?php  include (TEMPLATEPATH . '/related/related_news.php');  ?>
        
      <!-- btn list top -->
      <p id="btn_list_top"><a href="<?php bloginfo('url'); ?>/news/">一覧に戻る</a></p>
      <!-- //btn list top --> 
    </div>
    <!-- //.content01 --> 
  </div>
</div>
<!-- //#content -->
</div>
<!-- main end -->







<?php
get_footer(); 
?>
