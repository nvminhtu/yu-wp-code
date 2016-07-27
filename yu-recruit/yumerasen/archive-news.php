<?php

get_header();?>

<!-- #content -->

<div id="content" class="clearfix">
  <div class="inner clearfix"> 
    <!-- .content01 -->
    <div class="content01">
      <?php 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
global $post;
global $wp_query;
$args = array(
'post_type' =>'news',
'numberposts' => 9,
'orderby' => date,
'order' => desc,
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
$img_blog = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'img_blog');
$time = get_the_date('Y.m.d', $post->ID);
$nd = get_the_content();
$id= get_the_ID();
$check_new_for_blog = get_post_meta($post->ID, 'check_new_for_blog',true);
?>
       <div class="box_news clearfix box_link">
            <div class="box_news_img">
             <?php if ( has_post_thumbnail() ) { ?>
              <a href="<?php the_permalink(); ?>"><img src="<?php echo $img_blog[0]; ?>" alt="<?php the_title(); ?>" /></a>
              <?php }else{
				  ?>
              <a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/album_img01_dummy.jpg" alt="<?php the_title(); ?>" /></a>
              <?php } ?>
            </div>
            <div class="news_info_archive clearfix">
              <p class="news_title"><?php the_title(); ?></p>
              <p class="news_time"><?php the_time('Y.m.d'); ?></p>
              <p class="news_des"><?php echo mb_substr(strip_tags($post-> post_content),0,38) . '...'; ?></p>
            </div>
          </div>
      
      
      <?php 
$i++;
endforeach;

 } 
 
 ?>
    </div>
    <!-- //.box_archive_blog --> 
    <!-- .navi_list -->
    
    <div class="navi_list clearfix">
      <?php
		  wp_pagenavi( array( 'query' => $the_query ) ); 
		  ?>
    </div>

    
  </div>
  <!-- //.content01 --> 
  
</div>
<!-- //#content -->
</div>
</div>
<!-- main end -->

<?php
get_footer(); 
?>
