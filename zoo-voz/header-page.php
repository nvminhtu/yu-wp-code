<link href="<?php bloginfo('template_url'); ?>/css/fonts.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_url'); ?>/css/styles.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_url'); ?>/css/under.css" rel="stylesheet" type="text/css" />
<link  href="<?php bloginfo('template_url'); ?>/css/animate.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_url'); ?>/css/common.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_url'); ?>/css/menu.css" rel="stylesheet" type="text/css" />
<?php if(get_post_type() == 'blog'|| is_tag() || is_tax('blog-cat')) { ?>
    <link  href="<?php bloginfo('template_url'); ?>/css/blog.css" rel="stylesheet" type="text/css" />
<?php } ?>
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
        <h1><span>Groovoost Inc.</span> 設立記念</h1>
        <h2><span>WEB</span>コンサルキャンペーン</h2>
        <p class="btn btn_header01"><a href=""><span>詳しくはこちら</span></a></p>
        <p class="btn btn_header02"><a href=""><span>この動画をみる</span></a></p>
      </div>
      <div id="bg_box_out">&nbsp;</div>
    </div>

  <!-- sticky_header start -->
  <?php include('parts/sticky-menu.php'); ?>
  <!-- sticky_header end -->
