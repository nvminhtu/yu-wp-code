<?php
/**
 * Template Name: Form Page
 *
 * @package WordPress
 * @subpackage Onshore.works
 * @since Onshore.works
 * Content will be gotten from admin editor
 */ ?>
<?php get_header(); ?>
	<div id="contact" class="clearfix">
  		<div class="inner clearfix">
			<?php
			  // Start the loop.
			  while ( have_posts() ) : the_post();
			    the_content();
			  endwhile;
			  // End of the loop.
			?>
		</div>
	</div>
<?php get_footer(); ?>
