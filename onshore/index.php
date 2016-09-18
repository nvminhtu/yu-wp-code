<?php
/**
 * Template Name: Index
 *
 * @package WordPress
 * @subpackage Onshore.works
 * @since Onshore.works
 * Content will be gotten from admin editor
 */ ?>
<?php get_header(); ?>
<!-- main start -->
<div id="main" class="clearfix">
  <?php
  while ( have_posts() ) : the_post();
    the_content();
  endwhile;
  ?>
</div>
<?php get_footer();?>
