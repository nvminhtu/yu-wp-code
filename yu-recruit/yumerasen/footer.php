
<div id="footer" class="clearfix">
  <div id="footer_contact" class="clearfix pdbox">
    <div class="inner">
      <div class="col col2">
        <div class="fbox_contact clearfix">
          <h3 class="titleh3_01">新卒採用エントリー</h3>
          <p class="btn btn02 nitem"><a href="#">2017年新卒募集要項</a></p>
          <p class="btn btn02 btn_ct01"><a href="#">エントリーフォーム</a></p>
        </div>
      </div>
      <div class="col col2">
        <div class="fbox_contact clearfix">
          <h3 class="titleh3_01">中途採用エントリー</h3>
          <p class="btn btn02 nitem"><a href="#">2017年中途募集要項</a></p>
          <p class="btn btn02 btn_ct02"><a href="#">エントリーフォーム</a></p>
        </div>
      </div>
    </div>
  </div>
  <div id="to_top">
    <p><a href="#wrapper">PAGE TOP</a></p>
  </div>
  <div id="footer_info" class="clearfix">
    <div class="inner clearfix">
      <p id="footer_logo"><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo_b.png" alt="" /></a></p>
      <div class="box_flink">
        <div class="footer_link footer_link01">
          <?php dynamic_sidebar( 'footer_link_col1' ); ?>
        </div>
        <div class="footer_link footer_link02">
          <?php dynamic_sidebar( 'footer_link_col2' ); ?>
        </div>
        <div class="footer_link footer_link03">
          <?php dynamic_sidebar( 'footer_link_col3' ); ?>
        </div>
      </div>
      <div id="footer_link_sp">
        <div class="list_page">
          <?php dynamic_sidebar( 'list_menu_sticky_footer' ); ?>
        </div>
      </div>
    </div>
  </div>
  <div id="footer_bottom" class="clearfix">
    <div class="inner">
      <div id="footer_share">
        <?php include('includes/share_fb.php') ?>
      </div>
      <address>
      Copyright &copy; 夢楽染 All Rights Reserved.
      </address>
    </div>
  </div>
</div>
</div>
<?php wp_footer(); ?>
<link  href="<?php bloginfo('template_url'); ?>/css/fonts.css" rel="stylesheet" type="text/css" />
<link  href="<?php bloginfo('template_url'); ?>/css/styles.css" rel="stylesheet" type="text/css" />
<link  href="<?php bloginfo('template_url'); ?>/css/menu.css" rel="stylesheet" type="text/css" />
<?php 
if(is_home() || is_front_page()||is_page('index')){} 
else { ?>
<link  href="<?php bloginfo('template_url'); ?>/css/under.css" rel="stylesheet" type="text/css" />
<?php } ?>
<link  href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css" rel="stylesheet" type="text/css" />
<link  href="<?php bloginfo('template_url'); ?>/css/style_sp.css" rel="stylesheet" type="text/css" />
<link  href="<?php bloginfo('template_url'); ?>/css/responsive.css" rel="stylesheet" type="text/css" />
<script src="<?php bloginfo('template_url'); ?>/js/jquery.js" type="text/javascript"></script> 
<script src="<?php bloginfo('template_url'); ?>/js/jquery.scroll.js" type="text/javascript"></script> 
<script src="<?php bloginfo('template_url'); ?>/js/rollover.min.js" type="text/javascript"></script> 
<script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.js" type="text/javascript"></script> 
<script src="<?php bloginfo('template_url'); ?>/js/sweetlink.js" type="text/javascript"></script> 
<script src="<?php bloginfo('template_url'); ?>/js/common.js" type="text/javascript"></script>
<?php 
if(is_home() || is_front_page()||is_page('index')){ ?>
<script src="<?php bloginfo('template_url'); ?>/js/top.js" type="text/javascript"></script>
<?php } 
else {  } ?>
</body></html>