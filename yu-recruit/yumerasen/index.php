<?php
get_header()
/*
Template Name: index
*/
?>
    <!-- #container01 -->
    <div id="container01" class="clearfix">
      <div class="inner clearfix">
        <div id="s_news_out" class="clearfix">
          <div class="box_news_slide">
            <?php include('includes/list_news_index.php') ?>
          </div>
        </div>
        <p id="btn_all_news"><a href="<?php bloginfo('url'); ?>/news/">もっと見る</a></p>
      </div>
    </div>
    <!-- #container02 -->
    <div id="container02" class="clearfix pdbox">
      <div class="inner clearfix">
        <h3>着物から和を学び、<br class="box_sp" />
          和からしたいことへ</h3>
        <p class="btn btn01 btn_hvw"><a href="#">コンセプトを見る</a></p>
      </div>
    </div>
    <!-- #container03 -->
    <div id="container03" class="clearfix ">
      <div class="box_fc box_fc_left"></div>
      <div class="box_fc box_fc_right">
        <div class="box_fc_inner">
          <div class="box_fc_ct pdbox">
            <h3 class="titleh3_01">夢楽染について</h3>
            <h4 class="titleh4_01">和をサービスとするお仕事です。</h4>
            <p class="s_des">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            <p class="btn btn01 "><a href="#">詳しく見る</a></p>
          </div>
        </div>
      </div>
    </div>
    <!-- #container04 -->
    <div id="container04" class="clearfix pdbox">
      <div class="inner clearfix">
        <h3 class="titleh3_01">支援活動</h3>
        <div class="inner02 clearfix">
          <div class="col col2">
            <div class="support01">
              <p class="sub_img"><img src="<?php bloginfo('template_url'); ?>/images/index_img_02.jpg" alt="" /></p>
              <div class="box_on">
                <p class="bon_title">社内公募のアイデアに資本提供し、支援します。</p>
              </div>
            </div>
          </div>
          <div class="col col2">
            <div class="support01">
              <p class="sub_img"><img src="<?php bloginfo('template_url'); ?>/images/index_img_03.jpg" alt="" /></p>
              <div class="box_on">
                <p class="bon_title">障害者支援施設に浴衣を寄付しています。</p>
              </div>
            </div>
          </div>
        </div>
        <p class="btn btn01"><a href="#">詳しく見る</a></p>
      </div>
    </div>
    <!-- #container05 -->
    <div id="container05" class="clearfix pdbox">
      <div class="inner clearfix">
        <h3 class="titleh3_01">先輩社員インタビュー</h3>
        <div class="inner02 clearfix">
          <div id="index_slide_staff">
            <div class="col col2">
              <div class="staff_box01">
                <p class="staff_img01"><img src="<?php bloginfo('template_url'); ?>/images/index_staff_01.jpg" alt="" /></p>
                <div class="box_on">
                  <p class="staff_time"><span>2013年新卒入社</span></p>
                  <div class="box_staff_info">
                    <p class="staff_title">将来、和に関わることで起業したい、だから夢楽染に入りました。</p>
                    <p class="staff_name">苗字 名前</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col col2">
              <div class="staff_box01">
                <p class="staff_img01"><img src="<?php bloginfo('template_url'); ?>/images/index_staff_02.jpg" alt="" /></p>
                <div class="box_on">
                  <p class="staff_time bg_clorange"><span>2013年中途入社</span></p>
                  <div class="box_staff_info">

                    <p class="staff_title">着物を作るでもなく、たくさんの人に着物を届けたい。</p>
                    <p class="staff_name">苗字 名前</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col col2">
              <div class="staff_box01">
                <p class="staff_img01"><img src="<?php bloginfo('template_url'); ?>/images/index_staff_01.jpg" alt="" /></p>
                <div class="box_on">
                  <p class="staff_time"><span>2013年新卒入社</span></p>
                  <div class="box_staff_info">
                    <p class="staff_title">将来、和に関わることで起業したい、だから夢楽染に入りました。</p>
                    <p class="staff_name">苗字 名前</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col col2">
              <div class="staff_box01">
                <p class="staff_img01"><img src="<?php bloginfo('template_url'); ?>/images/index_staff_02.jpg" alt="" /></p>
                <div class="box_on">
                  <p class="staff_time bg_clorange"><span>2013年中途入社</span></p>
                  <div class="box_staff_info">
                    <p class="staff_title">着物を作るでもなく、たくさんの人に着物を届けたい。</p>
                    <p class="staff_name">苗字 名前</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <p class="btn btn01"><a href="#">全てのインタビューを見る</a></p>
      </div>
    </div>
    <!-- #container06 -->
    <div id="container06" class="clearfix pdbox">
      <div class="inner clearfix">
        <h3 class="titleh3_01">ブログ</h3>
         <?php 
		 echo do_shortcode('[list_blog]');
		 ?>
         
        
        <!--<div class="clearfix">
          <div class="blog_box01">
            <p class="blog_img"><a href="blog_detail.html"><img src="<?php //bloginfo('template_url'); ?>/images/index_blog_01.jpg" alt="" /><span class="flag_new"><span>NEW</span></span></a></p>
            <div class="blog_idx_info">
              <p class="blog_title">○○○○○○を開催しました！</p>
              <p class="blog_des">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入り...</p>
              <p class="blog_time">2016.00.00</p>
            </div>
          </div>
          <div class="blog_box01">
            <p class="blog_img"><a href="blog_detail.html"><img src="<?php //bloginfo('template_url'); ?>/images/index_blog_02.jpg" alt="" /></a></p>
            <div class="blog_idx_info">
              <p class="blog_title">○○○○○○を開催しました！</p>
              <p class="blog_des">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入り...</p>
              <p class="blog_time">2016.00.00</p>
            </div>
          </div>
          <div class="blog_box01">
            <p class="blog_img"><a href="blog_detail.html"><img src="<?php //bloginfo('template_url'); ?>/images/index_blog_03.jpg" alt="" /></a></p>
            <div class="blog_idx_info">
              <p class="blog_title">○○○○○○を開催しました！</p>
              <p class="blog_des">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入り...</p>
              <p class="blog_time">2016.00.00</p>
            </div>
          </div>
        </div>
        <p class="btn btn01"><a href="blog.html">全てのブログを見る</a></p> -->
      </div>
    </div>
  </div>
  <!-- main end -->

<?php get_footer();?>
