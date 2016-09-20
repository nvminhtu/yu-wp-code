<?php
/**
 * @single: service
 */ ?>
<?php get_header('page'); ?>
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
       <p class="serde_t"><?php the_content(); ?></p>
       <p class="ser_price"><span><?php echo $service_price; ?></span></p>
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
  <div id="container04" class="clearfix">
    <div class="inner clearfix">
      <h3 class="title_h301 title_h3_works " data-wow-delay="0.3s">WORKS<br />
        <span>コンサルティング 実績紹介</span></h3>
        <div class="list_works clearfix">
            <?php include('includes/related-works.php'); ?>
        </div>
        <p class="btn btn01 btn_horange btn_mw500 wow bounceIn" data-wow-delay="0.2s"><a href="<?php bloginfo('siteurl'); ?>/work/?category=<?php echo get_the_slug($service_id); ?>"><span>もっと見る</span></a></p>
      </div>
  </div>

  <?php
    //--- start service list --------------------
    $service_box_data = prefixservices_get_option( 'service_data' );
    $wysiwyg = apply_filters( 'the_content', $service_box_data  );
    echo $wysiwyg;
   //--- end service list -------------------- ?>

  <!-- start blog list -->
  <!-- #container03 -->
  <div id="container03" class="clearfix">
    <div class="inner clearfix">
      <?php echo do_shortcode('[related_sblogs]'); ?>
    </div>
  </div>
  <!-- end blog list -->

  <?php //--- end works list -------------------- ?>

  <?php endwhile; // End the loop. ?>
</div>
<!-- main end -->
<?php get_footer(); ?>
