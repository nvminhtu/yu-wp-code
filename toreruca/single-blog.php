<?php get_header();
?>
<div id="header" class="contact clearfix">
  <div id="head_info">
    <div class="inner clearfix">
      <h1 id="logo"><a href=""><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="その助成金トレルカ？toreruca" /></a></h1>
      <h2>ブログ</h2>
    </div>
  </div>
</div>
<?php include('includes/part-quiz.php'); ?>
<!-- main start -->
<div id="main" class="clearfix"> 

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
    </div>
  <?php  // End the loop.
    endwhile;
 	endif;
  ?>
   </div>
</div>
</div>


<?php
get_footer(); 
?>
