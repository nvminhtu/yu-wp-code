<?php get_header(); ?>
<?php
  // Start the loop.
  while ( have_posts() ) : the_post();
?>
<div id="header" class="clearfix">
  <div id="head_info">
    <div class="inner clearfix">
      <h1 id="logo"><a href="<?php bloginfo('siteurl'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="その助成金トレルカ？toreruca" /></a></h1>
      <h2><?php the_title(); ?></h2>
    </div>
  </div>
</div>
<?php include('includes/part-quiz.php'); ?>
<!-- main start -->
<div id="main" class="clearfix"> 
  <div id="container03" class="clearfix" style="height: 900px;">
    <div class="inner clearfix">
      <p><?php the_content(); ?></p>
    </div>
  </div>
  <?php  // End the loop.
    endwhile;
  ?>
</div>
<?php get_footer(); ?>
