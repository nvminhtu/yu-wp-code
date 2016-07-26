<?php

get_header();?>

<!-- #content -->

<div id="content" class="clearfix">
  <div class="inner clearfix"> 
    
    <!-- .content01 -->
    <div class="content01">
     

    
    <?php if(have_posts()): ?>
    <?php while(have_posts()): the_post(); 
$thumb = get_post_thumbnail_id();
$img_url = wp_get_attachment_url($thumb,'full'); //get full URL to image
$img_blog = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'img_blog');
$time = get_the_date('Y.m.d', $post->ID);
$nd = get_the_content();
$id= get_the_ID();

?>
   
   
    <div class="qa_box">
        <dl class="list_q">
          <dt>Q</dt>
          <dd><?php the_title(); ?></dd>
        </dl>
        <dl class="list_a">
          <dt>A</dt>
          <dd><?php the_content(); ?></dd>
        </dl>
      </div>
   
   
    <?php
       	endwhile;
				endif;
			?>
    <div class="navigation clearfix">
      <?php
    wp_pagenavi(); 
  ?>
    </div>
    <?php
wp_reset_query();
wp_reset_postdata(); 
 ?>
 
 
      </div>
      <!-- //#content --> 
    </div>
  </div>
  <!-- main end -->
  

<?php
get_footer(); 
?>
