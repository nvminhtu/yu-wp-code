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
    <div id="header" class="clearfix">
      <div class="inner consulting">
        <?php
          $header_content_data = prefixservices_get_option( 'header_content' );
          $header_content = apply_filters( 'the_content', $header_content_data  );
          echo $header_content;
        ?>
      </div>
      <div id="bg_box_out">&nbsp;</div>
    </div>

  <!-- sticky_header start -->
  <?php include('parts/sticky-menu.php'); ?>
  <!-- sticky_header end -->
