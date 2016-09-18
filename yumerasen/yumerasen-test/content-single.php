<h3 class="mt20 mb10 midashi01"><?php the_title(); ?></h3>
<p class="day">投稿日：<time pubdate="pubdate" datetime="<?php the_time('Y-m-d'); ?>" class="day"><?php the_time(get_option('date_format')); ?></time></p>
<?php get_template_part('social-button'); ?>
<article id="post-content">
<?php if(get_post_meta($post->ID,'tate_pic') == true): ?>
<p class="mr10"><?php echo wp_get_attachment_image(nl2br(get_post_meta($post->ID,'tate_pic',true)), 'tate-long'); ?></p>
<?php elseif(get_post_meta($post->ID,'yoko_pic') == true): ?>
<p class="mr10"><?php echo wp_get_attachment_image(nl2br(get_post_meta($post->ID,'yoko_pic',true)), 'yoko-long'); ?></p>
<?php endif; ?>
<p class="ml10 mr30"><?php the_content(); ?></p>
<?php if(get_post_meta($post->ID,'voice') == true): ?>
<?php echo wp_get_attachment_image(nl2br(get_post_meta($post->ID,'voice',true)), 'voice'); ?>
<?php endif; ?>
</article>
<!--  ギャラリー start -->
<?php if(get_post_meta($post->ID,'gallary_pic1') == true): ?>
<h4 class="service mt30">その他の写真</h4>
<div class="gallery01 clearfix">
<div id="photos" class="galleryview">
	<?php if(get_post_meta($post->ID,'gallary_pic1') == true): ?>
	<div class="panel panel_zoom"><?php echo wp_get_attachment_image(nl2br(get_post_meta($post->ID,'gallary_pic1',true)), 'gallary-large'); ?></div>
	<?php endif; ?>	
	<?php if(get_post_meta($post->ID,'gallary_pic2') == true): ?>	
	<div class="panel panel_zoom"><?php echo wp_get_attachment_image(nl2br(get_post_meta($post->ID,'gallary_pic2',true)), 'gallary-large'); ?></div>
	<?php endif; ?>	
	<?php if(get_post_meta($post->ID,'gallary_pic3') == true): ?>
	<div class="panel panel_zoom"><?php echo wp_get_attachment_image(nl2br(get_post_meta($post->ID,'gallary_pic3',true)), 'gallary-large'); ?></div>
	<?php endif; ?>	
	<?php if(get_post_meta($post->ID,'gallary_pic4') == true): ?>
	<div class="panel panel_zoom"><?php echo wp_get_attachment_image(nl2br(get_post_meta($post->ID,'gallary_pic4',true)), 'gallary-large'); ?></div>
	<?php endif; ?>	
	<?php if(get_post_meta($post->ID,'gallary_pic5') == true): ?>
	<div class="panel panel_zoom"><?php echo wp_get_attachment_image(nl2br(get_post_meta($post->ID,'gallary_pic5',true)), 'gallary-large'); ?></div>
	<?php endif; ?>	
	<?php if(get_post_meta($post->ID,'gallary_pic6') == true): ?>
	<div class="panel panel_zoom"><?php echo wp_get_attachment_image(nl2br(get_post_meta($post->ID,'gallary_pic6',true)), 'gallary-large'); ?></div>
	<?php endif; ?>	
	<?php if(get_post_meta($post->ID,'gallary_pic7') == true): ?>
	<div class="panel panel_zoom"><?php echo wp_get_attachment_image(nl2br(get_post_meta($post->ID,'gallary_pic7',true)), 'gallary-large'); ?></div>
	<?php endif; ?>	
	<?php if(get_post_meta($post->ID,'gallary_pic8') == true): ?>
	<div class="panel panel_zoom"><?php echo wp_get_attachment_image(nl2br(get_post_meta($post->ID,'gallary_pic8',true)), 'gallary-large'); ?></div>
	<?php endif; ?>	
	<?php if(get_post_meta($post->ID,'gallary_pic9') == true): ?>
	<div class="panel panel_zoom"><?php echo wp_get_attachment_image(nl2br(get_post_meta($post->ID,'gallary_pic9',true)), 'gallary-large'); ?></div>
	<?php endif; ?>	
	<?php if(get_post_meta($post->ID,'gallary_pic10') == true): ?>
	<div class="panel panel_zoom"><?php echo wp_get_attachment_image(nl2br(get_post_meta($post->ID,'gallary_pic10',true)), 'gallary-large'); ?></div>
	<?php endif; ?>	
	<div>
	  <ul class="filmstrip">
	  	<?php if(get_post_meta($post->ID,'gallary_pic1') == true): ?>
	  	<li><?php echo wp_get_attachment_image(nl2br(get_post_meta($post->ID,'gallary_pic1',true)), 'gallary-small'); ?></li>
	  	<?php endif; ?>
	  	<?php if(get_post_meta($post->ID,'gallary_pic2') == true): ?>
	  	<li><?php echo wp_get_attachment_image(nl2br(get_post_meta($post->ID,'gallary_pic2',true)), 'gallary-small'); ?></li>
	  	<?php endif; ?>
	  	<?php if(get_post_meta($post->ID,'gallary_pic3') == true): ?>
	  	<li><?php echo wp_get_attachment_image(nl2br(get_post_meta($post->ID,'gallary_pic3',true)), 'gallary-small'); ?></li>
	  	<?php endif; ?>
	  	<?php if(get_post_meta($post->ID,'gallary_pic4') == true): ?>
	  	<li><?php echo wp_get_attachment_image(nl2br(get_post_meta($post->ID,'gallary_pic4',true)), 'gallary-small'); ?></li>
	  	<?php endif; ?>
	  	<?php if(get_post_meta($post->ID,'gallary_pic5') == true): ?>
	  	<li><?php echo wp_get_attachment_image(nl2br(get_post_meta($post->ID,'gallary_pic5',true)), 'gallary-small'); ?></li>
	  	<?php endif; ?>
	  	<?php if(get_post_meta($post->ID,'gallary_pic6') == true): ?>
	  	<li><?php echo wp_get_attachment_image(nl2br(get_post_meta($post->ID,'gallary_pic6',true)), 'gallary-small'); ?></li>
	  	<?php endif; ?>
	  	<?php if(get_post_meta($post->ID,'gallary_pic7') == true): ?>
	  	<li><?php echo wp_get_attachment_image(nl2br(get_post_meta($post->ID,'gallary_pic7',true)), 'gallary-small'); ?></li>
	  	<?php endif; ?>
	  	<?php if(get_post_meta($post->ID,'gallary_pic8') == true): ?>
	  	<li><?php echo wp_get_attachment_image(nl2br(get_post_meta($post->ID,'gallary_pic8',true)), 'gallary-small'); ?></li>
	  	<?php endif; ?>
	  	<?php if(get_post_meta($post->ID,'gallary_pic9') == true): ?>
	  	<li><?php echo wp_get_attachment_image(nl2br(get_post_meta($post->ID,'gallary_pic9',true)), 'gallary-small'); ?></li>
	  	<?php endif; ?>
	  	<?php if(get_post_meta($post->ID,'gallary_pic10') == true): ?>
	  	<li><?php echo wp_get_attachment_image(nl2br(get_post_meta($post->ID,'gallary_pic10',true)), 'gallary-small'); ?></li>
	  	<?php endif; ?>
	  </ul>
	</div>
