<?php
/*
Template Name: Full width
*/

get_header();?>
  <!-- #content -->
  <div id="content" class="clearfix">
    	   <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
					<?php the_content(); ?>
			
			<?php endwhile; ?>
  </div>
  <!-- //#content --> 
</div>
<!-- main end -->

<?php
get_footer(); 
?>