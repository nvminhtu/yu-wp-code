<link href="<?php bloginfo('template_url'); ?>/css/fonts.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_url'); ?>/css/styles.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_url'); ?>/css/under.css" rel="stylesheet" type="text/css" />
<link  href="<?php bloginfo('template_url'); ?>/css/animate.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_url'); ?>/css/common.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_url'); ?>/css/menu.css" rel="stylesheet" type="text/css" />
<link  href="<?php bloginfo('template_url'); ?>/css/blog.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_url'); ?>/css/responsive.css" rel="stylesheet" type="text/css" />
<link  href="<?php bloginfo('template_url'); ?>/css/under_responsive.css" rel="stylesheet" type="text/css" />

<?php wp_head(); ?>
</head>
<!-- service id -->
<?php
  $classID = '';
  if(get_post_type() == 'service') {
    $classID = 'service';
  } else if (get_post_type() == 'blog') {
    $classID = 'blog';
  }
?>
<body id="<?php echo $classID; ?>" class="under">
  <div id="wrapper">

      <?php
        //check if option is video or background image
        if( get_field('choose_display_type','option') == 'Video' ):
          if( get_field('header_background_video','option') ):
            $background_video_url = get_field('header_background_video','option');
          endif;
        ?>
        <div id="header" style="background: url('<?php echo $background_video_url; ?>') center center no-repeat; background-size:cover;" class="clearfix">
          <div id="header_ct" class="header_hvideo clearfix">
            <?php the_field('header_content_for_inner_page', 'option'); ?>
          </div>
          <div id="bg_box_out">&nbsp;</div>
        </div>
         <?php else:
                if( get_field('header_background','option') ):
                  $background_url = get_field('header_background','option');
                endif;
          ?>
          <div id="header" style="background: url('<?php echo $background_url; ?>') center center no-repeat; background-size:cover;" class="clearfix">
            <div id="header_ct" class="clearfix">
              <?php the_field('header_content_for_inner_page_background', 'option'); ?>
            </div>
            <div id="bg_box_out">&nbsp;</div>
          </div>
          <script>
	$(document).ready(function(e) {
        	var myVideo =  $("#main_unvideo").find("iframe"); 
			myVideo.mute();
    });

</script>
        <?php endif; ?>



  <!-- sticky_header start -->
  <?php include('parts/sticky-menu.php'); ?>
  <!-- sticky_header end -->
