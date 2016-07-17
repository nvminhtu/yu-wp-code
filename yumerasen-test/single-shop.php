<?php  get_header(); ?>
<div id="main" class="clearfix">
	<?php
 	if (have_posts()) :
		while (have_posts()) :
			the_post();
			get_template_part('content-single-shop');
		endwhile;
	endif;
	?>

	<!-- content end -->
<?php get_sidebar(); ?>
</div>

	<!-- main end -->
<?php get_footer(); ?>
