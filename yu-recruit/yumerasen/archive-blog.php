<?php

get_header();?>

  
  <!-- #content -->
  <div id="content" class="clearfix">
    <div class="inner clearfix">
    	  
          
            <!-- .box_archive_blog -->
        <div class="box_archive_blog clearfix">
        
        <?php 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
global $post;
global $wp_query;
$args = array(
'post_type' =>'blog',
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
     <div class="blog_box01 box_link">
            <p class="blog_img"><a href="<?php the_permalink(); ?>"><img src="<?php echo $img_blog[0]; ?>" alt="<?php the_title(); ?>" />
              <?php if (!empty($check_new_for_blog)){ ?>
			<span class="flag_new"><span>NEW</span></span>
			<?php } ?>
            </a></p>
            <div class="blog_idx_info">
              <p class="blog_title"><?php the_title(); ?></p>
              <p class="blog_des"><?php echo mb_substr(strip_tags($post-> post_content),0,38) . '...'; ?></p>
              <p class="blog_time"><?php the_time('Y.m.d'); ?></p>
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
      
      
      
       <!-- <div class="navi_list clearfix">
          <ul>
            <li class="prev_page"><a href="#">prev</a></li>
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li class="next_page"><a href="#">next</a></li>
          </ul>
        </div>-->
        <!-- //.navi_list --> 
        
        
        
    </div>
  </div>
  <!-- //#content --> 
</div>
<!-- main end -->

<?php
get_footer(); 
?>
