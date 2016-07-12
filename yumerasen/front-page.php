<?php get_header(); ?>
	<!-- main start -->
	<div id="main" class="clearfix">
	
		<!-- content start -->
		<div id="content">
			<p class="mt15"><img src="<?php bloginfo('template_url'); ?>/images/index_h3_01.jpg" width="950" height="80" alt="ピックアップコンテンツ" /></p>
			<!-- inner start -->
			<div id="inner" class="clearfix">
              <div class="wasaikyoushitsu mr20 clearfix">
                <p class="image_r mr10"><img src="<?php bloginfo('template_url'); ?>/images/indeximg_01.jpg" width="70" height="175" alt="和裁教室" /></p>
<?php
query_posts('posts_per_page=1&category_name=wasai');
the_post();
?>
                <p class="newstitle_01"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/icon_01.jpg" align="absmiddle" width="22" height="20" alt="" /><?php the_title(); ?></a></p>
                <p class="image_r mr20"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('top_thumbnail', array('alt' => the_title_attribute('echo=0'), 'title' => the_title_attribute('echo=0'))); ?></p>
                <time pubdate="pubdate" datetime="<?php the_time('Y-m-d'); ?>" class="day"><?php the_time(get_option('date_format')); ?></time>
                <a href="<?php the_permalink(); ?>"><?php the_pickup_excerpt(); ?></a>
<?php
wp_reset_query();
?>
                <p><a href="<?php echo get_term_link('wasai','category'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/btn01_off.jpg" width="208" height="30" alt="一覧はこちら" /></a></p>
              </div>
              
              <div class="wayuukai clearfix">
                <p class="image_r mr10"><img src="<?php bloginfo('template_url'); ?>/images/indeximg_02.jpg" width="70" height="185" alt="和遊会" /></p>
<?php
query_posts('posts_per_page=1&category_name=wayukai');
the_post();
?>
                <p class="newstitle_01"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/icon_02.jpg" align="absmiddle" width="22" height="20" alt="" /><?php the_title(); ?></a></p>
                <p class="image_r mr20"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('top_thumbnail', array('alt' => the_title_attribute('echo=0'), 'title' => the_title_attribute('echo=0'))); ?></p>
                <time pubdate="pubdate" datetime="<?php the_time('Y-m-d'); ?>" class="day"><?php the_time(get_option('date_format')); ?></time>
                <a href="<?php the_permalink(); ?>"><?php the_pickup_excerpt(); ?></a>
<?php
wp_reset_query();
?>
                <p><a href="<?php echo get_term_link('wayukai','category'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/btn01_off.jpg" width="208" height="30" alt="一覧はこちら" /></a></p>
              </div>
              
              <div id="inner">
              <div class="kitsuke clearfix mr20">
                <p class="image_r mr10"><img src="<?php bloginfo('template_url'); ?>/images/indeximg_03.jpg" width="70" height="175" alt="着付け教室" /></p>
                <?php
query_posts('posts_per_page=1&category_name=kitsuke');
the_post();
?>
                <p class="newstitle_01"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/icon_03.jpg" align="absmiddle" width="22" height="20" alt="" /><?php the_title(); ?></a></p>
                <p class="image_r mr20"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('top_thumbnail', array('alt' => the_title_attribute('echo=0'), 'title' => the_title_attribute('echo=0'))); ?></p>
                <time pubdate="pubdate" datetime="<?php the_time('Y-m-d'); ?>" class="day"><?php the_time(get_option('date_format')); ?></time>
                <a href="<?php the_permalink(); ?>"><?php the_pickup_excerpt(); ?></a>
<?php
wp_reset_query();
?>
				<p><a href="<?php echo get_term_link('kitsuke','category'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/btn01_off.jpg" width="208" height="30" alt="一覧はこちら" /></a></p>
			  </div>
              <div class="kiarai clearfix">

<!--ここから着洗い
                <p class="image_r mr10"><img src="<?php bloginfo('template_url'); ?>/images/indeximg_04.jpg" width="70" height="175" alt="着物丸洗い" /></p>
                <p class="newstitle_01"><img src="<?php bloginfo('template_url'); ?>/images/icon_04.jpg" align="absmiddle" width="22" height="20" alt="" /><a href="<?php bloginfo('template_url'); ?>/service#cleaning">限界地域最安値に挑戦</a></p>
                <p class="image_r mr20"><a href="<?php bloginfo('template_url'); ?>/service#cleaning"><img src="<?php bloginfo('template_url'); ?>/images/indeximg_10_off.jpg" width="140" height="140" alt="" /></a></p>
                <p>振袖・留袖は4,200円、長襦袢は1,800円。その他シミ抜き・染め替え・お仕立直し等お見積承り致します。</p>
              </div>
			</div>
-->
                <p class="image_r mr10"><img src="<?php bloginfo('template_url'); ?>/images/indeximg_11.jpg" width="70" height="175" alt="お客様の声" /></p>
                <?php
