<?php

get_header();?>

  
  <!-- #content -->
  <div id="content" class="clearfix">
    <div class="inner clearfix">
    	   <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
					<?php the_content(); ?>
			
			<?php endwhile; ?>
    </div>
  </div>
  <!-- //#content --> 
</div>
<!-- main end -->

<?php
get_footer(); 
?>
