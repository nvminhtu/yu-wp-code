<?php
  /**
   * tempalte: @footer
   */
 ?>

<div id="footer" class="clearfix">
    <!--#footer_info start -->
      <div id="footer_info" class="clearfix">
        <div class="inner clearfix">
          <p id="footer_tel"><a href="tel:0120000000" class="sweetlink sweetlink-icon-tel" onClick="jQuery.sweetlink(function(){ _gaq.push(['_trackEvent', 'phone_call', 'footer', 'txt',,true]); })">0120-000-000</a></p>
          <div class="footer_r">
            <ul class="footer_link">
              <li><a href="http://www.onshore.works/">オンショアワークスHOME</a></li>
              <li><a href="http://www.vegecoop.co.jp/company/" target="_blank">運営会社</a></li>
            </ul>
            <address>
            &copy;vegecoop.Co.,Ltd
            </address>
          </div>
        </div>
      </div>
      <!--#footer_info end -->
    </div>
    <!-- sticky_footer start -->
    <div id="sticky_footer" class="clearfix">
      <div class="inner clearfix">
        <ul>
          <li id="sticky_logo"><a href="http://www.onshore.works/"><span class="on_logo">On</span>shore<span class="light_logo">.works</span></a></li>
          <li class="sticky_des">外国人ITエンジニアを<br />
            国内で雇う新しいスタイル</li>
          <li class="sticky_contact"><a href="http://onshore.works/#contact">お問い合わせ・資料請求</a></li>
        </ul>
      </div>
    </div>
    <!-- sticky_footer end -->
  </div>
  <script src="<?php bloginfo('template_url'); ?>/js/jquery.js" type="text/javascript"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/jquery.scroll.js" type="text/javascript"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/jquery.easing.min.js" type="text/javascript"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/sweetlink.js" type="text/javascript"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/heightLine.js" type="text/javascript"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/form.js" type="text/javascript"></script>
  <?php wp_footer(); ?>
</body>
</html>
