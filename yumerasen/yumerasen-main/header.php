<?php echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<head profile="http://purl.org/net/ns/metaprof">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<title><?php wp_title('｜', 1, 'right'); ?><?php bloginfo('name'); ?></title>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.scroll.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/iepngfix_tilebg.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/rollover.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.cookie.js" type="text/javascript"></script>
<script type="text/javascript" src="http://www.google.com/jsapi?key="></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/gmap.js?auto"></script>
<link  href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" />
<!--[if lt IE 9]>
  <meta http-equiv="Imagetoolbar" content="no" />
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<?php wp_head(); ?>
<?php if(is_front_page()) : ?>
<script src="http://www.google.com/jsapi"></script>
<script>google.load("jquery", location.search.replace(/\?/, '') || "1.4.2");</script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.bgSwitcher.js"></script>
<?php elseif(is_single()) : 
get_template_part('header_ogp'); ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/galleryview/jquery.galleryview-1.1.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/galleryview/jquery.timers-1.1.2.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#photos').galleryView({
    panel_width: 680,
    panel_height: 510,
    frame_width: 100,
    frame_height: 75,	
    overlay_opacity: 0.85,
    background_color: 'none',
    border: 'none'
  	});
  });
</script>
<script type="text/javascript">
  window.___gcfg = {lang: 'ja'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<?php endif; ?>
</head>
<?php if(is_front_page()) : ?>
<body id="index">
<?php else : ?>
<body id="inside">
<?php endif; ?>

<div id="container">
<?php if(is_front_page()) : ?>
<div id="wrapperindex">
<?php else : ?>
<div id="wrapper">
<?php endif; ?>
	<div id="header" class="clearfix">		
		<?php if(is_single()) : ?>
		<h1 id="top">【<?php $cat = get_the_category(); $cat = $cat[0]; {echo "$cat->cat_name" ;} ?>】<?php the_title(); ?> | <?php bloginfo('description'); ?></h1>
		<?php elseif(is_front_page()) : ?>
		<h1 id="top"><?php bloginfo('description'); ?></h1>
		<?php elseif(is_page()) : ?>
		<h1 id="top"><?php the_title(); ?> | <?php bloginfo('description'); ?></h1>
		<?php elseif(is_archive()) : ?>
		<h1 id="top"><?php $cat = get_the_category(); $cat = $cat[0]; {echo "$cat->cat_name" ;} ?> | <?php bloginfo('description'); ?></h1>
		<?php else : ?>
		<h1 id="top"><?php bloginfo('description'); ?></h1>
		<?php endif; ?>
        <div class="clearfix" id="header01">
          <p class="logo"><a href="<?php echo home_url('/'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/header_rogo.jpg" alt="<?php bloginfo('name'); ?>" width="310" height="65" /></a></p>
          <p class="tel"><a href="<?php echo home_url('/'); ?>contact/"><img src="<?php bloginfo('template_url'); ?>/images/headercontact_off.jpg" alt="メールでのお問い合わせはこちら" width="215" height="47" /></a></p>
          <p class="tel2"><img src="<?php bloginfo('template_url'); ?>/images/header_tel.jpg" width="226" height="40" alt="0800-919-1029" /></p>
         </div>
         <div id="header_nav">
           <ul>
             <li><a href="<?php echo home_url('/'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/headernav_01_off.jpg" width="158" height="35" alt="トップページ" /></a></li>
             <li><a href="<?php echo home_url('/'); ?>concept/"><img src="<?php bloginfo('template_url'); ?>/images/headernav_02_off.jpg" width="158" height="35" alt="コンセプト" /></a></li>
             <li><a href="<?php echo home_url('/'); ?>shop/"><img src="<?php bloginfo('template_url'); ?>/images/headernav_03_off.jpg" width="158" height="35" alt="店舗情報" /></a></li>
             <li><a href="<?php echo home_url('/'); ?>service/"><img src="<?php bloginfo('template_url'); ?>/images/headernav_04_off.jpg" width="158" height="35" alt="サービス内容" /></a></li>
			 <li><a href="<?php echo home_url('/'); ?>recruit/"><img src="<?php bloginfo('template_url'); ?>/images/headernav_06_off.jpg" width="158" height="35" alt="求人情報" /></a></li>
             <li><a href="<?php echo home_url('/'); ?>company/"><img src="<?php bloginfo('template_url'); ?>/images/headernav_07_off.jpg" width="160" height="35" alt="会社概要" /></a></li>
           </ul>
         </div>
<?php if(is_front_page()) : ?>		 
		 <h2><img src="<?php bloginfo('template_url'); ?>/images/index_h2.jpg" width="195" height="369" alt="和と生きる" /></h2>
	</div>
<?php elseif(is_page()) : ?>	
		 <h2><?php the_post_thumbnail('inpage_image', array('alt' => the_title_attribute('echo=0'), 'title' => the_title_attribute('echo=0'))); ?></h2>
	</div>
<?php else : ?>
<h2></h2>
</div>
<?php endif; ?>