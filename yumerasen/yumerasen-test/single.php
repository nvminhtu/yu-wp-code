<?php get_header(); ?>
<div id="main" class="clearfix blog">
<!-- content start -->
		<div id="content">
<?php
if (have_posts()) :
  while (have_posts()) :
    the_post();
    get_template_part('content-single');
  endwhile;
endif;
?>
	<!-- inner start -->
	</div>
	<!-- content end -->
<?php get_sidebar(); ?>
</div>

	<!-- main end -->
<?php get_footer(); ?>