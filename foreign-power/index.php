<?php
/**
 * Template Name: Index
 * @package WordPress
 * @subpackage ForeignPower
 * @since ForeignPower
 * Content will be gotten from admin editor
 */ ?>
<?php get_header(); ?>
<body id="index">
    <div id="header" class="clearfix">
      <div class="inner clearfix">
        <p id="logo"><a href=""><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt=""></a></p>
        <h1>外国人アルバイト人材提供サービス</h1>
        <p class="head_link"><a href="">お申し込み</a></p>
      </div>
    </div>

    <!-- main start -->
    <div id="main" class="clearfix"> 
      <?php
     	  while ( have_posts() ) : the_post();
           the_content();
        endwhile;
      ?>
      <?php 
      	include('includes/qa-list.php');
      ?>
      <!-- #container09 -->
      <div id="contact" class="clearfix">
        <div class="inner clearfix">
            <?php echo do_shortcode('[contact-form-7 id="9" title="Contact Form"]'); ?> 
        </div>
      </div>
      <!-- end: #container09 --> 
    </div>
    <!-- main end -->
    <div id="footer" class="clearfix">
      <div class="footer_add">
        <address>
        Copyright (C) cordial CO., LTD. All Rights Reserved.
        </address>
      </div>
    </div>
  <!-- end main --></div>
</body>
<?php get_footer();?>
