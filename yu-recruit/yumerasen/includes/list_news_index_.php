<div id="section_news" class="clearfix">
      <div id="section_news_ct" class="clearfix">
        <div class="inner clearfix">
          <div id="s_news_out" class="clearfix">
            <p id="title_news_idx">NEWS</p>
            <div class="box_news_slide">
              <div id="box_news_slide_idx">
  
     <?php
global $post;
global $wp_query;
$args = array(
'post_type' =>'news',
'numberposts' => 10,
'orderby' => date,
'order' => desc,
'field' => 'slug'
);
$blog_posts = get_posts($args);
if($blog_posts) {
$i=1;
?>
<?php
foreach($blog_posts as $post) : setup_postdata($post);
$thumb = get_post_thumbnail_id();
$img_url = wp_get_attachment_url($thumb,'full'); //get full URL to image
$time = get_the_date('Y.m.d', $post->ID);
$nd = get_the_content();
$id= get_the_ID();
?>
 <div class="box_news_sidx">
         <p class="news_date_sidx"><?php the_time('Y.m.d'); ?></p>
         <p class="news_title_sidx"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
 </div>
            
           
<?php 
$i++;
endforeach;
wp_reset_query();
 wp_reset_postdata(); ?>
<?php } ?>             
                
  
              </div>
            </div>
            <p id="btn_news_idx"><img src="<?php bloginfo('template_url'); ?>/images/btn_news.png" alt="" /></p>
          </div>
          <div id="list_news02" class="clearfix">
            <div class="news clearfix">
              <ul>       
                    <?php
global $post;
global $wp_query;
$args = array(
'post_type' =>'news',
'numberposts' => 10,
'orderby' => date,
'order' => desc,
'field' => 'slug'
);
$blog_posts = get_posts($args);
if($blog_posts) {
$i=1;
?>
<?php
foreach($blog_posts as $post) : setup_postdata($post);
$thumb = get_post_thumbnail_id();
$img_url = wp_get_attachment_url($thumb,'full'); //get full URL to image
$time = get_the_date('Y.m.d', $post->ID);
$nd = get_the_content();
$id= get_the_ID();
?>
           <li><span class="list_news02_date"><?php the_time('Y.m.d'); ?></span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                  
           
<?php 
$i++;
endforeach;
wp_reset_query();
 wp_reset_postdata(); ?>
<?php } ?> 
 
               
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>