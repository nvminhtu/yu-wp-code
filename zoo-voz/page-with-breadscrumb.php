<?php
/**
 * Template Name: Page with Breadcrumbs
 * @package WordPress
 * @subpackage GrooVoost
 * @since GrooVoost
 * Content will be gotten from admin editor
 */
get_header(); ?>

<!-- main start -->
<div id="main" class="clearfix">
    <div class="inner ftb">
      <div id="topic_path" class="clearfix">
        <ul>
          <li><a href="#">HOME</a> &gt; </li>
          <li><?php the_title(); ?></li>
        </ul>
      </div>
    </div>
    <?php
		// Start the loop.
		while ( have_posts() ) : the_post();
      the_content();
		endwhile;
    // End of the loop.
		?>
<!-- #main --></div>
<?php get_footer(); ?>
