<?php
/**
 * @single: service
 */ ?>
<?php get_header('page'); ?>
<!-- main start -->
<div id="main" class="clearfix">
  <?php while ( have_posts() ) : the_post(); // Start the loop.
        $service_id = get_the_ID();
        $service_sub_text = get_field('service_sub_text');
        $service_price = get_field('service_price');
        $service_period = get_field('service_period');
        $color_code = get_field('service_color');
  ?>
  <div class="inner consulting single_service" data-cat-color="<?php echo $color_code; ?>">
    <div class="box_title_cen clearfix">
       <h3 class="title_03">
         <span class="lf"><?php the_title(); ?></span><br />
         <span><?php echo $service_sub_text; ?></span></h3>
       <p class="serde_t"><?php the_content(); ?></p>
       <p class="ser_price"><span><?php echo $service_price; ?></span></p>
    </div>

  <?php //--- start Item list -------------------- ?>
  <?php
      if( have_rows('items') ):
        while ( have_rows('items') ) : the_row();
          $item_content = get_sub_field('item_content');
          echo $item_content;
       endwhile;
      else :
        //if no photos - shown here
      endif;
    ?>
  <?php //--- end Item list -------------------- ?>
  <!--inner consulting --></div>

  <?php //--- start works list -------------------- ?>
  <div id="container04" class="clearfix">
    <div class="inner clearfix">
      <h3 class="title_h301 title_h3_works " data-wow-delay="0.3s">WORKS<br />
        <span>コンサルティング 実績紹介</span></h3>
        <div class="list_works clearfix">
            <?php include('includes/related-works.php'); ?>
        </div>
        <p class="btn btn01 btn_horange btn_mw500 wow bounceIn" data-wow-delay="0.2s"><a href="<?php bloginfo('siteurl'); ?>/work/?category=<?php echo get_the_slug($service_id); ?>"><span>もっと見る</span></a></p>
      </div>
  </div>

  <?php
    //--- start service list --------------------
    //$service_box_data = prefixservices_get_option( 'service_data' );
    //echo $service_box_data;
  ?>
  <div id="container05" class="clearfix">
      <div class="inner clearfix">
        <h3 class="title_h301 " data-wow-delay="0.3s">YOU MAY ALSO LIKE<br>
          <span>他の関連サービス</span></h3>
      </div>
      <div class="inner clearfix">
        <div class="list_service clearfix">
          <div class="cl_blue box_lservice clearfix wow postItem" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.2s; ">
            <p class="img_lservice"><a href=""><img src="<?php bloginfo('template_url'); ?>/images/img_service01.png" alt=""></a></p>
            <p class="cate_lservice">サイト制作</p>
            <div class="title_lservice">
              <p class="title_lservice_l">競争の舞台に立てているか</p>
              <p class="title_lservice_m">ユーザーが「欲しい」と思った瞬間こそ、<br>
                自社サービスを売り込むチャンス。<br>
                買ってもらうための仕掛けは十分ですか？</p>
            </div>
          </div>
          <div class="cl_orange box_lservice video_production clearfix wow postItem" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.2s; ">
            <p class="img_lservice"><a href=""><img src="<?php bloginfo('template_url'); ?>/images/img_service02.png" alt=""></a></p>
            <p class="cate_lservice">動画制作</p>
            <div class="title_lservice">
              <p class="title_lservice_m"><span>感動</span>と<span>興奮</span>を伝える</p>
              <p class="title_lservice_l">臨場感</p>
            </div>
          </div>
          <div class="cl_yellow box_lservice clearfix wow postItem" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.2s; ">
            <p class="img_lservice"><a href=""><img src="<?php bloginfo('template_url'); ?>/images/img_service03.png" alt=""></a></p>
            <p class="cate_lservice">コンサル</p>
            <div class="title_lservice">
              <p class="title_lservice_l">専門家×専門家</p>
              <p class="title_lservice_m">業界のプロである貴社と、<br>
                WebのプロのGroovoostのチカラを合わせ、<br>
                限りなく近い正解を導きます。</p>
            </div>
          </div>
          <div class="cl_green box_lservice advertisements clearfix wow postItem" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.2s; ">
            <p class="img_lservice"><a href=""><img src="<?php bloginfo('template_url'); ?>/images/img_service04.png" alt=""></a></p>
            <p class="cate_lservice">ネット広告</p>
            <div class="title_lservice">
              <p class="title_lservice_l">「いいものなら売れる」は<br>
                もう、通用しない</p>
              <p class="title_lservice_m">どんなにいいものも、<br>
                人の目にふれなければ売れない。<br>
                欲しい人が見れば、売れる。</p>
            </div>
          </div>
        </div>
        <p class="btn btn01 btn_hblue btn_mw500 wow bounceIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: bounceIn;"><a href="<?php bloginfo('siteurl'); ?>/service/"><span>もっと見る</span></a></p>
      </div>
    </div>
  <?php //--- end service list -------------------- ?>

  <!-- start blog list -->
  <!-- #container03 -->
  <div id="container03" class="clearfix">
    <div class="inner clearfix">
      <?php echo do_shortcode('[related_sblogs]'); ?>
    </div>
  </div>
  <!-- end blog list -->

  <?php //--- end works list -------------------- ?>

  <?php endwhile; // End the loop. ?>
</div>
<!-- main end -->
<?php get_footer(); ?>
