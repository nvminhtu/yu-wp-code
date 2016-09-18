<?php get_header(); ?>
<div id="main" class="clearfix blog">
<!-- content start -->
<div id="content">
<div class="h3-midashi">
  <h3><?php single_cat_title(); ?>&nbsp;記事一覧</h3>
</div>
  <?php
if (have_posts()) :
  while (have_posts()) :
    the_post();
    get_template_part('content-archive');
  endwhile;
  if (function_exists('page_navi')) :
    page_navi('elm_class=page-nav&edge_type=span');
  endif;
endif;
?>
<!-- inner start -->
</div>
<!-- content end -->
<?php get_sidebar(); ?>
</div>

	<!-- main end -->
<?php get_footer(); ?>