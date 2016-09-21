<?php get_header(); ?>

<div id="header" class="contact clearfix">
  <div id="head_info">
    <div class="inner clearfix">
      <h1 id="logo"><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="その助成金トレルカ？toreruca" /></a></h1>
      <h2><?php the_title(); ?></h2>
    </div>
  </div>
</div>
<!-- main start -->
<?php
	// Start the loop.
	while ( have_posts() ) : the_post();

		// Include the page content template.
		the_content();


	// End the loop.
	endwhile;
	?>
<?php get_footer(); ?>
