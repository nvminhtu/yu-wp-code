<?php
/**
 * Template Name: Confirmation
 * @package WordPress
 * @subpackage ForeignPower
 * @since ForeignPower
 * Content will be gotten from admin editor
 */ ?>
<?php get_header(); ?>
<body class="contact_confirm">
	<div id="wrapper">

		<div id="box_confirm" class="clearfix">
	    
	     	<div class="inner">
	     
		    	<p id="button_close"><a href="<?php bloginfo('siteurl'); ?>/#contact"><img src="<?php bloginfo('template_url'); ?>/images/icon_close.png" alt="Close"></a></p>
		   		<?php echo do_shortcode('[contact-form-7 id="21" title="Contact Form Confirmation"]'); ?>
	    
	   		</div>
	 	</div>   
		
	</div>

</body>
<?php
	// Start the loop.
	while ( have_posts() ) : the_post();
 		the_content();
	endwhile;
    // End of the loop.
	?>
<?php get_footer(); ?>
