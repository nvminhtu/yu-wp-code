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