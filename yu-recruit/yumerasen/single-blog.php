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
    
    
   <?php
$prev_post = get_previous_post();
if($prev_post) {
   $prev_img_url = wp_get_attachment_image_src(get_post_thumbnail_id($prev_post->ID),'img_blog_m');
   $prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
   $prev_date = strip_tags(str_replace('"', '',mysql2date('Y.m.d', $prev_post->post_date)));
   $prev_url = get_permalink($prev_post->ID);
}

$next_post = get_next_post();
if($next_post) {
   $next_img_url = wp_get_attachment_image_src(get_post_thumbnail_id($next_post->ID),'img_blog_m');
   $next_title = strip_tags(str_replace('"', '', $next_post->post_title));
   $next_date = strip_tags(str_replace('"', '', mysql2date('Y.m.d', $next_post->post_date)));
   $next_url = get_permalink($next_post->ID);
}
?>
 
     <!-- recent box -->
      <div class="box_blog_recent_out clearfix">
        <div class="box_blog_recent_pc <?php if(!$prev_post) { echo "box_pre_recent_none";}?>">

          <div class="box_blog_recent box_pre_recent <?php if(!$prev_post) { echo "box_none";}?>">
            <p class="blog_recent_img"><a href="<?php echo $prev_url; ?>"><img src="<?php echo $prev_img_url[0]; ?>" alt="<?php echo $prev_title; ?>" /></a></p>
            <div class="blog_recent_info">
              <p class="blog_recent_navigate">前のブログ</p>
              <p class="blog_recent_title"><?php echo $prev_title; ?></p>
              <p class="blog_recent_date"><?php echo $prev_date; ?></p>
            </div>
          </div>
          <div class="box_blog_recent box_next_recent <?php if(!$next_post) { echo "box_none";}?>">
            <p class="blog_recent_img"><a href="<?php echo $next_url; ?>"><img src="<?php echo $next_img_url[0]; ?>" alt="<?php echo $next_title; ?>" /></a></p>
            <div class="blog_recent_info">
              <p class="blog_recent_navigate">次のブログ</p>
              <p class="blog_recent_title"><?php echo $next_title; ?></p>
              <p class="blog_recent_date"><?php echo $next_date; ?></p>
            </div>
          </div>
        </div>
        <div class="box_blog_recent_sp">
          <ul class="list_navigate">
            <li class="btn recent_pre <?php if(!$prev_post) { echo "box_none";}?>"><a href="<?php echo $prev_url; ?>">前のブログ</a></li>
            <li class="btn recent_next <?php if(!$next_post) { echo "box_none";}?>"><a href="<?php echo $next_url; ?>">次のブログ</a></li>
          </ul>
        </div>
      </div>
      <!-- //.recent box --> 
      
      <?php endwhile; ?>
      <?php  endif; ?>
     
      <!-- btn list top -->
      <p id="btn_list_top"><a href="<?php bloginfo('url'); ?>/blog/">一覧に戻る</a></p>
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