</div>
</div>
<?php endif; ?>
<!--  ギャラリー end-->

<?php if(get_post_meta($post->ID,'free_table1_1') == true): ?>
<div id="single-table" class="mt30 mr10 ml10">
  <table>
    <tr>
  	  <th><?php echo nl2br(get_post_meta($post->ID,'free_table1_1',true)); ?></th>
  	  <td><?php echo nl2br(get_post_meta($post->ID,'free_table1_2',true)); ?></td>
    </tr>
  <?php if(get_post_meta($post->ID,'free_table2_1') == true): ?>
    <tr> 
  	  <th><?php echo nl2br(get_post_meta($post->ID,'free_table2_1',true)); ?></th>
  	  <td><?php echo nl2br(get_post_meta($post->ID,'free_table2_2',true)); ?></td>
    </tr>
  <?php endif; ?>
  <?php if(get_post_meta($post->ID,'free_table3_1') == true): ?>
	<tr> 
  	  <th><?php echo nl2br(get_post_meta($post->ID,'free_table3_1',true)); ?></th>
  	  <td><?php echo nl2br(get_post_meta($post->ID,'free_table3_2',true)); ?></td>
    </tr>
  <?php endif; ?>
  </table>
</div>
<?php endif; ?>


<?php
if (is_single()) : 
?>
<nav class="adjacent_post_links">
  <ul>
    <li class="previous"><?php previous_post_link('%link', '%title', true); ?></li> 
    <li class="next"><?php next_post_link('%link', '%title', true); ?></li> 
  </ul>
</nav>
<?php
endif;
?>

<div id="other-post">
  <h4>その他の記事</h4>
  <div class="otherpost-list">
	<h5>和裁教室</h5>
<?php
query_posts('posts_per_page=4&category_name=wasai');
if (have_posts()) :
  $count = 1;
  while (have_posts()) :
    the_post();
	if ($count < 2) : ?>
	<ol>
<?php endif; ?>
	<li><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
<?php
    $count++;
  endwhile;
endif;
wp_reset_query();
?>
	</ol>
  </div>
  <div class="otherpost-list">
	<h5>着付け教室</h5>
<?php
query_posts('posts_per_page=4&category_name=kitsuke');
if (have_posts()) :
  $count = 1;
  while (have_posts()) :
    the_post();
	if ($count < 2) : ?>
	<ol>	
<?php endif; ?>
	<li><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
<?php
    $count++;
  endwhile;
endif;
wp_reset_query();
?>
	</ol>
  </div>
  <div class="otherpost-list">
	<h5>和遊会</h5>
<?php
query_posts('posts_per_page=4&category_name=wayukai');
if (have_posts()) :
  $count = 1;
  while (have_posts()) :
    the_post();
	if ($count < 2) : ?>
	<ol>
<?php endif; ?>
	<li><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
<?php
    $count++;
  endwhile;
endif;
wp_reset_query();
?>
	</ol>
  </div>
</div>
