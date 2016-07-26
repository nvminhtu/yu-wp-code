<?php get_header(); 

$cat_name = get_category(get_query_var('cat'))->name;

?>
<!-- main start -->

<div id="main" class="clearfix">
  <div class="inner clearfix">
    <div id="content_blog" class="clearfix">
      <div class="name_category clearfix">
        <p><?php echo $cat_name; ?></p>
      </div>
      <?php if ( have_posts() ) : ?>
      <?php

					while ( have_posts() ) : the_post();
$img_blog = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'img_blog');
?>
      <div class="box_ar_blog clearfix">
        <div class="ar_blog_info clearfix">
          <p class="ar_blog_title"><a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
            </a></p>
          <p class="ar_blog_date">
            <?php the_time('Y.m.d'); ?>
          </p>
          <p class="ar_blog_auther">
            <?php the_author(); ?>
          </p>
        </div>
        <div class="ar_blog_ct">
                   <?php 
  if ( has_post_thumbnail() ) { 
  ?>
          <p class="image_l"><a href="<?php the_permalink(); ?>"><img src="<?php echo $img_blog[0]; ?>" alt="<?php the_title(); ?>" /> </a></p>
          <?php  } 
?>
          <p class="ar_blog_des"><?php echo mb_substr(strip_tags($post-> post_content),0,100).'...'; ?></p>
    
         <div class="list_social">
              <?php echo do_shortcode('[facebook_button_count]'); ?>
            </div>
        </div>
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
    <?php get_sidebar(); ?>
  </div>
</div>
<!-- main end -->
<?php get_footer();?>
