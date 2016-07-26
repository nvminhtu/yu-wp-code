<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php wp_title(''); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />

</head>
<?php 
wp_head();
 ?>

<body <?php include('includes/id_class_page.php') ?>>
<!--<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.6&appId=677685095613478";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>-->
<!-- loader -->
<?php include('includes/loader.php') ?>
<!-- //loader -->

<div id="wrapper">
  <div id="header" class="clearfix">
  <?php 
if(is_home() || is_front_page()||is_page('index')){ 
	include('includes/idex_video_main.php'); ?>
    <div id="menu_top" class="">
    <?php
} else{ ?>
<div id="menu_top" class="fixed">
 <?php } ?>

      <div class="inner">
        <p id="logo_menu"><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo_menu.png" alt="" /></a></p>
      <!--  <ul>
          <li><a href="#">夢楽染について</a></li>
          <li><a href="#">先輩社員<br />
            インタビュー</a></li>
          <li><a href="#">夢楽染アルバム</a></li>
          <li><a href="#">採用情報</a></li>
          <li class="navi_link_ct navi_link_ct01"><a href="#">新卒採用<br />
            エントリー</a></li>
          <li class="navi_link_ct navi_link_ct02"><a href="#">中途採用<br />
            エントリー</a></li>
        </ul>-->
        
          
          <?php wp_nav_menu( array(
    'menu' => 'Menu top'
) ); ?>

      </div>
    </div>
    <div id="sticky_menu_header" class="">
      <div class="sticky_menu_header_inner clearfix">
        <div id="btn_menu"><a href="javascript:void(0)">
          <div id="nav-icon"> <span></span> <span></span> <span></span> <span></span> </div>
          <span class="txt_menu">MENU</span></a></div>
        <p id="logo_sticky"><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo_b.png" /></a></p>
        <div id="list_menu_sticky_header">
         <!-- <ul class="list_page">
            <li><a href="#">お知らせ</a></li>
            <li class="sub"><a href="#">夢楽染について</a>
              <ul>
                <li><a href="#">事業内容</a></li>
                <li><a href="#">コンセプト</a></li>
                <li><a href="#">支援活動</a></li>
              </ul>
            </li>
            <li><a href="#">先輩社員インタビュー1</a></li>
            <li><a href="#">先輩社員インタビュー2</a></li>
            <li><a href="#">夢楽染アルバム</a></li>
            <li><a href="#">ブログ</a></li>
            <li><a href="#">募集要項</a></li>
            <li><a href="#">よくあるご質問</a></li>
            <li class="link_ct"><a href="#">お問い合わせ</a></li>
          </ul>-->
          <div class="list_page">
           <?php dynamic_sidebar( 'list_menu_sticky_header' ); ?>
          </div>
            <!--  <ul class="list_entry clearfix">
        
            <li><a href="#">新卒採用<br />
              エントリー</a></li>
            <li><a href="#">中途採用<br />
              エントリー</a></li>
          </ul>-->
             <div class="list_entry clearfix">
              <?php dynamic_sidebar( 'sticky_header_list_entry' ); ?>
             </div>
         
          <div class="sticky_header_bottom clearfix">
            <div class="search_ct_sticky">
             <?php include('includes/form_search.php') ?>
            </div>
            <div id="header_share">
               <?php include('includes/share_fb.php') ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="bg_box_out">&nbsp;</div>
  </div>
  
  
  

<?php 
if(is_home() || is_front_page()||is_page('index')){ ?>
 <!-- main start -->
  <div id="main" class="clearfix"> 
<?php } 
else{ ?>
	<!-- main start -->
		<div id="main" class="clearfix">
  <div id="top_info" class="clearfix">
    <div class="inner clearfix">
    <?php include('includes/top_info.php') ?>
    
    </div>
  </div>
  <div id="topic_path" class="clearfix">
    <div class="inner clearfix">
     <?php include('includes/topic_path.php') ?>
      <div class="search_ct_top">
         <?php include('includes/form_search.php') ?>
      </div>
    </div>
  </div>
<?php } ?>
