		<div class="mt20 mb20">
		<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2F%25E6%25A0%25AA%25E5%25BC%258F%25E4%25BC%259A%25E7%25A4%25BE-%25E5%25A4%25A2%25E6%25A5%25BD%25E6%259F%2593%2F329767330452528%3Fref%3Dhl&amp;width=950&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:950px; height:290px;" allowTransparency="true"></iframe>
		</div>
<div id="footer">
      <div id="footer02 clearfix">
        <div class="w275 fl inline"><img src="<?php bloginfo('template_url'); ?>/images/footer_rogo.jpg" alt="ゆめらせん　きもの専門店" width="310" height="62" /></div>
        <div class="sitemap clearfix">
          <div class="alpha mr20">
            <ul>
              <li><img src="<?php bloginfo('template_url'); ?>/images/icon_05.jpg" align="absmiddle" width="7" height="7" alt="" /><a href="<?php echo home_url('/'); ?>concept/">コンセプト</a></li>
              <li><img src="<?php bloginfo('template_url'); ?>/images/icon_05.jpg" align="absmiddle" width="7" height="7" alt="" /><a href="<?php echo home_url('/'); ?>shop/">店舗紹介</a></li>
              <li><img src="<?php bloginfo('template_url'); ?>/images/icon_05.jpg" align="absmiddle" width="7" height="7" alt="" /><a href="<?php echo home_url('/'); ?>media/">メディア掲載情報</a></li>
               <li><img src="<?php bloginfo('template_url'); ?>/images/icon_05.jpg" align="absmiddle" width="7" height="7" alt="" /><a href="<?php echo home_url('/'); ?>service/">サービス内容</a></li>
             </ul>
           </div>
           <div class="alpha mr20">
            <ul>
              <li><img src="<?php bloginfo('template_url'); ?>/images/icon_05.jpg" align="absmiddle" width="7" height="7" alt="" /><a href="<?php echo home_url('/'); ?>recruit/">求人情報</a></li>
              <li><img src="<?php bloginfo('template_url'); ?>/images/icon_05.jpg" align="absmiddle" width="7" height="7" alt="" /><a href="<?php echo home_url('/'); ?>company/">会社概要</a></li>
               <li><img src="<?php bloginfo('template_url'); ?>/images/icon_05.jpg" align="absmiddle" width="7" height="7" alt="" /><a href="<?php echo home_url('/'); ?>privacypolicy/">プライバシーポリシー</a></li>
             </ul>
           </div>
           <div class="alpha">
            <ul>
              <li><img src="<?php bloginfo('template_url'); ?>/images/icon_05.jpg" align="absmiddle" width="7" height="7" alt="" /><a href="<?php echo get_term_link('wasai','category'); ?>">和裁教室</a></li>
              <li><img src="<?php bloginfo('template_url'); ?>/images/icon_05.jpg" align="absmiddle" width="7" height="7" alt="" /><a href="<?php echo get_term_link('kitsuke','category'); ?>">着付け教室</a></li>
              <li><img src="<?php bloginfo('template_url'); ?>/images/icon_05.jpg" align="absmiddle" width="7" height="7" alt="" /><a href="<?php echo get_term_link('wayukai','category'); ?>">和遊会</a></li>
             </ul>
           </div>
        </div>
        <div class="fl pt60 clearfix">
          <img src="<?php bloginfo('template_url'); ?>/images/footer_tel.jpg" width="215" height="48" alt="0800-919-1029" /><br /><a href="<?php echo home_url('/'); ?>contact/"><img src="<?php bloginfo('template_url'); ?>/images/footercontact_off.jpg" width="215" height="48" alt="メールでのお問い合わせ" /></a>
        </div>
      </div>
	</div>
</div>
<?php wp_footer(); ?>
<!--
<?php if(is_front_page()) : ?>
<script>
jQuery(function($) {
	$.bgSwitcher.defaultOptions.interval = 4000;
	$.bgSwitcher.defaultOptions.images = ['<?php bloginfo('template_url'); ?>/images/index_header_bg.jpg', 1, 3];
	$('#index').bgSwitcher({
		loop: false
	});
})
</script>
<? endif; ?>
-->
</body>
</html>