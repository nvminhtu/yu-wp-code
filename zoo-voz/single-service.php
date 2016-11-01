<?php
/**
 * @single: service
 */ ?>
<?php get_header(); ?>
<!-- main start -->
<div id="main" class="clearfix">
  <?php while ( have_posts() ) : the_post(); // Start the loop.
        $service_id = get_the_ID();
        $service_sub_text = get_field('service_sub_text');
        $service_price = get_field('service_price');
        $service_period = get_field('service_period');
        $color_code = get_field('service_color');
  ?>
  <div class="inner consulting single_service" data-cat-color="<?php echo $color_code; ?>">
    <div class="box_title_cen clearfix">
       <h3 class="title_03">
         <span class="lf"><?php the_title(); ?></span><br />
         <span><?php echo $service_sub_text; ?></span></h3>
       <p class="des_ser"><?php the_content(); ?></p>
       <?php if(!is_null($service_price)&&$service_price!='') { ?>
         <p class="ser_price"><span><?php echo $service_price; ?></span></p>
       <?php } ?>
       <?php if(!is_null($service_period)&&$service_period!='') { ?>
       <p class="ser_price ser_period"><span><?php echo $service_period; ?></span></p>
       <?php } ?>

    </div>

  <?php //--- start Item list -------------------- ?>
  <?php
      if( have_rows('items') ):
        while ( have_rows('items') ) : the_row();
          $item_content = get_sub_field('item_content');
          echo $item_content;
       endwhile;
      else :
        //if no photos - shown here
      endif;
    ?>
  <?php //--- end Item list -------------------- ?>
  <!--inner consulting --></div>

  <?php //--- start works list -------------------- ?>
  <?php include('includes/related-works.php'); ?>
  <?php
    //--- start service list --------------------
    $service_box_data = prefixservices_get_option( 'service_data' );
    $wysiwyg = apply_filters( 'the_content', $service_box_data  );
    echo $wysiwyg;
   //--- end service list -------------------- ?>

  <!-- start blog list -->
  <!-- #container03 -->
  <?php echo do_shortcode('[related_sblogs]'); ?>

  <!-- end blog list -->

  <?php //--- end works list -------------------- ?>

  <?php endwhile; // End the loop. ?>
</div>
<!-- main end -->
<?php get_footer(); ?>
