<?php

get_header();?>

<!-- #content -->

<div id="content" class="clearfix">
<div class="inner clearfix">
<ul class="list01">
<?php if ( have_posts() ) : ?>
<p class="page-title"><?php printf( __('Search Results for ： %s'), '<span>' . get_search_query() . '</span>' ); ?></p>
<?php /* Start the Loop */ ?>
<ul>
  <?php while ( have_posts() ) : the_post(); ?>
  <li><a href="<?php echo the_permalink();  ?>"><?php echo the_title(); ?></a></li>
  <?php 

		 

 endwhile; 

// wp_pagenavi();

 ?>
</ul>
<?php else : ?>
<div class="entry-content">
  <p> <?php echo 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.'; ?> </p>
  <div class="search_bt clearfix">
    <div class="search_ct_top search_again">
      <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <input type="text" placeholder="代表メッセージ" value="<?php echo get_search_query(); ?>" name="s" id="s" />
        <input type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
      </form>
    </div>
  </div>
</div>
<?php endif; ?>
</div>
</div>
<!-- //#content -->
</div>
<!-- main end -->

<?php
get_footer(); 
?>
