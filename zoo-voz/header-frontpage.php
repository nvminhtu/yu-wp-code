<link href="<?php bloginfo('template_url'); ?>/css/fonts.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_url'); ?>/css/styles.css" rel="stylesheet" type="text/css" />
<link  href="<?php bloginfo('template_url'); ?>/css/animate.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_url'); ?>/css/common.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_url'); ?>/css/menu.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_url'); ?>/css/responsive.css" rel="stylesheet" type="text/css" />
<?php wp_head(); ?>
</head>
<body id="index">
<!--<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.7&appId=677685095613478";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>-->
  <div id="wrapper">
    <div id="header" class="clearfix">
    <div id="main_video" class="clearfix">
      <div class="main_video_inner clearfix">
        <div id="video_index_overlay"></div>
        <video id="video_main" class="video-bg" muted="" loop autoplay poster="<?php bloginfo('template_url'); ?>/images/index_bg_main.jpg">
          <source type="video/mp4" src="<?php bloginfo('template_url'); ?>/images/groovoost_video_demo_.mp4" />
          Your browser does not support the video tag. I suggest you upgrade your browser. </video>
      </div>
     <div id="slider_index01">
        	<div id="slider_index_list01">
            	<li><img src="<?php bloginfo('template_url'); ?>/images/slider01.jpg" alt="" /></li>
                <li><img src="<?php bloginfo('template_url'); ?>/images/slider02.jpg" alt="" /></li>
                <li><img src="<?php bloginfo('template_url'); ?>/images/slider03.jpg" alt="" /></li>
            </div>
      </div>
      <div id="head_top" class="clearfix">
        <div class="inner">
          <h1 id="logo"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt=""></a></h1>
          <!--<ul class="list_menutop">
            <li class="menu_top01"><a href="#">サービス内容</a></li>
            <li class="menu_top02"><a href="#">会社について</a></li>
            <li class="menu_top03"><a href="#">実績紹介</a></li>
            <li class="menu_top04"><a href="#">ブログ</a></li>
            <li class="menu_top05"><a href="#">問い合わせ</a></li>
          </ul>-->
          <?php
            $arg_top_menu = array (
                'theme_location' => 'top-menu',
                'menu_class' => 'list_menutop'
              );
            wp_nav_menu($arg_top_menu);
           ?>

        </div>
      </div>
      <div class="txt_main">
        <h2>Web × 動画<br>
          <span class="h2_l">プロモーション</span> <span class="h2_s">ワクワクは、伝えられる。</span></h2>
        <!--
        <p id="btn_main"><a href="#">コンセプトムービーを見る</a></p>
        -->
      </div>
    </div>
    <div id="bg_box_out">&nbsp;</div>



  </div>

  <!-- sticky_header start -->
  <?php include('parts/sticky-menu.php'); ?>
  <!-- sticky_header end -->

  <!-- Gnavi start -->
  <div id="gnavi" class="clearfix">
    <?php
      $arg_service = array ( 'theme_location' => 'service-menu');
      wp_nav_menu($arg_service);
     ?>
  </div>
  <!-- Gnavi end -->
