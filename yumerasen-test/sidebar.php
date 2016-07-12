		<!-- navi start -->
        <div id="sidebar" class="clearfix">
		
<?php
$sidebar_cat_list = array(
  'wasai' => 2,
  'kitsuke' => 2,
  'wayukai' => 2,
  'voice' => 2,
);

foreach ($sidebar_cat_list as $sidebar_cat_name => $sidebar_cat_num) :
  query_posts('posts_per_page=' . $sidebar_cat_num . '&category_name=' . $sidebar_cat_name);
?>        
		  <div class="lititle">
		    <a href="<?php echo get_term_link($sidebar_cat_name, 'category'); ?>"><h3 class="mt20"><?php echo esc_html(get_category_by_slug($sidebar_cat_name)->name); ?></h3></a>
		  </div>
          <ul>
<?php
  if (have_posts()) :
    while (have_posts()) :
      the_post();
?>
            <li>
			  <div class="eachmenu">
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				<time class="entry-date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time(get_option('date_format')); ?></time>
			  </div>
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(50, 50)); ?></a>
            </li>
<?php
    endwhile;
  endif;
?>
          </ul>
		  <div class="view">
            <p class="clearfix"><a href="<?php echo get_term_link($sidebar_cat_name, 'category'); ?>">＞＞他の記事を見る</a></p>
		  </div>
<?php
  wp_reset_query();
endforeach;
?>
		</div><!-- #sidebar end -->
