<?php
/**
 * Template Name: Index
 * @package WordPress
 * @subpackage GrooVoost
 * @since GrooVoost
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
 <!-- main end -->
 <?php //kriesi_pagination();  ?>
<?php //wp_pagenavi( ); ?>
<?php get_footer();?>
