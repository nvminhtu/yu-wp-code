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
<<<<<<< HEAD

=======
<!--<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.7&appId=677685095613478";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>-->
>>>>>>> 0d2f802675c860a6a84fe59f2bb6320c792a2a3b
  <div id="wrapper">
    <div id="header" class="clearfix">
    <div id="main_video" class="clearfix">
      <div class="main_video_inner clearfix">
       <div class="video_index_overlay"></div>
        <video  id="video_main" class="video-bg" muted loop autoplay onclick="this.play()">
          <source type="video/mp4" src="<?php bloginfo('template_url'); ?>/images/groovoost_main_video.mp4"  />
          使用中のブラウザはビデオの再生がサポートされていません。最新ブラウザのバージョンアップをお勧めいたします。
        </video>
      </div>
      
      <div class="main_video_inner_sp clearfix">
        <img src="<?php bloginfo('template_url'); ?>/images/gv_main_video_sp.gif">
      </div>
      
      <div id="head_top" class="clearfix">
        <div class="inner">
          <h1 id="logo"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt=""></a></h1>
          
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
