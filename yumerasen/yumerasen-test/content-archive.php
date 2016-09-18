<div class="single-article">
  <a href="<?php the_permalink(); ?>">
	  <?php the_post_thumbnail('large_thumbnail', array('alt' => the_title_attribute('echo=0'), 'title' => the_title_attribute('echo=0'))); ?>
  </a>
  <div class="entry-header">
    <h4 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
	<time pubdate="pubdate" datetime="<?php the_time('Y-m-d'); ?>" class="entry-date"><?php the_time(get_option('date_format')); ?></time>
	<section class="entry-content">
    <?php the_excerpt(); ?>
  </section>
  </div>  
</div>