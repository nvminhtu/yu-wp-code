<?php
/**
 * Template Name: Member Page
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
<div class="inner">
  <h3 class="title_h301">MEMBER <br>
    <span>メンバー紹介</span></h3>
    
    <?php
    // Start the loop.
    while ( have_posts() ) : the_post();
      the_content();
    endwhile;
    // End of the loop.
    ?>
</div>
<!-- #main --></div>
<?php get_footer(); ?>