query_posts('posts_per_page=1&category_name=voice');
the_post();
?>
                <p class="newstitle_01"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/icon_03.jpg" align="absmiddle" width="22" height="20" alt="" /><?php the_title(); ?></a></p>
                <p class="image_r mr20"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('top_thumbnail', array('alt' => the_title_attribute('echo=0'), 'title' => the_title_attribute('echo=0'))); ?></p>
                <time pubdate="pubdate" datetime="<?php the_time('Y-m-d'); ?>" class="day"><?php the_time(get_option('date_format')); ?></time>
                <a href="<?php the_permalink(); ?>"><?php the_pickup_excerpt(); ?></a>
<?php
wp_reset_query();
?>
				<p><a href="<?php echo get_term_link('voice','category'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/btn01_off.jpg" width="208" height="30" alt="一覧はこちら" /></a></p>
              </div>
			</div>
			<!-- inner end -->
            <div id="inner" class="clearfix mt30">
              <div class="message">
                <p><img src="<?php bloginfo('template_url'); ?>/images/indeximg_05.jpg" width="690" height="85" alt="着物の販売店　夢楽染" /></p>
                <p class="w350"><strong>『夢楽染』が提案する着物ライフ<br />「5つ星」をテーマに着物の楽しみを広げる</strong><br /><br />	夢楽染は関西、東海地方で7店舗を展開し幅広い品揃えとリーズナブルな価格で地域と密着しながら様々な着物のニーズに答えます。
</p>
                <p class="w610">フォーマルからおしゃれ着、作家作品等豊富なラインナップで皆様をお迎え致します。お客様に着物をより深く広く楽しんで頂き着物をより身近に感じて頂ける「きもの5つ星」を設定し、着る人の個性に合わせたアドバイスや着付けサービスや着付け教室の開催、きものでお出かけする会等にも力をいれています。</p>
              </div>
              <div class="bnr">
                <p><a href="<?php bloginfo('template_url'); ?>/recruit/"><img src="<?php bloginfo('template_url'); ?>/images/btn02_off.jpg" width="230" height="180" alt="求人情報" /></a></p>
                <p><a href="<?php bloginfo('template_url'); ?>/service#cleaning"><img src="<?php bloginfo('template_url'); ?>/images/btn03_off.jpg" width="230" height="180" alt="着物丸洗い" /></a></p>
              </div>
            </div>
            <div id="inner_store" class="clearfix">
              <p class="mt30"><img src="<?php bloginfo('template_url'); ?>/images/index_h3_02.jpg" width="950" height="60" alt="店舗情報" /></p>
              <div class="store clearfix">
                <p class="mr20"><a href="<?php bloginfo('template_url'); ?>/shop#koshien"><img src="<?php bloginfo('template_url'); ?>/images/store_04_off.jpg" width="222" height="200" alt="甲子園店" /></a></p>
                <p class="mr20"><a href="<?php bloginfo('template_url'); ?>/shop#suita"><img src="<?php bloginfo('template_url'); ?>/images/store_01_off.jpg" width="222" height="200" alt="吹田店" /></a></p>
                <p class="mr20"><a href="<?php bloginfo('template_url'); ?>/shop#moriyama"><img src="<?php bloginfo('template_url'); ?>/images/store_06_off.jpg" width="222" height="200" alt="守山店" /></a></p>
                <p><a href="<?php bloginfo('template_url'); ?>/shop#hamamatsu"><img src="<?php bloginfo('template_url'); ?>/images/store_07_off.jpg" width="222" height="200" alt="浜松店" /></a></p>
              </div>
              <div class="store clearfix">
                <p class="mr20"><a href="<?php bloginfo('template_url'); ?>/shop#kounoike"><img src="<?php bloginfo('template_url'); ?>/images/store_02_off.jpg" width="222" height="200" alt="鴻池店" /></a></p>
                <p class="mr20"><a href="<?php bloginfo('template_url'); ?>/shop#takatsuki"><img src="<?php bloginfo('template_url'); ?>/images/store_03_off.jpg" width="222" height="200" alt="高槻店" /></a></p>
                <p class="mr20"><a href="<?php bloginfo('template_url'); ?>/shop#hachiman"><img src="<?php bloginfo('template_url'); ?>/images/store_05_off.jpg" width="222" height="200" alt="近江八幡店" /></a></p>
                <p><a href="<?php bloginfo('template_url'); ?>/shop#marugame"><img src="<?php bloginfo('template_url'); ?>/images/store_08_off.jpg" width="222" height="200" alt="丸亀店" /></a></p>
              </div>
            </div>
		</div>
		<!-- content end -->
		
		<!-- navi start -->
		<!-- navi end -->				
	</div>
    </div>
        <!-- main end -->
    
<?php get_footer(); ?>