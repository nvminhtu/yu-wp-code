<?php
/**
 * Template Name: Member Blog Page
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
        <li><a href="<?php bloginfo('siteurl'); ?>">HOME</a> &gt; </li>
        <li><a href="<?php bloginfo('siteurl'); ?>/blog/">ブログ一覧</a> &gt; </li></li>
        <li><?php the_title(); ?></li>
      </ul>
    </div>
    <div id="container" class="clearfix">
      <div id="content" class="clearfix">
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
          the_content();
        endwhile;
        // End of the loop.
        ?>

      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<!-- main end -->
<?php get_footer(); ?>
